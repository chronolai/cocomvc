<?
class Router extends Core
{
	// Sort Rules
	public function sort()
	{
		uksort($this->rules, function($a, $b) {
			if (strlen($a) == strlen($b))
				return 0;
			return (strlen($a) > strlen($b)) ? -1 : 1;
		});
	}

	public function add($_rule, $_args, $_method="get")
	{
		$rule = array();
		if (is_array($_args))
		{
			$rule["controller"] = $_args[0];
			$rule["method"] = $_args[1];
		}
		if (!is_array($_args) && is_callable($_args))
		{
			$rule["callback"] = $_args;
		}
		$_rule = str_replace("/", "\/", $_rule);
		$this->rules["/^".$_rule."\/?$/"][$_method] = $rule;
		return $this;
	}
	public function get($rule, $args)
	{
		return $this->add($rule, $args, "get");
	}
	public function post($rule, $args)
	{
		return $this->add($rule, $args, "post");
	}
	public function put($rule, $args)
	{
		return $this->add($rule, $args, "put");
	}
	public function delete($rule, $args)
	{
		return $this->add($rule, $args, "delete");
	}

	// RUN
	public function run()
	{
		$hasMatchRule = false;
		$this->sort();
		$patterns = [
			dirname($_SERVER['SCRIPT_NAME']),
			"/".basename($_SERVER["SCRIPT_NAME"]),
			"?".$_SERVER['REDIRECT_QUERY_STRING']
		];
		$uri = str_replace($patterns, "", $_SERVER["REQUEST_URI"]);
		foreach($this->rules as $rule => $methods) 
		{
			$method = $methods[strtolower($_SERVER['REQUEST_METHOD'])];
			if(preg_match($rule, $uri, $args))
			{
				// Remove int index
				foreach($args as $key => $value)
				{
					if(is_numeric($key))
					{
						unset($args[$key]);
					}
				}
				$this->runCallback($method, $args);
				$this->runController($method, $args);
				$hasMatchRule = true;
				break;
			}
		}
		if(!$hasMatchRule)
			$this->error("Rule `{$uri}` not found!");
	}

	// Run Callback or Controller
	public function runCallback($rule, $match)
	{
		if (array_key_exists("callback", $rule) && is_callable($rule["callback"]))
		{
			call_user_func_array($rule["callback"], $match);
		}
	}
	public function runController($rule, $match)
	{
		if (array_key_exists("controller", $rule))
		{
			if(!class_exists($rule["controller"]))
			{
				$this->error("404 - Controller `{$rule["controller"]}` not found!");
			}

			if (!is_callable([$rule["controller"], $rule["method"]]))
			{
				$this->error("404 - Method `{$rule["method"]}` not found!");
			}
			$controller = new $rule["controller"]();
			call_user_func_array([$controller, $rule["method"]], $match);
		}
	}
}
?>
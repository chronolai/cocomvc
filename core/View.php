<?php
class View extends Core
{
	protected $varibles = array();
	private $layout_file;
	private $template = "";

	function __construct()
	{
		$this->layout_file = DEFAULT_LAYOUT;
	}

	// Getter & Setter
	public function __get($name){
		return isset($this->varibles[$name])?$this->varibles[$name]:null;
	}
	public function assign($varible, $value=null){
		if (isset($value))
		{
			$this->varibles[$varible] = $value;
		}
	}

	// Layout
	public function setLayout($_layout)
	{
		$this->layout_file = $_layout;
	}
	public function getLayout()
	{
		return $this->layout_file;
	}

	// Load File
	public function load($template_file='', $layout=false)
	{
		$template_file = MVC_VIEW.$template_file;
		foreach($this->varibles as $variable => $value) {
			$$variable = $value;
		}

		if(is_file($template_file)) {
			if($layout){
				ob_start();
				include $template_file;
				$this->template = ob_get_clean();
				include MVC_VIEW.$this->layout_file;
			}
			else{
				include $template_file;
			}
		}
		else {
			if($layout){
				$this->error("404 - Template `{$template_file}` not found!");
			}
			else{
				echo $this->template;
			}
		}
	}
	public function render($template_file)
	{
		$is_html = !(end(explode(".", $template_file))=="html");
		$this->load($template_file, $is_html);
	}
}
?>
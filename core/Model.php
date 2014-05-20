<?php
class Model extends Core
{
	protected $pdo;
	protected $data;

	public function __construct()
	{
		try {
			$this->pdo = new PDO(DB_CONNINFO, DB_USERNAME, DB_PASSWORD);
		}
		catch (PDOException $e)
		{
			exit("Error: ".$e->getMessage());
		}

		$this->data = array();

		$controller_method = array(get_called_class(), "init");
		if (is_callable($controller_method))
		{
			$this->init();
		}
	}

	public function __get($_name)
	{
		return $this->data[$_name];
	}

	public function __set($_name, $value)
	{
		$this->data[$_name] = $value;
	}

	public function __toString()
	{
		return "<pre>".print_r($this->data, true)."</pre>";
	}

	public function getContains()
	{
		return $this->data;
	}
	public function getJSON()
	{
		return json_encode($this->data, JSON_PRETTY_PRINT);
	}
	public function getXML()
	{
		return "Not ready support";
	}

	public function isEmpty()
	{
		return empty($this->data);
	}

}
?>
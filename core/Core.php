<?php
class Core
{
	public static function debug($value='')
	{
		if(DEVMODE)
		{
			if (is_array($value))
			{
				echo "<pre>".print_r($value, 1)."</pre>";
			}
			else
			{
				echo $value."<br />";
			}
		}
	}
	public static function error($args)
	{
		if(DEVMODE)
		{
			exit($args);
		}
		else
		{
			header("HTTP/1.1 404 Not Found");
		}
	}
}
?>
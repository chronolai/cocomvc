<?php
class LanguageModel extends Model
{
	public $lang_code;
	public $langs;

	public function init()
	{
		$this->lang_code = "zh-tw";

		if (file_exists(MVC_LANG.$_GET["lang"].".php")) {
			$_SESSION['locale'] = $_GET["lang"];
		}
		if(isset($_SESSION['locale']))
		{
			$this->lang_code = $_SESSION['locale'];
		}

		$this->langs = [];
		$files = array_diff(scandir(MVC_LANG), array('..', '.'));
		foreach ($files as $key => $value) {
			$code = str_replace(".php", "", $value);
			$lang = include MVC_LANG.$value;
			// $locale = $lang["locale"];
			$this->langs[$code] = $lang;
		}
	}
	public function getLanguages()
	{
		return $this->langs;
	}
	public function getLanguage()
	{
		return $this->langs[$this->lang_code];
	}
}
?>

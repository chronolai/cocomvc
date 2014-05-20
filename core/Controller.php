<?php
class Controller extends Core
{
	protected $view;

	public function __construct()
	{
		$this->webtitle = WEBTITLE;
		$this->view = new View();
		$this->initLanguage();

		$controller_method = array(get_called_class(), "init");
		if (is_callable($controller_method))
		{
			$this->init();
		}
	}

	public function redirect($_path='')
	{
		if (preg_match("/^http:\/\//", $_path))
		{
			header("Location: ".$_path);
		}
		else
		{
			header("Location: ".WEBROOT."/".$_path);
		}
	}

	// View
	public function setTitle($_title='')
	{
		if(!empty($_title))
		{
			$this->webtitle = $_title." - ".WEBTITLE;
		}
	}
	public function setLayout($_layout)
	{
		$this->view->setLayout($_layout);
	}
	public function assign($_varible, $_value=null)
	{
		$this->view->assign($_varible, $_value);
	}
	public function render($_view=null)
	{
		if(!empty($_title)){
			$this->webtitle = $_title." - ".WEBTITLE;
		}
		$this->view->assign("webtitle", $this->webtitle);

		$backtarce = debug_backtrace();
		$class = preg_replace("/Controller$/", "", $backtarce[1]['class']);
		$method = $backtarce[1]['function'];
		$tpl_name = strtolower($class."_".$method.".tpl");
		$this->view->render(empty($_view)?$tpl_name:$_view);
	}

	// Language
	public function initLanguage()
	{
		$language = new LanguageModel();
		$this->lang = $language->getLanguage();
		$this->view->assign("lang", $this->lang);
		$this->view->assign("langs", $language->getLanguages());
		// $this->debug($_SERVER);
		if(isset($_GET['lang']))
			$this->redirect($_SERVER['HTTP_REFERER']);
	}
}
?>

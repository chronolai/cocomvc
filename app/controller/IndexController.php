<?php
class IndexController extends Controller
{
	public function index()
	{
		$this->setTitle($this->lang["menu_home"]);
		$this->render();
	}
	public function about()
	{
		$this->setTitle($this->lang["menu_about"]);
		$this->render();
	}
}
?>
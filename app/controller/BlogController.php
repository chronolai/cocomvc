<?php
class BlogController extends Controller
{
	public function index()
	{
		$blog_list = new BlogListModel();

		$this->assign("blog_list", $blog_list->getContains());

		$this->setTitle($this->lang["menu_blog"]);
		$this->render();
	}

	public function detail($id)
	{
		$blog = new BlogModel();
		$blog->load($id);
		$this->assign("blog", $blog->getContains());
		$this->render();
	}
	public function form()
	{
		$this->render();
	}
	public function create()
	{
		$blog = new BlogModel();
		$blog->title = $_POST['title'];
		$blog->content = $_POST['content'];
		$blog->create();
		$this->redirect("blog");
	}
	public function modify($id)
	{
		$blog = new BlogModel();
		$blog->load($id);
		$this->assign("blog", $blog->getContains());
		
		$this->setTitle($this->lang["blog_modify"]);
		$this->render();
	}
	public function update()
	{
		$blog = new BlogModel();
		$blog->load($_POST['id']);
		$blog->title = $_POST['title'];
		$blog->content = $_POST['content'];
		$blog->update();
		$this->redirect("blog");
	}
	public function delete($id)
	{
		$blog = new BlogModel();
		$blog->load($id);
		$blog->delete();
		$this->redirect("blog");
	}
}
?>
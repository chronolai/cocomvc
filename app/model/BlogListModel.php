<?php
class BlogListModel extends Model
{
	public function init()
	{
		$query = $this->pdo->prepare("
			select `blog`.* from `blog`
			order by `blog`.id desc
		");
		$query->execute();
		$this->data = $query->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>

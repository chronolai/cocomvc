<?php
class BlogModel extends Model
{
	public function load($id)
	{
		$query = $this->pdo->prepare("
			select `blog`.* from `blog`
			where `blog`.id=:ID
		");
		$query->bindParam(":ID", $id);
		$query->execute();
		$this->data = $query->fetch(PDO::FETCH_ASSOC);
	}
	public function create()
	{
		$query = $this->pdo->prepare("
			insert into `blog`
				(id, title, content)
			values
				(null, :TITLE, :CONTENT)
		");
		$query->bindParam(":TITLE", $this->title);
		$query->bindParam(":CONTENT", $this->content);
		$query->execute();
	}
	public function update()
	{
		$query = $this->pdo->prepare("update `blog` set title=:TITLE, content=:CONTENT WHERE id=:ID");
		$query->bindParam(":ID", $this->id);
		$query->bindParam(":TITLE", $this->title);
		$query->bindParam(":CONTENT", $this->content);
		$query->execute();
	}
	public function delete()
	{
		$query = $this->pdo->prepare("delete from `blog` where id=:ID");
		$query->bindParam(":ID", $this->id);
		$query->execute();
	}
}
?>

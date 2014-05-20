<h1><?=$lang["menu_blog"]?></h1>

<form action="<?=WEBROOT?>/blog/update" method="POST">
	<input type="hidden" name="id" value="<?=$blog['id']?>" />
	<table>
		<tr>
			<th colspan="2"><?=$lang["blog_title"]?></th>
		</tr>
		<tr>
			<td><?=$lang["blog_title"]?>：</td>
			<td><input type="text" name="title" value="<?=$blog['title']?>" /></td>
		</tr>
		<tr>
			<td><?=$lang["blog_content"]?>：</td>
			<td><textarea name="content" cols="30" rows="5"><?=$blog['content']?></textarea></td>
		</tr>
		<tr>
			<th colspan="2"><input type="submit" value="<?=$lang['blog_modify']?>" /></th>
		</tr>
	</table>
</form>
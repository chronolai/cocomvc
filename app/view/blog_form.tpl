<h1><?=$lang['blog_create']?></h1>

<form action="<?=WEBROOT?>/blog/create" method="POST">
	<table>
		<tr>
			<td><?=$lang["blog_title"]?></td>
			<td><input type="text" name="title" /></td>
		</tr>
		<tr>
			<td><?=$lang["blog_content"]?>：</td>
			<td><textarea name="content" cols="30" rows="5"></textarea></td>
		</tr>
		<tr>
			<th colspan="2"><input type="submit" value="<?=$lang['blog_submit']?>" /></th>
		</tr>
	</table>
</form>
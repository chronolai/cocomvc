<h1><?=$lang["menu_blog"]?></h1>

<button onclick="location.href='<?=WEBROOT?>/blog/create'"><?=$lang['blog_create']?></button>

<table>
	<tr>
		<th style="width:10%;">#</th>
		<th><?=$lang["blog_title"]?></th>
		<th style="width:20%;"><?=$lang["blog_createtime"]?></th>
		<th style="width:15%;"></th>
	</tr>
	<?foreach ($blog_list as $blog):?>
	<tr>
		<td><?=$blog['id']?></td>
		<td>
			<a href="<?=WEBROOT?>/blog/detail/<?=$blog['id']?>"><?=nl2br(htmlentities($blog['title']))?></a>
		</td>
		<td><?=$blog['create_time']?></td>
		<td>
			<a href="<?=WEBROOT?>/blog/modify/<?=$blog['id']?>"><?=$lang["blog_modify"]?></a>
			<a href="<?=WEBROOT?>/blog/delete/<?=$blog['id']?>"><?=$lang["blog_delete"]?></a>
		</td>
	</tr>
	<?endforeach;?>
</table>
<h1><?=nl2br(htmlentities($blog['title']))?></h1>

<p><?=nl2br(htmlentities($blog['content']))?></p>
<p><?=$blog['create_time']?></p>

<a href="<?=WEBROOT?>/blog"><?=$lang['blog_back']?></a>
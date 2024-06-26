<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="style.css" />
<title>Mon Blog</title>
</head>
<body>
<div id="global">
<header>
<a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
<p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
</header>
<div id="contenu">
<?php foreach ($billets as $billet): ?>
<article>
<header>
<h1 class="titreBillet"><?= $billet['titre'] ?></h1>
<time><?= $billet['date'] ?></time>
</header>
<p><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>
</div>
<footer id="piedBlog">
Blog réalisé avec PHP, HTML5 et CSS.
</footer>
</div> 
</body>
</html>

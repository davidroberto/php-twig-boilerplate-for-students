<?php

require_once '../vendor/autoload.php';

// SELECT * FROM article

$articles = [
	1 => [
		"id" => 1,
		"title" => "Article 1",
		"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
		"created_at" => new \DateTime(),
		"image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
		"is_published" => true
	],

	2 => [
		"id" => 2,
		"title" => "Article 2",
		"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
		"created_at" => new \DateTime(),
		"image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
		"is_published" => false
	],
	3 => [
		"id" => 3,
		"title" => "Article 3",
		"content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur tenetur repellendus quod voluptates nemo amet voluptas pariatur, molestias magnam ab cumque quas deserunt, voluptate, nobis iste quae dolores? Debitis, sunt.",
		"created_at" => new \DateTime(),
		"image" => "https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png",
		"is_published" => true
	]
];

// j'utilise la classe FilesystemLoader pour indiquer le chemin du dossier de mes views
$loader = new \Twig\Loader\FilesystemLoader('../view');
// je créé une instance de la classe Twig Environnement, qui permettra d'appeler les fichiers de view
$twig = new \Twig\Environment($loader);

// je viens appeler le fichier de view home.html.twig, en lui envoyant la variable $articles
echo $twig->render('home.html.twig', ['articles' => $articles]);

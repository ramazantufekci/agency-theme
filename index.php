<?php
include_once("vendor/autoload.php");
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
$loader = new FilesystemLoader('views');
$twig = new Environment($loader);
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    // ...
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
header("X-Content-Type-Options: nosniff");
echo $twig->render('default.html',
["site"=>
	["people"=>
		[
			["name"=>"Adem Baba",
			"pic"=>2,
			"position"=>"Lead Designer",
			"social"=>
				[
					["title"=>"twitter","url"=>"https://twitter.com/df"]
				]
			],
			["name"=>"Havva Anne",
			"pic"=>1,
			"position"=>"Lead Marketer",
			"social"=>
				[
					["title"=>"twitter","url"=>"https://twitter.com/df"]
				]
			],
			["name"=>"Kübra ",
			"pic"=>3,
			"position"=>"Lead Developer",
			"social"=>
				[
					["title"=>"twitter","url"=>"https://twitter.com/df"]
				]
			],
		],
	"title"=>"PORTFOLİO",
	"description"=>"Geceden sabaha radyo programı",
	"email"=>"mail@example.com",
	"social"=>[
		["title"=>"twitter",
		"url"=>"https://twitter.com/df"],
		["title"=>"facebook",
		"url"=>"#"],
		["title"=>"github",
		"url"=>"#"]
	],
	"posts"=>[
		[
			"title"=>"Round Icons",
			"subtitle"=>"Graphic Design",
			"modalid"=>"6",
			"date"=>"2014-07-05",
			"img"=>"roundicons.png",
			"thumbnail"=>"roundicons-thumbnail.png",
			"client"=>"Start Bootstrap",
			"category"=>"Web Development",
			"projectdate"=>"April 2014",
			"description"=>"Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse."
		],
		[
			"title"=>"Startup Framework",
			"subtitle"=>"Website Design",
			"modalid"=>"5",
			"date"=>"2014-07-14",
			"img"=>"startup-framework.png",
			"thumbnail"=>"startup-framework-thumbnail.png",
			"client"=>"Start Bootstrap",
			"category"=>"Web Development",
			"projectdate"=>"April 2014",
			"description"=>"Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse."
		],
		[
			"title"=>"Treehouse",
			"subtitle"=>"Website Design",
			"modalid"=>"4",
			"date"=>"2014-07-15",
			"img"=>"treehouse.png",
			"thumbnail"=>"treehouse-thumbnail.png",
			"client"=>"Start Bootstrap",
			"category"=>"Web Development",
			"projectdate"=>"April 2014",
			"description"=>"Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse."
		],
		[
			"title"=>"Golden",
			"subtitle"=>"Website Design",
			"modalid"=>"3",
			"date"=>"2014-07-16",
			"img"=>"golden.png",
			"thumbnail"=>"golden-thumbnail.png",
			"client"=>"Start Bootstrap",
			"category"=>"Web Development",
			"projectdate"=>"April 2014",
			"description"=>"Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse."
		],
		[
			"title"=>"Escape",
			"subtitle"=>"Website Design",
			"modalid"=>"2",
			"date"=>"2014-07-17",
			"img"=>"escape.png",
			"thumbnail"=>"escape-thumbnail.png",
			"client"=>"Start Bootstrap",
			"category"=>"Web Development",
			"projectdate"=>"April 2014",
			"description"=>"Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse."
		],
		[
			"title"=>"Dreams",
			"subtitle"=>"Website Design",
			"modalid"=>"1",
			"date"=>"2014-07-18",
			"img"=>"dreams.png",
			"thumbnail"=>"dreams-thumbnail.png",
			"client"=>"Start Bootstrap",
			"category"=>"Web Development",
			"projectdate"=>"April 2014",
			"description"=>"Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse."
		]
	]
	],
"page"=>["url"=>"https://drnyazilim.com"]
]);


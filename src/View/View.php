<?php
namespace View;

class View {
	public function __construct($templ,$obj=null) {
		require __DIR__ ."/".$templ;
	}

	public static function render($templ,$obj) {
		try {
			$loader = new \Twig\Loader\FilesystemLoader(__DIR__);

	$twig = new \Twig\Environment(
    $loader,[
        'cache' => __DIR__.'/cache',
        'debug' => true
    ]
	);
	$twig->addExtension(new \Twig\Extension\DebugExtension());
		$template = $twig->load($templ);	
		echo $twig->render($templ,['object'=>$obj]);
		} catch (\Exception $e) {
			echo 'template rendering error '.$e->getMessage();
		}

	}
}

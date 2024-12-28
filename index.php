<?php
$basePath = '/CodeCamp/';
$request = str_replace($basePath, '', $_SERVER['REQUEST_URI']);
$request = trim($request, '/');
//echo $request;
switch ($request) {
    case '':
        require __DIR__ .'/views/home.php';
        break;
    case 'compiler':
        require __DIR__ .'/views/compiler.php';
        break;
		case 'comming_soon':
			require __DIR__ .'/views/error/comming_soon.php';
			break;
    default:
        http_response_code(404);
        require '404.php';
        break;
}
?>

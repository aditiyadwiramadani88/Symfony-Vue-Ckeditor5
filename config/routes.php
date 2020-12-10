<?php 

use App\Controller\BlogController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symfony\Component\Form\Extension\Core\Type\Database;



return function (RoutingConfigurator $routes) {
    $routes->add('index', '/')
        ->controller([BlogController::class, 'index']);
    $routes->add('uploads', $_ENV['ARTICLE_UPLOAD_URL'])
        ->controller([BlogController::class, 'Upload'])
        ->methods(["POST"]);
    
};
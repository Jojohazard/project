<?php
require_once __DIR__ . '/../src/resource-controller.php';
require_once __DIR__ . '/../src/router.php';
$router = new Router();



// 501 bad filepath
$router->get('/api/image', function () {
    $requestBody = file_get_contents('php://input');
    $data = json_decode($requestBody, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo 501;
        exit;
    }

    if (array_key_exists('image', $data)) {
        $rc = new ResourceController();
        $rc->getImage($data['image']);
    } else {
        echo 404;
    }

});

$router->get('/api/images', function () {

});

$router->get('/api/script/test', function () {
    $rc = new ResourceController();
    $rc->getJS('test.js');
});

return $router;
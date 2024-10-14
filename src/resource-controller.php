<?php
class ResourceController {
    private const RESOURCES_PATH = __DIR__ . '/../resources';

    public function getPage($filename) {
        $path = self::RESOURCES_PATH . '/pages' . "/$filename";

        if (file_exists($path)) {
            header('Content-Type: text/html; charset=UTF-8');
            $html = file_get_contents($path);
            echo $html;
            exit;
        }
    }

    public function getImage($filename) {
        $path = self::RESOURCES_PATH . '/images' . "/$filename";

        if (file_exists($path)) {
            header('Content-Type: image/png');
            header('Content-Lenght: ' . filesize($path));
            readfile($path);
            exit;
        } else {
            echo 404;
            exit;
        }
    }

    public function getStylesheet($filename) {
        $path = self::RESOURCES_PATH . '/css' . "/$filename";
        if (file_exists($path)) {
            header('Content-Type: text/css');
            header('Content-Length: ' . filesize($path));
            readfile($path);
            exit;
        }
    }

    public function getJS($filename) {
        $path = self::RESOURCES_PATH . '/js' . "/$filename";
        if (file_exists($path)) {
            header('Content-Type: application/javascript');
            header('Content-Lengt: ' . filesize($path));

            readfile($path);
            exit;
        }
    }
}
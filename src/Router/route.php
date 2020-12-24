<?php
namespace Image\Router;

use Image\Controllers\ImageUploaderController;

class Route
{
    public function __construct()
    {
        $this->imageUploaderController = new ImageUploaderController();
    }

    public function switchRoute($url, $requestMethod)
    {
        error_log($requestMethod);
        // 画像登録画面
        if ($url == '/image/' && $requestMethod == 'GET') {
            $this->imageUploaderController->index();
            return;
        }
        // 画像登録
        if ($url == '/image/upload' && $requestMethod == 'POST') {
            $this->imageUploaderController->post();
            return;
        }
        // 登録画像確認
        if ($url == '/image/upload' && $requestMethod == 'GET') {
            $this->imageUploaderController->confirm();
            return;
        }
        require_once $_SERVER['DOCUMENT_ROOT'] . '/image/public/views/404.html';
    }
}

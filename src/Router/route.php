<?php
namespace Image\Router;

use Image\Controllers\ImageUploaderController;

class Route
{
    /**
     * @var ImageUploaderController
     */
    private $imageUploaderController;

    /**
     * Route constructor.
     */
    public function __construct()
    {
        $this->imageUploaderController = new ImageUploaderController();
    }

    /**
     * @param $url
     * @param $requestMethod
     */
    public function switchRoute($url, $requestMethod)
    {
        // 画像登録画面
        if ($url == '/image-uploader/' && $requestMethod == 'GET') {
            $this->imageUploaderController->index();
            return;
        }
        // 画像登録
        if ($url == '/image-uploader/upload' && $requestMethod == 'POST') {
            $this->imageUploaderController->post();
            return;
        }
        // 登録画像確認
        if ($url == '/image-uploader/upload' && $requestMethod == 'GET') {
            $this->imageUploaderController->confirm();
            return;
        }
        require_once $_SERVER['DOCUMENT_ROOT'] . '/image-uploader/public/views/404.html';
    }
}

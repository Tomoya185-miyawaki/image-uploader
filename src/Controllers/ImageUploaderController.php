<?php
namespace Image\Controllers;

class ImageUploaderController
{
    /**
     * 画像登録画面
     */
    public function index()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/image-uploader/public/views/image-uploaders/index.php';
    }

    /**
     * 画像登録
     */
    public function post()
    {
        var_dump($_FILES['uploadFile']['name']);
        $img_name = $_FILES['uploadFile']['name'];
        move_uploaded_file($_FILES['uploadFile']['tmp_name'], dirname(__FILE__) . '/../../storage/' . $img_name);
        $this->confirm();
    }

    /**
     * 登録画像
     */
    public function confirm()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/image-uploader/public/views/image-uploaders/confirm.php';
    }
}

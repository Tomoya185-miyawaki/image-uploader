<?php
namespace Image\Controller;

class ImageController
{
    public function index()
    {
        require(dirname(__FILE__) . '/../views/image/index.php');
    }
}

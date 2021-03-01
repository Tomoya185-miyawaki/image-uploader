<?php
namespace Image\Router;

use Image\Controller\ImageController;

class Route
{
    /**
     * @var ImageController
     */
    private $imageController;

    /**
     * Route constructor.
     */
    public function __construct()
    {
        $this->imageController = new ImageController();
    }

    /**
     * Routing
     */
    public function routing()
    {
        if ($_SERVER["REQUEST_URI"] === '/image-uploader/' && $_SERVER["REQUEST_METHOD"] === 'GET') {
            $this->imageController->index();
        }
    }
}

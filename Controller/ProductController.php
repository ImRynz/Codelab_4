<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller{
    use ResponseFormatter;
    
    public function __construct()
    {
        $this -> controllerName = "Get All Product";
        $this -> controllerMethod = "Get";

    }

    public function getAllProduct(){
        $dummyData = [
            "air mineral",
            "kebab",
            "sphagetti",
            "jus jambu"
        ];

        $response = [
            "Controller_atribute" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];

        return $this->responseFormatter(200, "success", $response);
    }
}
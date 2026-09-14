<?php

require_once "services/ApiService.php";

class TransformationController
{
    public function index()
    {
        $url = "https://dragonball-api.com/api/transformations";

        $api = new ApiService();

        $transformations = $api->getData($url);

        require_once "views/transformations.php";
    }
}
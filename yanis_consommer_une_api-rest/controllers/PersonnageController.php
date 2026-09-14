<?php

require_once "services/ApiService.php";

class PersonnageController
{
    public function index()
    {
        $url = "https://dragonball-api.com/api/characters";

        $api = new ApiService();

        $personnages = $api->getData($url);

        require_once "views/personnages.php";
    }
}
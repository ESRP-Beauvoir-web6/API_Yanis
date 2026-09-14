<?php

require_once "services/ApiService.php";

class PlaneteController {
    public function index()
    {
        $url = "https://dragonball-api.com/api/planets";
        $api = new ApiService();
        $planetes = $api->getData($url);
        require_once "views/planetes.php";
    }
}
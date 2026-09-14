<?php
$url = $_SERVER["REQUEST_URI"];
$projectUrl = "/Exo_php/yanis_consommer_une_api-rest/";
$route = str_replace($projectUrl, "", $url);
$route = trim($route, "/");

switch($route) {
    case "personnages":
        require_once "controllers/PersonnageController.php";
        $personnageController = new PersonnageController();
        $personnageController->index();

        break;

    case "planetes":
        require_once "controllers/PlaneteController.php";
        $planeteController = new PlaneteController();
        $planeteController->index();

        break;

    case "transformations":
        require_once "controllers/TransformationController.php";
        $transformationController = new TransformationController();
        $transformationController->index();

        break;

    default:
        require_once "views/templates/header.php";
        echo "<h1 class='text-center mt-5'>Bienvenue</h1>";
        require_once "views/templates/footer.php";

        break;
}
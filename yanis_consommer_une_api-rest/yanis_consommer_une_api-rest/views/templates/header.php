<?php
$projectUrl = "/Exo_php/yanis_consommer_une_api-rest/";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>Dragon Ball API YC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= $projectUrl ?>"> Dragon Ball API YC </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $projectUrl ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $projectUrl ?>personnages">Personnages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $projectUrl ?>planetes">Planètes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $projectUrl ?>transformations">Transformations</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
require_once "templates/header.php";
?>

<div class="container mt-5">

    <h1 class="text-center mb-5">
        Transformations
    </h1>

    <div class="row g-4">

        <?php foreach ($transformations as $item): ?>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card h-100 shadow">

                    <img
                        src="<?= $item["image"] ?>"
                        class="card-img-top"
                        alt="<?= htmlspecialchars($item["name"]) ?>"
                        style="height: 300px; object-fit: contain;"
                    >

                    <div class="card-body">

                        <h5 class="card-title">
                            <?= htmlspecialchars($item["name"]) ?>
                        </h5>

                        <p class="card-text">
                            <strong>Ki :</strong>
                            <?= htmlspecialchars($item["ki"]) ?>
                        </p>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?php
require_once "templates/footer.php";
?>
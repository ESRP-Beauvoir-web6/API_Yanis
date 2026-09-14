<?php
require_once "templates/header.php";
?>

<div class="container mt-5">
    <h1 class="text-center mb-5"> Planètes </h1>
    <div class="row g-4">
        <?php foreach ($planetes["items"] as $item): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow">
                    <img
                        src="<?= $item["image"] ?>"
                        class="card-img-top"
                        alt="<?= htmlspecialchars($item["name"]) ?>"
                        style="height: 250px; object-fit: contain;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= htmlspecialchars($item["name"]) ?>
                        </h5>
                        <p class="card-text">
                            <?= htmlspecialchars($item["description"]) ?>
                        </p>
                        <p>
                            <?php if ($item["isDestroyed"]): ?>
                                <span class="badge bg-danger"> Détruite </span>
                            <?php else: ?>
                                <span class="badge bg-success"> Encore existante </span>
                            <?php endif; ?>
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
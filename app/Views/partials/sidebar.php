<?php

$uri = service('uri');

?>

<div class="sidebar p-3">

    <div class="mb-4">

        <h3 class="fw-bold text-primary mb-0">
            <i class="bi bi-shop"></i>
            Super-M
        </h3>

        <small class="text-muted">
            Gestion commerciale
        </small>

    </div>

    <hr>

    <ul class="nav flex-column gap-1">

        <li class="nav-item">
            <a href="/caisse/achats ?>"
               class="nav-link <?= $uri->getPath() == 'caisse/achats' ? 'active' : '' ?>">

                <i class="bi bi-cart-check me-2"></i>
                Vente
            </a>
        </li>

        <li class="nav-item">
            <a href='/caisse/historique' ?>"
               class="nav-link <?= $uri->getPath() == 'caisse/historique' ? 'active' : '' ?>">

                <i class="bi bi-clock-history me-2"></i>
                Historique
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">

                <i class="bi bi-box-seam me-2"></i>
                Produits
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">

                <i class="bi bi-bar-chart me-2"></i>
                Rapports
            </a>
        </li>

        <li class="nav-item">
            <a href="#"
               class="nav-link">

                <i class="bi bi-gear me-2"></i>
                Paramètres
            </a>
        </li>

    </ul>

    <div class="mt-auto">

        <hr>


        <div class="fw-bold">
            <?= session('nom') ?? 'Administrateur' ?>
        </div>

        <a href="/logout"
           class="btn btn-outline-danger w-100 mt-3">

            <i class="bi bi-box-arrow-right me-2"></i>
            Déconnexion

        </a>

    </div>

</div>
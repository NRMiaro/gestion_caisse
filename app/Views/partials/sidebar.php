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
            <a href="/achat/saisie"
               class="nav-link <?= $uri->getPath() == 'caisse/achats' ? 'active' : '' ?>">

                <i class="bi bi-cart-check me-2"></i>
                Vente
            </a>
        </li>



        <li class="nav-item">
            <a href="/achat/historique"
               class="nav-link">

                <i class="bi bi-bar-chart me-2"></i>
                Achats
            </a>
        </li>

    

    </ul>

    <div class="mt-auto">

        <hr>




        <a href="/logout"
           class="btn btn-outline-danger w-100 mt-3">

            <i class="bi bi-box-arrow-right me-2"></i>
            Déconnexion

        </a>

    </div>

</div>
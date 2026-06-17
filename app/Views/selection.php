<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sélection caisse</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    background:#f5f7fb;
}

.caisse-card{
    border:none;
    border-radius:20px;
    transition:.3s;
    cursor:pointer;
}

.caisse-card:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 30px rgba(0,0,0,.08);
}
</style>
</head>
<body>

<nav class="navbar bg-white shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold">
            <i class="bi bi-cart-check text-primary"></i>
            SuperPOS
        </span>
    </div>
</nav>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Choisir une caisse</h1>
        <p class="text-muted">
            Sélectionnez une caisse disponible
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-3">
            <div class="card caisse-card p-4 text-center">
                <i class="bi bi-display fs-1 text-primary"></i>

                <h4 class="mt-3">Caisse 01</h4>

                <span class="badge bg-success">
                    Disponible
                </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card caisse-card p-4 text-center">
                <i class="bi bi-display fs-1 text-primary"></i>

                <h4 class="mt-3">Caisse 02</h4>

                <span class="badge bg-success">
                    Disponible
                </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card caisse-card p-4 text-center">
                <i class="bi bi-display fs-1 text-primary"></i>

                <h4 class="mt-3">Caisse 03</h4>

                <span class="badge bg-danger">
                    Occupée
                </span>
            </div>
        </div>

    </div>

</div>

</body>
</html>
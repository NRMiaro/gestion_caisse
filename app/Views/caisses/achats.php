<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-0">
            Nouvelle Vente
        </h2>
        <small class="text-muted">
            Gestion des achats clients
        </small>
    </div>

    <button class="btn btn-success">
        <i class="bi bi-check-circle me-2"></i>
        Finaliser la vente
    </button>

</div>

<div class="row">

    <!-- PANIER -->

    <div class="col-lg-8">

        <div class="card card-pos mb-4">

            <div class="card-body">

                <div class="row g-3">

                    <div class="col-md-8">
                        <label class="form-label">
                            Produit
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Scanner un code-barres ou rechercher un produit">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">
                            Qté
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            value="1">
                    </div>

                    <div class="col-md-2 d-flex align-items-end">

                        <button class="btn btn-primary w-100">
                            <i class="bi bi-plus-lg"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

        <div class="card card-pos">

            <div class="card-header bg-white">

                <div class="d-flex justify-content-between">

                    <h5 class="mb-0">
                        Panier
                    </h5>

                    <span class="badge bg-primary">
                        3 Articles
                    </span>

                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Qté</th>
                            <th>Total</th>
                            <th></th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>Coca Cola 50cl</td>
                            <td>2 000 Ar</td>
                            <td>2</td>
                            <td>4 000 Ar</td>

                            <td>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Fanta Orange</td>
                            <td>2 500 Ar</td>
                            <td>1</td>
                            <td>2 500 Ar</td>

                            <td>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- RESUME -->

    <div class="col-lg-4">

        <div class="card card-pos">

            <div class="card-body">

                <h4 class="fw-bold mb-4">
                    Résumé
                </h4>

                <div class="d-flex justify-content-between mb-3">
                    <span>Sous-total</span>
                    <span>6 500 Ar</span>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <span>Remise</span>
                    <span>0 Ar</span>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <span>TVA</span>
                    <span>0 Ar</span>
                </div>

                <hr>

                <div class="bg-primary text-white rounded p-4 text-center mb-4">

                    <small>Total à payer</small>

                    <h1 class="fw-bold mb-0">
                        6 500 Ar
                    </h1>

                </div>

                <label class="form-label">
                    Mode de paiement
                </label>

                <select class="form-select mb-3">
                    <option>Espèces</option>
                    <option>MVola</option>
                    <option>Orange Money</option>
                    <option>Airtel Money</option>
                    <option>Carte Bancaire</option>
                </select>

                <button class="btn btn-success w-100 py-3">

                    <i class="bi bi-check-circle me-2"></i>

                    Encaisser

                </button>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>
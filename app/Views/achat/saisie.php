<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-0">Nouvelle Vente</h2>
        <small class="text-muted">Gestion des achats clients</small>
    </div>

</div>

<!-- FORM AJOUT PRODUIT -->
<div class="card mb-4 shadow-sm">
    <div class="card-body">

        <form method="POST" action="<?= base_url('/achat/add') ?>" class="row g-3">

            <div class="col-md-7">
                <label class="form-label">Produit</label>

                <select name="id_produit" class="form-select" required>
                    <option value="">-- Choisir --</option>
                    <?php foreach ($listProduits as $p): ?>
                        <option value="<?= $p['id'] ?>">
                            <?= esc($p['designation']) ?> - <?= $p['prix_unitaire'] ?> Ar
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Qté</label>
                <input type="number" name="quantite" class="form-control" value="1" min="1">
            </div>

            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-primary w-100">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>

        </form>

    </div>
</div>

<!-- PANIER -->
<div class="card shadow-sm">

    <div class="card-header bg-white">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Panier</h5>

            <span class="badge bg-primary">
                <?= count($panier) ?> articles
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

                <?php $total = 0; ?>

                <?php if (!empty($panier)): ?>

                    <?php foreach ($panier as $item): ?>

                        <?php
                        $lineTotal = $item['prix'] * $item['quantite'];
                        $total += $lineTotal;
                        ?>

                        <tr>
                            <td><?= esc($item['designation']) ?></td>
                            <td><?= number_format($item['prix'], 0, ',', ' ') ?> Ar</td>
                            <td><?= $item['quantite'] ?></td>
                            <td><?= number_format($lineTotal, 0, ',', ' ') ?> Ar</td>

                            <td>
                                <a href="<?= base_url('/achat/remove/' . $item['id']) ?>"
                                   class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    <!-- TOTAL -->
                    <tr class="table-light fw-bold">
                        <td colspan="3" class="text-end">Total</td>
                        <td><?= number_format($total, 0, ',', ' ') ?> Ar</td>
                        <td></td>
                    </tr>

                <?php else: ?>

                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Panier vide
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>
</div>

<!-- BOUTON FINALISER -->
<?php if (!empty($panier)): ?>
    <div class="mt-4 text-end">

        <button class="btn btn-success btn-lg px-5">
            <i class="bi bi-check-circle me-2"></i>
            Finaliser la vente
        </button>

    </div>
<?php endif; ?>

<?= $this->endSection() ?>
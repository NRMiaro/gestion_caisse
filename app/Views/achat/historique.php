<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Liste des achats</h2>

<div class="card card-pos">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>
                        <th>ID Achat</th>
                        <th>Caisse</th>
                        <th>Caissier</th>
                        <th class="text-end">Montant Total</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($achats as $achat): ?>

                    <tr>

                        <td>
                            <?= $achat['id'] ?>
                        </td>

                        <td>
                            <?= $achat['caisse'] ?>
                        </td>

                        <td>
                            <?= $achat['caissier'] ?>
                        </td>

                        <td class="text-end">
                            <?= number_format($achat['montant_total'], 0, ',', ' ') ?>
                            Ar
                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>
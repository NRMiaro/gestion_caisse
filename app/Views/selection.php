<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

    <div class="container py-5">

        <div class="text-center mb-5">
            <h1 class="fw-bold">Choisir une caisse</h1>
            <p class="text-muted">Sélectionnez une caisse disponible</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card select-card p-4">

                    <form method="POST" action="<?= base_url('/caisse/choix') ?>">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Caisse</label>

                            <select name="id_caisse" class="form-select" required>
                                <option value="">-- Choisir une caisse --</option>

                                <?php foreach ($listCaisses as $caisse): ?>
                                    <option value="<?= $caisse['id'] ?>">
                                        <?= esc($caisse['numero']) ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-check-circle"></i> Valider
                        </button>

                    </form>

                </div>

            </div>
        </div>

    </div>
<?= $this->endSection() ?>
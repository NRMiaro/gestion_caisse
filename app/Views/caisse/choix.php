<html>
    <form method="POST" action="<?= base_url('/caisse/choix') ?>">
        <label for="">Caisse: </label>
        <select name="id_caisse" id="">
            <?php foreach ($listCaisses as $caisse): ?>
                <option value="<?= $caisse['id'] ?>"><?= $caisse['numero'] ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Choisir</button>
    </form>
</html>
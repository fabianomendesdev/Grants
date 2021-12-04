<main class="main">
    <div class="container-md">
        <section class="main-section">
            <?php foreach($data as $item): ?>
                <form action="?u=<?= base64_encode($item->id) ?>" method="post">
                <div class="item">
                    <p>Nome: <?= $item->name ?></p>
                    <p>Email: <?= $item->email ?></p>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="is_admin" name="is_admin" <?= $item->is_admin ? 'checked' : '' ?>>
                        <label class="form-check-label" for="is_admin">Admin</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" <?= $item->active ? 'checked' : '' ?>>
                        <label class="form-check-label" for="active">Ativado</label>
                    </div>
                    <button class="btn btn-primary btn-sm">Modificar</button>
                </div>
                </form>
            <?php endforeach ?>
        </section>
    </div>
</main>
<main class="main">
    <div class="container-md">
        <section class="main-section" id="section-data">
            <div class="titleAndQuery">
                <h2>Gerenciar Usuários</h2>
                <form action="#section-data" method="post">
                    <div class='form-control div-search-form'>
                        <input class="form-control input-search" style="border: none; box-shadow: none;" name="search" placeholder="Pesquisar por email" value="<?= isset($_POST['search']) ? $_POST['search'] : '' ?>">
                        <button class="button-search"></button>
                    </div>    
                </form>
            </div>
            <?php foreach($data as $item): ?>
                <form id="<?= $item->email ?>" action="#<?= $item->email ?>" method="post">
                <div class="item" <?= isset($_POST['u']) && base64_decode($_POST['u']) == $item->id ? "style='background-color: #d8d8d8;'" : '' ?>>
                    <p>Nome: <?= $item->name ?></p>
                    <p>Email: <?= $item->email ?></p>
                    <input type="hidden" name="u" value="<?= base64_encode($item->id) ?>">
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
<?php unset($_GET['u']) ?>
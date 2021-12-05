<main class="main">
    <div class="container-md">
        <section class="main-section">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control <?= isset($errors['title']) ? 'is-invalid' : '' ?>" id="title" name="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $data->title ?>" placeholder="Informe o título">
                    <?php if(isset($errors['title'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['title'] ?></p>
                        </div>
                    <? endif ?>
                </div>

                <div class="mb-3 div-abstract">
                    <label for="abstract" class="form-label">Resumo</label>
                    <textarea class="form-control <?= isset($errors['abstract']) ? 'is-invalid' : '' ?>" id="abstract" name="abstract" placeholder="Digite o resumo"><?= isset($_POST['abstract']) ? $_POST['abstract'] : $data->abstract ?></textarea>
                    <?php if(isset($errors['abstract'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['abstract'] ?></p>
                        </div>
                    <? endif ?>
                </div>

                <div class="mb-3">
                    <label for="areas form-label">Areas</label>
                    <select id="areas" class="form-select <?= isset($errors['areas']) ? 'is-invalid' : '' ?>" name="areas">
                        <option <?= !isset($_POST['areas']) || $_POST['areas'] == 'Selecione' ? 'selected' : ($data->areas == 'Selecione' ? 'selected' : '') ?>>Selecione</option>
                        <option value="re" <?= $_POST['areas'] == 're' ? 'selected' : ($data->areas == 're' && (empty($_POST['areas']) || !isset($_POST['areas'])) ? 'selected' : '') ?>>Resumos</option>
                        <option value="at" <?= $_POST['areas'] == 'at' ? 'selected' : ($data->areas == 'at' && (empty($_POST['areas']) || !isset($_POST['areas'])) ? 'selected' : '') ?>>Atividades</option>
                        <option value="au" <?= $_POST['areas'] == 'au' ? 'selected' : ($data->areas == 'au' && (empty($_POST['areas']) || !isset($_POST['areas'])) ? 'selected' : '') ?>>Aulas</option>
                    </select>
                </div>
                <?php if(isset($errors['areas'])): ?>
                    <div class="div-errors mb-3">
                        <p><?= $errors['areas'] ?></p>
                    </div>
                <? endif ?>

                <div class="div-mat mb-3">
                    <label for="materias" class="mb-1 form-label">Matérias</label>
                    <select id="materias" class="form-select <?= isset($errors['mat']) ? 'is-invalid' : '' ?>" name="mat">
                        <option  <?= !isset($_POST['mat']) || $_POST['mat'] == 'Selecione uma matéria' ? 'selected' : '' ?>>Selecione uma matéria</option>
                        <option value="mat" <?= $_POST['mat'] == 'mat' ? 'selected' : ($data->matter == 'mat' && (empty($_POST['mat']) || !isset($_POST['mat'])) ? 'selected' : '') ?>>Matemática</option>
                        <option value="por" <?= $_POST['mat'] == 'por' ? 'selected' : ($data->matter == 'por' && (empty($_POST['por']) || !isset($_POST['por'])) ? 'selected' : '') ?>>Português</option>
                        <option value="his" <?= $_POST['mat'] == 'his' ? 'selected' : ($data->matter == 'his' && (empty($_POST['his']) || !isset($_POST['his'])) ? 'selected' : '') ?>>História</option>
                        <option value="geo" <?= $_POST['mat'] == 'geo' ? 'selected' : ($data->matter == 'geo' && (empty($_POST['geo']) || !isset($_POST['geo'])) ? 'selected' : '') ?>>Geografia</option>
                        <option value="bio" <?= $_POST['mat'] == 'bio' ? 'selected' : ($data->matter == 'bio' && (empty($_POST['bio']) || !isset($_POST['bio'])) ? 'selected' : '') ?>>Biologia</option>
                        <option value="qui" <?= $_POST['mat'] == 'qui' ? 'selected' : ($data->matter == 'qui' && (empty($_POST['qui']) || !isset($_POST['qui'])) ? 'selected' : '') ?>>Química</option>
                        <option value="fis" <?= $_POST['mat'] == 'fis' ? 'selected' : ($data->matter == 'fis' && (empty($_POST['fis']) || !isset($_POST['fis'])) ? 'selected' : '') ?>>Física</option>
                    </select>
                </div>
                <?php if(isset($errors['mat'])): ?>
                    <div class="div-errors mb-3">
                        <p><?= $errors['mat'] ?></p>
                    </div>
                <? endif ?>

                <div class="mb-3">
                    <label for="pdf" class="form-label">Envie o PDF</label>
                    <input class="form-control <?= isset($errors['pdf']) ? 'is-invalid' : '' ?>" name="pdf" type="file" id="pdf" accept=".pdf">
                </div>
                <?php if(isset($errors['pdf'])): ?>
                    <div class="div-errors mb-3">
                        <p><?= $errors['pdf'] ?></p>
                    </div>
                <? endif ?>

                <div class="mb-3">
                    <label for="link" class="form-label">Envie o link do vídeo</label>
                    <input class="form-control <?= isset($errors['link']) ? 'is-invalid' : '' ?>" type="url" name="link" id="link" placeholder="Informe o link completo do vídeo" value="<?= isset($_POST['link']) ? $_POST['link'] : '' ?>">
                </div>
                <?php if(isset($errors['link'])): ?>
                    <div class="div-errors mb-3">
                        <p><?= $errors['link'] ?></p>
                    </div>
                <? endif ?>
                
                <input type="submit" value="Modificar" class="btn btn-primary">
                <form action="#" method="post">
                    <button class="btn btn-secondary" name="back" value="1">Cancelar</button>
                </form>
            </form>
        </section>
    </div>
</main>
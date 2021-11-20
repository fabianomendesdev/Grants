<main class="main">
    <div class="container-md">
        <section class="main-section">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label <?= isset($errors['title']) ? 'is-invalid' : '' ?>">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>" placeholder="Informe o título">
                    <?php if(isset($errors['title'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['title'] ?></p>
                        </div>
                    <? endif ?>
                </div>

                <div class="mb-3 div-abstract">
                    <label for="abstract" class="form-label <?= isset($errors['abstract']) ? 'is-invalid' : '' ?>">Resumo</label>
                    <textarea class="form-control" id="abstract" name="abstract" placeholder="Digite o resumo"><?= isset($_POST['abstract']) ? $_POST['abstract'] : '' ?></textarea>
                    <?php if(isset($errors['abstract'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['abstract'] ?></p>
                        </div>
                    <? endif ?>
                </div>

                <div class="div-areas mb-2">
                    <select class="form-select <?= isset($errors['areas']) ? 'is-invalid' : '' ?>" name="areas">
                        <option <?= !isset($_POST['areas']) || $_POST['areas'] == 'Selecione' ? 'selected' : '' ?>>Selecione</option>
                        <option value="re" <?= $_POST['areas'] == 're' ? 'selected' : '' ?>>Resumos</option>
                        <option value="at" <?= $_POST['areas'] == 'at' ? 'selected' : '' ?>>Atividades</option>
                        <option value="au" <?= $_POST['areas'] == 'au' ? 'selected' : '' ?>>Aulas</option>
                    </select>
                </div>
                <?php if(isset($errors['areas'])): ?>
                    <div class="div-errors mb-3">
                        <p><?= $errors['areas'] ?></p>
                    </div>
                <? endif ?>

                <div class="div-types mb-2">
                    <select class="form-select <?= isset($errors['type']) ? 'is-invalid' : '' ?>" name="type">
                        <option  <?= !isset($_POST['type']) || $_POST['areas'] == 'Selecione um tipo de arquivo' ? 'selected' : '' ?>>Selecione um tipo de arquivo</option>
                        <option value="pdf" <?= $_POST['type'] == 'pdf' ? 'selected' : '' ?>>PDF</option>
                        <option value="video" <?= $_POST['type'] == 'video' ? 'selected' : '' ?>>Vídeo</option>
                    </select>
                </div>
                <?php if(isset($errors['type'])): ?>
                    <div class="div-errors mb-3">
                        <p><?= $errors['type'] ?></p>
                    </div>
                <? endif ?>

                <div class="div-mat mb-3">
                    <select class="form-select <?= isset($errors['mat']) ? 'is-invalid' : '' ?>" name="mat">
                        <option  <?= !isset($_POST['mat']) || $_POST['areas'] == 'Selecione uma matéria' ? 'selected' : '' ?>>Selecione uma matéria</option>
                        <option value="mat" <?= $_POST['mat'] == 'mat' ? 'selected' : '' ?>>Matemática</option>
                        <option value="por" <?= $_POST['mat'] == 'por' ? 'selected' : '' ?>>Português</option>
                        <option value="his" <?= $_POST['mat'] == 'his' ? 'selected' : '' ?>>História</option>
                        <option value="geo" <?= $_POST['mat'] == 'geo' ? 'selected' : '' ?>>Geografia</option>
                        <option value="bio" <?= $_POST['mat'] == 'bio' ? 'selected' : '' ?>>Biologia</option>
                        <option value="qui" <?= $_POST['mat'] == 'qui' ? 'selected' : '' ?>>Química</option>
                        <option value="fis" <?= $_POST['mat'] == 'fis' ? 'selected' : '' ?>>Física</option>
                    </select>
                </div>
                <?php if(isset($errors['mat'])): ?>
                    <div class="div-errors mb-3">
                        <p><?= $errors['mat'] ?></p>
                    </div>
                <? endif ?>
                <input type="submit" value="Próximo" class="btn btn-primary">
            </form>
        </section>
    </div>
</main>
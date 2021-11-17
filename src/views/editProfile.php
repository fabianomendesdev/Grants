<main class="main">
    <div class="container-md">
        <section class="section-editProfile">
            <form action="#" method="post" class="form" enctype="multipart/form-data">
                <div class="errorAndImg">
                    <div class="imgAndUsername">
                        <input type="file" name="photo" id="photo" style="display: none;" accept=".png,.jpg,.jpeg">
                        <label for="photo"><div class="div-img" style="background-image: url('getImg?photo=<?= $_SESSION['user']->photo ?>');"><div class="div-iconUpload"></div></div></label>
                        <p><?= isset($_SESSION['user']) ? (strlen($_SESSION['user']->name) > 15 ? rtrim(substr($_SESSION['user']->name, 0 , 14), " ")."..." : $_SESSION['user']->name) : "Usuário" ?></p>
                    </div>
                    <?php if(isset($errors['photo'])): ?>
                        <div class="div-errorPhoto">
                            <p><?= $errors['photo'] ?></p>
                        </div>
                    <?php endif ?>
                </div>
                <?php if($message != ''): ?>
                    <div class="editProfileSuccess">
                        <p><?= $message ?></p>
                    </div>
                <?php endif ?>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" name="name" id="name" placeholder="Nome" value="<?= isset($errors['name']) ? $_POST['name'] : $_SESSION['user']->name ?>">
                        <?php if(isset($errors['name'])): ?>
                            <div class="invalid-feadback">
                                <p><?= $errors['name'] ?></p>
                            </div>
                        <? endif ?>
                    </div>
                </div>

                <div class="form-row d-flex align-items-end justify-content-between birth">
                    <div class="form-group col-md-3">
                        <label for="birth">Nascimento</label>
                        <input type="number" class="form-control <?= isset($errors['birth']) ? 'is-invalid' : '' ?>" name="day" id="birth" placeholder="Day" value="<?= isset($errors['birth']) ? $_POST['day'] : date("d", strtotime($_SESSION['user']->birth)) ?>">
                    </div>

                    <div class="form-group col-md-3 mx-2">
                        <input type="number" class="form-control <?= isset($errors['birth']) ? 'is-invalid' : '' ?>" name="month" placeholder="Mês" value="<?= isset($errors['birth']) ? $_POST['month'] : date("m", strtotime($_SESSION['user']->birth)) ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="number" class="form-control <?= isset($errors['birth']) ? 'is-invalid' : '' ?>" name="year" placeholder="Ano" value="<?= isset($errors['birth']) ? $_POST['year'] : date("Y", strtotime($_SESSION['user']->birth)) ?>">
                    </div>
                </div>
                <?php if(isset($errors['birth'])): ?>
                    <div class="invalid-feadback">
                        <p><?= $errors['birth'] ?></p>
                    </div>
                <? endif ?>

                <div class="form-row series">
                    <div class="form-group col-md-6">
                        <label for="series" class="form-label">Série</label>
                        <select class="form-select <?= isset($errors['series']) ? 'is-invalid' : '' ?>" id="series" name="series">
                            <option value="1" <?= (isset($_POST['series']) ? $_POST['series'] == 1 : $_SESSION['user']->series == 1 ) ? 'selected' : '' ?>>1º Ano Ensino Médio</option>
                            <option value="2" <?= (isset($_POST['series']) ? $_POST['series'] == 2 : $_SESSION['user']->series == 2 ) ? 'selected' : '' ?>>2º Ano Ensino Médio</option>
                            <option value="3" <?= (isset($_POST['series']) ? $_POST['series'] == 3 : $_SESSION['user']->series == 3 ) ? 'selected' : '' ?>>3º Ano Ensino Médio</option>
                        </select>
                        <?php if(isset($errors['series'])): ?>
                            <div class="invalid-feadback">
                                <p><?= $errors['series'] ?></p>
                            </div>
                        <? endif ?>
                    </div>
                </div>

                <div class="form-row sex">
                    <div class="form-group col-md-6">
                        <fieldset class="fieldset <?= isset($errors['sex']) ? 'placeholdInvalid' : '' ?>">
                            <legend>Sexo:</legend>
                            <div class="inputs">
                                <div style="margin-left: unset;">
                                    <input type="radio" name="sex" id="female" value="F" <?= (isset($_POST['sex']) ? $_POST['sex'] == 'F' : $_SESSION['user']->sex == 'F') ? 'checked' : '' ?>/> <label for="female">F</label> <br/>
                                </div>                                
                                <div class="margin">
                                    <input type="radio" name="sex" id="male" value="M" <?= (isset($_POST['sex']) ? $_POST['sex'] == 'M' : $_SESSION['user']->sex == 'M') ? 'checked' : '' ?>/> <label for="male">M</label>
                                </div>
                                <div class="margin">
                                    <input type="radio" name="sex" id="other" value="O" <?= (isset($_POST['sex']) ? $_POST['sex'] == 'O' : $_SESSION['user']->sex == 'O') ? 'checked' : '' ?>/> <label for="other">Outro</label>
                                </div>
                            </div>                        
                        </fieldset>
                        <?php if(isset($errors['sex'])): ?>
                            <div class="invalid-feadback">
                                <p><?= $errors['sex'] ?></p>
                            </div>
                        <? endif ?>
                    </div>
                </div>

                <div class="buttons">
                    <button class="btn btn-primary btn-save">Salvar</button>
                    <a href="editProfile" class="btn btn-secondary btn-cancel">Cancelar</a>
                </div>
            </form>
        </section>
    </div>
</main>
<main class="main">
    <div class="container-md">
        <form action="#" class="form" method="post">
            <div class="form-row  mb-3">
                <div class="form-group">
                    <div>
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="<?= isset($_POST['name']) ?$_POST['name'] : '' ?>">
                    </div>
                    <?php if(isset($errors['name'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['name'] ?></p>
                        </div>
                    <? endif ?>
                </div>
            </div>    
        
            <div class="form-row mb-3">
                <div class="form-group">
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com" value="<?= isset($_POST['email']) ?$_POST['email'] : '' ?>">
                    </div>
                    <?php if(isset($errors['email'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['email'] ?></p>
                        </div>
                    <? endif ?>
                </div>
            </div>

            <div class="form-row d-flex align-items-end justify-content-between">
                <div class="form-group col-md-3">
                    <div>
                        <label for="birth" class="form-label">Nascimento</label>
                        <input type="number" class="form-control" id="birth" name="day" placeholder="Dia" value="<?= isset($_POST['day']) ?$_POST['day'] : '' ?>" min='1' max="31">
                    </div>
                </div>

                <div class="form-group col-md-3 mx-1">
                    <div>
                        <input type="number" class="form-control" name="month" placeholder="Mês" value="<?= isset($_POST['month']) ?$_POST['month'] : '' ?>" min='1' max="12">
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <div>
                        <input type="number" class="form-control" name="year" placeholder="Ano" value="<?= isset($_POST['year']) ?$_POST['year'] : '' ?>" min='<?= intval(date("Y")) - 51 ?>' max="<?= date("Y") ?>">
                    </div>
                </div>
            </div>
            <?php if(isset($errors['birth'])): ?>
                <div class="invalid-feadback">
                    <p><?= $errors['birth'] ?></p>
                </div>
            <? endif ?>

            <div class="form-row my-3">
                <div class="form-group col-md-6">
                    <label for="series" class="form-label">Série</label>
                    <select class="form-select" id="series" name="series">
                        <option value='' <?= !isset($_POST['series']) ? 'selected' : '' ?>>Selecione</option>
                        <option value="1" <?= isset($_POST['series']) && $_POST['series'] == 1 ? 'selected' : '' ?>>1º Ano Ensino Médio</option>
                        <option value="2" <?= isset($_POST['series']) && $_POST['series'] == 2 ? 'selected' : '' ?>>2º Ano Ensino Médio</option>
                        <option value="3" <?= isset($_POST['series']) && $_POST['series'] == 3 ? 'selected' : '' ?>>3º Ano Ensino Médio</option>
                    </select>

                    <?php if(isset($errors['series'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['series'] ?></p>
                        </div>
                    <? endif ?>
                </div>
            </div>
            
            <div class="form-row mb-3">
                <div class="form-group">
                    <fieldset class="fieldset">
                        <legend>Sexo:</legend>
                        <div class="inputs">
                            <div>
                                <input type="radio" name="sex" id="female" value="F" <?= !isset($_POST['sex']) || $_POST['sex'] == 'F' ? 'checked' : '' ?>/> <label for="female">F</label> <br/>
                            </div>
                            <div class="margin">
                                <input type="radio" name="sex" id="male" value="M" <?= isset($_POST['sex']) && $_POST['sex'] == 'M' ? 'checked' : '' ?>/> <label for="male">M</label>
                            </div>

                            <div class="margin">
                                <input type="radio" name="sex" id="other" value="O" <?= isset($_POST['sex']) && $_POST['sex'] == 'O' ? 'checked' : '' ?>/> <label for="other">Outro</label>
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

            <div class="form-row mb-3">
                <div class="form-group">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Digite a senha">
                </div>
                
                <?php if(isset($errors['password'])): ?>
                    <div class="invalid-feadback">
                        <p><?= $errors['password'] ?></p>
                    </div>
                <? endif ?>
            </div>

            <div class="form-row mb-3">
                <div class="form-groupx">
                    <label for="passwordConfirmation" class="form-label">Confirme a senha</label>
                    <input type="password" name="passwordConfirmation" id="passwordConfirmation" class="form-control" placeholder="Confirme a senha">
                </div>

                <?php if(isset($errors['passwordConfirmation'])): ?>
                    <div class="invalid-feadback">
                        <p><?= $errors['passwordConfirmation'] ?></p>
                    </div>
                <? endif ?>
            </div>
            
            <div class="buttons">
                <button class="btn bg-primary btn-login">Criar Conta</button>
                <a href="login.php" class="btn bg-secondary btn-back">Voltar</a>
            </div>
        </form>
    </div>
</main>
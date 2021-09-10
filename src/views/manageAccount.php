<main class="main">
    <div class="container-md">
        <section class="section-manageAccount">
            <div class="imgAndUsername">
                <div class="div-img" style="background-image: url('getImg.php?photo=<?= $_SESSION['user']->photo ?>');"></div>
                <p><?= isset($_SESSION['user']) ? (strlen($_SESSION['user']->name) > 17 ? substr($_SESSION['user']->name, 0 , 15).trim(substr($_SESSION['user']->name, 15 , 2))."..." : $_SESSION['user']->name) : "Usuário" ?></p>
            </div>
            <form action="#" method="post" class="form-email">
                <div class="form-row div-email">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <div class="form-control div-formControl">
                            <input type="text" style="border: none; box-shadow: none;" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" name="email" id="email" placeholder="E-mail" value="<?= isset($errors['email']) ? $_POST['email'] : $_SESSION['user']->email ?>">
                            <abbr title="Alterar email"><button class="buttonModifyEmail">
                            </button></abbr>
                        </div>
                        <?php if(isset($errors['email'])): ?>
                            <div class="invalid-feadback">
                                <p><?= $errors['email'] ?></p>
                            </div>
                        <? endif ?>
                    </div>
                </div>  
            </form>
            <?php if($message != ''): ?>
                    <div class="manageAccountSuccess">
                        <p><?= $message ?></p>
                    </div>
                <?php endif ?>
            <form action="#" method="post" class="form-password">
                <div class="div-password">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="currentPassword">Senha</label>
                            <input type="password" class="form-control <?= isset($errors['currentPassword']) ? 'is-invalid' : '' ?>" name="currentPassword" id="currentPassword" placeholder="Digite a senha atual">
                            <?php if(isset($errors['currentPassword'])): ?>
                                <div class="invalid-feadback">
                                    <p><?= $errors['currentPassword'] ?></p>
                                </div>
                            <? endif ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group my-3">
                            <input type="password" class="form-control <?= isset($errors['newPassword']) ? 'is-invalid' : '' ?>" name="newPassword" id="newPassword" placeholder="Digite a nova senha">
                            <?php if(isset($errors['newPassword'])): ?>
                                <div class="invalid-feadback">
                                    <p><?= $errors['newPassword'] ?></p>
                                </div>
                            <? endif ?>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <input type="password" class="form-control <?= isset($errors['passwordConfirmation']) ? 'is-invalid' : '' ?>" name="passwordConfirmation" id="passwordConfirmation" placeholder="Confirme a nova senha">
                            <?php if(isset($errors['passwordConfirmation'])): ?>
                                <div class="invalid-feadback">
                                    <p><?= $errors['passwordConfirmation'] ?></p>
                                </div>
                            <? endif ?>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Modificar senha</button>
            </form>
        </section>
    </div>
</main>
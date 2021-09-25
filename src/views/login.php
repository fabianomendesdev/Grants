<main class="main">
    <div class="container-md">
        <div class="div-imglogin">
            <img src="assets/img/undraw_exams.svg" alt="img login">
        </div>
        <div class="div-login" <?= isset($message) && $message !== '' ? 'style="height: 25em;"' : '' ?> <?= count($errors) === 1 ? 'style="height: 411px;"' : '' ?> <?= count($errors) === 2 ? 'style="height: 441px;"' : '' ?>>
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <?php if(isset($message) && $message !== ''): ?>
                        <div class="loginMessage">  
                            <p><?= $message ?></p>
                        </div>
                    <?php endif ?>
                    <input type="email" <?= isset($errors['email']) ? 'style="border-width: 5px;"' : '' ?> class="form-control <?= isset($errors['email']) ? "is-invalid " : '' ?>" name="email" id="email" placeholder="Digite o seu email" value="<?= isset($_POST['email']) ? $_POST['email'] : (isset($_GET['email']) ? $_GET['email'] : '') ?>">
                    <?php if(isset($errors['email'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['email'] ?? '' ?></p>
                        </div>
                    <?php endif ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" <?= isset($errors['password']) ? 'style="border-width: 5px;"' : '' ?> class="form-control <?= isset($errors['password']) ? "is-invalid " : '' ?>" name="password" id="password" placeholder="Digite a sua senha">
                    <?php if(isset($errors['password'])): ?>
                        <div class="invalid-feadback">
                            <p><?= $errors['password'] ?? '' ?></p>
                        </div>
                    <?php endif ?>
                </div>
                <div class="forgotPassword">
                    <a href="#">Esqueci a senha</a>
                </div>
                <div class="buttons">
                    <button class="btn bg-primary btn-login">Login</button>
                    <a href="register" class="btn bg-secondary">Criar conta</a>
                </div>  
            </form>
        </div>   
    </div>
</main>
<script>
    <?php 
        if(empty($errors) || isset($errors['email'])){
            $camp = 'email';
        }else{
            $camp = 'password';
        }
    ?>
    document.getElementById("<?= $camp ?>").focus()
</script>
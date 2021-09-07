<header class="header">
    <div class="container-md">
        <div class="div-logo">
            <a href="home.php"><img src="assets/img/logo.svg" alt="Logo" class="logo"></a>
        </div>
        <div class="div-title">
            <h1>GRANTS</h1> 
        </div>   
        <?php if($activationWidgets): ?>
            <div class="widgets">
                <a href="#"><img src="assets/img/zondicons_conversation.svg" alt="Mensagem" class="conversation"></a>
                <nav class="toggle nav-toggle">
                    <img src="assets/img/menu.svg" alt="menu" class="button-toggle">
                    <div class="menu-toggle">
                        <div class="imgAndUsername">
                            <div class="img-menu" style="background-image: url(getImg.php?photo=<?= $_SESSION['user']->photo ?>);">
                            </div>
                            <p><?= isset($_SESSION['user']) ? $_SESSION['user']->name : "Usuário" ?></p>
                        </div>
                        <ul class="menu-list">
                            <li><a href="editProfile.php">Editar perfil</a></li>
                            <li><a href="#">Gerenciar Conta</a></li>
                            <li><a href="#">Quem somos ?</a></li>
                            <li><a href="#">Chat</a></li>
                            <li><a href="logout.php"><i class="icofont-logout"></i>Sair</a></li>
                        </ul>
                    </div>
                </nav>
            </div> 
        <?php endif ?>
    </div>
</header>
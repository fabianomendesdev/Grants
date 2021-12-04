<header class="header">
    <div class="container-md">
        <div class="div-logo">
            <a href="home"><img src="assets/img/logo.svg" alt="Logo" class="logo"></a>
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
                            <a href="editProfile"><div class="img-menu" style="background-image: url(getImg?photo=<?= $_SESSION['user']->photo ?>);"></div></a>
                            <p><?= isset($_SESSION['user']) ? (strlen($_SESSION['user']->name) > 15 ? rtrim(substr($_SESSION['user']->name, 0 , 14), " ")."..." : $_SESSION['user']->name) : "Usuário" ?></p>
                        </div>
                        <ul class="menu-list">
                            <li><a href="editProfile">Editar perfil</a></li>
                            <li><a href="manageAccount">Gerenciar Conta</a></li>
                            <li><a href="#">Quem somos ?</a></li>
                            <?php if($is_admin  ): ?>
                            <li><a href="formContent">Adicionar conteúdo</a></li>
                            <li><a href="managerUsers">Gerenciar Usuários</a></li>
                            <?php endif ?>
                            <li><a href="about">Sobre</a></li>
                            <li><a href="#">Chat</a></li>
                            <li><a href="logout"><i class="icofont-logout"></i>Sair</a></li>
                        </ul>
                    </div>
                </nav>
            </div> 
        <?php endif ?>
    </div>
</header>
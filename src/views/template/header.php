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
                        <a href="logout.php" style="font-size: 30px; margin-left: 10px;">Sair</a>
                    </div>
                </nav>
            </div> 
        <?php endif ?>
    </div>
</header>
<main class="main">
    <div class="container-md">
        <div class="div-subjects">
            <ul>
                <?php
                    if(empty($_GET['mat'])){
                        $_GET['mat'] = 'all';
                    }

                    if(empty($_GET['a'])){
                        $_GET['a'] = 'all';
                    }
                ?>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=all">
                    <li <?= $_GET['mat'] == 'all' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>Tudo</li>
                </a>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=mat">
                    <li <?= $_GET['mat'] == 'mat' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>Matématica</li>
                </a>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=por">
                    <li <?= $_GET['mat'] == 'por' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>Português</li>
                </a>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=his">
                    <li <?= $_GET['mat'] == 'his' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>História</li>
                </a>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=geo">
                    <li <?= $_GET['mat'] == 'geo' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>Geografia</li>
                </a>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=bio">
                    <li <?= $_GET['mat'] == 'bio' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>Biologia</li>
                </a>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=qui">
                    <li <?= $_GET['mat'] == 'qui' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>Química</li>
                </a>
                <a href="areas?a=<?= $_GET['a'] ?>&mat=fis">
                    <li <?= $_GET['mat'] == 'fis' ? 'style="background-color: #A61731; color: #FFF;"' : '' ?>>Física</li>
                </a>
            </ul>
        </div>
        <div class="div-navigationAndSearch">
            <p><a href="home">Home</a> > <a href="#"><?php
                switch(empty($_GET['a']) ? 're' : $_GET['a']){
                    case 're':
                        echo 'Resumos';
                        break;
                    case 'at':
                        echo 'Atividades';
                        break;
                    case 'au':
                        echo 'Aulas';
                        break;
                }
            ?></a></p>
            <form action="areas?a=<?= $_GET['a'] ?>&mat=<?= $_GET['mat'] ?>?" method="get">
                <input type="hidden" name="a" value="<?= $_GET['a'] ?>">
                <input type="hidden" name="mat" value="<?= $_GET['mat'] ?>">
                <input class="form-control" name="search" placeholder="Pesquisar" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
            </form>
        </div>
    </div>
</main>
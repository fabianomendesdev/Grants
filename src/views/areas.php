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
            <p><a href="home">Home</a> <span>></span> <a href="#"><?php
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
                <div class='form-control div-search-form'>
                    <input class="form-control input-search" style="border: none; box-shadow: none;" name="search" placeholder="Pesquisar" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
                    <button class="button-search"></button>
                </div>
            </form>
        </div>
        <section class="section-main">
            <?php if(!empty($data)): ?>
                <?php foreach($data as $value): ?>
                    <a href="#" class="link-div-resultModel">
                        <div class="div-resultModel">
                            <h2><?= ucfirst($value['title']) ?></h2>
                            <div>
                                <div class="div-abstract">
                                    <p class="abstract"><?= ucfirst($value['abstract']) ?></p>
                                </div>
                                <div class="div-matter">
                                    <p class="matter"><?php
                                        switch($value['matter']){
                                            case 'mat':
                                                echo "Matemática";
                                                break;
                                            case 'por':
                                                echo "Português";
                                                break;
                                            case 'his':
                                                echo "História";
                                                break;
                                            case 'geo':
                                                echo "Geografia";
                                                break;
                                            case 'bio':
                                                echo "Biologia";
                                                break;
                                            case 'qui':
                                                echo "Química";
                                                break;
                                            case 'fis':
                                                echo "Física";
                                                break;
                                        }
                                    ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach ?>
            <?php else: ?>
                <p>Não encontrei nada! :)</p>
            <?php endif ?>  
        </section>
        <?php if(count($data) > 2): ?>
            <div class="pagination">
                <form action="areas" method="get">
                    <input type="hidden" name="a" value="<?= $_GET['a'] ?>">
                    <input type="hidden" name="mat" value="<?= $_GET['mat'] ?>">
                    
                    <?php if(isset($_GET['search'])): ?>
                        <input type="hidden" name="search" value="<?= $_GET['search'] ?>">
                    <?php endif ?>

                    <?php if($_GET['pag'] > 0): ?>
                        <button class="text" name="pag" value="<?= $_GET['pag']-1 ?>">Voltar</button>
                    <?php endif ?>

                    <?php for($i=0; $i <= intdiv(count($data),2); $i++): ?>                
                        <button class="numbers" name="pag" value="<?= $i ?>" <?= $_GET['pag'] == $i ? 'style="background-color: #000; color: #FFF;"' : '' ?>><?= $i+1 ?></button>
                    <?php endfor ?>

                    <?php if(intdiv(count($data),2) < $_GET['pag']): ?>                        
                        <button class="text" name="pag" value="<?= $_GET['pag']+1 ?>">Próximo</button>
                    <?php endif ?>
                </form>
            </div>
        <?php endif ?>
    </div>
</main>
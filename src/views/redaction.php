<main class="main">
    <div class="container-md">
        <div class="div-navigationAndSearch">
            <p><a href="home">Home</a> <span>></span> <a href="#">Redação</a></p>
            <form action="areas?a=<?= $_GET['a'] ?>&mat=<?= $_GET['mat'] ?>?" method="get">
                <input type="hidden" name="a" value="<?= $_GET['a'] ?>">
                <input type="hidden" name="mat" value="<?= $_GET['mat'] ?>">
                <div class='form-control div-search-form'>
                    <input class="form-control input-search" style="border: none; box-shadow: none;" name="search" placeholder="Pesquisar" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
                    <button class="button-search"></button>
                </div>
            </form>
        </div>
        <section class="main-section">
            <ul>
                <li class="li-elements">
                    <div class="top">
                        <div class="divArrow"></div>
                        <img class="img-folder" src="assets/img/folder.png" alt="Folder"><span>fdfdfdfdf</span>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li><a href="#"><img src="assets/img/iconPDF.png" alt="">dfdfdfdfdf</a></li>
                        </ul>
                    </div>
                </li>  
            </ul>
        </section>
    </div>
</main>
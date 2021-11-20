<main class="main">
    <div class="container-md">
        <div class="div-navigation">
            <p><a href="home">Home</a> <span>></span> <a href="areas?a=<?= $data->areas ?>&mat=all"><?php
                switch($data->areas){
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
            ?></a><span>></span><a href="#"><?= $data->title ?></a></p>
        </div>

        <?php if($data->type === 'video'): ?>
            <section class="section-video">
                <iframe src="https://www.youtube.com/embed/<?= $data->link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        <?php elseif($data->type === 'pdf'): ?>
            <section class="section-pdf">
                <object data="getPDF?pdf=<?= $data->path ?>" type="application/pdf">
                    <p>Seu navegador não tem um plugin pra PDF</p>
                </object>
            </section>
        <?php endif ?>
    </div>
</main>
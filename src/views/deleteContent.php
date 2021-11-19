<main class="main">
    <div class="container-md">
        <section class="main-section">
            <h1>Tem certeza que deseja deletar ?</h1>

            <p>Título: <?= $data->title ?></p>
            
            <p>Resumo: <?= $data->abstract ?></p>

            <div class="buttons">
                <form action="#" method="post">
                    <button name="confirm" value="1" class="btn btn-primary">Sim</button>
                    <button name="confirm" value="0" class="btn btn-secondary mx-3">Não</button>
                </form>
            </div>
        </section>
    </div>
</main>
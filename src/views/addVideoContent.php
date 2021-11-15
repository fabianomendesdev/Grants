<main class="main">
    <div class="container-md">
        <section class="main-section">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="video" class="form-label">Envie o link do vídeo</label>
                    <input class="form-control" type="url" name="link" id="video" placeholder="Informe o link completo do vídeo">
                    <p><?= $message ?></p>
                </div>
                <div class="buttons">
                    <button class="btn btn-primary">Criar</button>
                    <a href="formContent" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </section>
    </div>
</main>
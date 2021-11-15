<main class="main">
    <div class="container-md">
        <section class="main-section">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="pdf" class="form-label">Envie o PDF</label>
                    <input class="form-control" name="pdf" type="file" id="pdf" accept=".pdf">
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
<main class="main">
    <div class="container-md">
        <section class="main-section">
            <form action="#" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Informe o título">
                </div>

                <div class="mb-3 div-abstract">
                    <label for="abstract" class="form-label">Resumo</label>
                    <textarea class="form-control" id="abstract" name="abstract" placeholder="Digite o resumo"></textarea>
                </div>

                <div class="div-areas mb-3 pb-2">
                    <select class="form-select" name="areas">
                        <option selected>Selecione</option>
                        <option value="re">Resumos</option>
                        <option value="at">Atividades</option>
                        <option value="au">Aulas</option>
                    </select>
                </div>

                <div class="div-types mb-3 pb-3">
                    <select class="form-select" name="type">
                        <option selected>Selecione um tipo de arquivo</option>
                        <option value="pdf">PDF</option>
                        <option value="video">Vídeo</option>
                    </select>
                </div>

                <div class="div-types mb-3 pb-3">
                    <select class="form-select" name="mat">
                        <option selected>Selecione uma matéria</option>
                        <option value="mat">Matemática</option>
                        <option value="por">Português</option>
                        <option value="his">História</option>
                        <option value="geo">Geografia</option>
                        <option value="bio">Biologia</option>
                        <option value="qui">Química</option>
                        <option value="fis">Física</option>
                    </select>
                </div>
                <input type="submit" value="Próximo" class="btn btn-primary">
            </form>
        </section>
    </div>
</main>
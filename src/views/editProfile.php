<main class="main">
    <div class="container-md">
        <section class="section-editProfile">
            <div class="imgAndUsername">
                <img src="assets/img/default_male_avatar.png" alt="Foto do perfil">
                <p><?= $_SESSION['user']->name ?></p>
            </div>
            <form action="#" method="post" class="form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="<?= $_SESSION['user']->name ?>">
                    </div>
                </div>

                <div class="form-row d-flex align-items-end justify-content-between birth">
                    <div class="form-group col-md-3">
                        <label for="birth">Nascimento</label>
                        <input type="number" class="form-control" name="day" id="birth" placeholder="Day" value="<?= date("d", strtotime($_SESSION['user']->birth)) ?>">
                    </div>

                    <div class="form-group col-md-3 mx-2">
                        <input type="number" class="form-control" name="month" placeholder="Mês" value="<?= date("m", strtotime($_SESSION['user']->birth)) ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <input type="number" class="form-control" name="year" placeholder="Ano" value="<?= date("Y", strtotime($_SESSION['user']->birth)) ?>">
                    </div>
                </div>

                <div class="form-row series">
                    <div class="form-group col-md-6">
                        <label for="series" class="form-label">Série</label>
                        <select class="form-select" id="series" name="series">
                            <option value="1" <?= $_SESSION['user']->series == 1 ? 'selected' : '' ?>>1º Ano Ensino Médio</option>
                            <option value="2" <?= $_SESSION['user']->series == 2 ? 'selected' : '' ?>>2º Ano Ensino Médio</option>
                            <option value="3" <?= $_SESSION['user']->series == 3 ? 'selected' : '' ?>>3º Ano Ensino Médio</option>
                        </select>
                    </div>
                </div>

                <div class="form-row sex">
                    <div class="form-group col-md-6">
                        <fieldset class="fieldset">
                            <legend>Sexo:</legend>
                            <div class="inputs">
                                <div style="margin-left: unset;">
                                    <input type="radio" name="sex" id="female" value="F" <?= $_SESSION['user']->sex == 'F' ? 'checked' : '' ?>/> <label for="female">F</label> <br/>
                                </div>
                                <div class="margin">
                                    <input type="radio" name="sex" id="male" value="M" <?= $_SESSION['user']->sex == 'M' ? 'checked' : '' ?>/> <label for="male">M</label>
                                </div>

                                <div class="margin">
                                    <input type="radio" name="sex" id="other" value="O" <?= $_SESSION['user']->sex == 'O' ? 'checked' : '' ?>/> <label for="other">Outro</label>
                                </div>
                            </div>                        
                        </fieldset>
                    </div>
                </div>

                <div class="buttons">
                    <button class="btn bg-primary btn-save">Salvar</button>
                    <a href="editProfile.php" class="btn bg-secondary btn-cancel">Cancelar</a>
                </div>
            </form>
        </section>
    </div>
</main>
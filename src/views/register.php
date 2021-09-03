<?php
    if($_POST['email']){
        header("Location: login.php?email={$_POST['email']}");
    }
?>
<main class="main">
    <div class="container-md">
        <form action="#" class="form" method="post">
            <div class="form-row  mb-3">
                <div class="form-group">
                    <div>
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <!-- <div class="invalid-feadback">
                        <p></p>
                    </div> -->
                </div>
            </div>    
        
            <div class="form-row mb-3">
                <div class="form-group">
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
                    </div>
                    <!-- <div class="invalid-feadback">
                        <p></p>
                    </div> -->
                </div>
            </div>

            <div class="form-row d-flex align-items-end justify-content-between mb-3">
                <div class="form-group col-md-3">
                    <div>
                        <label for="birth" class="form-label">Nascimento</label>
                        <input type="number" class="form-control" id="birth" name="day" placeholder="Dia">
                    </div>

                    <!-- <div class="invalid-feadback">
                        <p></p>
                    </div> -->
                </div>

                <div class="form-group col-md-3">
                    <div>
                        <input type="number" class="form-control" name="month" placeholder="Mês">
                    </div>

                    <!-- <div class="invalid-feadback">
                        <p></p>
                    </div> -->
                </div>

                <div class="form-group col-md-3">
                    <div>
                        <input type="number" class="form-control" name="year" placeholder="Ano">
                    </div>

                    <!-- <div class="invalid-feadback">
                        <p></p>
                    </div> -->
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="form-group col-md-5">
                    <label for="series" class="form-label">Série</label>
                    <select class="form-select" id="series">
                        <option selected>Selecione</option>
                        <option value="1">1º Ano Ensino Médio</option>
                        <option value="2">2º Ano Ensino Médio</option>
                        <option value="3">3º Ano Ensino Médio</option>
                    </select>

                    <!-- <div class="invalid-feadback">
                        <p></p>
                    </div> -->
                </div>
            </div>
            
            <div class="form-row mb-3">
                <div class="form-group">
                    <fieldset class="fieldset">
                        <legend>Sexo:</legend>
                        <div class="inputs">
                            <div>
                                <input type="radio" name="inpSex" id="women" value="F" checked/> <label for="women">F</label> <br/>
                            </div>
                            <div class="margin">
                                <input type="radio" name="inpSex" id="male" value="M"/> <label for="male">M</label>
                            </div>

                            <div class="margin">
                                <input type="radio" name="inpSex" id="other" value="O"/> <label for="other">Outro</label>
                            </div>
                        </div>                        
                    </fieldset>
                    <!-- <div class="invalid-feadback">
                        <p></p>
                    </div> -->
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="form-group">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Digite a senha">
                </div>
                
                <!-- <div class="invalid-feadback">
                    <p></p>
                </div> -->
            </div>

            <div class="form-row mb-3">
                <div class="form-groupx">
                    <label for="PasswordConfirmation" class="form-label">Confirme a senha</label>
                    <input type="password" name="PasswordConfirmation" id="PasswordConfirmation" class="form-control" placeholder="Confirme a senha">
                </div>

                <!-- <div class="invalid-feadback">
                    <p></p>
                </div> -->
            </div>
            
            <div class="buttons">
                <button class="btn bg-primary btn-login">Criar Conta</button>
                <a href="login.php" class="btn bg-secondary btn-back">Voltar</a>
            </div>
        </form>
    </div>
</main>
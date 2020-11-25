<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Chamada CCS bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Chamada JS bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

     <!-- Chamada biblioteca CSS interna -->
    <link rel="stylesheet" href="..\css\biblioteca_estilos.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-3 div1">Home</div>
            <div class="col-lg-5 col-md-3 col-sm-3 div2">Produtos</div>
            <div class="col-lg-3 col-md-2 col-sm-3 div3">Links</div>
            <div class="col-lg-2 col-md-3 col-sm-3 div4">Contatos</div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 div1">Coluna1</div>
            <div class="col-lg-8 col-md-8 col-sm-8 div2">
                <form id="formuser" method="POST">
                    <fieldset> 
                        <legend>Para fazer um dos nossos cursos, preencha o nosso formulário</legend>
                    <label>Nome:</label><input type="text" name="nome" required>
                    <label>Email:</label><input type="email" name="email" required>
                    <label>Senha:</label><input type="password" name="senha" required><br><br>
                    <label> Data da realização do curso:</label> <input type="date" name="data_curso" required><br><br>
                   
            
                    <label> Informe o genero:</label> <br>
            
                    <input type="radio" name="opcao_radio" value="Masculino" /> Masculino
                    <input type="radio" name="opcao_radio" value="Feminino" /> Feminino
                    <input type="radio" name="opcao_radio" value="Outros" /> Outros<br /> <br><br>
            
                    
                    <label>Escolha o seu curso</label>
                    <select>
                        <option value=""></option>
                        <option value="xml">XML</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                    </select> <br><br>
            
                    <label>Qual período deseja fazer o curso</label>
                    <input type="checkbox"  name="OPCAO" value="manhã"> Manhã
                    <input type="checkbox"  name="OPCAO" value="tarde"> Tarde
                    <input type="checkbox"  name="OPCAO" value="noite"> Noite<br><br>
            
                    <label>Anexar comprovante residência</label><input type="file" name="arquivo"><br><br>
            
                    <input type="submit" value="Enviar">
                </fieldset>
                </form>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 div3">Links</div>

        </div>

    </div>
    </body>
    </html>

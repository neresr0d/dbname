<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/123/cadastro_controller.php" method="POST">
                
                    <!--<div class="perfil">
                    <label for="file" class="file">Foto do perfil</label>
                    <img src="/estante_web/banco/imgs/upload.png" alt="Imagem" class="img-perfil">
                    <input type="file" id="fileInput" name="file">

                </div>-->

                <div class="cad">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                </div>
                <br>
                <div class="cad">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>

                </div>
                <br>

                <div class="cad">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <br>

                <div class="cad">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div>
                    <button type="submit" value="CADASTRAR">Criar Conta</button>
                </div><br>

                <div><br>
                    <h4>Já é cadastrado?</h4><br>
                    <a href="https://www.canva.com/design/DAGH3_Mzymw/QNPyFU1iTtvDz7E3N9cDog/edit">
                        <h4>Acesse sua conta</h4>
                    </a>
                </div>
               



                <p class="h3">
                    Ao seguir com o cadastro, concordo com os <br>Termos de uso e Politicas de privacidade </p>

            </form>
    
</body>
</html>
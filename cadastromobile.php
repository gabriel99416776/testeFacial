<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        img {
            margin-bottom: 20px;
            width: 40vh;
        }

        .form-row{
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 60px;
            width: 80%;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        form input, form label, form select, form button {
            font-size: 20px;
            width: 100%;
            box-sizing: border-box;

        }

        form button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }
        form .form-control, select{
            padding: 10px;
            border-radius: 10px;
        }
        form .texto-foto{
            font-weight: 600;
            margin-top: 30px;
            font-size: 25px;
        }
</style>
<body>
    <img src="./img/logo-header.png" alt="">


<!---------------------------------------------- FORMULARIO ----------------------------------------->
<form id="cadastro" class="form-container" method="post" action="salvar_dados.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome Da Pessoa: </label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF: </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                </div>
                <div class="form-group col-md-6">
                    <select class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Selecione A Portaria</option>
                    <option value="1">1303</option>
                    <option value="2">3456</option>
                    <option value="3">5932</option>
                    </select>
                </div>
                
                    <label for="selfie" class="texto-foto">Imagem Capturada Da Camara:</label>

                    <input type="file" id="selfie" name="selfie" accept="image/*" capture="user" />
                
                
                    <button type="submit" class="botao-cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>


    <!---------------------------------------------- FORMULARIO ----------------------------------------->
</body>
</html>
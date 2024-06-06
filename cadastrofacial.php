<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de acesso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

.dropdown-font-size{
    font-size: 20px;
}
section{
    margin-top: 30px;
}
section .container{
    margin-bottom: 50px;
}
nav{
    background-image: linear-gradient(to bottom, #967ADC 0%, #967adc87 0%, #ffffff 100%);
   
}

nav .btn-custom-input{
    color: #000;
    font-weight: bold;
}

nav .btn-custom-input:hover{
    background-color: #967ADC;
}
nav .search-custom{
    border: 1px solid;
    box-shadow: 1px 1px 1px #000;
}

.toggle-arrow.rotate {
    transform: rotate(90deg);
}


section .btn-custom-section a{
    text-decoration: none;
    color: #ffff;
}
section .btn-custom-section{
    color: #ffff;
    background-color: #967ADC;
    border: none;
    border-radius: 20px;
    padding: 10px 20px;
    font-weight: bold;
    
    
}
section .btn-custom-section:hover{
    background-color: #000;
    transition: .3s ease-in-out;
}
section .btn-custom-section:not(:hover){
    transition: .4s;
}



section i{
    font-size: 100px;
    padding-right: 40px;
   
}






@media (max-width: 992px) {
    
    section h2{
        font-size: 1.5rem;
    }
  }
@media (max-width: 527px){
    section h2{
        font-size: 1.4rem;
    }
}

@media (max-width: 493px){
    section h2{
        font-size: 1.3rem;
    }
}

section form{
    margin-left: 25%;
    font-size: 20px;
}
section form .form-control{
    font-size: 20px;
    border: 1px solid black;
    
}
section form .file-custom{
    margin-top: 30px;
   
}
section form .botao-cadastrar{
    background-color: #967ADC;
    color: #ffff;
    padding: 3px 20px;
    border: none;
    border-radius: 10px;
    margin-top: 30px;
    margin-left: 15%;
}
section form .botao-facial{
    background-color: #967ADC;
    color: #ffff;
    padding: 3px 20px;
    border: none;
    border-radius: 10px;
    
}

section form select {
    margin: 20px 0;
    
}
section form .form-select{
    border: 1px solid black;
    
}

section form #imagem-capturada{
    display: none;
}

@media (max-width: 768px){
    section form .form-row{
        width: 50vh;
    }
}
@media (max-width: 558px){
    section form .form-row{
        width: 30vh;
    }
    section form video{
        width: 30vh;

    }
    section form .imagem-canva-tirada{
        width: 30vh;
    }
}
  </style>
  <body>
   
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <img src="img/logo-header.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active fs-5  fw-bold " aria-current="page" href="index.php">Inicio</a>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link  fs-5 fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu <i class="bi bi-caret-right toggle-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item dropdown-font-size" href="https://eurekha.com.br/admin/produtor/s_eventos.php" target="_blank"><i class="bi bi-calendar"></i> - Eventos</a></li> 
                            <li><a class="dropdown-item dropdown-font-size" href="index.php"><i class="bi bi-journal-text"></i> - Resumo</a></li>
                            <li><a class="dropdown-item dropdown-font-size" href="validados.php"><i class="bi bi-bookmark-check-fill"></i> - Validados</a></li> 
                            <li><a class="dropdown-item dropdown-font-size" href="usuarios.php"><i class="bi bi-person-bounding-box"></i> - Clientes</a></li>
                            <li><a class="dropdown-item dropdown-font-size" href="leitores.php"><i class="bi bi-reception-4"></i> - Leitores</a></li>
                            <li><a class="dropdown-item dropdown-font-size" href="cadastrofacial.php"><i class="bi bi-person-fill-add"></i> - Cadastro Facial</a></li>
                        </ul>
                    </li>
                    
    
                </ul>
                <form class="d-flex d-lg-none mx-auto">
                    <input class="form-control me-2 search-custom" type="search" placeholder="Procurar algo" aria-label="Search">
                    <button class="btn btn-outline-success btn-custom-input " type="submit">Buscar</button>
                </form>
                <form class="d-none d-lg-flex"> 
                    <input class="form-control me-2 search-custom" type="search" placeholder="Procurar algo" aria-label="Search">
                    <button class="btn btn-outline-success btn-custom-input" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0 ml-auto align-items-center"> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/painel/foto-usuario.jpg" alt="Foto de Perfil" class="profile-img img-thumbnail rounded-circle mr-2" style="max-width: 40px;">
                            Nome de Usuário
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
        </div>
        
    </nav>
    <section>
        <div class="container">
            <div class="row card-custom">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
                        <h2 class="mr-md-5  mb-md-0 text-md-start fs">[1010] Jogo Fortaleza x Flamengo - 01/01/2024</h2>
                        <button class="btn-custom-section"><a href="https://eurekha.com.br/admin/produtor/s_eventos.php">Mudar Evento</a></button>
                    </div>
                </div>
            </div>
        </div>

        


        <!---------------------------------------------- FORMULARIO ----------------------------------------->
        <form id="cadastro-facial" method="post" action="salvar_dados.php">
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
                
                
                <div id="camera">
                    <video id="video" width="520" height="400" autoplay></video><br>
                    <button type="button" id="capturar" class="botao-facial">Capturar Foto</button>
                </div>

                <div id="output" style="margin-top:20px;" >
                    <canvas id="canvas" width="320" height="240" style=" border:1px solid black;" class="imagem-canva-tirada"></canvas>
                </div>
                
                <input type="hidden" id="imagem-base64" name="foto_base64">
                <button type="submit" class="botao-cadastrar">Cadastrar</button>
            </div>
            </div>
        </form>

  

    </section>
    
    <script src="./capturarfoto.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 


    <script>
        function isMobile() {
            // Verifica a largura da tela
            if (window.innerWidth <= 800) {
                return true;
            }

            // Verifica a user agent string
            const userAgent = navigator.userAgent || navigator.vendor || window.opera;
            return /android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(userAgent.toLowerCase());
        }

        function redirectToMobileVersion() {
            if (isMobile()) {
                // Substitua 'mobile.html' pelo nome do arquivo da versão móvel do seu site
                window.location.href = "./cadastromobile.php";
            }
        }

        window.onload = function() {
            redirectToMobileVersion();
        };
    </script>

  </body>
</html>

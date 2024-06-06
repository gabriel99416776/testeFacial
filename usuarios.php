
<?php
//Biblioteca phpqrcode para gera qrcode

 
// Conexão com o banco de dados
$hostname = "localhost";
$bancodedados = "ap_controleacesso";
$usuario = "root";
$senha = "";
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

// Consulta para pegar o numero total de usuarios
$consulta = "SELECT nome, qrcode FROM ac_users";
$resultado = $mysqli->query($consulta) or die($mysqli->error);

// Consulta para saber em NUMEROS, o total de usuarios
$totalConsulta = "SELECT COUNT(*) as total FROM ac_users";
$totalResultado = $mysqli->query($totalConsulta) or die ($mysqli->error);
$totalRow = $totalResultado->fetch_assoc();
$totalUsuarios = $totalRow['total'] 


// Consulta para buscar o codigo QRcode

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de acesso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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

section .card-header{
    font-family: 'Poetsen one', sans-serif, serif;
    font-size: 18px;
    font-weight: 100;
    letter-spacing: 1px;
}
section .card-body h5{
    font-size: 30px;
    font-family: 'Poppins', sans-serif, serif;
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

@media (max-width: 1032px){
    section .cards-gerais {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        align-items: center;
        justify-content: center;
    }
}
@media (max-width: 550px){
    section .table-custom .campo-pesquisar button{
        font-size: 16px;
        padding: 2px 4px;
        margin-top: 5px;
    }
    section .table-custom .campo-pesquisar input{
        width:100px;
    }
}



section table {
    
    margin: auto;
    text-align: center;
    
}

section .table-custom{
   max-width: 95%;
}

section a{
    text-decoration: none;
    color: #ffff;
}

section table .campo-pesquisar button{
    border-radius: 10px;
    background-color: #967ADC;
    color: #ffff;
    border: none;
    padding: 5px 14px;
    font-size: 18px;
}
section table .campo-pesquisar input{
    padding-left: 10px;
    border-radius: 5px;
    padding: 5px;
}
section table .campo-pesquisar input:focus{
    box-shadow: 0 0 0 0;
    
    outline: 0;
}

section .total-clientes{
    margin-left: 40px;
}
.accordion{
    width: 90%;
    margin: auto;
}
.accordion .editarFoto{
    width: 80px;
    margin: auto;
    padding: 5px 10px;
    border: none;
    background-color: #967ADC;
    color: #ffffff;
    border-radius: 10px;
  }
  @media (max-width: 769px){
    .accordion .editarFoto{
      margin: 30px auto;
    }
  }
  
  @media (max-width: 768px){
    .accordion .fotoFacial{
      display: flex;
      justify-content: center;
    }
  }
  .accordion .fotoFacial{
    margin-top: 60px;
  }

.inputPesquisarClientes{
    margin-right: 17px;
    margin-bottom: 10px;
    width: 50%;
    padding: 5px;
    border-radius: 10px;
    

}
.inputPesquisarClientes:focus{
    outline: 0;
}

.accordion-item{
    border-color: #967ADC !important;
    border-left: 2px solid #967ADC !important;
    border-top: 2px solid #967ADC !important;
    
}
.accordion-button{
   background-color: #d3d3d352 !important;
   font-weight: 600;
   box-shadow: none !important;
}

.linha{
    width: 80%;
    margin: 30px auto; 
    border-color: #967ADC; 
    border-width: 5px;
    border-radius: 10px; 
    margin-top: 40px;
}
@media (max-width: 785px){
     .custom-qrcode-foto{
        display: flex !important;
        flex-direction: column !important;
        
    }
    .custom-foto-accordion{
        display: flex;
        justify-content: center;   
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
                            <img src="/img/foto-usuario.jpg" alt="Foto de Perfil" class="profile-img img-thumbnail rounded-circle mr-2" style="max-width: 40px;">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
                        <h2 class="mr-md-5  mb-md-0 text-md-start fs">[1010] Jogo Fortaleza x Flamengo - 01/01/2024</h2>
                        <button class="btn-custom-section"><a href="https://eurekha.com.br/admin/produtor/s_eventos.php">Mudar Evento</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
          <h2 class="total-clientes">Total : <?php echo $totalUsuarios; ?></h2>
          <input type="search" name="" id="" placeholder="Digite para filtar os nomes" class="inputPesquisarClientes">
          
        </div>
        <hr class="linha">
        
        <div class="accordion" id="accordionFlushExample">
        <?php
            // Verificar se a consulta retornou resultados
            if ($resultado->num_rows > 0) {
                // Iterar sobre os resultados e criar os accordions
                while ($row = $resultado->fetch_assoc()) {
                    $nome = $row['nome'];
                    $qrcode = $row['qrcode'];
                    
                    // Gerar um ID único e válido
                    $id = preg_replace('/[^a-zA-Z0-9]/', '_', $nome);
                    
                    // Criar o elemento accordion para cada usuário
                    echo '<div class="accordion-item">';
                    echo '<div class="accordion-header" id="heading' . $id . '">';
                    echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $id . '" aria-expanded="false" aria-controls="collapse' . $id . '">';
                    echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
                    echo '</button>';
                    echo '</div>';
                    echo '<div id="collapse' . $id . '" class="accordion-collapse collapse" aria-labelledby="heading' . $id . '" data-bs-parent="#accordionFlushExample">';
                    
                    echo '<div class="accordion-body">';
                    
                    // Gerar o QR Code
                    echo '<div class="container d-flex justify-content-around custom-qrcode-foto">';
                    
                    echo '<center><img src="https://efolia.com.br/qr/qrjob.php?num=349245622083" width="250" ></center>';
                    echo '<div class="custom-foto-accordion">';
                    echo '<img src="img/foto-user1.jpg" width="250"';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<center><button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">ENVIAR';
                    echo '</button></center>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Nenhum usuário encontrado.";
            }
            ?>
        </div>
</div>

            <!-- Segundo accordion -->
  
  
  
              <!---------------------- Modal ------------------------>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="">Escolha uma foto:</label> <br>
          <input type="file" name="" id="userPhotoInput">
          <div id="userPhotoPreview"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary" id="saveUserPhotoBtn">Salvar Alteração</button>
        </div>
      </div>
    </div>
  </div>
        </div>

    </section>
    
              
    
    <!-- CDN do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <!-- Manipulação DOM -->
  <script src="fotoFacial.js"></script>
  <script src="pesquisarUser.js"></script>




  </body>

  
</html>



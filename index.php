<?php

// Conexão com o banco de dados
$hostname = "localhost";
$bancodedados = "ap_controleacesso";
$usuario = "root";
$senha = "";
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);


// Consulta para saber em NUMEROS, o total de usuarios
$totalConsulta = "SELECT COUNT(*) as total FROM ac_users";
$totalResultado = $mysqli->query($totalConsulta) or die ($mysqli->error);
$totalRow = $totalResultado->fetch_assoc();
$totalUsuarios = $totalRow['total'] 


?>




<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de acesso</title>
<!-- Link CSS -->
    

    <!-- CDN Bootstrap -->
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
    background-image: linear-gradient(to bottom, #967ADC 0%, #967adc87 0%, #ffffff 100%) !important;
   
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



.linha{
    width: 80%;
    margin: 0 auto; 
    border-color: #967ADC; 
    border-width: 5px;
    border-radius: 10px; 
    margin-top: 40px;
}


section .relatorio td,th{
    border: 1px solid rgb(255, 255, 255);
    border-radius: 3px;
}

section  .relatorio .relatorio_ilha{
    border: none;
    font-size: 25px;
    font-family: 'Poetsen one', sans-serif,serif;
    text-align: center;
    padding-top: 30px;
}
section .relatorio .descricao{
    background-color: #ffee009c ;
    font-size: 17px;
    font-weight: 600;
}   
section .relatorio .row-transparent{
    background-color: #ffff;
}
section .relatorio .total-relatorio{
    background-color: #967ADC;
    font-family: 'Poppins', sans-serif, serif;
    color: #ffff;
    font-weight: 700;
    font-size: 17px;
}
section table{
    width: 90%;
    margin: auto;
    text-align: center;
}

section .relatorio .tab_ing{
    background-color: #967ADC;
    color: #ffff;
    font-family: 'Poppins', sans-serif, serif;
    font-weight: 500;
    
}

.chart-container {
    width: 90%;
    height: 400px; /* Altura desejada para o gráfico */
    position: relative;
    margin: auto;
    margin-top: 30px;
    margin-bottom: 50px;
}

/* Estilo para o canvas */
canvas {
    height: 100% !important;
    width: 100% !important;
}


section a{
    text-decoration: none;
    color: #ffff;
}
</style>


<body>
  
<?php
$nomeUsuario = 'Gabriel.admin';
?>
    <!-- -------------- Navegação do Header + Responsividade do Dropdown ------------ -->

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
                            <?php echo $nomeUsuario; ?>
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

    <!-- ---------- Fim da Navegação do Header --------------- -->
    
    <!---------- Area destinada ao [ID do evento] Nome do Evento - Data do Evento ----------->

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

    <!------------------ Fim do local de evento --------------------- -->


    <!-------- Area destinada aos Cads de Informações gerais --------->
        <div class="container">
            <div class="row ">
                <div class=" col-lg-4">
                    <div class="card mb-4 ">
                        <div class="card-header bg-success text-white">
                            Clientes Cadastrados
                        </div>
                        <div class="d-flex ">
                            <div class="card-body">
                              <h5 class="card-title mb-4"><?php  echo $totalUsuarios ?></h5>
                              
                              <a href="usuarios.php" class="btn btn-success">Acessar</a>
                            </div>
                            <i class="bi bi-person-add text-success"></i>

                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-info text-white">
                          Clientes Validados
                        </div>
                        <div class="d-flex ">
                            <div class="card-body">
                              <h5 class="card-title">1</h5>
                              <p class="card-text"></p>
                              <a href="validados.php" class="btn btn-info text-white">Acessar</a>
                            </div>
                            <i class="bi bi-person-fill-check text-info"></i>

                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-secondary text-white">
                          Leitores
                        </div>
                        <div class="d-flex">
                            <div class="card-body">
                              <h5 class="card-title">5/5</h5>
                              <p class="card-text">Online/Offline</p>
                              <a href="leitores.php" class="btn btn-secondary">Acessar</a>
                            </div>
                            <i class="bi bi-phone-vibrate text-secondary"></i>

                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                          Ingressos
                        </div>
                        <div class="d-flex">
                            <div class="card-body ">
                              <h5 class="card-title">1000/1000</h5>
                              <p class="card-text">Vendidos/Disponivel</p>
                              <a href="#relatorio-tabela" class="btn btn-primary">Acessar</a>
                            </div>
                            <i class="bi bi-ticket-perforated text-primary"></i>

                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header bg-dark text-white">
                          Cadastro Facial
                        </div>
                        <div class="d-flex">
                            <div class="card-body ">
                              <h5 class="card-title"></h5>
                              <p class="card-text"></p>
                              <a href="./cadastrofacial.php" class="btn btn-dark">Acessar</a>
                            </div>
                            <i class="bi bi-person-badge text-dark"></i>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-------------------- Fim dos Cards ---------------------->


        <!--------------- Linha de separação do card com a tabela ---------------->
         <hr class="linha">
        <!----------------- Fim da linha ---------------------------->


        <!--------------------- Tabela sobre o resumo de Ingressos do evento ------------------------ -->
        <div class="relatorio" id="relatorio-tabela">

            <table border="1" bordercolor="#FFFFFF" cellspacing="0" cellpadding="0" width="100%">
               <tbody>
           
               <tr class="white">
                   <td colspan="3" class="relatorio_ilha">SUPERIOR SUL</td>            
                </tr>
               <tr class="descricao">
                   <td colspan="3" class="border-0 row-transparent">&nbsp;</td>
                   <td>Validados</td>
                   <td colspan="2">Percentual</td>
                    <td>Total Vendido</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Superior Sul (INTEIRA)</td>
                   <td>18</td>
                   <td  colspan="2">
                   <div">90,00%</div>
                   </td>
                    <td>20</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Superior Sul (MEIA)</td>
                   <td>16</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div>100,00%</div>
                   </td>
                    <td>16</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Superior Sul (CORTESIA)</td>
                   <td>16</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div>100,00%</div>
                   </td>
                    <td>16</td>
               </tr>
               <tr class="total-relatorio">
                   <td colspan="3" height="50">TOTAL VALIDADOS/VENDIDOS</td>
                   <td>34</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div>100,00%</div>
                   </td>
                    <td>36</td>
               </tr>
               
               
               <tr class="white">
                   <td colspan="3" class="relatorio_ilha">INFERIOR SUL</td>
                
                </tr>
               <tr class="descricao">
                   <td colspan="3" class="border-0 row-transparent">&nbsp;</td>
                   <td>Validados</td>
                   <td colspan="2">Percentual</td>
                    <td>Total Vendido</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Inferior Sul (INTEIRA)</td>
                   <td>7</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div>100,00%</div>
                   </td>
                    <td>7</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Inferior Sul (MEIA)</td>
                   <td>2</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div>100,00%</div>
                   </td>
                    <td>2</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Inferior Sul (CORTESIA)</td>
                   <td>2</td>
                   <td style="padding-right:20px;" colspan="2" width="200">
                   <div>100,00%</div>
                   </td>
                    <td>2</td>
               </tr>
               <tr class="total-relatorio">
                <td colspan="3" height="50">TOTAL VALIDADOS/VENDIDOS</td>
                <td>34</td>
                <td style="padding-right:20px;" colspan="2" width="200">
                <div>100,00%</div>
                </td>
                 <td>36</td>
            </tr>
               <tr class="white">
                   <td colspan="3" class="relatorio_ilha">PREMIUM </td>
                

                

               </tr>
               <tr class="descricao">
                   <td colspan="3" class="border-0 row-transparent">&nbsp;</td>
                   <td>Validados</td>
                   <td colspan="2">Percentual</td>
                    <td>Total Vendido</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Premium (INTEIRA)</td>
                   <td>2</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div >20,00%</div>
                   </td>
                    <td>10</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Premium (MEIA)</td>
                   <td>5</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div >33,33%</div>
                   </td>
                    <td>15</td>
               </tr>
               <tr class="tab_ing">
                   <td colspan="3" height="50">Premium (CORTESIA)</td>
                   <td>15</td>
                   <td style="padding-right:20px;" colspan="2" >
                   <div>100,00%</div>
                   </td>
                    <td>15</td>
               </tr>
               <tr class="total-relatorio">
                <td colspan="3" height="50">TOTAL VALIDADOS/VENDIDOS</td>
                <td>34</td>
                <td style="padding-right:20px;" colspan="2" >
                <div>100,00%</div>
                </td>
                 <td>36</td>
            </tr>
               <tr class="white">
                   <td colspan="3" class="relatorio_ilha">Total Validados: 97</td>
                   <td colspan="4" class="relatorio_ilha">Total Vendidos: 166</td>
               </tr>
           </tbody></table>
        </div>

        <!------------------ Fim da Tabela de resumos ------------------------>
        <hr class="linha">



        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!------------------------- Script do grafico de validações de Ingressos ---------------->

<script>
$(document).ready(function() {
    //Get the context of the Chart canvas element we want to select
    var ctx = $("#line-chart");
    
    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: false,
                    labelString: ''
                }
            }],
            yAxes: [{
                display: true,
                ticks: {
                    beginAtZero: true
                },
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: false,
                    labelString: ''
                }
            }]
        }
    };
    
    // Chart Data
    var chartData = {
        labels: ['18:00','18:10','18:20','18:30','18:40','18:50','19:00','19:10','19:20'],
        datasets: [{
            label: 'Superior Sul',
            data: [400,45,350,0,100,200,123,9,4],
            fill: false,
            borderColor: "#BCAAE9",
            pointBorderColor: "#BCAAE9",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        },{
            label: 'Bossa Nova',
            data: [10,20,50,302,12,30,21,19,6],
            fill: false,
            borderColor: "#99B898",
            pointBorderColor: "#99B898",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        },{
            label: 'Premium ',
            data: [100,231,115,392,123,30,106,15,80],
            fill: false,
            borderColor: "#FECEA8",
            pointBorderColor: "#FECEA8",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        }]
    };
    
    var config = {
        type: 'line',
        // Chart Options
        options : chartOptions,
        data : chartData
    };
    
    // Create the chart
    var lineChart = new Chart(ctx, config);
});
</script>
<!-------------------------------- Fim do script------------------>

<!------------- Exibir o grafico ----------------------->
<div class="chart-container">

    <canvas id="line-chart"></canvas> 
</div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" type="text/javascript"></script>

              
    </section>
    
              
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha383-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
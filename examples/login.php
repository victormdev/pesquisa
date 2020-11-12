<?php require_once  "../Controller/SearchController.php"; ?>

<?php $searchController = new SearchController();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/fav.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Pesquisa Web
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
      <img style="margin-top: 30px; margin-bottom: 30px;" src="../assets/img/logo-maior.png">
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li>
          <a href="./index.html">
            <i class="now-ui-icons shopping_shop"></i>
            <p>Home</p>
          </a>
        </li>
        <li>
          <a href="./sobre.html">
            <i class="now-ui-icons business_bulb-63"></i>
            <p>Quem somos</p>
          </a>
        </li>
        <li>
          <a href="./metodologias.html">
            <i class="now-ui-icons design_vector"></i>
            <p>Metodologias</p>
          </a>
        </li>
        <li class="active ">
          <a href="./pesquisas.html">
            <i class="now-ui-icons ui-1_zoom-bold"></i>
            <p>Pesquisas</p>
          </a>
        </li>
        <li>
          <a href="./contato.html">
            <i class="now-ui-icons ui-2_chat-round"></i>
            <p>Contato</p>
          </a>
        </li>
      </ul>
    </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Pesquisas</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Pesquisas 📝</h2>
          <p class="category">Acesso ao levantamento de todas as pesquisas disponíveis</p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <div class="form-group">
                            <label>Pesquise as pesquisas por cidades</label>
                            <input type="text" class="form-control" id="subject" placeholder="Digite a cidade aqui" required="required">
                          </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                  </div>
                <div class="row">
                    
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="margin-top: 2%;">
                        <div class="card">
                            <?php foreach($searchController->obterPesquisas() as $pesquisa){

                            }
                            ?>
                          <div class="card-header">
                            <h4 class="card-title"> Salvador</h4>
                            <h5 style="font-size: 16px;"><?=$pesquisa['descricao']?></h5>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                            <table class="row">
                <tr>
                    <td class="col">População: <?=$pesquisa['populacao']?></td>
                </tr>
                    <td class="col">Eleitores: <?=$pesquisa['eleitores']?></td>
                <tr>
                    <td class="col">Período: <?=date("d/m/Y", strtotime($pesquisa['periodo']))?> até <?=date("d/m/Y", strtotime($pesquisa['periodo_final']))?></td>
                    </tr>
                    <tr>
                    <td class="col">Nível de confiança: <?=$pesquisa['nivel_confianca']?>%</td>
                    </tr>
                    <tr>
                    <td class="col">Margem de erro: <?=$pesquisa['margem_erro']?>%</td>
                    </tr>
                    <tr>
                    <td class="col">Total de participantes: <?=$pesquisa['total_participante']?></td>
                    </tr>
                    <tr>
                    <td class="col">Perguntas: <?=$pesquisa['perguntas']?></td>
                    </tr>
            </table>
                            </div>
                          </div>
                          
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-primary btn-block" onclick="SendMail()" value="SEND"><b>Saiba mais</b></button>
                    </div>
                    <div class="col-md-4">
                    </div>
                  </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <form id="pesquisa" method = "POST">
                      <input type="hidden" id="comando" name="comando" value="salvar">
                      <input type="hidden" id="codigo" name="codigo" value="">
                        <div class="row">
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Descrição</label>
                              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite o a descrição da pesquisa" required="required">
                            </div>
                          </div>
                          
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Cidade</label>
                              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite o seu e-mail" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>População</label>
                              <input type="text" class="form-control" id="populacao" name="populacao" placeholder="Digite o assunto da mensagem" required="required">
                            </div>
                          </div>
                          
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Eleitores</label>
                              <input type="text" class="form-control" id="eleitores" name="eleitores" placeholder="Digite a mensagem" required="required">
                            </div>
                          </div>
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Data Incial</label>
                              <input type="date" class="form-control" id="periodo" name="periodo" placeholder="Digite a mensagem" required="required">
                            </div>
                          </div>
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Data Final</label>
                              <input type="date" class="form-control" id="periodo_final" name="periodo_final" placeholder="Digite a mensagem" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Nivel de Confiança</label>
                              <input type="text" class="form-control" id="nivelConfianca" name="nivelConfianca" placeholder="Digite o assunto da mensagem" required="required">
                            </div>
                          </div>
                          
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Margem de erro</label>
                              <input type="text" class="form-control" id="margemErro" name="margemErro" placeholder="Digite a mensagem" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Total de participantes</label>
                              <input type="text" class="form-control" id="totalParticipante" name="totalParticipante" placeholder="Digite o assunto da mensagem" required="required">
                            </div>
                          </div>
                          
                          <div class="col-md-5 pr-1">
                            <div class="form-group">
                              <label>Introdução</label>
                              <input type="text" class="form-control" id="introducao" name="introducao" placeholder="Digite a mensagem" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-10 pr-1">
                            <div class="form-group">
                              <label>Perguntas</label>
                              <input type="text" class="form-control" id="perguntas" name="perguntas" placeholder="Digite a mensagem" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-4">
                            <button class="btn btn-primary btn-block" id="salvar" type = "submit" name="salvar">Cadastrar pesquisa
                            </button>
                          </div>
                          <div class="col-md-4">
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="./index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="./sobre.html">
                  Sobre nós
                </a>
              </li>
              <li>
                <a href="./contato.html">
                  Contato
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, <a href="https://www.maxxmobi.com.br" target="_blank">Maxxmobi</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
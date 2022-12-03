<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha3844-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Hospital Goiás</title>
    <link rel="shortcut icon" href="../imagens/logo_tittle.png">

  <style>
    .texto{
      margin-top: 30px;
      margin-bottom: 30px;
      margin-left: 40px;
      margin-right: 40px;
      text-align: justify;
      font-family: Arial, Helvetica, sans-serif;    
    }
  </style>
  </head>
  <body>
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #a3bbd9;">
        <div class="container">
          
          <a href="#" class="navbar-brand">
            <img src="../imagens/hospital_logo__2_-removebg-preview (1).png" height="85px">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="../index.php" class="nav-link text-light">Home</a>
              </li>
              <li class="nav-item">
                <a href="quem_somos.php" class="nav-link text-light">O Hospital</a>
              </li>
              <li class="nav-item">
                <a href="servicos.php" class="nav-link text-light">Nossos serviços</a>
              </li>
              <li class="nav-item">
                <a href="convenios.php" class="nav-link text-light">Convenios</a>
              </li>
              <li class="nav-item">
                <a href="politica_de_privacidade.php" class="nav-link text-light">Politica de privacidade</a>
              </li>
              <li class="nav-item">
                <a href="contato.php" class="nav-link text-light">Contato</a>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#myModal"><!-- Link que abre a janela modal -->
 
                <span class="btn btn-outline-light ml-4" aria-hidden="true"> Entrar </span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    </header><!--/fim Cabecalho -->

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header"><!-- Header do modal -->
                  <h4 class="modal-title">Login</h4><!-- Título -->
              </div>
              <div class="modal-body"><!-- Corpo do modal -->
              <form method="post" action="../controller/V_login.php">
                <div class="principal">
                  <input type="text" name="usuario" required="" autocomplete="off">
                  <label>Login</label>
                </div>
                <div class="principal">
                  <input type="password" name="senha" required="" autocomplete="off">
                  <label>Senha</label>
                </div>

                <?php
                if(isset($_SESSION["nao_autenticado"])):
                ?>
                
                <div class="noti">
                  <p> ERRO: Usuário ou senha inválido. </p>
                </div>

                <?php
                endif;
                ?>
                <div>
                  <button type="submit" class="btn-personalizado">Entrar</button>
                </div>
              </form>
              </div>
              
              <div class="modal-footer"><!-- Footer do Modal -->
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                      Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                  </button>                
              </div>
          </div>
      </div>
  </div>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script><!-- Chama a biblioteca JQuery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!-- Chama o arquivo Bootstrap JavaScript -->
          
    <div class="texto">
				
      <h1>Nossos contatos</h1>
      
      <h3>Desenvolvedores</h3>
      <br>

      <p>
      <img src="../imagens/shayra.jpg" width="15%">
        Shayra Kelly Eleoterio Silva.
        shayra.eleoterio@estudante.ifgoiano.edu.br
      </p>
       <br>
      <p>
      <img src="../imagens/gessika.jpg" width="15%">
        Gessika Julia Silva Alves de Carvalho.
        gessika.julia@estudante.ifgoiano.edu.br
      </p>
      <br>
      <p>
      <img src="../imagens/igor.jpg" width="15%">
        Igor Guerra Pereira.
        igor.guerra@estudante.ifgoiano.edu.br
      </p>
      <br>
      <p>
      <img src="../imagens/hiago.jpg" width="15%">
        Hiago Carlos Cruvinel Silva.
        hiago.cruvinel@estudante.ifgoiano.edu.br
      </p>
      <br>                                  
      <p>
      <img src="../imagens/ana.jpg" width="15%">
        Ana Luiza Lopes.
        ana.lopes@estudante.ifgoiano.edu.br
      </p>
      <br>
      <p>
      <img src="../imagens/luiz.jpg" width="15%">
        Luiz Guilherme Brigo Leigo.
        luiz.guilherme@estudante.ifgoiano.edu.br
      </p>
      <br>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
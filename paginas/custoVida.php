<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Custo de vida</title>

    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/materialize.min.js"></script>

</head>
<body>
  <div>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="../index.php">Início</a></li>
        <li><a href="./noticias.php">Notícias publicadas</a></li>
        <li><a href="./historia.php">História</a></li>
        <li><a href="./custoVida.php">Custo de vida</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"> <img src="../img/ying.svg" alt=""></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <img class="icon" src="../icon/bar.svg" alt="barra">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../index.php">Início</a></li>
                <li><a href="./noticias.php">Notícias publicadas</a></li>
                <li><a href="./historia.php">História</a></li>   
                <li><a href="./custoVida.php">Custo de vida</a></li> 
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="../index.php">Início</a></li>
        <li><a href="./noticias.php">Notícias publicadas</a></li>
        <li><a href="./historia.php">História</a></li>
        <li><a href="./custoVida.php">Custo de vida</a></li>
    </ul>
    <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>  
  </div>
  <?php
    include_once '../phpQuery/phpQuery/phpQuery.php';
    
    $dominio = "http://www.custodevida.com.br/al/maceio";

    phpQuery::newDocumentFileHTML($dominio);
    
    $conteudo = pq('table');
    $localidade = "Maceió - AL";
    echo "<div><h1>".$localidade."</h1></div><br>";

    echo '<div class="conteudo">'.$conteudo. '</div>';
  

  ?>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                <h5 class="white-text">Informações do desenvolvedor</h5>
                <p class="grey-text text-lighten-4">Este site foi desenvolvido por Celso Leandro Nascimento Vasconcelos. Todas as informações aqui contidas são totalmente véridicas.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes sociais do desenvolvedor</h5>
                <ul>
                    <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/celsolnv">
                        <img class="icon" src="../icon/facebook.svg" alt="facebook">
                        <span style="font-size:24px;">Facebook</span>
                    </a></li>
                    <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.instagram.com/celsolv/">
                        <img class="icon" src="../icon/instagram.svg" alt="instagram">
                        <span style="font-size:24px;">Instagram</span>
                    </a></li>
                    <li><a target="_blank" class="grey-text text-lighten-3" href="https://www.linkedin.com/in/celso-vasconcelos-b3a793143/">
                        <img class="icon" src="../icon/linkedin.svg" alt="linkedin">
                        <span style="font-size:24px;">Linkedin</span>
                    </a></li>
                    <li><a target="_blank" class="grey-text text-lighten-3" href="https://github.com/celsops">
                        <img class="icon" src="../icon/github.svg" alt="github">
                        <span style="font-size:24px;">Github</span>
                    </a></li>
                </ul>
                </div>
            </div>
        </div>
</footer>
</body>
</html>
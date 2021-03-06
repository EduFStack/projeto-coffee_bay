
<!doctype html>
<html lang="pt-br">

<head>
  <title>Home - Coffee Bay</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/palette.css">
</head>

<body>

  <?php 
        require_once('modal-login.php'); 
        // require_once('modal-membro.php');
        // require_once('modal-acesso.php');
        // require_once('classes/CadastrarMembro.php');
        // require_once('classes/SessionMembro.php');
        // require_once('functions.php');
  ?>
  
   <header class="container-fluid px-0 mx-0"> 
    <nav class="px-0 mx-0 navbar navbar-expand-lg color-nav-bar navbar-dark row justify-content-around pt-0 m-0">
      <a class="navbar-brand col-auto m-0 p-0" href="index.php">
        <img class="header-logo" src="img/logo/Coffee-logo-white.png" alt="logo-cafe bay">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="color-nav-span navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse row col-lg-8 justify-content-center justify-content-lg-end " id="navbarNav">
        <button type="button" class="btn btn-outline-light col-lg-auto col-11" data-toggle="modal"
          data-target="#modal-login">
          <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
            <img class="header-icon col-lg-auto pl-0" src="img/Icons/user.svg">
            <?php echo isset($logado) ? '<h2 class="header-text col-lg-auto col-10 pl-0 mb-0"> BEM VINDO </h2>' : '<h2 class="header-text col-lg-auto col-10 pl-0 mb-0"> ACESSE OU CRIE SUA CONTA </h2>'; ?>
          </div>
        </button>
        <div class="col-lg-auto col-12 py-1"></div>
        <button type="button" class="btn btn-outline-light col-lg-auto col-11">
          <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
            <img class="header-icon col-lg-auto col-auto pl-0" src="img/Icons/shopping-cart.svg">
            <h2 class="header-text col-lg-auto col-auto col-10 pl-0 mb-0">SEU CARRINHO</h2>
          </div>
        </button>
      </div>
    </nav>
  </header>
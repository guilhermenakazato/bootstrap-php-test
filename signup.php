<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/cadastro.css">
  </head>
  <body>
      <nav class="row">
        <div class="row">
          <a href="main.php">
            <img src="./assets/images/php.png" alt="PHP logo">
          </a>
          <div class="row text-links">
            <a target="_blank" href="pixel.php">Home</a>
            <a target="_blank" href="pixel.php">What's Php?</a>
            <a target="_blank" href="pixel.php">Documentation</a>
            <a target="_blank" href="pixel.php">Help</a>
            <a target="_blank" href="pixel.php">Get Inoved</a>
            <a target="_blank" href="pixel.php">Get Inovd</a>
          </div>
        </div>
        <div class="row button-links">
          <a class="nav-button" href="login.php">Community</a>
          <a class="nav-button" target="_blank" href="pixel.php">Download</a>
        </div>
      </nav>

      <main class="column">
        <div class="column" id="form">
          <h2>Registrar-se</h2>
          <form>
            <div class="input-container">
              <input type="text" name="user" id="user" placeholder="Gimplherme">
              <label for="user">Seu usuário</label>
            </div>
            <div class="input-container">
              <input type="email" name="email" id="email" placeholder="enteryouremail@gmail.com">
              <label for="email">E-mail</label>
            </div>
            <div class="input-container">
              <input type="email" name="repeat-email" id="repeat-email" placeholder="enteryouremail@gmail.com">
              <label for="repeat-email">Repetir e-mail</label>
            </div>
            <div class="input-container">
              <input type="password" name="password" id="password" placeholder="*****">
              <label for="password">Senha</label>
            </div>
            <div class="input-container">
              <input type="password" name="repeat-password" id="repeat-password" placeholder="*****">
              <label for="repeat-password">Repetir senha</label>
            </div>
          </form>
          <a href="signup.php">Continuar</a>
        </div>
      </main>
  </body>
</html>
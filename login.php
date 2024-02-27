<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/login.css">
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
        <h2>Login</h2>
        <form>
          <div class="input-container">
            <input type="email" name="email" id="email" placeholder="enteryouremail@gmail.com">
            <label for="email">E-mail</label>
          </div>
          <div class="input-container">
            <input type="password" name="password" id="password" placeholder="enter your password">
            <label for="password">Password</label>
            <img src="./assets/images/login/toggle-visibility-icon.png" alt="toggle visibility icon" onclick="toggleVisibility()">
          </div>
          <div class="row">
            <label class="row">
              <input type="checkbox" name="" id="lembrar" name="lembrar">
              Lembrar meu login
            </label>
            <a id="recover" href="pixel.php" target="_blank">Recuperar conta</a>
          </div>
        </form>
        
        <a href="community.php">Entrar</a>
        <hr/>
        <p>Ainda não tem uma conta?</p>
        <a href="signup.php">Criar conta</a>
      </div>
    </main>
    <script src="./scripts/main.js"></script>
  </body>
</html>
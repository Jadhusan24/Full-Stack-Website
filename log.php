<?php
require('php/login.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="css/log.css">
  <link rel="icon" href="login.png" />

</head>

<body style="background: #0879c9">
  <div class="body body-s">
    <form method="POST" class="sky-form">
      <header>Login to Cyber Store</header>
      <fieldset>
        <section>
          <div class="row">
            <P><?php echo login(); ?></P>
            <label class="label col col-4">E-mail</label>
            <div class="col col-8">
              <label class="input">
                <input type="email" name="mail">
              </label>
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <label class="label col col-4">Password</label>
            <div class="col col-8">
              <label class="input">
                <input type="password" name="pwd">
              </label>
              <div class="note"><a href="#">Forgot password?</a></div>
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <div class="col col-4"></div>
            <div class="col col-8">
              <label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Keep me logged
                in</label>
            </div>
          </div>
        </section>
      </fieldset>
      <footer>
        <button type="submit" name="btn-login" class="button">Log in</button>
        <a href="sign.php" class="button button-secondary">Not a member ?</a>
      </footer>
    </form>

  </div>
</body>

</html>
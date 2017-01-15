<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.css">
    <link rel="stylesheet" href="assets/materialize/css/login_style.css">]
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
  </head>
  <body>
    <div class="login">
      <div class="header">
        <div class="judul">
          LOGIN PAGE
        </div>
      </div>
      <form class="form" action="verifylogin" method="post">
        <div class="row">
          <div class="input-field col s12">
            <input value="" id="email" type="email" class="validate" name="email">
            <label id="lbl" class="active" for="email">Email : </label>
          </div>
          <div class="input-field col s12">
            <input value="" id="password" type="password" class="validate" name="password">
            <label id="lbl" class="active" for="pass">Password : </label>
          </div>
          <div class="input-field col s6">
            <input type="submit" class="btn waves-effect green darken-3" value="LOGIN">
          </div>
          <div id="button" style="float: right; margin-top: 20px; margin-right: 10px; font-size: 15px;">
          <?php echo anchor('user/tambah', 'Create Account?'); ?>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

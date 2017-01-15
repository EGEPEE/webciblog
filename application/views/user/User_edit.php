<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EDIT DATA</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/post_tambah.css';?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets\materialize\js\materialize.min.js';?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        EDIT ACCOUNT
      </div>
      <div class="content">
        <div class="isi">
          <?php foreach ($user as $u) { ?>
          <form class="form" action="<?php echo base_url().'user/update'; ?>" method="post">
            <div class="row">
              <div class="input-field col s11">
                <input value="<?php echo $u->nama ?>" type="text" class="validate" name="nama">
                <label id="lbl" class="active">Name : </label>
              </div>
              <div class="input-field col s11">
                <input value="<?php echo $u->email ?>" type="email" class="validate" name="email">
                <label id="lbl" class="active">Email : </label>
              </div>
              <div class="input-field col s11">
                <input value="<?php echo $u->password ?>" type="password" class="validate" name="email">
                <label id="lbl" class="active">Password : </label>
              </div>
              <div class="input-field col s11">
                <input value="<?php echo $u->id_user ?>" type="hidden" class="validate" name="id">
              </div>
              <div class="input-field col s6">
                <input type="submit" class="btn waves-effect  orange lighten-1" value="UPDATE">
              </div>
            </div>
          </form>
          <?php } ?>
        </div>
      </div>
    </div>
  </body>
</html>

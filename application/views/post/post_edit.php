<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADD YOUR ARTICLE</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/post_tambah.css';?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets\materialize\js\materialize.min.js';?>">
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize')</script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        EDIT DATA
      </div>
      <div class="content">
        <div class="isi">
          <?php foreach ($post as $p) {?>
          <form class="form" action="<?php echo base_url().'post/update';?>" method="post">
            <div class="row">
              <div class="input-field col s11">
                <input value="<?php echo $p->judul ?>" type="text" class="validate" name="judul">
                <label id="lbl" class="active">Title : </label>
              </div>
              <div class="input-field col s11">
                <input value="<?php echo $p->konten ?>" type="text" class="validate" name="konten">
                <label id="lbl" class="active">Content : </label>
              </div>
              <div class="input-field col s11">
                <input value="<?php echo $p->tgl_post ?>" type="date" class="validate" name="tgl_post">
                <label id="lbl" class="active">Date : </label>
              </div>
              <div class="input-field col s11">
                <input value="<?php echo $p->id_post ?>" type="hidden" class="validate" name="id">
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
    </div>
  </body>
</html>

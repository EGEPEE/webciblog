<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADD YOUR ARTICLE</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/post_tambah.css'?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js');?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        ARTICLE
      </div>
      <div class="content">
        <div class="isi">
          <form class="form" action="<?php echo base_url().'post/tambah_aksi';?>" method="post">
            <div class="row">
              <div class="input-field col s11">
                <input value="" type="text" class="validate" name="judul">
                <label class="active">Title : </label>
              </div>
              <div class="input-field col s11">
                <input value="" type="text" class="validate" name="konten">
                <label class="active">Content : </label>
              </div>
              <div class="input-field col s11">
                <input value="" type="date" class="datepicker" name="tgl_post">
                <label class="active">Date : </label>
              </div>
              <div class="input-field col s11">
                <input type="submit" class="btn waves-effect  orange lighten-1" value="ADD ARTICLE" style="float:right">
                <div class="btn waves-effect  orange lighten-1">
                  <?php echo anchor('post', 'CANCEL'); ?>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
  </body>
</html>

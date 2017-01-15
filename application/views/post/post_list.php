<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ARTICLE COLLECTION</title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.css">
    <link rel="stylesheet" href="assets/materialize/css/post_style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div id="btn">
          <div class="waves-effect pink lighten-5 btn">
          <?php echo anchor('post/tambah', 'ADD NEW ARTICLE'); ?>
          </div>
          <h4 style="float: right;">ARTICLE COLLECTION</h4>
        </div>
      </div>
      <div class="isi">
        <table id="table" class="centered striped">
          <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($post as $p) { ?>
            <tr>
              <td><?php echo $p->id_post ?></td>
              <td><?php echo $p->judul ?></td>
              <td><?php echo $p->tgl_post ?></td>
              <td><?php echo anchor('post/edit/'.$p->id_post, 'Edit'); ?></td>
              <td><?php echo anchor('post/hapus/'.$p->id_post, 'Delete'); ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="footer">
        <div id="btn2" style="padding-top:1%;">
          <div class="waves-effect  pink lighten-4 btn">
            <?php echo anchor('home', 'BACK'); ?>
          </div>
        </div>
      </div>
  </div>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/home_style.css'?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js');?>"></script>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"><i class="material-icons">person_pin</i>POSTKU!</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="post">Daftar Posting</a></li>
            <li><a href="email">Email</a></li>
            <li><a href="home/logout">Logout</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="post" class="btn waves-effect  orange lighten-1">Daftar Posting</a></li>
            <li><a href="email" class="btn waves-effect  orange lighten-1">Email</a></li>
            <li><a href="home/logout" class="btn waves-effect  orange lighten-1">Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="isi">
        Selamat datang dalam POST-KU! Kamu bisa mengisi artikel sesuai dengan mood kamu hari ini!!
      </div>
      <div class="footer">
        COPYRIGHT
      </div>
    </div>
    <script type="text/javascript">
       $(".button-collapse").sideNav();
    </script>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EMAIL</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/email_style.css'?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js');?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <p>Send An Email</p>
      </div>
      <div class="content">
        <div class="isi">
          <form class="form" action="<?php echo base_url().'email/send_email';?>" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input value="<?php echo $this->session->userdata['logged_in']['nama']; ?>" type="text" for="disabled" class="validate" name="p_name">
                <label class="active" for="disabled">Name : </label>
              </div>
              <div class="input-field col s6">
                <input value="<?php echo $this->session->userdata['logged_in']['email']; ?>" type="text" id="disabled" class="validate" name="p_from">
                <label class="active" for="disabled">From : </label>
              </div>
              <div class="input-field col s11">
                <input value="" type="email" class="validate" name="p_to">
                <label class="active">To : </label>
              </div>
              <div class="input-field col s11">
                <input value="" type="text" class="validate" name="p_subject">
                <label class="active">Subject : </label>
              </div>
              <div class="input-field col s11">
                <input value="" type="text" class="validate" name="p_message">
                <label class="active">Message : </label>
              </div>
              <div class="input-field col s11">
                <input type="submit" class="btn waves-effect  brown darken-1" value="SEND MESSAGE" style="float:right">
                <div class="btn waves-effect  brown darken-1">
                  <?php echo anchor('home', 'CANCEL'); ?>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
    </div>
  </body>
</html>

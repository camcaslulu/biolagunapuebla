<?php if($this->session->userdata('idUsuario')=='LSBCAdm'){?>
<body>
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Administrador</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-5">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>"  class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d"><?php echo $this->session->userdata('nombre')?>
                      <br> <?php echo $this->session->userdata('apellidoM'); echo " ";
                      echo $this->session->userdata('apellidoP');?></h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a text-justify">
                    Bienvenido, podrás gestionar los datos del parque Laguna de San Baltazar Campeche.
                    Selecciona en el menú el módulo que quieras modificar.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Teléfono: </strong>
                      <span class="color-text-a"><?php echo $this->session->userdata('telefono')?> </span>
                    </p>
                    <p>
                      <strong>Correo: </strong>
                      <span class="color-text-a"> <?php echo $this->session->userdata('correo')?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<?php }
else
  redirect('/Welcome/login/', 'location');
?>
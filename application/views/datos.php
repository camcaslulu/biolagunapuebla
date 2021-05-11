    <?php 
      foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
</head>
<?php if($this->session->userdata('idUsuario')=='LSBCAdm'){?>
<body>
		<!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?php echo base_url();?>">BIO<span class="color-b">LAGUNA</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/administrador">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/parque_adm">Parque</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/especie_adm">Especie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/flora_adm">Flora</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/fauna_adm">Fauna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/foro_adm">Foro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/cerrar_sesion"><span class="fa fa-sign-out" aria-hidden="true"> Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--/ Nav End /-->
  <div style='height:150px;'></div> 
  <div class="container">
    <div class="row">
        <div class="title-box-d">
          <h3 class="title-d">Gestionar <?php echo $title?></h3>
        </div>
      </div>
  </div> 
  <div style="padding: 10px">
		<?php echo $output; ?>
  </div>
  <?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
  <?php endforeach; ?>
  <div style='height:100px;'></div> 
</body>
  <!--/ footer Star /-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Biolaguna</span> Todos los derechos reservados.
            </p>
          </div>
          <div class="credits">
            <!--
            El diseño de la interfaz de esta aplicación web está basada en: 
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            -->
            <a href="<?php echo base_url();?>index.php/Welcome/avisoPrivacidad"">Aviso de privacidad</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <script src="<?php echo base_url('assets/plugins/bootstrap/js/main.js'); ?>"></script>
</html>
<?php }
else
  redirect('/Welcome/login/', 'location');
?>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?php echo base_url();?>">BIO<span class="color-b">LAGUNA</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Especies
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/flora">Flora</a>
              <a class="dropdown-item" href="<?php echo base_url();?>Welcome/fauna">Fauna</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/foro">Foro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Welcome/login" > <span class="fa fa-sign-in" aria-hidden="true"> Administrador</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->
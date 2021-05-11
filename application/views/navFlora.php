  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">BUSCAR</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="<?php echo base_url();?>Welcome/buscar_flora" method="POST">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Nombre científico</label>
              <input type="text" class="form-control form-control-lg form-control-a" id="nomCien" name="nomCien" placeholder="Nombre científico">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Nombre común</label>
              <input type="text" class="form-control form-control-lg form-control-a" id="nomCom" name="nomCom" placeholder="Nombre común">
            </div>
          </div>
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Clase</label>
              <input type="text" class="form-control form-control-lg form-control-a" id="clase" name="clase" placeholder="Clase">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="orden">Ordenar</label>
              <select class="form-control form-control-lg form-control-a" id="orden" name="orden">
                <option value="1">A-Z</option>
                <option value="2">Z-A</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Buscar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
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
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
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
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->
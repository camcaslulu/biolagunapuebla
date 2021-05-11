
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Iniciar sesión</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo base_url();?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="property-grid.html">Administrador</a>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/Login Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row"> 
            <div class="col-md-6">
              <div class="form-login">
                <div class="title-box-d">
                <h3 class="title-d"> Introduzca sus datos</h3>
              </div>
              <p style="color: red;"><?php echo $error?></p>
              <form class="form-a" action="<?php echo base_url();?>Welcome/validaLogin" method="POST">
                <div class="row">
                  <div class="col-md-8 mb-3">
                    <div class="form-group">
                      <label for="inputlogin">Nombre*</label>
                      <input type="text" class="form-control form-control-lg form-control-a" id="login" name="login" placeholder="Ejemplo: María" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-3">
                      <div class="form-group">
                        <label for="inputpwd">Contraseña*</label>
                        <input type="password" class="form-control form-control-lg form-control-a" id="pwd" name="pwd" placeholder="Ejemplo: 123" required>
                      </div>
                    </div> 
                    <div class="g-recaptcha col-md-12 mb-5" data-sitekey="6Lcx7TAUAAAAAM1H0WPSPbNzYdh4hDABZA9b-dTH"></div>              
                    <div class="col-md-12 mb-5">
                      <button type="submit" class="btn btn-a">Acceder</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6 mt-5">
              <div class="agent-avatar-box">
                <img src="<?php echo base_url('assets/images/login.jpg'); ?>" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Login End /-->
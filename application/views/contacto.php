<body>
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contactanos</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo base_url();?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contacto
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
      <?php 
      foreach($parque->result() as $fila){
      ?>
        <div class="col-md-5 section-md-t3">
          <div class="icon-box section-b2">
            <div class="icon-box-icon">
              <span class="ion-ios-paper-plane"></span>
            </div>
            <div class="icon-box-content table-cell">
              <div class="icon-box-title">
                <h3 class="icon-title">Nuestros contactos</h3>
              </div>
              <div class="icon-box-content">
                <p class="mb-1">Correo electrónico.
                  <span class="color-a"><?php echo $fila->correo?></span>
                </p>
                <p class="mb-1">Teléfono.
                  <span class="color-a"><?php echo $fila->telefono?></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="col-sm-12 mb-5">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.2987879370357!2d-98.21367463581636!3d19.00655118712783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0a8161a836f%3A0x38cff9a5ebc5c1af!2sLaguna%20de%20San%20Baltazar!5e0!3m2!1ses-419!2smx!4v1597634642713!5m2!1ses-419!2smx"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              <div class="title-box-d">
                <h3 class="title-d">Envianos un mensaje</h3>
              </div>
              <form class="form-a" action="<?php echo base_url();?>Welcome/correo" method="POST">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label><strong>Nombre</strong></label>
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Tu nombre" data-rule="minlen:4" required>
                      
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label><strong>Correo electrónico</strong></label>
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Tu correo electrónico" data-rule="email" required>
                      
                    </div>
                  </div>
                  <br />
                  <br />
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <label><strong>Asunto</strong></label>
                      <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Asunto a tratar" data-rule="minlen:4" required >
                      
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                     <label><strong>Mensaje</strong></label>
                      <textarea name="message" class="form-control" cols="45" rows="8" data-rule="required" placeholder="Tu mensaje" required></textarea>
                      
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Enviar mensaje</button>
                  </div>
                </div>
              </form>
            </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->
</body>
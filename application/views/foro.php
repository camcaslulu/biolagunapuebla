 <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">FORO</h1>
            <span class="color-text-a" style="color:#2eca6a;">Los comentarios con contenido inapropiado o que no sean referentes al parque serán eliminados.</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo base_url();?>">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Foro
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <section class="news-single nav-arrow-b">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
        <div class="form-comments mb-5">
            <div class="title-box-d">
              <h3 class="title-d">Hacer un comentario</h3>
            </div>
            <form class="form-a" action="<?php echo base_url();?>Welcome/insertarComentario" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input type="text" class="form-control form-control-lg form-control-a" id="nom_usu" name="nom_usu" placeholder="Nombre (máximo 20 carácteres)" maxlength="20">
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="inputImagen">Imagen</label>
                    <input type="file" class="form-control form-control-lg form-control-a" id="img" name="img" placeholder="Nombre" accept="image/*">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <label for="textMessage">Comentario*</label>
                    <textarea id="comentario" class="form-control" placeholder="Escribe aquí (máximo 250 carácteres)" name="comentario" cols="45" rows="3" maxlength="250" required></textarea>
                  </div>
                </div>
                <div class="col-md-12 mb-5">
                  <button type="submit" class="btn btn-a">Aceptar</button>
                </div>
              </div>
            </form>
          </div>
        <div class="title-box-d mt-5">
            <h3 class="title-d">Comentarios</h3>
        </div>
        <?php
          foreach ($comentario->result() as $fila) {
        ?>
        <div class="box-comments">
          <ul class="list-comments">
            <li>
              <div class="row">
                <div class="col-sm-12 col-md-8">
                  <div class="testimonials-content">
                    <p class="testimonial-text text-justify">
                      <?php echo $fila->descripcion; ?>
                      <span><?php echo $fila->fecha; ?></span>
                    </p>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="<?php echo base_url('assets/images/icono_persona.png'); ?>" alt="" class="testimonial-avatar">
                    <h5 class="testimonial-author"><?php echo $fila->nombre_usuario; ?></h5>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="testimonial-img">
                    <img src="<?php echo base_url('assets/uploads/files/'.$fila->img); ?>" alt="" class="img-fluid"  height="10">
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
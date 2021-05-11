<body>
<?php 
  foreach($parque->result() as $fila){
 ?>
  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" 
      style="background-image: url(<?php echo base_url('assets/uploads/files/'.$fila->pimg1); ?>)"
      >
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><?php echo $fila->direccion; ?></p>
                    <h1 class="intro-title mb-4"><?php echo $fila->nombre; ?></h1>
                    <p class="intro-subtitle intro-price">
                      <a><span class="price-a"><?php echo $fila->horario; ?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo base_url('assets/uploads/files/'.$fila->pimg2); ?>)">

      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo base_url('assets/uploads/files/'.$fila->pimg3); ?>)">
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->
  <!--/ Services Star /-->
  <section class=" section-t8 mb-5">
    <div class="container">
      <div class="title-box-d">
        <h3 class="title-d">Más información</h3>
      </div>
      <div class="col-md-12">
          <ul class="nav nav-pills-a nav-pills mb-4 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pills-video" role="tab" aria-selected="true"><h2 class="title-d">Descripción</h2></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-plans" role="tab" 
                aria-selected="false"><h2 class="title-d">Reglamento</h2></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-map" role="tab" 
                aria-selected="false"><h2 class="title-d">Costo</h2></a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <p class="content-c text-justify">
              <?php echo $fila->descripcion; ?>
              </p>
            </div>
            <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <p class="content-c text-justify">
              <?php echo $fila->reglamento; ?>
              </p>
            </div>
            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
             <p class="content-c text-justify">
              <?php echo $fila->costo; ?>
              </p>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!--/ Services End /-->
<?php } ?>
</body>
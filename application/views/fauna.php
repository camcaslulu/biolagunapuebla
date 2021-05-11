
  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">FAUNA</h1>
            <span class="color-text-a" style="color:#2eca6a;"><?php echo $comentario?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo base_url();?>">Inicio</a>
              </li>
              <li class="breadcrumb-item">
                <a>Especie</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Fauna
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <?php
    if(empty($fauna)){
  ?>
      <section style="padding: 100px">
        <div class="container" >
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <h3>NO HAY REGISTROS</h3>
            </div>
        </div>
      </section>
  <?php
    }else{
      foreach($fauna->result() as $fila){
  ?>

  <!--/ Property Single Star /-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 mb-5">
          <div class="property-summary">
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d"><?php echo $fila->nombreComun; ?></h3>
                </div>
              </div>
            </div>
            <div class="summary-list">
              <div class="info-agents color-a">
                    <p>
                      <strong>Nombre científico: </strong>
                      <span class="color-text-a"><?php echo $fila->nombreCientifico; ?></span>
                    </p>
                    <p>
                      <strong>Clase: </strong>
                      <span class="color-text-a"><?php echo $fila->clase; ?></span>
                    </p>
                    <p>
                      <strong>Alimentación: </strong>
                      <span class="color-text-a"> <?php echo $fila->alimentacion; ?></span>
                    </p>
                    <p>
                      <strong>Dieta: </strong>
                      <span class="color-text-a"><?php echo $fila->dieta; ?></span>
                    </p>
                    <p>
                      <strong>Reproducción: </strong>
                      <span class="color-text-a"><?php echo $fila->reproduccion; ?></span>
                    </p>
                    <p>
                      <strong>Periodo de incubación: </strong>
                      <span class="color-text-a"><?php echo $fila->periodoIncubacion; ?></span>
                    </p>
                    <p>
                      <strong>Tamaño: </strong>
                      <span class="color-text-a"><?php echo $fila->tamaño; ?> <sup> aprox.</sup></span>
                    </p>
                    <p>
                      <strong>Longevidad: </strong>
                      <span class="color-text-a"><?php echo $fila->longevidad; ?> <sup> aprox.</sup></span>
                    </p>
                    <p>
                      <strong>Especie: </strong>
                      <span class="color-text-a"> <?php echo $fila->nombre_especie; ?></span>
                    </p>
                    <p>
                      <strong>Cantidad: </strong>
                      <span class="color-text-a"><?php echo $fila->cantidad; ?> <sup> aprox.</sup></span>
                    </p>
                    <p>
                      <strong>Cuidados: </strong>
                      <span class="color-text-a text-justify"> <?php echo $fila->cuidado; ?></span>
                    </p>
                    
                  </div>
                </div>
              </div>
        </div>
        <div class="property-single nav-arrow-b col-sm-6">
          <div class="property-specie-carousel owl-carousel owl-arrow gallery-property">
            <?php if($fila->img1!=null){?>
              <div class="carousel-item-b">
                <img src="<?php echo base_url('assets/uploads/files/'.$fila->img1); ?>" alt="" height="600">
              </div>
            <?php }if($fila->img2!=null){ ?>
              <div class="carousel-item-b">
                <img src="<?php echo base_url('assets/uploads/files/'.$fila->img2); ?>" alt="" height="600">
              </div>
            <?php }if($fila->img3!=null){ ?>
              <div class="carousel-item-b">
                <img src="<?php echo base_url('assets/uploads/files/'.$fila->img3); ?>" alt="" height="600">
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div> 
  </section>
    
  <?php }} ?> 
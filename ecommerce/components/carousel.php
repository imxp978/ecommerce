<section id="carousel">
    <div class="container">

      <?php
      $SQLstring = "SELECT * FROM carousel WHERE caro_online=1 ORDER BY caro_sort";
      $carousel = $link->query($SQLstring);
      $i = 0;
      function activeShow($num, $chkPoint)
      {
        return (($num == $chkPoint) ? 'active' : '');
      }
      ;
      ?>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <?php for ($i = 1; $i <= $carousel->rowCount(); $i++) { ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>"
              class="active" aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
          <?php } ?>
        </div>
        <div class="carousel-inner">
          <?php $i = 0;
          while ($data = $carousel->fetch()) { ?>
            <div class="carousel-item <?php echo activeShow($i, 0); ?>">
              <img src="images/carousel_images/<?php echo $data['caro_pic']; ?>" class="d-block w-100"
                alt="<?php echo $data['caro_title']; ?>">
              <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $data['caro_title']; ?></h5>
                <p><?php echo $data['caro_content']; ?></p>
              </div>
            </div>
            <?php $i++;
          } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
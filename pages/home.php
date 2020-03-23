<?php global $conn; ?>
<?php global $data; ?>
<?php $data['title'] = 'Mini PHP - Home'; ?>

<!-- Start of Hero Images. -->
<?php ob_start(); ?>
<section>
  <div class="container-lg">
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/static/img/csl-1.jpeg" class="d-block w-100 zh-100" alt="..." style="height: 35rem">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="/static/img/csl-2.jpeg" class="d-block w-100 zh-100" alt="..." style="height: 35rem">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="/static/img/csl-3.jpeg" class="d-block w-100 zh-100" alt="..." style="height: 35rem">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<?php $data['hero_images'] = ob_get_clean(); ?>
<!-- End of Hero Images. -->

<?php ob_start(); ?>
<style>
  .card {
    min-width: 213px;
    max-width: 250px;
  }
</style>
<main class="">
  <div class="container-lg">
    <div class="px-2 py-2 pt-md-4 pb-md-3 mx-auto text-center mb-5">
      <h1 class="display-4 text-secondary">Phones, Laptops, TVs'...</h1>
      <p class="lead">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos sapiente consectetur, voluptatum cupiditate, itaque modi atque nam magnam obcaecati porro ratione laborum rerum laudantium aspernatur voluptas, fugiat nostrum. Vel, illum?
      </p>
    </div>
  </div>
  <!--card start-->
  <?php
  ?>
  <div class="container-lg">
    <div class="row">
      <?php $sql = "SELECT * FROM `products` WHERE 1";
      $result = $conn->query($sql);
      ?>
      <?php while ($record_fields = $result->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="col mb-5">
          <div class="card border-0 mx-auto">
            <img width="200px" height="200px" src="/static/img/<?php echo $record_fields['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-text text-muted">
                <?php echo $record_fields['category'] ?>
              </h6>
              <h4 class="card-text">
                <?php echo $record_fields['name'] ?>
              </h4>
              <small class=" card-text text-muted">
                <?php echo $record_fields['tags'] ?>
              </small>
              <div class="mt-3 d-flex justify-content-between">
                <span class="">GHS <?php echo $record_fields['price'] ?></span>
                <i data-product-id=<?php echo $record_fields['id'] ?> class="btn-add-to-cart icon--sm text-muted fas fa-cart-plus"></i>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile ?>
    </div>
  </div>
  <!--card end-->
</main>

<?php $data['main_content'] = ob_get_clean(); ?>
<?php require '../templates/base.php'; ?>
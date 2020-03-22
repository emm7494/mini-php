<?php global $conn; ?>
<?php global $data; ?>
<?php $data['title'] = 'Mini PHP - Home'; ?>

<!-- Start of Hero Images. -->
<?php ob_start(); ?>
<section>
  <div class="container-lg">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="/static/img/csl-1.jpeg" class="d-block w-100 zh-100" alt="..." style="height: 30rem">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="/static/img/csl-2.jpeg" class="d-block w-100 zh-100" alt="..." style="height: 30rem">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="/static/img/csl-3.jpeg" class="d-block w-100 zh-100" alt="..." style="height: 30rem">
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
    <div class="px-2 py-2 pt-md-4 pb-md-3 mx-auto text-center">
      <h1 class="display-4">Phones, Laptops, TVs'...</h1>
      <p class="lead">
        Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.
      </p>
    </div>
  </div>
  <!--card start-->
  <?php
  ?>
  <div class="container-lg">
    <div class="row">
      <?php foreach ($card_imgs as $card_img) : ?>
        <div class="col mb-5">
          <div class="card border-0 mx-auto">
            <img width="200px" height="200px" src="/static/img/<?= $card_img ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-text text-muted">
                Laptop
              </h6>
              <h4 class="card-text">
                Razer Blade 15 Studio Edition
              </h4>
              <small class=" card-text text-muted">
                #Gaming#Studio
              </small>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <!--card end-->
</main>

<ul>
  <?php $sql = "SELECT * FROM `contact` WHERE 1";
  $result = $conn->query($sql);
  ?>
  <?php while ($record_fields = $result->fetch(PDO::FETCH_ASSOC)) : ?>
    <li>
      <?php foreach ($record_fields as $record_field) : ?>
        <?php print($record_field); ?>123
      <?php endforeach ?>
    </li>abc
  <?php endwhile ?>
</ul>
<?php
$myObj = new stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
<?php $data['main_content'] = ob_get_clean(); ?>
<?php require '../templates/base.php'; ?>
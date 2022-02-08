<?php require '../nonpublic/utils/head.php';?>
<!-- ======= Header ======= -->
<?php require '../nonpublic/sections/header.php';?>

<?php require '../nonpublic/utils/pdo.php';?>
<?php require '../nonpublic/utils/functions.php';?>


<?php
$total = 0;
  if (isset($_SESSION['basket'])) {
    foreach($_SESSION['basket'] as $price) {
      $total += $price[2];
    }

  }


?>


<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          <div>
            <p class="mb-0"><span class="text-muted">Total price: </span> <?=$total?> </p>
          </div>
        </div>


        <?php 
        if (isset($_SESSION['basket'])) {
        foreach($_SESSION['basket'] as $item) {
            // print_r($item); echo '<p>';
            $product=find($pdo, 'items', 'id', $item[0]);
            echo '<div class="card rounded-3 mb-4">';
            echo '<div class="card-body p-4">';
            echo '<div class="row d-flex justify-content-between align-items-center">';
            echo '<div class="col-md-2 col-lg-2 col-xl-2">';
            echo '<img src="/assets/img/cheese.svg"';
            echo 'class="img-fluid rounded-3" alt="Product">';
            echo '</div>';
            echo '<div class="col-md-3 col-lg-3 col-xl-3">';
            echo '<p class="lead fw-normal mb-2">'.$product[0]['name'].'</p>';
            echo '<p><span class="text-muted">'.$product[0]['description'].'</span></p> <p><span class="text-muted">Price: </span>£ '.$product[0]['price'].'</p>';
            echo '</div>';
            echo '<div class="col-md-3 col-lg-3 col-xl-2 d-flex">';
            echo '<button class="btn btn-link px-2" onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()"> <i class="bi bi-dash"></i></button>';
            echo '<input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-cont" >';
            echo '<button class="btn btn-link px-2" onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()"> <i class="bi bi-plus"></i></button>';
            echo '</div>';
            echo '<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">';
            echo '                  <h5 class="mb-0"> '.$product[0]['price'].' </h5>';
            echo '</div>';
            echo '<div class="col-md-1 col-lg-1 col-xl-1 text-end">';
            echo '                  <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
      }
      else echo 'The basket is empty';
        ?>


        

        

        

        

        <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label" for="form1">Discound code</label>
            </div>
            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ======= Contact Section ======= -->
<?php require '../nonpublic/sections/contact_section.php'; ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <?php require '../nonpublic/sections/footer.php'?>
  <!-- End Footer -->
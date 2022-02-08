<?php require '../nonpublic/admin/admin_head.php'?>
<?php require '../nonpublic/utils/pdo.php'?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<?php require '../nonpublic/admin/admin_sidebar.php'?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<?php require '../nonpublic/admin/admin_topbar.php'?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<?php
$isarchived=0;
$stmt = $pdo->prepare('SELECT * FROM sys.items WHERE id = :id');
$values = [
      'id' => $_GET['id']
];

$stmt ->execute($values);
$lot = $stmt->fetch();

?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product: <?=sprintf("%08d", $lot['id'])?></h1>
  <div class="d-flex justify-content-between">
    <h5 class="m-0 font-weight-bold text-primary"><?=$lot['name']?></h5>
    <?php if($isarchived==1) echo '<button class="btn btn-lg btn-primary" type="button" onclick="parent.location=\'personal_page.php?page=archive\'">Back</button>';
          else echo '<button class="btn btn-lg btn-primary" type="button" onclick="parent.location=\'personal_page.php?page=lot\'">Back</button>';
    ?>
  </div>

<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <div class="d-flex justify-content-between">
            <div><?=$lot['name']?></div>
          </div>
        </nav>
      </div>
    </div>

   
    <div class="row">

      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="assets/img/cheese.svg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?=$lot['name']?></h5>
            <p class="text-muted mb-1">Quantity: <?=$lot['stock']?></p>
            <p class="text-muted mb-4">Phillip's Cheese</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" data-toggle="modal" data-target="#assign_picture" class="btn btn-sm btn-outline-primary mr-1 ms-1">Add picture</button></form>
              <button type="button" data-toggle="modal" data-target="#assign_stock" class="btn btn-sm btn-outline-danger mr-1 ms-1">Distribute stock</button></form>

            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$lot['name']?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Description</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$lot['description']?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Price:</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0">£ <?=number_format($lot['price'],2,",",".")?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Category</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$lot['category']?></p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Available stock</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$lot['stock']?></p>
              </div>
            </div>
            <hr>


            

          </div>
        </div>
      </div>

    </div>

    

<!-- Carousel for pictures -->

    <?php
    $stmt3 = $pdo->prepare('SELECT * FROM sys.pictures WHERE item = :id');
    $values3 = [
        'id' => $_GET['id']
        ];
        $stmt3 ->execute($values3);
        echo 'Number of pictures for this item: <b>'.$stmt3->rowCount().'</b>';
    ?>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner" align="center">

        <div class="carousel-item active">
          <img class="d-block w-50" src="assets/img/cheese.svg" alt="First slide">
        </div> 

        <?php 
          foreach($stmt3 as $picture){
            echo '<div class="carousel-item">';
            echo '<a target="_blank" href="lot_pictures/'.$picture['name'].'"><img class="d-block w-50" src="lot_pictures/'.$picture['name'].'" alt="First slide"></a>';
            echo '</div>';
          }
        ?>    

      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div><!-- /End of carousel -->



  </div><!-- /End of container -->




















  
</section>





</div> <!-- /End of Begin Page Content -->
</div> <!-- End of Main Content -->

<!-- Footer -->
<?php require '../nonpublic/admin/admin_footer.php'?>
<!-- End of Footer -->

</div><!-- End of Content Wrapper -->

</div><!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




  







  <!--modal to stock-->
  <div class="modal fade" id="assign_stock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Distribute</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select store and quantity</div>

                <div class="modal-body col-sm-6">


                <form method="POST" action="personal_page.php?page=assign_stock&id=<?=$_GET['id']?>">
                <select name="branch" id="branch">
                        <?php
                        $stmt2 = $pdo->prepare('SELECT * FROM sys.branches');
                        $values = [];
                        $stmt2 ->execute($values);
                        
                        foreach($stmt2 as $branch){
						              echo '<option value="'.$branch['id'].'">'.$branch['name'].'</option>';
					                }
				                ?>
                </select>
                <input type="hidden" class="form-control form-control-user" name="stock" id="stock" value="<?=$_GET['id']?>">
                <input type="text" class="form-control form-control-user" name="quantity" id="quantity" placeholder="quantity">
                </div><!--modal body for pictures-->



                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Transfer"></form>
                </div>
            </div>
        </div>
    </div>  <!--end modal to select picture-->







    

    <!--modal to add picture-->
  <div class="modal fade" id="assign_picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add pictures</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select pictures.</div>
                <div class="modal-body col-sm-6">

                <form method="POST" enctype="multipart/form-data" action="personal_page.php?page=add_lot_picture&id=<?=$_GET['id']?>">
                  <label for="image">Upload an image: </label>
                  <input type="file" name="image" id="image">


                </div> <!--modal body for pictures-->


                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Add picture"></form>
                </div>
            </div>
        </div>
    </div>  <!--end modal to select picture-->









  <!-- Logout Modal-->
    <?php require '../nonpublic/admin/admin_logout_modal.php'?>


    <?php require '../nonpublic/admin/admin_js.php'?>

</body>
</html>
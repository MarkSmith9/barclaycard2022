<?php require '../nonpublic/admin/admin_head.php'?>
<?php require '../nonpublic/utils/pdo.php';?>
<?php require '../nonpublic/utils/functions.php';?>


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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">ADD NEW ITEM</h1>
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0 font-weight-bold text-primary"></h5>
                        <button class="btn btn-lg btn-primary" type="button"
                            onclick="parent.location='personal_page.php?page=lot'">Back</button>
                    </div>


                    <?php 
try {
  if(isset($_POST['submit'])) {

    if($_POST['name'] !='' && $_POST['price'] !='' && $_POST['description'] !='' && $_POST['stock'] !='' && $_POST['category'] !=''){
          $stmt = $pdo->prepare('INSERT INTO sys.items (name, price, description, stock, category)
                      VALUES(:name, :price, :description, :stock, :category)');
          
          $values = [
                'name' => $_POST['name'],
                'stock' =>$_POST['stock'],
                'price' => $_POST['price'],
                'category' => $_POST['category'],
                'description' => $_POST['description']                
          ];
    
          $stmt->execute($values);

          echo '<script type="text/JavaScript">window.location.replace("personal_page.php?page=lot")</script>';
        } else {
            $welcome_message= 'You need to enter all values';
        require '../nonpublic/admin/admin_add_lot_form.php';
        }
    }

    else {
    $welcome_message= 'ADD NEW ITEM';
    require '../nonpublic/admin/admin_add_lot_form.php';
    }

}

catch (Exception $e) {
    echo $e;
  unset($_POST['email']);
  $welcome_message= 'INVALID PRICE ENTRY';
  require '../nonpublic/admin/admin_add_lot_form.php';
}
      
?>

                </div>
                <!-- /End of Begin Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require '../nonpublic/admin/admin_footer.php'?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php require '../nonpublic/admin/admin_logout_modal.php'?>
    <?php require '../nonpublic/admin/admin_js.php'?>

</body>

</html>
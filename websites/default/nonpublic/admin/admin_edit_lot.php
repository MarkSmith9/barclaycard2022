<?php require '../nonpublic/admin/admin_head.php'?>
<?php require '../nonpublic/utils/pdo.php';?>


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
                    <h1 class="h3 mb-2 text-gray-800">Edit item</h1>
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0 font-weight-bold text-primary"></h5>
                        <button class="btn btn-lg btn-primary" type="button" onclick="parent.location='personal_page.php?page=lot'">Back</button>
                    </div>
                    

<?php 
      if(isset($_POST['submit'])) {
            $stmt = $pdo->prepare('UPDATE sys.items 
                                          SET name = :name,
                                            artist = :artist,
                                            year = :year,
                                            price = :price,
                                            classification = :classification,
                                            description = :description
                                        WHERE id = :id');


            $values = [
                'name' => $_POST['name'],
                'artist' =>$_POST['artist'],
                'year' => $_POST['year'],
                'price' => $_POST['price'],
                'classification' => $_POST['classification'],
                'description' => $_POST['description'],
                'id' => $_POST['id']
            ];
            

            $stmt->execute($values);
            echo '<script type="text/JavaScript">window.location.replace("personal_page.php?page=lot")</script>';

      }
            else 
            $welcome_message= 'Edit item';
            require '../nonpublic/admin/admin_edit_lot_form.php';
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
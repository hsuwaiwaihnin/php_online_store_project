<?php 
include 'include/header.php';
include 'dbconnect.php';
 ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 text-center">Subcategory Create</h1>
          <div class="row">
            <div class="offset-md-2 col-md-8">
              <form method="POST" action="addSubcategory.php" enctype="multipart/form-data" >
                <div class="form-group">
                  <label>Subcategory Name</label>
                  <input type="text" name="sub_name" class="form-control">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select name="item_brand" class="form-control">
                    <option>Choose Category...</option>
                    <?php
                      $sql="SELECT * FROM categories";
                      $stmt=$pdo->prepare($sql);
                      $stmt->execute();
                      $categories=$stmt->fetchAll();
                      //var_dump($brands);
                      //die();
                      foreach ($categories as $category) {
                        
                    ?>
                    <option value="<?=$category['id']?>"><?= $category['name']?></option>
                    <?php 
                      }
                     ?>
                    
                  </select>
                  <!-- <input type="text" name="item_brand" class="form-control"> -->
                </div>
                <input type="submit" class="btn btn-outline-primary float-right mb-3" value="Save">
              </form>
            </div>
            
          </div>

        </div>
        <!-- /.container-fluid -->

      <?php 
      include 'include/footer.php';
       ?>

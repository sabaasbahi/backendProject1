<?php
include 'layout/header.php';
?>

            <form class="px-md-2" action="checkRegister.php" method="post" enctype="multipart/form-data" >

            <?php

                  if (isset($_GET['error'])) {
                    echo '<div class="alert alert-danger error_alert" role="alert">
                    '. $_GET['error'] .'
                    </div>';
                  }
                  ?>

              <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form3Example1q">Name</label>
                <input type="name" name="name" placeholder="name" id="form3Example1q" class="form-control" required/>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline datepicker">
                  <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" placeholder="email" name="email" id="form2Example17" class="form-control form-control-lg" required/>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" placeholder="password" name="password" id="form2Example27" class="form-control form-control-lg" required/>

                </div>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form3Example1q">File</label><br>
                <input type="file" name="file" id="form-label" accept="image/*" required/>
              </div>


              <input type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg mb-1" value="submit"/>

              <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="index.php"
                      style="color: #393f81;">Login</a></p>

            </form>

<?php
include 'layout/footer.php';
?>
<form action="check.php" method="post">

            <?php

            if (isset($_GET['error'])) {
              echo '<div class="alert alert-danger error_alert" role="alert">
              '. $_GET['error'] .'
              </div>';
            }
          
            ?>

            <div class="d-flex align-items-center mb-3 pb-1">
              <i class="fa fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
              <span class="h1 fw-bold mb-0">Logo</span>
            </div>

            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
            <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example17">Email address</label>
              <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" required/>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example27">Password</label>
              <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" required/>
            </div>

            <div class="pt-1 mb-4">
              <input name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit" value="login"/>
            </div>

            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                style="color: #393f81;">Register here</a></p>
            <a href="#!" class="small text-muted">Terms of use.</a>
            <a href="#!" class="small text-muted">Privacy policy</a>
      </form>


<?php
    include_once 'head.php';
    ?>

<body>


    
<section class="vh-100" style="background-color: black;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-white bg-secondary" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="includes/sign_up.inc.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" class="form-control bg-dark" style="color:white;"/>
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" class="form-control bg-dark" style="color:white;" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="uid" class="form-control bg-dark" style="color:white;" />
                      <label class="form-label" for="form3Example3c">Your Username</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="pwd" class="form-control bg-dark" style="color:white;" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="pwdrepeat" class="form-control bg-dark" style="color:white;" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!" style="color:red; text-decoration:none;">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg bg-danger" >Sign Up </button>
                  </div>
                  <p class="text-center mb-0">Already have an Account? <a href="login.php" style="color:red; text-decoration:none;">Sign In</a></p>

                </form>
                <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p>Choose a proper name</p>";
    }
    else if($_GET["error"] == "invaliduid"){
      echo "<p>Choose a proper username</p>";
    }
    else if($_GET["error"] == "invalidemail"){
      echo "<p>Choose a proper email/p>";
    }
    else if($_GET["error"] == "passwordmismatch"){
      echo "<p>Passwords don't match/p>";
    }
    else if($_GET["error"] == "stmtfailed"){
      echo "<p>Something went wrong, try again</p>";
    }
    else if($_GET["error"] == "usernametaken"){
      echo "<p>Username already exist</p>";
    }
    else if($_GET["error"] == "none"){
      echo "<p>All good to go</p>";
    }
  }
?>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






</body>
</html>
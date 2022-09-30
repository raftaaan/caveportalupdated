<?php    
// require_once 'php/class/config.php';
include 'php/functions/function.php';
// conn();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CEU CAVEPortal</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo_icon.ico"/>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/register.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/b04d2a2a76.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">

    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container nav-container px-5">
                    <a class="navbar-brand">
                        <img src="resource/img/logo.png" alt="" width="300" height="55" class="img-fluid logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">Alumni Verification</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Check Status</a></li>
                            <li class="nav-item"><a class="nav-link" href="#esco-world">Escolarians Around the World</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                     <li><a class="dropdown-item" href="login.html">Log in</a></li>
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
               
            <!-- Header-->
    <header class="bg-dark py-lg-5">
       
        <div class="container">
            <form method="POST" class="form-floating" action="" enctype="multipart/form-data" >
        
        	<?php
              if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
             <?php }?>
            <div class="row">
                <h3 class="header-text">Sign Up Account.</h3>
                <p class="header-title">Already had an Account?<span class="login-header"><a href="login.html">Login</a></span></p>
                <div class="form-group col-lg-3">
                    <label for="firstname" class="input-title">First name</label>
                    <i class="fa-solid fa-user icon"></i>
                    <input type="text" class="form-control"  name="firstname" autocomplete="no" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="lastname" class="input-title">Last name</label>
                    <i class="fa-solid fa-user icon"></i>
                    <input type="text" class="form-control" name="lastname" autocomplete="no" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="email" class="input-title">Email</label>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" class="form-control"  name="email"  autocomplete="no" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="companyid" class="input-title">Company ID</label>
                    <i class="fa-regular fa-id-card icon"></i>
                    <input type="text" class="form-control" name="companyid" autocomplete="no" required>
                </div>
                <div class="form-group col-lg-3">
                    <label for="contact" class="input-title">Contact Number</label>
                    <i class="fa-solid fa-mobile icon"></i>
                    <input type="text" class="form-control"  name="contact" autocomplete="no"  required>
                    
                </div>
            </div>
        <!--     <div class="row">
                <div class="form-group col-lg-6">   
                    <input type="checkbox" class="checkbox-agreement"  id="consent"><span class="checkbox-title">By ticking this box, You Agree to our Privacy Policies & Terms and Conditions Agreements</span>
                </div>
            </div> -->
            <div class="row">
                <div class="form-group col-md-4">
                    <input type="submit" name="submit" class="btn">
               <?php
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                      register($_POST['firstname'],$_POST['lastname'],$_POST['email'], $_POST['companyid'],$_POST['contact']);
                    }
                   ?>
                </div>
            </div>
           </form>
        </div>
     
    </header>
            
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Centro Escolar University</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<!--navbar start -->

<?php
$base_url = "http://localhost/Final-Project/";


?>

   <style>
    .modal-title{
      color:#2eca6a;
    }
    .form-group{
      color:#2eca6a;
    }
    .btn-light-design:hover{
      background-color:#2eca6a;
    }
    .input-style-line{
      border:1px solid #2eca6a;
    }
  </style>


  <div class="click-closed"></div>

  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Option</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a"action="search.php" method="GET">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="search" name="data" value="<?php isset($_GET['data'])? $_GET['data'] : '';?>" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-12">
            <button  class="btn btn-b" type="submit" name='req' value="Search" >Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->




  <div>
    <div class="modal" id="loginModal-1">
      <div class="modal-dialog">
        <div class="modal-content ">
          <div class="modal-header">
            <h5 class="modal-title">User Login</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="username">Email</label>
                <input class="form-control lead input-style-line" type="email" id="email" placeholder="Registerd Email" name="Email" required>
              </div>
              <div class="form-group">
                <label for="password">password</label>
                <input class="form-control lead input-style-line" type="password" id="password" placeholder="password" name="pass">
              </div>
              <button ton class="btn btn-light-design"type="submit" name="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Nav Start /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php"><span class="color-b">Exper</span>ience Sharing <span class="color-b">Platform</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>

       <button type="button" class="btn nav-search d-md-none btn-link" data-toggle="modal" data-target="#loginModal" aria-expanded="false"><span class="fa fa-user" aria-hidden="true"></span>
       </button>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all_profile.php">Profile</a>
          </li>
          <li class="nav-item dropdown">
            <span class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Create Profiles
            </span>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="daffodil.php">Daffodils Profile</a>
              <a class="dropdown-item" href="experience.php">Experienced Profile</a>
            </div>
          </li>

        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse  d-none d-md-block" data-toggle="collapse"
        data-target="#loginModal" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->
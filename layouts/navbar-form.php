<!--navbar start -->

<?php
$base_url = "http://localhost/all-file/class44/myProject/web";


?>



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
    </div>
  </nav>
  <!--/ Nav End /-->
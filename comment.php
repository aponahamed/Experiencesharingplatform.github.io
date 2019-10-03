

  <?php
        include('db_config.php');
        if(isset($_POST['submit'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $comments = $_POST['comments'];

          
          $sql = "SELECT * FROM `comment` WHERE comments!='$comments'";
          
          $reg = mysqli_query($conn, $sql);
          if($row = mysqli_fetch_array($reg)){

              $sql = "insert into `comment` (`name`,`email`,`comments`,`status`)
            values ('$name','$email','$comments',4)";
            if ($conn->query($sql) === TRUE) {
              //echo "comment successfully";
              header("Location: contact.php");
            } else {
              header("Location: contact.php");
            }
           
          } else {

          
             header("Location: contact.php");

    //$sql1 = "INSERT INTO `users` (`username`,`password`,`status`) VALUES ('$username','$password',1)";
            

          }
          
        }
      

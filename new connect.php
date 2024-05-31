<?php
    $insert=false;
if(isset($_POST['first'])){

    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server, $username, $password);
    // Checking for Connection
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    // $email = $_POST['email'];
    // $desc = $_POST['desc'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO `register`.`form` (`first`, `last`, `email`, `gender`, `dt`) VALUES ('$first', '$last', '$email', '$gender', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>forms</title>
  </head>

  <body>
    <h2>this is html forms tutorial</h2>
    <form action="index.php" method="POST">
      firstName:<input type="text" name="first" required /> <br /><br />

      last name:<input type="text" name="last" /> <br /><br />
      Email:<input type="email" name="email" required /><br /><br />
      <!-- Gender: male<input type="radio" name="gender" value="male" /> Female
      <input type="radio" name="gender" value="female" /> others
      <input type="radio" name="gender" value="others" /><br /> -->
      Gender: <input type="text" name="gender" id="gender">
      <br>
      <!-- <input type="submit" value="submit now"> -->
      <!-- <input type="reset" value="reset now"> -->
      <button class="btn">Submit</button>
    </form>
  </body>
</html>

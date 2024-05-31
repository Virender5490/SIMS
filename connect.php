<?php
$FirstName= $_POST['Firstname'];
$lastName= $_POST['lastname'];
$Gender= $_POST['Gender'];
$Email= $_POST['Email'];
$Password= $_POST['Password'];
$Number= $_POST['Number'];

// Database connection
$conn = new mysqli('localhost','root','register');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into form (Firstname, lastname, gender, email, password, number)values(?,?,?,?,?,?)");
$stmt->bind_param("sssssi",$firstname, $lastname, $gender, $email, $password, $number);
$stmt->execute();
echo "registration successfully...";
$stmt->close();
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>

<body>
    <h2>this is html forms tutorial</h2>
    <form action="connect.php" method="POST">
        firstName:<input type="text" name="firstName"required> <br><br>

        last name:<input type="text" name="lastname"> <br><br>
        Email:<input type="email" name="email"required><br><br>
            Gender: male<input type="radio" name="gender" value="male"> Female <input type="radio" name="gender" value="female"> others <input
            type="radio" name="gender" value="others"><br>
        <input type="submit" value="submit now">
        <input type="reset" value="reset now">
    </form>
</body>

</html>
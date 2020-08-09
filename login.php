<?php
    $email=$_POST['email'];
    $password=$_POST['password']

    $servrname = "localhost";
    $database = "user_accounts";
    $username = "root";
    $passwd = "";

    
$conn = mysqli_connect($servrname, $username, $passwd, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
$stmt=$con->prepare("select * from users where email=?");
$stmt->bind_param("s",$email);
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows>0){
    $data=$stmt_result->fetch_assoc();
    if($data['password'===$password]){
        echo "<h2>Login Successfull</h2>";
     }else{
        echo "<h2>Invalid Email or Password</h2>";
     }else{
        echo "<h2>Invalid Email or Password</h2>";
     }

}
?>

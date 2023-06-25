<?php

$server='localhost';
$username='root';
$password='';
$database='procurements';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $name=$_POST['Fullname'];
    $email=$_POST['emailid'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $exp=$_POST['exp'];
    $ptender=$_POST['ptender'];
    $pan=$_POST['pan'];
    // $assets=$_POST['assetst'];
    $amount=$_POST['amount'];

    $sql="INSERT INTO `users`(`Fullname`,`emailid`,`password`,`cpassword`,`exp`,`ptender`,`pan`,`amount`) VALUES ('$name','$email','$password','$cpassword','$exp','$ptender','$pan','$amount')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Succesfully Registered')</script>";
    }
    else
    {
        echo "ERROR:could not able to execute $sql." . mysqli_error($conn);
    }
    
}

session_start();



if(isset($_POST['login'])){
    $email=$_POST['email'];
    $_SESSION['var']=$email;
    $password=$_POST['password'];
    $query="SELECT * FROM  users WHERE `emailid`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:apply.php");
    }
    else{
        echo "<p class='logindiv'>Email ID or password is incorrect</p>";
        $error='emailid or password is incorrect';
    }
}


if(isset($_POST['alogin'])){
    $email=$_POST['email'];
    $_SESSION['var1']=$email;
    $password=$_POST['password'];
    $query="SELECT * FROM  admins WHERE `emailid`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        echo "<p class='logindiv' style='color:red;'>Email ID or password is incorrect</p>";
        $error='emailid or password is incorrect';
    }
}


if(isset($_POST['post'])){
    $name=$_POST['name'];
    $dept=$_POST['department'];
    $ecost=$_POST['ecost'];
    $location=$_POST['location'];
    $desc=$_POST['desc'];

    $sql="INSERT INTO `tenders`(`name`,`department`,`description`,`estimated_cost`,`location`) VALUES ('$name','$dept','$desc','$ecost','$location')";
    if(mysqli_query($conn,$sql))
    {
        // header("location:index.php");
        //echo "<p style='margin-left: 160px; color:green; font-size: 25px;'>"."Record inserted succesfully."."</p>";
        echo "<script>alert('Tender inserted succesfully')</script>";
    }
    else
    {
        echo "ERROR:could not able to execute $sql." . mysqli_error($conn);
    }
    
}




if(isset($_POST['del'])){
    $sno = $_POST['sno'];
    $query = "DELETE FROM tenders WHERE `id` = '$sno'";
    if($conn->query($query) === TRUE) {
        echo "<script>alert('Tender deleted succesfully')</script>";
    }
    else {
        echo "Record failed to delete";
    }
}



if(isset($_POST['aregister'])){
    $name=$_POST['Fullname'];
    $email=$_POST['emailid'];
    $password=$_POST['password'];
    $empid=$_POST['empid'];
    $sql="INSERT INTO `admins`(`name`,`empid`,`emailid`,`password`) VALUES ('$name','$empid','$email','$empid')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Admin added succesfully')</script>";
    }
    else
    {
        echo "ERROR:could not able to execute $sql." . mysqli_error($conn);
    }
    
}


if(isset($_POST['apply'])){
    $tender=$_POST['tenderid'];
    $estamt=$_POST['estamt'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $esttime=$_POST['esttime'];
    $email=$_SESSION['var'];

    $sql="INSERT INTO `apply`(`email`,`tenderid`,`estamount`,`startdate`,`enddate`,`esttime`) VALUES ('$email','$tender','$estamt','$startdate','$enddate','$esttime')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Applied for tender succesfully')</script>";
    }
    else
    {
        echo "ERROR:could not able to execute $sql." . mysqli_error($conn);
    }
    
}














?>

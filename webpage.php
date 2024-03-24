<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <style>
        body{
        background-color: #01070d;
        color: white;
        justify-content: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        align-items:center;
        display: flex;
        }
        h1{
            text-align: center;
            font-weight: 3em;
        }
    </style>
</head>
<body>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root','','test') or die("Connection Failed." . mysqli_connect_error());

        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])){
            $name=$_POST['username'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];

            $sql = "INSERT INTO `login_details` (`Name`,`Email`,`Phone_No`,`Password`) VALUES ('$name','$email','$phone','$password') "; 

            $query = mysqli_query($conn,$sql);

            if($query){
                echo "<h1>Successfully Logged IN.!</h1>";
            }else{
                echo "<h1>Failed to Log IN.</h1>";
            }
        }
    }
    ?>
    
</body>
</html>


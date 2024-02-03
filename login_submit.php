<?php
    session_start();
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="test";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "connection failed: ". mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from users";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "query failed: ". mysqli_error($conn);
        exit;
    }

    while($row=mysqli_fetch_assoc($result)){
        if($name==$row["name"]&& $email==$row["email"]&& $password==$row["password"]){
            $_SESSION["id"]=$row["id"];
            $_SESSION["name"]=$row["name"];

            //setcookie("id",$row['id'],time()+3600);
            //setcookie("name",$row['name'],time()+3600);
            
            echo "login successfull";

            ?>
            <a href="dashboard.php">Dashboard</a>
            <?php
            exit;
        }
    }
    echo "login failed";
    ?>
    <a href="register_form.php">Register here</a>
    <?php

    mysqli_close($conn);

    
?>
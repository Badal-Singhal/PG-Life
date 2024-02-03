<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/form.css"/>
</head>
<body>
    <?php
     include "header.php";
    ?>
    <div class="outer-Box">
        <div class="heading">
            <h1>Registration form</h1>
        </div>
        <div class="form">
            <form method="post" action="register_submit.php">
                <div class="inner">
                 <input placeholder="Full Name" type="text" name="name" class="box-input"/> 
                </div>
                <div class="inner">
                    <input placeholder="Email" type="text" name="email" class="box-input"/> </div>
                <div class="inner">
                     <input placeholder="Password" type="Password" name="password" class="box-input"/> 
                </div>
                
                <div >
                    <input class="btn-second"type="submit" name="submit" value="Submit"/>
                </div>

            </form>
        </div> 
    
    </div>
</body>
</html>

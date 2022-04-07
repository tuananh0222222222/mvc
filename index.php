
<?php
 
 include "Model/DBconfig.php";

 $db = new Database;
 $db->connect();
    //kiem tra get
    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }
    else {
        $controller ='';
    }

    //switch
    switch( $controller) {
        case 'thanhvien':{
            require_once('controller/thanhvien/index.php');
        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    
</body>
</html>

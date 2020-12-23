<?php
     $con = new mysqli("localhost", "root", "", "edutestnepal");
    //echo $con;
    if($con->connect_error){
        die("error");
    }

    if(isset($_POST["upload"])){
        $image = addslashes($_FILES["img"]["name"]);
        $desc = $_POST["desc"];
        echo $image. " ". $desc;
        $save = "images/".basename($_FILES['img']['name']);
        $query = "insert into card(img, des) values('$image', '$desc')";
        if($con->query($query)== TRUE){
            if(move_uploaded_file($_FILES['img']['tmp_name'], $save));
                $msg = "uploaded";
                header("Location:index.php");
        }
    }
 ?>

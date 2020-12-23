<?php
     $con = new mysqli("localhost", "root", "", "edutestnepal");
    //echo $con;
    if($con->connect_error){
        die("error");
    }

    if(isset($_POST["update"])){
        $image = addslashes($_FILES["img-update"]["name"]);
        $desc = $_POST["des-update"];
        echo $image. " ". $desc;
        $id = $_POST["id"];
        $save = "images/".basename($_FILES['img-update']['name']);
        $query = "update card set img='$image', des='$desc' where id = '$id'";
        if($con->query($query)== TRUE){
            if(move_uploaded_file($_FILES['img-update']['tmp_name'], $save));
                $msg = "uploaded";
                header("Location:index.php");
        }
    }
 ?>

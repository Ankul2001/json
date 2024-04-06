<?php 
include("conection.php");


if(isset($_POST['submitbtn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $pic=$_FILES['photo']['name'];
    $folder="img/";
    $path=$folder.basename($pic);
    move_uploaded_file($_FILES['photo']['tmp_name'],$path);

    if($object->createdata($name,$email,$contact,$pic)){
        ?>
        <script>
            alert("data save!!");
            window.location.href="display.php";
        </script>
        <?php
    }

}

if(isset($_REQUEST['removeid'])){
    $removeid=$_REQUEST['removeid'];
    if($object->deletedata($removeid)){
        ?>
        <script>
            alert("data deleted!!");
            window.location.href="display.php";
        </script>
        <?php
    }
}


?>
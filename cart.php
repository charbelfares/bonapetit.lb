<?php 
        session_start();
        include "database.php";
        $db=connect();
        $fillings = $_SESSION['fillingsId'];
        $flavors = $_SESSION['flavorsId'];
        $text = $_SESSION['text'];


        
        echo "$fillings $flavors $text";



        // if(isset($_POST['submit'])){
        // $fillings=$_GET['fillingsId'];
        // $flavors=$_GET['flavorsId'];
        // $img = basename($_FILES['image']['name']); 
        // $fileType = pathinfo($img, PATHINFO_EXTENSION); 
        // $text=$_POST['text'];
        // $image = $_FILES['image']['tmp_name']; 
        // $imgContent = addslashes(file_get_contents($image));

        // $sql="INSERT into cart (`Fillings`, `Flavore`, `img`, `Text`) VALUES ('$fillings', '$flavors', '$imgContent', '$text')"; 
        // $db->query($sql);
        // header('location:index.php');
        // if ($db->query($sql) === TRUE) {
        //     echo "New record created successfully";
        //    header('location:index.php');
        //   } 
        
        
        // }
        ?>
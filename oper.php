<?php
include "Config.php";
$ob  = new conn();
$ob->setConn();
if(isset($_POST['sub'])=="insert"){
    $name  = $_POST['name'];
    $cl  = $_POST['c'];
    // $query =  "select into sudents values (null , '$name','$cl')";
    $query  = "INSERT into sudents VALUES (null, '$name','$cl')";
    $result  =  $ob->db->query($query);
    if($result >= 1){
    header("location:readStudents.php");
    }
    else{
        echo " Failed ";
    }
}
  if(isset(($_POST['update']))){
    $id  = $_POST['id'];
    $name  = $_POST['name'];
    $cl  = $_POST['c'];
    // $query =  "select into sudents values (null , '$name','$cl')";
    $query  = "UPDATE sudents set std_name =  '$name'   , std_class = '$cl'   where std_id = '$id' ";
    $r  =  $ob->db->query($query);
    if($r){
        echo "Updated success !";
        header("location:list.php");
    }
    else{
        echo " Failed ";

    }
}
if(isset(($_GET['id']))){
    $id  = $_GET['id'];
    // $query =  "select into sudents values (null , '$name','$cl')";
    $query  = "Delete from  sudents   where std_id = '$id' ";
    $r  =  $ob->db->query($query);
    if($r){
        echo "Deleted success !";
        // header("location:list.php");
    }
    else{
        echo " Failed ";

    }
}


?>
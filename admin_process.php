<?php

 session_start();

  $id = 0;
  //$updated = false;
 

  $title = '';
  $description = '';
  $image = '';
  



  //$description = mysqli_escape_string($mysqli,$_POST['description']);
$mysqli = new mysqli('localhost','root','','carrent') or die($mysqli->error);


//$description = mysqli_escape_string($mysqli,$_POST['description']);

if(isset($_POST['saved'])){
  $title = $_POST['name'];
  $description = $_POST['description'];
  $image = $_FILES['image']['name'];
 

if(file_exists("img/" . $image))
{
  $store = $image;
  $_SESSION['message'] = "Image already exists. '.$store.'";
  header('Location:admin_dashboard.php');
}
else
{

  $query = "INSERT INTO rentcar (name,description,image) VALUES ('$title','$description','$image')" or
   die($mysqli->error);
  $query_start = mysqli_query($mysqli,$query);

if($query_start){

  $target_path = "upload";
  move_uploaded_file($_FILES['image']['tmp_name'], $target_path . "/" . $_FILES['image']['name']);
  $_SESSION['message'] = "Record has been saved";
  header("Location:admin_dashboard.php");

}
else
{

  $_SESSION['msg_type'] = "error";
  header("Location:admin_dashboard.php");

     }
}
}
//$mysqli->query("DELETE FROM user WHERE id=$id") or die($mysqli->error());


if(isset($_GET['deleted'])){
  $id = $_GET['deleted'];
  $mysqli->query("DELETE FROM rentcar WHERE id=$id") or die($mysqli->error);
 
  $_SESSION['message'] = "Record has been deleted";
  $_SESSION['msg_type'] = "danger";

  header("Location:admin_dashboard.php");
}

//edit
if(isset($_GET['id'])){
  $id = $_GET['id'];
  //$updated=true;
  $result = $mysqli->query("SELECT * FROM rentcar  WHERE id=$id");

  if(mysqli_num_rows($result)==1){
    $row = $result->fetch_array();

    
    $title = $row['name'];
    $description = $row['description'];
    $image = $row['image'];
    

  }
}
//edit 

  if(isset($_POST['updated'])){
    $id = $_POST['id'];
    $title = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
 

if(file_exists("img/" . $image)){

  $query_start= $mysqli->query("UPDATE rentcar SET name='$title', description='$description', image='$image' WHERE id=$id ")or die($mysqli->error) ; 
 

    if($query_start){

      $target_path = "img";
      move_uploaded_file($_FILES['image']['tmp_name'], $target_path . "/" . $_FILES['image']['name']);

      header("Location:admin_dashboard.php");
     
      $_SESSION['message'] = "Record has been updated";
      $_SESSION['msg_type'] = "warning";
      header("Location:admin_dashboard.php");
    }
    else
    {
    
      $_SESSION['msg_type'] = "error";
      header("Location:admin_dashboard.php");
    
         }
    }
    }


  




?>

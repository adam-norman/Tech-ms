<?php include 'database/connection.php' ?>
<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
session_start();
if(isset($_SESSION['employee_id']) && !empty($_SESSION['employee_id'])) {
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    echo $id;
    $service_id = $_POST['serviceType'];
    $description = $_POST['description'];
    $emp_id = $_SESSION['employee_id'];
    $attachment1="#";
    if(isset($_FILES['fileUpload1']['name']) && !empty($_FILES['fileUpload1']['name'])){
    $attachment1 =preg_replace('/\s+/', '_',strtolower(uniqid('',true) . $_FILES['fileUpload1']['name']));
    $attachment1_file_tmpName=$_FILES['fileUpload1']['tmp_name'];
    move_uploaded_file($attachment1_file_tmpName,'uploads/' . $attachment1);
    } else if($_POST['attachmentFile1']!=''){
      $attachment1=$_POST['attachmentFile1'];
    }
   
    $attachment2="#";
    if(isset($_FILES['fileUpload2']['name']) && !empty($_FILES['fileUpload2']['name'])){
    $attachment2 =preg_replace('/\s+/', '_', strtolower(uniqid('',true) . $_FILES['fileUpload2']['name']));
    $attachment2_file_tmpName=$_FILES['fileUpload2']['tmp_name'];
    move_uploaded_file($attachment2_file_tmpName,'uploads/' . $attachment2);
    }else if($_POST['attachmentFile2']!=''){
      $attachment2=$_POST['attachmentFile2'];
    }
    $updateStr ="UPDATE  `request` SET `service_id`=".$service_id.", `description`='".$description."' ,`attachment1`='".$attachment1."', `attachment2`='".$attachment2."' WHERE `id`=".$id;
    $response= mysqli_query($conn,$updateStr);
    $_SESSION['request_id']=$id;
    header("Location: Request-info.php");
  }
}
?>
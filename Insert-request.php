<?php include 'database/connection.php' ?>
<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
if(isset($_SESSION['employee_id']) && !empty($_SESSION['employee_id'])) {
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $service_id = $_POST['serviceType'];
    $description = $_POST['description'];
    $emp_id = $_SESSION['employee_id'];
    $status="In Progress";

    $attachment1="#";
    if(isset($_FILES['fileUpload1']['name']) && !empty($_FILES['fileUpload1']['name'])){
    $attachment1 =preg_replace('/\s+/', '_',strtolower(uniqid('',true) . $_FILES['fileUpload1']['name']));
    $attachment1_file_tmpName=$_FILES['fileUpload1']['tmp_name'];
    move_uploaded_file($attachment1_file_tmpName,'uploads/' . $attachment1);
    }
   
    $attachment2="#";
    if(isset($_FILES['fileUpload2']['name']) && !empty($_FILES['fileUpload2']['name'])){
    $attachment2 =preg_replace('/\s+/', '_', strtolower(uniqid('',true) . $_FILES['fileUpload2']['name']));
    $attachment2_file_tmpName=$_FILES['fileUpload2']['tmp_name'];
    move_uploaded_file($attachment2_file_tmpName,'uploads/' . $attachment2);
    }

    $insertStr ="INSERT INTO `request` (`emp_id`, `service_id`, `description`, `attachment1`, `attachment2`, `status`)
    VALUES (".$emp_id.", ".$service_id.", '".$description."', '".$attachment1."', '".$attachment2."', '".$status."')";
    $response= mysqli_query($connection,$insertStr);
    $request_id= mysqli_insert_id($connection);
    $_SESSION['request_id']=$request_id;
    header("Location: Request-info.php");
  }
}
?>
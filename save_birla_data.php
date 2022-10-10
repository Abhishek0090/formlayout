<?php
include 'conn.php';
$response = [];
$field_value =  !empty($_POST['field_value']) ? mysqli_real_escape_string($conn, $_POST['field_value']) : '';
$field_name =  !empty($_POST['field_name']) ? mysqli_real_escape_string($conn, $_POST['field_name']) : '';
$patientid =  !empty($_POST['patientid']) ? mysqli_real_escape_string($conn, $_POST['patientid']) : '';

 $sql = "SELECT id from  birla1 where patient_id='$patientid'";
$result = mysqli_query($conn,$sql);
 $num_rows = mysqli_num_rows($result);
if($num_rows>0){
    $sql = "UPDATE birla1 SET $field_name = '$field_value' WHERE patient_id = '".$patientid."'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $response['message'] = "updated Successfully";
        $response['code'] = "200";
        $response['last_insert_id'] = '';
    }
    else{
        $response['message'] = "Some thing went wrong";
        $response['code'] = "400";
        $response['last_insert_id'] = '';
    }
    //  $_POST['post_id'];
}
else{
    echo $sql = "INSERT INTO birla1(patient_id,".$field_name.") VALUES('$patientid','$field_value')";
    $result = mysqli_query($conn,$sql);
    $last_insert_id = mysqli_insert_id($conn);
    
    return $last_insert_id;
    if($last_insert_id>0){
        $response['message'] = "Saved Successfully";
        $response['code'] = "200";
        $response['last_insert_id'] = $last_insert_id;

    }
    else{
        $response['message'] = "Some thing went wrong";
        $response['code'] = "400";
        $response['last_insert_id'] = '';
    }

}
echo json_encode($response);
?>

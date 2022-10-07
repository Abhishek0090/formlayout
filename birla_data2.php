<?php include 'conn.php';
 // Taking all 5 values from the form data(input)

 if(isset($_POST['rta']) || isset($_POST['date_injury']) || isset($_POST['police']) || isset($_POST['test'])  || isset($_POST['alcohol'])  || isset($_POST['maternity']) || isset($_POST['dod']) || isset($_POST['doa']) || isset($_POST['time']) || isset($_POST['emergency'])|| isset($_POST['stay_hospital']) || isset($_POST['room_type'])|| isset($_POST['rent'])|| isset($_POST['cost_investigation']) || isset($_POST['icu_charges'])|| isset($_POST['ot_charges'])|| isset($_POST['fees_charges'])|| isset($_POST['medicine_expense'])|| isset($_POST['inclusive'])|| isset($_POST['cost_hospital'])|| isset($_POST['diabetes'])|| isset($_POST['heart_disease'])|| isset($_POST['hypertension'])|| isset($_POST[''])|| isset($_POST['osteoarthritis'])|| isset($_POST['ashtma_copd_bronchitis'])|| isset($_POST['cancer']) || isset($_POST['alcohol_drug']) || isset($_POST['hiv_std']) || isset($_POST['aliment']) || isset($_POST['treating_doctor']) || isset($_POST['qualification']) || isset($_POST['state_code']) || isset($_POST['hospital_seal']) || isset($_POST['patient_signature'])){

//     // print_r($_POST);die;
    $data_id =  !empty($_POST['data_id']) ? mysqli_real_escape_string($conn, $_POST['post_id']) : '';
    $rta =  !empty($_POST['rta']) ? mysqli_real_escape_string($conn, $_POST['rta']) : '';
    $date_injury =  !empty($_POST['date_injury']) ? mysqli_real_escape_string($conn, $_POST['date_injury']) : '';
    $alcohol =  !empty($_POST['alcohol']) ? mysqli_real_escape_string($conn, $_POST['alcohol']) : '';
    $test =  !empty($_POST['test']) ? mysqli_real_escape_string($conn, $_POST['test']) : '';
    
  
//patient       
$maternity = !empty($_POST['maternity']) ? mysqli_real_escape_string($conn, $_POST['maternity']) : '';
$dod =  !empty($_POST['dod']) ? mysqli_real_escape_string($conn, $_POST['dod']) : '';
$doa =  !empty($_POST['doa']) ? mysqli_real_escape_string($conn, $_POST['doa']) : '';
$time = !empty($_POST['time']) ? mysqli_real_escape_string($conn, $_POST['time']) : '';
$emergency =  !empty($_POST['emergency']) ? mysqli_real_escape_string($conn, $_POST['emergency']) : '';
$stay_hospital =  !empty($_POST['stay_hospital']) ? mysqli_real_escape_string($conn, $_POST['stay_hospital']) : '';
$room_type =  !empty($_POST['room_type']) ? mysqli_real_escape_string($conn, $_POST['room_type']) : '';
$rent =  !empty($_POST['rent']) ? mysqli_real_escape_string($conn, $_POST['rent']) : '';
$cost_investigation =  !empty($_POST['cost_investigation']) ? mysqli_real_escape_string($conn, $_POST['cost_investigation']) : '';
$icu_charges =  !empty($_POST['icu_charges']) ? mysqli_real_escape_string($conn, $_POST['icu_charges']) : '';
$ot_charges =  !empty($_POST['ot_charges']) ? mysqli_real_escape_string($conn, $_POST['ot_charges']) : '';
$fees_charges =  !empty($_POST['fees_charges']) ? mysqli_real_escape_string($conn, $_POST['fees_charges']) : '';
$medicines_expense =  !empty($_POST['medicines_expense']) ? mysqli_real_escape_string($conn, $_POST['medicines_expense']) : '';
$inclusive =  !empty($_POST['inclusive']) ? mysqli_real_escape_string($conn, $_POST['inclusive']) : '';

//doctor
$cost_hospital  =  !empty($_POST['cost_hospital']) ? mysqli_real_escape_string($conn, $_POST['cost_hospital']) : '';
$diabetes  =  !empty($_POST['diabetes']) ? mysqli_real_escape_string($conn, $_POST['diabetes']) : '';
$heart_disease  =  !empty($_POST['heart_disease']) ? mysqli_real_escape_string($conn, $_POST['heart_disease']) : '';
$hypertension  =  !empty($_POST['hypertension']) ? mysqli_real_escape_string($conn, $_POST['hypertension']) : '';
$osteoarthritis  =  !empty($_POST['osteoarthritis']) ? mysqli_real_escape_string($conn, $_POST['osteoarthritis']) : '';
$ashtma_copd_bronchitis  =  !empty($_POST['ashtma_copd_bronchitis']) ? mysqli_real_escape_string($conn, $_POST['ashtma_copd_bronchitis']) : '';
$cancer  =  !empty($_POST['cancer']) ? mysqli_real_escape_string($conn, $_POST['cancer']) : '';
$alcohol_drug  =  !empty($_POST['alcohol_drug']) ? mysqli_real_escape_string($conn, $_POST['alcohol_drug']) : '';
$hiv_std  =  !empty($_POST['hiv_std']) ? mysqli_real_escape_string($conn, $_POST['hiv_std']) : '';
$aliment  =  !empty($_POST['aliment']) ? mysqli_real_escape_string($conn, $_POST['aliment']) : '';
$treating_doctor  =  !empty($_POST['treating_doctor']) ? mysqli_real_escape_string($conn, $_POST['treating_doctor']) : '';
$qualification  =  !empty($_POST['qualification']) ? mysqli_real_escape_string($conn, $_POST['qualification']) : '';
$state_code  =  !empty($_POST['state_code']) ? mysqli_real_escape_string($conn, $_POST['state_code']) : '';
$hospital_seal  =  !empty($_POST['hospital_seal']) ? mysqli_real_escape_string($conn, $_POST['hospital_seal']) : '';
$patient_signature  =  !empty($_POST['patient_signature']) ? mysqli_real_escape_string($conn, $_POST['patient_signature']) : '';


    if($_POST['data_id'] != ''){

        //updating data
        $sql = "UPDATE  birla1 SET rta='".$rta."', date_injury='".$date_injury."' , police='".$police."' , alcohol='".$alcohol."' , test = '".$test."', maternity = '".$maternity."' , dod = '".$dod."' , doa = '".$doa."' , time = '".$time."' , emergency = '".$emergency."' , stay_hospital = '".$stay_hospital."' , room_type = '".$room_type."' ,rent = '".$rent."' , cost_investigation = '".$cost_investigation."' , icu_charges = '".$icu_charges."' ,  medicines_expense = '".$medicines_expense."' , fees_charges = '".$fees_charges."' , ot_charges = '".$ot_charges."' , inclusive = '".$inclusive."' , cost_hospital = '".$cost_hospital."' , diabetes = '".$diabetes."' , heart_disease = '".$heart_disease."' , hypertension = '".$hypertension."' , osteoarthritis = '".$osteoarthritis."' , ashtma_copd_bronchitis = '".$ashtma_copd_bronchitis."' , cancer = '".$cancer."' , alcohol_drug = '".$alcohol_drug."', hiv_std = '".$hiv_std."' , aliment = '".$aliment."' , treating_doctor = '".$treating_doctor."' , qualification = '".$qualification."' , state_code = '".$state_code."' , hospital_seal = '".$hospital_seal."' , patient_signature = '".$patient_signature."'    where id = '".$_POST['post_id']."'";
        mysqli_query($conn,$sql);
        echo $_POST['data_id'];
        
        
    }
    else{
        // print_r($_POST['dod']); die;
                //inserting data
        $sql = "INSERT INTO birla1(rta,date_injury,police,alcohol ,rent,test,maternity,dod,doa,time,emergency,stay_hospital,room_type,cost_investigation,icu_charges,medicines_expense,fees_charges,ot_charges,inclusive,cost_hospital,diabetes,heart_disease,hypertension,osteoarthritis,ashtma_copd_bronchitis,cancer,alcohol_drug,hiv_std,aliment,treating_doctor,qualification,state_code,hospital_seal,patient_signature) VALUES('$rta','$date_injury','$police','$rent','$alcohol',$test','$maternity','$dod','$doa','$time','$emergency','$stay_hospital','$room_type','$cost_investigation','$icu_charges','$medicines_expense','$fees_charges','$ot_charges','$inclusive','$cost_hospital','$diabetes','$heart_disease','$hypertension','$osteoarthritis','$ashtma_copd_bronchitis','$cancer','$alcohol_drug','$hiv_std','$aliment','$treating_doctor','$qualification','$state_code','$hospital_seal','$patient_signature')";
                mysqli_query($conn,$sql);
                $last_insert_id = mysqli_insert_id($conn);

                echo $last_insert_id;exit;
            }}
               ?>
         
    
<?php include 'conn.php';
 // Taking all 5 values from the form data(input)

 if(isset($_POST['toll_number']) || isset($_POST['toll_fax']) || isset($_POST['name_patient']) || isset($_POST['gender']) || isset($_POST['age']) || isset($_POST['dob']) || isset($_POST['contact_patient']) || isset($_POST['contact_relative']) || isset($_POST['insured_number'])|| isset($_POST['employeeid']) || isset($_POST['policy_number'])|| isset($_POST['mediclaim'])|| isset($_POST['company_name']) || isset($_POST['physician'])|| isset($_POST['name_physician'])|| isset($_POST['contact_physician'])|| isset($_POST['name_doctor'])|| isset($_POST['contact_doctor'])|| isset($_POST['nature_illness'])|| isset($_POST['relevant'])|| isset($_POST['duration'])|| isset($_POST['date_consultation'])|| isset($_POST['past_history'])|| isset($_POST['diagnosis'])|| isset($_POST['icd_code'])|| isset($_POST['line_treatment']) || isset($_POST['invest_medical']) || isset($_POST['route_drug']) || isset($_POST['name_surgery']) || isset($_POST['icd_pcs']) || isset($_POST['other_treatment']) || isset($_POST['injury_occur']) || isset($_POST['rta']) || isset($_POST['date_injury']) || isset($_POST['police']) || isset($_POST['test'])  || isset($_POST['alcohol'])  || isset($_POST['maternity']) || isset($_POST['dod']) || isset($_POST['doa']) || isset($_POST['time']) || isset($_POST['emergency'])|| isset($_POST['stay_hospital']) || isset($_POST['room_type'])|| isset($_POST['rent'])|| isset($_POST['cost_investigation']) || isset($_POST['icu_charges'])|| isset($_POST['ot_charges'])|| isset($_POST['fees_charges'])|| isset($_POST['medicine_expense'])|| isset($_POST['inclusive'])|| isset($_POST['cost_hospital'])|| isset($_POST['diabetes'])|| isset($_POST['heart_disease'])|| isset($_POST['hypertension'])|| isset($_POST[''])|| isset($_POST['osteoarthritis'])|| isset($_POST['ashtma_copd_bronchitis'])|| isset($_POST['cancer']) || isset($_POST['alcohol_drug']) || isset($_POST['hiv_std']) || isset($_POST['aliment']) || isset($_POST['treating_doctor']) || isset($_POST['qualification']) || isset($_POST['state_code']) || isset($_POST['hospital_seal']) || isset($_POST['patient_signature'])){


//     // print_r($_POST);die;
    $post_id =  !empty($_POST['post_id']) ? mysqli_real_escape_string($conn, $_POST['post_id']) : '';
    $name_company =  !empty($_POST['name_company']) ? mysqli_real_escape_string($conn, $_POST['name_company']) : '';
    $toll_number =  !empty($_POST['toll_number']) ? mysqli_real_escape_string($conn, $_POST['toll_number']) : '';
    $toll_fax =  !empty($_POST['toll_fax']) ? mysqli_real_escape_string($conn, $_POST['toll_fax']) : '';
    
  
//patient       
$employeeid = !empty($_POST['employeeid']) ? mysqli_real_escape_string($conn, $_POST['employeeid']) : '';
$name_patient =  !empty($_POST['name_patient']) ? mysqli_real_escape_string($conn, $_POST['name_patient']) : '';
$gender =  !empty($_POST['gender']) ? mysqli_real_escape_string($conn, $_POST['gender']) : '';
$age = !empty($_POST['age']) ? mysqli_real_escape_string($conn, $_POST['age']) : '';
$dob =  !empty($_POST['dob']) ? mysqli_real_escape_string($conn, $_POST['dob']) : '';
$contact_patient =  !empty($_POST['contact_patient']) ? mysqli_real_escape_string($conn, $_POST['contact_patient']) : '';
$contact_relative =  !empty($_POST['contact_relative']) ? mysqli_real_escape_string($conn, $_POST['contact_relative']) : '';
$insured_number =  !empty($_POST['insured_number']) ? mysqli_real_escape_string($conn, $_POST['insured_number']) : '';
$policy_number =  !empty($_POST['policy_number']) ? mysqli_real_escape_string($conn, $_POST['policy_number']) : '';
$mediclaim =  !empty($_POST['mediclaim']) ? mysqli_real_escape_string($conn, $_POST['mediclaim']) : '';
$company_name =  !empty($_POST['company_name']) ? mysqli_real_escape_string($conn, $_POST['company_name']) : '';
$physician =  !empty($_POST['physician']) ? mysqli_real_escape_string($conn, $_POST['physician']) : '';
$name_physician =  !empty($_POST['name_physician']) ? mysqli_real_escape_string($conn, $_POST['name_physician']) : '';
$contact_physician =  !empty($_POST['contact_physician']) ? mysqli_real_escape_string($conn, $_POST['contact_physician']) : '';

//doctor
$name_doctor  =  !empty($_POST['name_doctor']) ? mysqli_real_escape_string($conn, $_POST['name_doctor']) : '';
$contact_doctor  =  !empty($_POST['contact_doctor']) ? mysqli_real_escape_string($conn, $_POST['contact_doctor']) : '';
$nature_illness  =  !empty($_POST['nature_illness']) ? mysqli_real_escape_string($conn, $_POST['nature_illness']) : '';
$relevant  =  !empty($_POST['relevant']) ? mysqli_real_escape_string($conn, $_POST['relevant']) : '';
$duration  =  !empty($_POST['duration']) ? mysqli_real_escape_string($conn, $_POST['duration']) : '';
$date_consultation  =  !empty($_POST['date_consultation']) ? mysqli_real_escape_string($conn, $_POST['date_consultation']) : '';
$past_history  =  !empty($_POST['past_history']) ? mysqli_real_escape_string($conn, $_POST['past_history']) : '';
$diagnosis  =  !empty($_POST['diagnosis']) ? mysqli_real_escape_string($conn, $_POST['diagnosis']) : '';
$icd_code  =  !empty($_POST['icd_code']) ? mysqli_real_escape_string($conn, $_POST['icd_code']) : '';
$line_treatment  =  !empty($_POST['line_treatment']) ? mysqli_real_escape_string($conn, $_POST['line_treatment']) : '';
$invest_medical  =  !empty($_POST['invest_medical']) ? mysqli_real_escape_string($conn, $_POST['invest_medical']) : '';
$route_drug  =  !empty($_POST['route_drug']) ? mysqli_real_escape_string($conn, $_POST['route_drug']) : '';
$name_surgery  =  !empty($_POST['name_surgery']) ? mysqli_real_escape_string($conn, $_POST['name_surgery']) : '';
$icd_pcs  =  !empty($_POST['icd_pcs']) ? mysqli_real_escape_string($conn, $_POST['icd_pcs']) : '';
$other_treatment  =  !empty($_POST['other_treatment']) ? mysqli_real_escape_string($conn, $_POST['other_treatment']) : '';
$injury_occur  =  !empty($_POST['injury_occur']) ? mysqli_real_escape_string($conn, $_POST['injury_occur']) : '';


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




    if($_POST['post_id'] != ''){

        //updating data
        $sql = "UPDATE  birla1 SET name_company='".$name_company."', toll_number='".$toll_number."' , toll_fax='".$toll_fax."' , name_patient = '".$name_patient."', gender = '".$gender."' , age = '".$age."' , dob = '".$dob."' , contact_patient = '".$contact_patient."' , contact_relative = '".$contact_relative."' , insured_number = '".$insured_number."' , policy_number = '".$policy_number."' ,employeeid = '".$employeeid."' , mediclaim = '".$mediclaim."' , company_name = '".$company_name."' ,  physician = '".$physician."' , name_physician = '".$name_physician."' , contact_physician = '".$contact_physician."' , name_doctor = '".$name_doctor."' , contact_doctor = '".$contact_doctor."' , nature_illness = '".$nature_illness."' , relevant = '".$relevant."' , duration = '".$duration."' , date_consultation = '".$date_consultation."' , past_history = '".$past_history."' , diagnosis = '".$diagnosis."' , icd_code = '".$icd_code."', line_treatment = '".$line_treatment."' , invest_medical = '".$invest_medical."' , route_drug = '".$route_drug."' , name_surgery = '".$name_surgery."' , icd_pcs = '".$icd_pcs."' , other_treatment = '".$other_treatment."' , injury_occur = '".$injury_occur."' ,rta='".$rta."', date_injury='".$date_injury."' , police='".$police."' , alcohol='".$alcohol."' , test = '".$test."', maternity = '".$maternity."' , dod = '".$dod."' , doa = '".$doa."' , time = '".$time."' , emergency = '".$emergency."' , stay_hospital = '".$stay_hospital."' , room_type = '".$room_type."' ,rent = '".$rent."' , cost_investigation = '".$cost_investigation."' , icu_charges = '".$icu_charges."' ,  medicines_expense = '".$medicines_expense."' , fees_charges = '".$fees_charges."' , ot_charges = '".$ot_charges."' , inclusive = '".$inclusive."' , cost_hospital = '".$cost_hospital."' , diabetes = '".$diabetes."' , heart_disease = '".$heart_disease."' , hypertension = '".$hypertension."' , osteoarthritis = '".$osteoarthritis."' , ashtma_copd_bronchitis = '".$ashtma_copd_bronchitis."' , cancer = '".$cancer."' , alcohol_drug = '".$alcohol_drug."', hiv_std = '".$hiv_std."' , aliment = '".$aliment."' , treating_doctor = '".$treating_doctor."' , qualification = '".$qualification."' , state_code = '".$state_code."' , hospital_seal = '".$hospital_seal."' , patient_signature = '".$patient_signature."'     where id = '".$_POST['post_id']."'";
        mysqli_query($conn,$sql);
        echo $_POST['post_id'];
        
        
    }
    else{
        // print_r($_POST['age']); die;
        //inserting data
$sql = "INSERT INTO birla1(name_company,toll_number,toll_fax,employeeid,name_patient,gender,age,dob,contact_patient,contact_relative,insured_number,policy_number,mediclaim,company_name,physician,name_physician,contact_physician,name_doctor,contact_doctor,nature_illness,relevant,duration,date_consultation,past_history,diagnosis,icd_code,line_treatment,invest_medical,route_drug,name_surgery,icd_pcs,other_treatment,injury_occur,rta,date_injury,police,alcohol ,rent,test,maternity,dod,doa,time,emergency,stay_hospital,room_type,cost_investigation,icu_charges,medicines_expense,fees_charges,ot_charges,inclusive,cost_hospital,diabetes,heart_disease,hypertension,osteoarthritis,ashtma_copd_bronchitis,cancer,alcohol_drug,hiv_std,aliment,treating_doctor,qualification,state_code,hospital_seal,patient_signature) VALUES('$name_company','$toll_number','$toll_fax','$employeeid','$name_patient','$gender','$age','$dob','$contact_patient','$contact_relative','$insured_number','$policy_number','$mediclaim','$company_name','$physician','$name_physician','$contact_physician','$name_doctor','$contact_doctor','$nature_illness','$relevant','$duration','$date_consultation','$past_history','$diagnosis','$icd_code','$line_treatment','$invest_medical','$route_drug','$name_surgery','$icd_pcs','$other_treatment','$injury_occur','$rta','$date_injury','$police','$rent','$alcohol',$test','$maternity','$dod','$doa','$time','$emergency','$stay_hospital','$room_type','$cost_investigation','$icu_charges','$medicines_expense','$fees_charges','$ot_charges','$inclusive','$cost_hospital','$diabetes','$heart_disease','$hypertension','$osteoarthritis','$ashtma_copd_bronchitis','$cancer','$alcohol_drug','$hiv_std','$aliment','$treating_doctor','$qualification','$state_code','$hospital_seal','$patient_signature')";
        mysqli_query($conn,$sql);
        $last_insert_id = mysqli_insert_id($conn);

        echo $last_insert_id;exit;
    }}
               ?>
         
    
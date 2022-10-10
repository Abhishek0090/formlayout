
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	


<?php
$html = '<style>
body{
	background-image:url(bg.jpg);
	

	background-size: contain;
}
.margin{
	padding-top:130px;
	
	
}
.alphabet{
    margin-right: 20px;
}

label{
    min-width: fit-content;
    margin-right: 120px;
}


.aligninput{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: start;
    margin: 6px;
    min-width: fit-content;
}
.checkwidth{
    margin-right: -7rem;
} 
input{
	margin-right:120px;
}
.blockwise{
	width : 12px;
	
	border : none;
	
}
.radiobtn{
	accent-color: red;
}
input[type=checkbox]{
	accent-color: red;
}
input:checked {
	height: 50px;
	width: 50px;
  }
  .inlinedivs{
    display: flex;
    margin-right: 40px;
}
</style>';


 
	
	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 0;
	$q = "SELECT * FROM `birla1` ORDER BY id ASC";
	$res = mysqli_query($link,$q);
	
	$row = mysqli_num_rows($res);
	
    
   //for admin
	if($row > 0) { 
	if($row = mysqli_fetch_assoc($res) ) {


		//admin 
		$name_company = $row['name_company'];
        $toll_number = $row['toll_number'];
        $toll_fax = $row['toll_fax'];

		//string split using split func
        $name_company_exp = str_split($name_company);
        $toll_number_exp = str_split($toll_number);
		$toll_fax_exp = str_split($toll_fax);
    

		//patient

		$employeeid = $row['employeeid'];
        $name_patient = $row['name_patient'];
        $gender = $row['gender'];
        $age = $row['age'];
        $dob = $row['dob'];
        $contact_patient = $row['contact_patient'];
        $contact_relative = $row['contact_relative'];
        $insured_number = $row['insured_number'];
        $policy_number = $row['policy_number'];
        $mediclaim = $row['mediclaim'];
        $company_name = $row['company_name'];
        $physician = $row['physician'];
        $name_physician = $row['name_physician'];
        $contact_physician = $row['contact_physician'];

		//split into string char
        $employeeid_exp = str_split($employeeid);
		$name_patient_exp = str_split($name_patient);
		$gender_exp = str_split($gender);
		$age_exp = str_split($age);
		$dob_exp = str_split($dob);
		$contact_patient_exp = str_split($contact_patient);
		$contact_relative_exp = str_split($contact_relative);
		$insured_number_exp = str_split($insured_number);
		$policy_number_exp = str_split($policy_number);
		$mediclaim_exp = str_split($mediclaim);
		$company_name_exp = str_split($company_name);
		$physician_exp = str_split($physician);
		$name_physician_exp = str_split($name_physician);
		$contact_physician_exp = str_split($contact_physician);
		
		//doctor
		$name_doctor = $row['name_doctor'];
        $contact_doctor = $row['contact_doctor'];
        $nature_illness = $row['nature_illness'];
        $relevant = $row['relevant'];
        $duration = $row['duration'];
        $date_consultation = $row['date_consultation'];
        $past_history = $row['past_history'];
        $diagnosis = $row['diagnosis'];
        $icd_code = $row['icd_code'];
        $line_treatment = $row['line_treatment'];
        $invest_medical = $row['invest_medical'];
        $route_drug = $row['route_drug'];
        $name_surgery = $row['name_surgery'];
        $icd_pcs = $row['icd_pcs'];
        $other_treatment = $row['other_treatment'];
        $injury_occur = $row['injury_occur'];
       
		//split into string char
        $name_doctor_exp = str_split($name_doctor);
		$contact_doctor_exp = str_split($contact_doctor);
		$nature_illness_exp = str_split($nature_illness);
		$relevant_exp = str_split($relevant);
		$duration_exp = str_split($duration);
		$date_consultation_exp = str_split($date_consultation);
		$past_history_exp = str_split($past_history);
		$diagnosis_exp = str_split($diagnosis);
		$icd_code_exp = str_split($icd_code);
		$line_treatment_exp = str_split($line_treatment);
		$invest_medical_exp = str_split($invest_medical);
		$route_drug_exp = str_split($route_drug);
		$name_surgery_exp = str_split($name_surgery);
		$icd_pcs_exp = str_split($icd_pcs);
		$other_treatment_exp = str_split($other_treatment);
		$injury_occur_exp = str_split($injury_occur);


		$rta = $row['rta'];
		$date_injury = $row['date_injury'];
		$alcohol = $row['alcohol'];
		$test = $row['test'];
		$maternity = $row['maternity'];
		$dod = $row['dod'];
		$doa = $row['doa'];
		$time = $row['time'];
		$emergency = $row['emergency'];
		$stay_hospital = $row['stay_hospital'];
		$room_type = $row['room_type'];
		$rent = $row['rent'];
		$cost_investigation = $row['cost_investigation'];
		$icu_charges = $row['icu_charges'];
		$ot_charges = $row['ot_charges'];
		$fees_charges = $row['fees_charges'];
		$medicines_expense = $row['medicines_expense'];
		$inclusive = $row['inclusive'];
		$cost_hospital = $row['cost_hospital'];
		$diabetes = $row['diabetes'];
		$heart_disease = $row['heart_disease'];
		$hypertension = $row['hypertension'];
		$osteoarthritis = $row['osteoarthritis'];
		$ashtma_copd_bronchitis = $row['ashtma_copd_bronchitis'];
		$cancer = $row['cancer'];
		$alcohol_drug = $row['alcohol_drug'];
		$hiv_std = $row['hiv_std'];
		$aliment = $row['aliment'];
		$treating_doctor = $row['treating_doctor'];
		$qualification = $row['qualification'];
		$state_code = $row['state_code'];
		$hospital_seal = $row['hospital_seal'];
		$patient_signature = $row['patient_signature'];

		//string split
		$rta = str_split($rta);
		$date_injury = str_split($date_injury);
		$alcohol = str_split($alcohol);
		$test = str_split($test);
		$maternity = str_split($maternity);
		$dod = str_split($dod);
		$doa = str_split($doa);
		$time = str_split($time);
		$emergency = str_split($emergency);
		$stay_hospital = str_split($stay_hospital);
		$room_type = str_split($room_type);
		$rent = str_split($rent);
		$cost_investigation = str_split($cost_investigation);
		$icu_charges = str_split($icu_charges);
		$ot_charges = str_split($ot_charges);
		$fees_charges = str_split($fees_charges);
		$medicines_expense = str_split($medicines_expense);
		$inclusive = str_split($inclusive);
		$cost_hospital = str_split($cost_hospital);
		$diabetes = str_split($diabetes);
		$heart_disease = str_split($heart_disease);
		$hypertension = str_split($hypertension);
		$osteoarthritis = str_split($osteoarthritis);
		$ashtma_copd_bronchitis = str_split($ashtma_copd_bronchitis);
		$cancer = str_split($cancer);
		$alcohol_drug = str_split($alcohol_drug);
		$hiv_std = str_split($hiv_std);
		$aliment = str_split($aliment);
		$treating_doctor = str_split($treating_doctor);
		$qualification = str_split($qualification);
		$state_code = str_split($state_code);
		$hospital_seal = str_split($hospital_seal);
		$patient_signature = str_split($patient_signature);
	}
	} else {
        echo "Something went wrong" ;
	}

	
	$html .="

<div class=margin>
	<h3>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h3><P>(To be filled in block letters)</P>
	<div>
		
		<span>a.</span> Name of TPA/Insurance Company : ";

		for ($i=0; $i < 28; $i++) { 
	# code...
	if($i<count($name_company_exp)){

		$html .="<input class=blockwise value=\"".$name_company_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
	
}
	$html .="
	</div>

	
	<div>
	<span>b.</span>
<label>Toll free phone number</label>&nbsp;";
for ($i=0; $i < 13; $i++) { 
	# code...
	if($i<count($toll_number_exp)){

		$html .="<input class=blockwise value=\"".$toll_number_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
	
}
$html .="
	
 </div>
	<div>
	<span>c.</span>

<label>Toll free Fax</label>&nbsp;";
for ($i=0; $i < 10; $i++) { 
	# code...
	if($i<count($toll_fax_exp)){

		$html .="<input class=blockwise value=\"".$toll_fax_exp[$i]."\">";
	}
	else{
		$html .= "
		<input  class=blockwise>";
	}
}

$html .="
</div>
</div>

<h3>TO BE FILLED BY THE INSURED/PATIENT</h3>
<div>
<span>a.</span>

	<label >Name of the Patient</label>&nbsp;";
	for ($i=0; $i < 33; $i++) { 
		# code...
		if($i<count($name_patient_exp)){

			$html .="<input class=blockwise value=\"".$name_patient_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
<div>
<span>b.</span>
	<label>Gender</label>&nbsp;";
	
		if($gender == "Male"){

			$html .="<input type=checkbox checked=checked> Male";
			$html .= "
			<input type=checkbox>Female";
		}
		if($gender == "Female"){
			$html .="<input type=checkbox> Male";
			$html .= "
			<input type=checkbox checked=checked>Female";
		}
	
	$html .= "
	
	
<label></label>&nbsp;



<label></label>&nbsp;

</div>


<div>
	 <span>c.</span>
	
		
		<label>Age</label>&nbsp;";
		for ($i=0; $i < 4; $i++) { 
			# code...
			if($i<count($age_exp)){
	
				$html .="<input class=blockwise value=\"".$age_exp[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
		Years Months
</div>

<div>
<span>d.</span>

	<label>Date of Birth</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($dob_exp)){

			$html .="<input class=blockwise value=\"".$dob_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	</div>

<div>
<span>e.</span>

	<label>Contact Number</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_patient_exp)){

			$html .="<input class=blockwise value=\"".$contact_patient_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>f.</span>

	<label>Contact number of attending relative</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_relative_exp)){

			$html .="<input class=blockwise value=\"".$contact_relative_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>g.</span>

	<label>Insured Card ID number</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($insured_number_exp)){

			$html .="<input class=blockwise value=\"".$insured_number_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
<span>h.</span>

	<label>Policy number / Name of corporate</label>&nbsp;";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($policy_number_exp)){

			$html .="<input class=blockwise value=\"".$policy_number_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	
</div>

<div>
<span>i.</span>

	<label>Employee ID</label>&nbsp;";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($employeeid_exp)){

			$html .="<input class=blockwise value=\"".$employeeid_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
</div>

<div>
<span>j.</span>

	<label>Currently do you have any other Mediclaim/Health insurance</label>&nbsp;";
	if($mediclaim == "Yes"){

		$html .="<input type=checkbox checked=checked> Yes";
		$html .= "
		<input type=checkbox>No";
	}
	if($mediclaim == "No"){
		$html .="<input type=checkbox> Yes";
		$html .= "
		<input type=checkbox checked=checked>No";
	}

$html .= "


</div>

</div>
<div>
<div class=margin>
</div>
<span>k.</span>

	<label>Company Name:</label>&nbsp;
	<label>Give details</label>&nbsp;";
	for ($i=0; $i < 31; $i++) { 
		# code...
		if($i<count($company_name_exp)){

			$html .="<input class=blockwise value=\"".$company_name_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
<span>l.</span>

	<label>Do you have any family  physician</label>&nbsp;";
	if($physician == "Yes"){

		$html .="<input type=checkbox checked=checked> Yes";
		$html .= "
		<input type=checkbox>No";
	}
	if($physician == "No"){
		$html .="<input type=checkbox> Yes";
		$html .= "
		<input type=checkbox checked=checked>No";
	}

$html .= "

</div>
</div>

<div>
<span>m.</span>

	<label>Name of the family physician</label>&nbsp;";
	for ($i=0; $i < 28; $i++) { 
		# code...
		if($i<count($name_physician_exp)){

			$html .="<input class=blockwise value=\"".$name_physician_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
<span>n.</span>

	<label>Contact number if any :</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($contact_physician_exp)){

			$html .="<input class=blockwise value=\"".$contact_physician_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	</div>
	

<p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>


	<h2>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h2>
	
	<div>
		<span>a.</span>
		
		<label>Name of the treating doctor :</label>&nbsp;";
		for ($i=0; $i < 28; $i++) { 
			# code...
			if($i<count($name_doctor_exp)){
	
				$html .="<input class=blockwise value=\"".$name_doctor_exp[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
	
	</div> 
	<div>
		<span>b.</span>
		
		<label>Contact number:</label>&nbsp;";
		for ($i=0; $i < 10; $i++) { 
			# code...
			if($i<count($contact_doctor_exp)){
	
				$html .="<input class=blockwise value=\"".$contact_doctor_exp	[$i]."\">";
			}
			else{
				$html .= "
				<input  class=blockwise>";
			}
		}
		$html .= "
	
</div> 
<div>
	<span>c.</span>
	
	<label>Name of ILLNESS / Disease with presenting Complaints :</label>&nbsp;";
	for ($i=0; $i < 24; $i++) { 
		# code...
		if($i<count($nature_illness_exp)){

			$html .="<input class=blockwise value=\"".$nature_illness_exp	[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "

	
</div> 
<div>
	<span>d.</span>
	
	<label>Relevant clinical findings :</label>&nbsp;";
	for ($i=0; $i < 24; $i++) { 
		# code...
		if($i<count($relevant_exp)){

			$html .="<input class=blockwise value=\"".$relevant_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
</div>

<div>
	<span>e.</span>
	
	<label>Duration of the present ailment :</label>&nbsp; ";
	for ($i=0; $i < 3; $i++) { 
		# code...
		if($i<count($duration_exp)){

			$html .="<input class=blockwise value=\"".$duration_exp[$i]."\">";
		}
		else{
			$html .= "
			<input  class=blockwise>";
		}
	}
	$html .= "
	
	
	<span>Days</span>
</div>
<div>
	<label>Date of first consultation :</label>&nbsp;";
	for ($i=0; $i < 6; $i++) { 
		# code...
		if($i<count($date_consultation_exp)){

			$html .="<input class=blockwise value=\"".$date_consultation_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
	<label>Past history of present ailment if any :</label>&nbsp;";
	for ($i=0; $i < 16; $i++) { 
		# code...
		if($i<count($past_history_exp)){

			$html .="<input class=blockwise value=\"".$past_history_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div>
	<span>f.</span>
	
	<label>Provisional diagnosis :</label>&nbsp;";
	for ($i=0; $i < 31; $i++) { 
		# code...
		if($i<count($diagnosis_exp)){

			$html .="<input class=blockwise value=\"".$diagnosis_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
	<span>g.</span>
	
	<label>ICD 10 Code :</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($icd_code_exp)){

			$html .="<input class=blockwise value=\"".$icd_code_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div>
	<span>h.</span>
	
	<label>Proposed line of treatment :</label>&nbsp;
	<label>Medical Management Surgical Management Intensive care Investigation Non allopathic treatment.</label>&nbsp;";
	for ($i=0; $i < 5; $i++) { 
		# code...
		if($i<count($line_treatment_exp)){

			$html .="<input class=blockwise value=\"".$line_treatment_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
	
</div>
<div>
	<span>I.</span>
	
	<label>If Investigation &/or Medical Management provide :</label>&nbsp;";
	for ($i=0; $i < 24; $i++) { 
		# code...
		if($i<count($invest_medical_exp)){

			$html .="<input class=blockwise value=\"".$invest_medical_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
	
</div>
<div>
	<span>j.</span>
	
	<label>Route of drug administartion :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($route_drug_exp)){

			$html .="<input class=blockwise value=\"".$route_drug_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div>
	<span>k.</span>
	
	<label>If Surgical, name of surgery :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($name_surgery_exp)){

			$html .="<input class=blockwise value=\"".$name_surgery_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
</div>
<div>
	<span>l.</span>
	
	<label>ICD 10 PCS Code :</label>&nbsp;";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($icd_pcs_exp)){

			$html .="<input class=blockwise value=\"".$icd_pcs_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
<div>
	<span>m.</span>
	
	<label>If other treatments provide details :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($other_treatment_exp)){

			$html .="<input class=blockwise value=\"".$other_treatment_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
</div>
<div class=margin></div>
<div>
	<span>n.</span>
	
	<label>How did injury occur :</label>&nbsp;";
	for ($i=0; $i < 30; $i++) { 
		# code...
		if($i<count($injury_occur_exp)){

			$html .="<input class=blockwise value=\"".$injury_occur_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
</div>
"; 
$html .="
<div class=center_section mt-5   formalign  style=  width: 62% id=form1>
<div class=row d-flex adjust flex-column col> 

<form  method=post>

	<div class=form-group>
		
		<div class=col d-flex flex-row aligninput  form-group>
			
			<span class=alphabet>o.</span> 
			<label class=inlinedivs for=>In case of accident : </label> 
			<span class=alphabet>i.</span>
			<label class=inlinedivs for=>Is it RTA -</label>
			<div class=form-check checkwidth>
				<input  type=radio class=form-check-input autosave rta   id=rta name=rta value=Yes checked >Yes
				<label class=inlinedivs class=form-check-label for=radio1></label>
			</div>
			
			<div class=form-check>
				<input type=radio class=form-check-input autosave rta id=rta name=rta value=No >No
				<label class=inlinedivsclass=form-check-label for=radio2 ></label>
			</div>
	 </div>
			<div class=col-md-6 aligninput form-group>

			<span class=alphabet>ii.</span>
			<label class=inlinedivsfor=>Date of Injury : </label>
			<input type=text class=form-control class autosave  name=date_injury id=date_injury  >
			
		</div>
		<div class=col-md-6 aligninput form-group>

			<span class=alphabet>iii.</span>
			<label class=inlinedivsfor=>Reported to Police : </label>
			<div class=form-check checkwidth>
				<input  type=radio class=form-check-input autosave police   id=police name=police value=Yes checked >Yes
				<label class=inlinedivsclass=form-check-label for=radio1></label>
			</div>
			<div class=form-check>
				<input type=radio class=form-check-input autosave police id=police name=police value=No >No
				<label class=inlinedivs class=form-check-label for=radio2 ></label>
			</div>
		</div>
		</div>
		<div class=col-md-6 aligninput form-group>
<span class=alphabet>b.</span>
<label class=inlinedivs for=>Injury / Disease caused due to substance abuse / alcohol consumption : </label>
<div class=form-check checkwidth>
				<input  type=radio class=form-check-input autosave alcohol   id=alcohol name=alcohol value=Yes checked >Yes
				<label class=inlinedivsclass=form-check-label for=radio1></label>
			</div>
			<div class=form-check>
				<input type=radio class=form-check-input autosave alcohol id=alcohol name=alcohol value=No >No
				<label class=inlinedivsclass=form-check-label for=radio2 ></label>
</div>
</div>

<div class=col-md-6 aligninput form-group>
<label class=inlinedivsfor=>Test Conducted to establish this :</label>
<div class=form-check checkwidth>
				<input  type=radio class=form-check-input autosave test   id=test name=test value=Yes checked >Yes
				<label class=inlinedivsclass=form-check-label for=radio1></label>
			</div>
			<div class=form-check>
				<input type=radio class=form-check-input autosave test id=test name=test value=No >No (if Yes attach reports)
				<label class=inlinedivsclass=form-check-label for=radio2 ></label>
</div>       
</div>
<div class=col-md-6 aligninput form-group>
<span class=alphabet>q.</span>

<label class=inlinedivsfor=>In case of Maternity</label>
<div class=form-check checkwidth>
<label class=inlinedivsclass=form-check-label for=checkbox></label>
<input  type=checkbox class=form-check-input autosave    id=maternity name=maternity value=Yes checked >G
</div>
			<div class=form-check checkwidth>
				<input type=checkbox class=form-check-input autosave maternity id=maternity name=maternity value=No >P
				<label class=inlinedivsclass=form-check-label for=checkbox ></label>
		</div>  
		<div class=form-check checkwidth>
						<input type=checkbox class=form-check-input autosave maternity id=maternity name=maternity value=No >L
						<label class=inlinedivs class=form-check-label for=checkbox ></label>
		</div>  
			<div class=form-check checkwidth>
							<input type= checkbox  class= form-check-input autosave maternity  id= maternity  name= maternity  value= No  >A
							<label class= inlinedivs class= form-check-label  for= checkbox  ></label>
			</div>  
</div>  
	<div class = col-md-6 aligninput>

	
	<label class= inlinedivs >Date of Delivery</label>
	<input type=text class=form-control autosave id=dod  name=dod >
</div>



<h5>TO BE FILLED BY THE INSURED/PATIENT</h5>
<h5>Details of the patient admitted </h5>
<div class=col-md-6 aligninput>
<span class=alphabet>a.</span>

<label class=inlinedivs >Date of admission : </label>
<input type=text class=form-control autosave id=doa  name=doa >
</div>
<div class=col-md-6 aligninput>
<span class=alphabet>b.</span>
<label class=inlinedivs >Time</label>
<input type=time class=form-control autosave id=time  name=time >
</div>
</div>


<div class=col-md-6 aligninput>
<span class=alphabet>c.</span>
<div class=col-md-6 aligninput>

<label class=inlinedivs >Is this an emergency / a planned hospitalization event ?</label>
<div class=form-check checkwidth>
							<input type=radio class=form-check-input autosave emergency id=emergency name=emergency value=Emergency  checked >Emergency
							<label class=inlinedivs class=form-check-label for=radio2 ></label>
</div>  
	<div class=form-check checkwidth>
								<input type=radio class=form-check-input autosave planned id=emergency  name=emergency value=Planned >Planned
								<label class=inlinedivs  class=form-check-label for=radio2 ></label>
 </div>  
</div>

</div>

<div class=col-md-6 aligninput>
<span class=alphabet>d.</span>

<label class=inlinedivs >Expected no. of days stay in hospital :</label>
<input type=text class=form-control autosave id=stay_hospital  name=stay_hospital >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>e.</span>

<label class=inlinedivs >Room Type : </label>
<input type=text class=form-control autosave id=room_type name=room_type >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>f.</span>

<label class=inlinedivs >Per Day Room Rent + Nursing & Service Charges + Patient's Diet</label>
<input type=text  class=form-control autosave rent id=rent name=rent >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>g.</span>

<label class=inlinedivs >Expected cost of Investigation + diagnostics</label>
<input type=text class=form-control autosave cost_investigation id=cost_investigation name=cost_investigation >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>h.</span>

<label class=inlinedivs >ICU Charges : </label>
<input type=text class=form-control autosave icu_charges  id=icu_charges name=icu_charges>
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>i.</span>

<label class=inlinedivs >OT Charges</label>
<input type=text class=form-control autosave ot_charges id=ot_charges name=ot_charges >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>j.</span>

<label class=inlinedivs >Professional fees Surgeon + Anaesthetist Fees + consultation Charges :</label>

<input type=text class=form-control autosave fees_charges id=fees_charges name=fees_charges >

</div>
<div class=col-md-6 aligninput>
<span class=alphabet>k.</span>

<label class=inlinedivs >Medicines + Consumables + Cost of Implants(if applicable specify)Other hospital expenses if any:</label>

</div>
<div class=col-md-6 aligninput>

<input type=text class=form-control autosave id=medicines_expense name=medicines_expense >
</div>
<div class=col-md-6 aligninput>
<span class=alphabet>l.</span>

<label class=inlinedivs >All inclusive package charges if any applicable</label>
<input type=text class=form-control autosave id=inclusive name=inclusive > 
</div>


<div class=col-md-6 aligninput>
<span class=alphabet>m.</span>

<label class=inlinedivs >Sum total expected cost of hospitalisation</label>
<input type=text class=form-control autosave id=cost_hospital name=cost_hospital >
</div class=col-md-6 aligninput>
<h6>Mandatory : Past History of any chronic illness If yes , since (month/year)</h6>

<div>

</div>

<div class=col-md-6 aligninput>
<div class=form-check checkwidth>
							<input type=checkbox class=form-check-input autosave diabetes id=diabetes name=diabetes value=No>
			</div>  
<label class=inlinedivs >Diabetes :</label>

<input type=text class=form-control autosave id=diabetes name=diabetes>
</div> 
<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
							<input type=checkbox class=form-check-input autosave heart_disease  id= heart_disease  name= heart_disease  value= No  >
			</div>  
<label class=inlinedivs >Heart Disease :</label>
<input type=text class=form-control autosave id= heart_disease  name= heart_disease >
</div> 
<div class=col-md-6 aligninput>
<div class=form-check checkwidth>
							<input type= checkbox  class= form-check-input autosave hypertension  id= hypertension  name= hypertension  value= No  >
			</div>  
<label class=inlinedivs >Hypertension :</label>
<input type=text class=form-control autosave id= hypertension  name= hypertension >
</div> 
<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
							<input type= checkbox  class= form-check-input autosave hyperlipidemias  id= hyperlipidemias  name= hyperlipidemias  value= No  >
			</div>                          
<label class=inlinedivs >Hyperlipidemias :</label>
<input type=text class=form-control autosave id= hyperlipidemias  name= hyperlipidemias  >
</div>

<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
							<input type= checkbox  class= form-check-input autosave osteoarthritis  id= osteoarthritis  name= osteoarthritis  value= No  >
			</div> 
			<label class=inlinedivs  >Osteoarthritis :</label> 
<input type=text class= form-control class   id= osteoarthritis   name= osteoarthritis >
</div>

<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
							<input type= checkbox  class= form-check-input autosave ashtma_copd_bronchitis  id= ashtma_copd_bronchitis  name= ashtma_copd_bronchitis  value= No  >
			</div>  

<label class=inlinedivs >Asthma/COPD/Bronchitis :</label>

<input type=text class= form-control autosave input_size   id= ashtma_copd_bronchitis  name= ashtma_copd_bronchitis >
</div>

<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
	  <input type= checkbox  class= form-check-input autosave cancer  id= cancer  name= cancer  value= No  >
			</div>  
		
		<label class=inlinedivs >Cancer :</label>

		<input type=text class= form-control autosave input_size    id= cancer  name= cancer >

</div>
<div class=col-md-6 aligninput>
<div class=form-check checkwidth>
							<input type=checkbox class=form-check-input autosave alcohol id=alcohol name=alcohol value=No >
			</div>  
<label class=inlinedivs >Alcohol or drug abuse :</label>
<input type=text class=form-control autosave id=alcohol_drug name=alcohol_drug>
</div>
<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
							<input type=checkbox class=form-check-input autosave alcohol id=alcohol name=alcohol value=No >
			</div>  

<label class=inlinedivs >Any HIV or STD/Related ailment :</label>

<input type=text class=form-control autosave id=hiv_std name=hiv_std >
</div>
<div class=col-md-6  aligninput>

<label class=inlinedivs  style=margin-right:12px>Any other Ailment give details :</label>
<input type=text class=form-control autosave id=aliment name=aliment >
</div>
<p>(PLEASE READ VERY CAREFULLY)</p>
<label class=inlinedivs  style=margin:auto ; margin-right:10px;>We confirm having read understood and agreed to the Declarations on the reverse of this form</label>
<div class=col-md-6 aligninput>

<span class=alphabet>a.</span>

<label class=inlinedivs >Name of the treating doctor :</label>
<input type=text class=form-control autosave id=treating_doctor name=treating_doctor >

</div>
<div class=col-md-6 aligninput>
<span class=alphabet>b.</span>

<label class=inlinedivs >Qualification :</label>
<input type=text class=form-control autosave id=qualification name=qualification >
</div>
<div class=col-md-6 aligninput>
<span class=alphabet>c.</span>

<label class=inlinedivs >Registration No. with State Code :</label>
<input type=text class=form-control autosave id=state_code name=state_code > 
</div>
<div style=display:flex;>

<div class=form-group col-md-6  style=margin-right:70px;>
<input type=text class=hospital_seal style=height: 45px;width: 12rem; margin-left: 25px; id=hospital_seal>
<p>Hospital Seal (Must include Hospital ID)</p>
<p>(IMPORTANT PLEASE TURN OVER)</p>
</div>        
<div class=form-group col-md-6 style=float:right;>
<input type=text class=patient_signature style=height: 45px;width: 12rem; margin-left: 25px; name=patient_signature id=patient_signature>
<p>Patient/Insured Name & Signature</p>
</div>
</div>
</form>
</div>";

  


	require_once __DIR__ . '/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4-L' ]);

	$mpdf->SetDisplayMode('fullwidth');
	$mpdf->WriteHTML( $html);

	$dir='C:/xampp/htdocs/Abhishek/formlayout/';     //directory to save the PDF file
	$filename  = "test.pdf";
	$mpdf->Output('pdf/'.$filename, 'I');

    // $filename= "home.pdf";         

	// $mpdf->Output();


	exit;


    ?>

</body>
</html>

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
		background-image:url(bg.jpg) ;
		
		font-size  :20px;
		background-size: 43.rem 100%;
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
		margin: 4px;
		min-width: fit-content;
	}
	.checkwidth{
		margin-right: -7rem;
	} 
	input{
		margin-right:120px;


	}
	.blockwise{
		width : 22px;
		height : 20px;
		border : none;	
		padding : 12px;
	}
	.radiobtn{
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
	.signature_left{
		width : 400px;
		height : 50px;
	}

	.signature_right{
		width : 400px;
		height : 50px;
		float : right;
	}
	
	.updown{
		margin-bottom : 10px;
	}
	.spacing{
		margin-bottom : 30px;
	}
	.alignsign{
		display: flex;	
		justify-content  : space-between;
		flex-direction  : column;
	
	}
	.hospital_div_final{

		border  :2px solid red;
		margin-right:70px;
	}
	.hospital_final{
		height: 45px;
		width: 12rem;
		 margin-left: 25px;
	}
	.doctor_sign{
		height: 45px;
		width: 12rem; size=25;
		 margin-left: 25px; 
		 border  :2px solid red;

	}
	.doctor_div{


		border  :2px solid red;
		float  :right;
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
			$police = $row['police'];
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
			$diabetes_date = $row['diabetes_date'];
			$heart_disease = $row['heart_disease'];
			$heart_disease_date = $row['heart_disease_date'];
			$hypertension = $row['hypertension'];
			$hypertension_date = $row['hypertension_date'];
			$hyperlipidemias = $row['hyperlipidemias'];
			$hyperlipidemias_date = $row['hyperlipidemias_date'];
			$osteoarthritis = $row['osteoarthritis'];
			$osteoarthritis_date = $row['osteoarthritis_date'];
			$ashtma_copd_bronchitis = $row['ashtma_copd_bronchitis'];
			$ashtma_copd_bronchitis_date = $row['ashtma_copd_bronchitis_date'];
			$cancer = $row['cancer'];
			$cancer_date = $row['cancer_date'];
			$alcohol_drug = $row['alcohol_drug'];
			$alcohol_drug_date = $row['alcohol_drug_date'];
			$hiv_std = $row['hiv_std'];
			$hiv_std_date = $row['hiv_std_date'];
			$aliment = $row['aliment'];
			$treating_doctor = $row['treating_doctor'];
			$qualification = $row['qualification'];
			$state_code = $row['state_code'];
			$hospital_seal = $row['hospital_seal'];
			$patient_signature = $row['patient_signature'];
			$patient_insured_name = $row['patient_insured_name'];
			$patient_insured_sign = $row['patient_insured_sign'];
			$contact_declaration = $row['contact_declaration'];
			$hospital_seal_final = $row['hospital_seal_final'];
			$doctor_signature = $row['doctor_signature'];
		 

			//string split
			$rta_exp = str_split($rta);
			$date_injury_exp = str_split($date_injury);
			$alcohol_exp = str_split($alcohol);
			$test_exp = str_split($test);
			$maternity_exp = str_split($maternity);
			$dod_exp = str_split($dod);
			$doa_exp = str_split($doa);
			$time_exp = str_split($time);
			$emergency_exp = str_split($emergency);
			$stay_hospital_exp = str_split($stay_hospital);
			$room_type_exp = str_split($room_type);
			$rent_exp = str_split($rent);
			$cost_investigation_exp = str_split($cost_investigation);
			$icu_charges_exp = str_split($icu_charges);
			$ot_charges_exp = str_split($ot_charges);
			$fees_charges_exp = str_split($fees_charges);
			$medicines_expense_exp = str_split($medicines_expense);
			$inclusive_exp = str_split($inclusive);
			$cost_hospital_exp = str_split($cost_hospital);
			$diabetes_exp = str_split($diabetes);
			$diabetes_date_exp = str_split($diabetes_date);
			$heart_disease_exp = str_split($heart_disease);
			$heart_disease_date_exp = str_split($heart_disease_date);
			$hypertension_exp = str_split($hypertension);
			$hypertension_date_exp = str_split($hypertension_date);

			$hyperlipidemias_exp =str_split($hyperlipidemias);
			$hyperlipidemias_date_exp = str_split($hyperlipidemias_date);
			$osteoarthritis_exp = str_split($osteoarthritis);
			$osteoarthritis_date_exp = str_split($osteoarthritis_date);
			$ashtma_copd_bronchitis_exp = str_split($ashtma_copd_bronchitis);
			$ashtma_copd_bronchitis_date_exp = str_split($ashtma_copd_bronchitis_date);
			$cancer_exp = str_split($cancer);
			$cancer_date_exp = str_split($cancer_date);
			$alcohol_drug_exp = str_split($alcohol_drug);
			$alcohol_drug_date_exp = str_split($alcohol_drug_date);
			$hiv_std_exp = str_split($hiv_std);
			$hiv_std_date_exp = str_split($hiv_std_date);
			$aliment_exp = str_split($aliment);
			$treating_doctor_exp = str_split($treating_doctor);
			$qualification_exp = str_split($qualification);
			$state_code_exp = str_split($state_code);
			$hospital_seal_exp = str_split($hospital_seal);
			$patient_signature_exp = str_split($patient_signature);
			$patient_insured_name_exp = str_split($patient_insured_name);
			$patient_insured_sign_exp = str_split($patient_insured_sign);
			$contact_declaration_exp = str_split($contact_declaration);
			$hospital_seal_final_exp = str_split($hospital_seal_final);
			$doctor_signature_exp = str_split($doctor_signature);
		}
		} else {
			echo "Something went wrong" ;
		}

		
		$html .="

	<div class=margin>
		<h4>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h4><P>(To be filled in block letters)</P>
		<div class=updown >
			
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
		
		<div class=updown >
		<span>b.</span>
	<label>Toll free phone number</label>&nbsp;";
	for ($i=0; $i < 13; $i++) { 
		# code...
		if($i<count($toll_number_exp)){

			$html .="<input height:120px; width:200px; class=blockwise value=\"".$toll_number_exp[$i]."\">";
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
	</div><br>
	

	<h4>TO BE FILLED BY THE INSURED/PATIENT</h4>
	<div class=updown>
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
		<div class=updown>
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
	
	<div class=updown>
		<span>c.</span>
		
			
			<label>Age</label>&nbsp;";
			for ($i=0; $i < 2; $i++) { 
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
			Years 
	</div>

	<div class=updown>
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

		<div class=updown>
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

	<div class=updown>
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

	<div class=updown>
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

	<div class=updown>
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

	<div class=updown>
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

	<div class=updown>
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

	<div class=updown>

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
	<div class=updown>
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


	<div class=updown>
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
		<p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>

		</div><br>
		<h4>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h4>
		
		<div class=updown>
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
		<div class=updown>
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
	<div class=updown>
		<span>c.</span>
		
		<label>Name of ILLNESS / Disease with presenting Complaints :</label>&nbsp;";
		for ($i=0; $i < 22; $i++) { 
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
	<div class=updown>
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

	<div class=updown>
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
	<div class=updown>
		<label>Date of first consultation :</label>&nbsp;";
		for ($i=0; $i < 10; $i++) { 
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
	<div class=updown>
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
	<div class=updown>
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
	<div class=updown>
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
	<div class=updown>
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
	<div class=updown>
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
	<div class=updown>
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
	<div class=updown>
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
		<div class=updown>
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
	</div><br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class=margin></div><br>
	"; 
	$html .="


			
			<div class=updown aligninput  >
				
				<span class=alphabet>o.</span> 
				<label class=inlinedivs for=>In case of accident : </label> 
				<span class=alphabet>i.</span>
				<label class=inlinedivs >Is it RTA -</label>
				";
		
			if($rta == "Yes"){

				$html .="<input type=checkbox checked=checked> Yes";
				$html .= "
				<input type=checkbox>No";
			}
			if($rta == "No"){
				$html .="<input type=checkbox> Yes";
				$html .= "
				<input type=checkbox checked=checked>No";
			}
		
		$html .= "
		</div>
				<div class=updown >

				<span class=alphabet>ii.</span>
				<label class=inlinedivsfor=>Date of Injury : </label>";
				for ($i=0; $i < 10; $i++) { 
					# code...
					if($i<count($date_injury_exp)){
			
						$html .="<input class=blockwise value=\"".$date_injury_exp[$i]."\">";
					}
					else{
						$html .= "<input  class=blockwise>";
					}
				}
			
			$html .="
			</div>
			<div class=updown aligninput >

				<span class=alphabet>iii.</span>
				<label class=inlinedivs>Reported to Police : </label>";
		
				if($police == "Yes"){
		
					$html .="<input type=checkbox checked=checked> Yes";
					$html .= "
					<input type=checkbox>No";
				}
				if($police == "No"){
					$html .="<input type=checkbox> Yes";
					$html .= "
					<input type=checkbox checked=checked>No";
				}
			
			$html .= "
			</div>
			
			<div class=updown aligninput >
	<span class=alphabet>b.</span>
	<label class=inlinedivs for=>Injury / Disease caused due to substance abuse / alcohol consumption : </label>";
					
				if($alcohol == "Yes"){

					$html .="<input type=checkbox checked=checked> Yes";
					$html .= "
					<input type=checkbox>No";
				}
				if($alcohol == "No"){
					$html .="<input type=checkbox> Yes";
					$html .= "
					<input type=checkbox checked=checked>No";
				}

	$html .= "
	</div>

	<div class=updown aligninput >
	<label class=inlinedivsfor=>Test Conducted to establish this :</label>";
		
	if($test == "Yes"){

		$html .="<input type=checkbox checked=checked> Yes";
		$html .= "
		<input type=checkbox>No";
	}
	if($test == "No"){
		$html .="<input type=checkbox> Yes";
		$html .= "
		<input type=checkbox checked=checked>No";
	}

	$html .= "
	</div>
	<div class=updown aligninput >
	<span class=alphabet>q.</span>

	<label class=inlinedivsfor=>In case of Maternity :</label>";
		
	if($maternity == "G"){

		$html .="<input type=checkbox checked=checked>";
	}

	$html .= "
	<label class=inlinedivs class=form-check-label for=checkbox>G</label>";


				if($maternity == "P"){
				
					$html .="<input type=checkbox checked=checked>";
				}
				
				$html .= "
					<label class=inlinedivs class=form-check-label checkbox >P</label>";
		
					if($maternity == "L"){
					
						$html .="<input type=checkbox checked=checked>";
					}
					
					$html .= "
							<label class=inlinedivs class=form-check-label for=checkbox >L</label>
							";
		
							if($maternity == "A"){
							
								$html .="<input type=checkbox checked=checked>";
							}
							
							$html .= "
								<label class= inlinedivs class= form-check-label  for= checkbox  >A</label>&nbsp;&nbsp;	  
		<label class= inlinedivs >Date of Delivery: </label>";
		for ($i=0; $i < 10; $i++) { 
			# code...
			if($i<count($dod_exp)){

				$html .="<input class=blockwise value=\"".$dod_exp[$i]."\">";
			}
			else{
				$html .= "<input  class=blockwise>";
			}
		}
		$html .= "

		</div>
	<h4>Details of the patient admitted </h4>
	<div class=updown aligninput>
	<span class=alphabet>a.</span>

	<label class=inlinedivs >Date of admission : </label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($doa_exp)){

			$html .="<input class=blockwise value=\"".$dod_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	<span class=alphabet>b.</span>
	<label class=inlinedivs >Time</label>";
	for ($i=0; $i < 8; $i++) { 
		# code...
		if($i<count($time_exp)){

			$html .="<input class=blockwise value=\"".$time_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>


	<div class=updown aligninput>
	<span class=alphabet>c.</span>
	

	<label class=inlinedivs >Is this an emergency / a planned hospitalization event ?</label>";
		
	if($emergency == "Emergency"){

		$html .="<input type=checkbox checked=checked> Emergency";
		$html .= "
		<input type=checkbox>Planned";
	}
	if($emergency == "Planned"){
		$html .="<input type=checkbox> Emergency";
		$html .= "
		<input type=checkbox checked=checked>Planned";
	}

	$html .= "
	</div>


	<div class=updown aligninput>
	<span class=alphabet>d.</span>

	<label class=inlinedivs >Expected no. of days stay in hospital :</label>";
	for ($i=0; $i < 4; $i++) { 
		# code...
		if($i<count($stay_hospital_exp)){

			$html .="<input class=blockwise value=\"".$stay_hospital_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>

	<div class=updown aligninput>
	<span class=alphabet>e.</span>

	<label class=inlinedivs >Room Type : </label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($room_type_exp)){

			$html .="<input class=blockwise value=\"".$room_type_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>

	<div class=updown aligninput>
	<span class=alphabet>f.</span>

	<label class=inlinedivs >Per Day Room Rent + Nursing & Service Charges + Patient's Diet</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($rent_exp)){

			$html .="<input class=blockwise value=\"".$rent_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>

	<div class=updown aligninput>
	<span class=alphabet>g.</span>

	<label class=inlinedivs >Expected cost of Investigation + diagnostics</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($cost_investigation_exp)){

			$html .="<input class=blockwise value=\"".$cost_investigation_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>

	<div class=updown aligninput>
	<span class=alphabet>h.</span>

	<label class=inlinedivs >ICU Charges : </label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($icu_charges_exp)){

			$html .="<input class=blockwise value=\"".$icu_charges_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	
	<span class=alphabet>i.</span>

	<label class=inlinedivs >OT Charges</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($ot_charges_exp)){

			$html .="<input class=blockwise value=\"".$ot_charges_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
</div>
	<div class=updown aligninput>
	<span class=alphabet>j.</span>

	<label class=inlinedivs >Professional fees Surgeon + Anaesthetist Fees + consultation Charges :</label>
	";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($fees_charges_exp)){

			$html .="<input class=blockwise value=\"".$fees_charges_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
	<div class=updown aligninput>
	<span class=alphabet>k.</span>

	<label class=inlinedivs >Medicines + Consumables + Cost of Implants(if applicable specify)Other hospital expenses if any:</label>

";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($medicines_expense_exp)){

			$html .="<input class=blockwise value=\"".$medicines_expense_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
	<div class=updown aligninput>
	<span class=alphabet>l.</span>

	<label class=inlinedivs >All inclusive package charges if any applicable</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($inclusive_exp)){

			$html .="<input class=blockwise value=\"".$inclusive_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>


	<div class= aligninput>
	<span class=alphabet>m.</span>

	<label class=inlinedivs >Sum total expected cost of hospitalisation</label>";
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($cost_hospital_exp)){

			$html .="<input class=blockwise value=\"".$cost_hospital_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	$html .= "
	</div>
	
	<div class=updown aligninput margin>
	<h4>Mandatory : Past History of any chronic illness If yes , since (month/year)</h4>
	
	</div>

	<div class=updown>
	";
	if($diabetes == "Yes"){

		$html .="<input type=checkbox checked=checked> ";
		
	}
	

	$html .= "
			
	<label class=inlinedivs >Diabetes :</label>
	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($diabetes_date_exp)){

			$html .="<input class=blockwise value=\"".$diabetes_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	

	$html .= "
	</div>
	<div class=updown aligninput>
	";

	if($heart_disease == "Yes"){

		$html .="<input type=checkbox checked=checked> ";
	}
	else{

		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "

	
	<label class=inlinedivs >Heart Disease :</label>";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($heart_disease_date_exp)){

			$html .="<input class=blockwise value=\"".$heart_disease_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	

	$html .= "
	</div>
	<div class=updown aligninput>";


	if($hypertension == "Yes"){

		$html .="<input type=checkbox checked=checked> ";
	
	}
	else if($hypertension == Null){
		$html .= "
		<input type=checkbox>";
	}
	$html .= "

	<label class=inlinedivs >Hypertension :</label>";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($hypertension_date_exp)){

			$html .="<input class=blockwise value=\"".$hypertension_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "
	</div>
	<div class=updown aligninput>
";

	if($hyperlipidemias == "Yes"){

		$html .="<input type=checkbox checked=checked> ";
	}else{

		$html .= "
		<input type=checkbox>";
	}
	
	$html .= "
                       
	<label class=inlinedivs >Hyperlipidemias :</label>";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($hyperlipidemias_date_exp)){

			$html .="<input class=blockwise value=\"".$hyperlipidemias_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "
	</div>

	<div class=updown aligninput >

	";

	if($osteoarthritis == "Yes"){

		$html .="<input type=checkbox checked=checked>";
	}else{

		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "
				<label class=inlinedivs  >Osteoarthritis :</label> ";
		
				for ($i=0; $i < 10; $i++) { 
					# code...
					if($i<count($osteoarthritis_date_exp)){
						$html .="<input class=blockwise value=\"".$osteoarthritis_date_exp[$i]."\">";
					}
					else{
						$html .= "<input  class=blockwise>";
					}
				}

$html .="
</div>
<div class=updown aligninput> 
";

	if($ashtma_copd_bronchitis == "Yes"){

		$html .="<input type=checkbox checked=checked> ";
	}else{

		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "
		

	<label class=inlinedivs>Asthma/COPD/Bronchitis :</label>

	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($ashtma_copd_bronchitis_date_exp)){
			$html .="<input class=blockwise value=\"".$ashtma_copd_bronchitis_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "	</div>

	<div class=updown aligninput>
	";

	if($cancer == "Yes"){

		$html .="<input type=checkbox checked=checked > ";
	}else{

		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "			
			
			<label class=inlinedivs >Cancer :</label>

	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($cancer_date_exp)){
			$html .="<input class=blockwise value=\"".$cancer_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "
	</div>
	<div class=updown aligninput>

	";
	
	if($alcohol_drug == "Yes"){
		
		$html .="<input type=checkbox checked=checked>";
	}else{
		
		$html .= "
		<input type=checkbox>";
	}
	
	
	$html .= "	
	
	<label class=inlinedivs >Alcohol or drug abuse :</label>
	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($alcohol_drug_date_exp)){
			$html .="<input class=blockwise value=\"".$alcohol_drug_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "
				</div>
				<div class=updown aligninput>
	";

	if($hiv_std == "Yes"){

		$html .="<input type=checkbox checked=checked> ";
		
	}
	else{
		$html .= "
		<input type=checkbox>";
	}

	$html .= "	
	<label class=inlinedivs >Any HIV or STD/Related ailment :</label>
	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($hiv_std_date_exp)){
			$html .="<input class=blockwise value=\"".$hiv_std_date_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "
	</div>
	<div class=updown  aligninput>

	<label class=inlinedivs  style=margin-right:12px>Any other Ailment give details :</label>
	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($aliment_exp)){
			$html .="<input class=blockwise value=\"".$aliment_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "	</div><br>
	<h4>DECLARATION</h4>
	<p>(PLEASE READ VERY CAREFULLY)</p>
	<div class=updown>
	<label class=inlinedivs  style=margin:auto ; margin-right:10px;>We confirm having read understood and agreed to the Declarations on the reverse of this form</label>
	</div>
	<div class=updown aligninput>

	<span class=alphabet>a.</span>

	<label class=inlinedivs >Name of the treating doctor :</label>
	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($treating_doctor_exp)){
			$html .="<input class=blockwise value=\"".$treating_doctor_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "	
	</div>
	<div class=updown aligninput>
	<span class=alphabet>b.</span>

	<label class=inlinedivs >Qualification :</label>
	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($qualification_exp)){
			$html .="<input class=blockwise value=\"".$qualification_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "	</div>
	<div class=updown aligninput>
	<span class=alphabet>c.</span>

	<label class=inlinedivs >Registration No. with State Code :</label>
	";
		
	for ($i=0; $i < 6; $i++) { 
		# code...
		if($i<count($state_code_exp)){
			$html .="<input class=blockwise value=\"".$state_code_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "	</div>
		<div class=alignsign>
				<div class=signature_left>
			<input type=text class=inlinedivs  value=\"".$hospital_seal."\">	
			<p>Hospital Seal (Must include Hospital ID)</p>
			
			<p>(IMPORTANT PLEASE TURN OVER)</p>
			</div>
	<div class=signature_right>
	<input type=text class=inlinedivs value=\"".$patient_signature."\">
	<p>Patient/Insured Name & Signature</p>
</div>

</div>

		
	";

	$html .= " 
	<div class=spacing></div>
    <div class=margin>
                                            
    <h4>
        DECLARATION BY THE PATIENT/REPRESENTATIVE:
    </h4>
</div><br>

<div class=updown aligninput>
                    <span class=alphabet>1.</span>
                    
                    <label class=inlinedivs >I agree to allow the hospital to submit all original documents pertaining to hospitalization to the Insurer / TPA after the discharge. I agree to sign on the Final Bill & the Discharge Summary, before my discharge.
</label>
                                
                </div>
<div class=updown aligninput>
                    <span class=alphabet>2.</span>
                    
                    <label class=inlinedivs >Payment to hospital is governed by the terms and conditions of the policy. In case the Insurer / TPA is not liable to settle the hospital bill, I undertake to settle the bill as per the terms and conditions of the policy.</label>
                                
                </div>

<div class=updown aligninput>
                    <span class=alphabet>3.</span>
                    
                    <label class=inlinedivs >All non-medical expenses and expenses not relevant to current hospitalization and the amounts over & above the limit authorised by the Insurer / TPA not governed by the terms and conditions of the policy will be paid by me.</label>
                                
                </div>
<div class=updown aligninput>
                    <span class=alphabet>4.</span>
                    
                    <label class=inlinedivs >I hereby declare to abide by the terms and conditions of the policy and if at any time the facts disclosed by me are found to be false or incorrect, I forfeit my claim and agree to indentify the Insurer / TPA.</label>
                                
                </div>
<div class=updown aligninput>
                    <span class=alphabet>5.</span>
                    
                    <label class=inlinedivs >I agree and understand that TPA is in no way warranting the service of the hospital & that the Insurer / TPA is in no way guaranteeing that the services provided by the hospital will be of a particular quality or standard.</label>
                                
                </div>
<div class=updown aligninput>
                    <span class=alphabet>6.</span>
                    
                    <label class=inlinedivs >I hereby warrant the truth of the forgoing particu lars in every respect and I agree that if I have made or shall make any false or untrue statement, suppression or concealment with respect to the claim, my right to claim reimbursement of the said expenses shall be absolutely forfeited.</label>
                                
                </div>
<div class=updown aligninput>
                    <span class=alphabet>7.</span>
                    
                    <label class=inlinedivs >I agree to identify the hospital against all expenses incurred on my behalf, which are not reimbursed by the Insurer / TPA. </label>
                                
                </div>
                <div class=updown aligninput>
                            
                            
                            <label >Patient's /Insured Name:</label>
							";
		
							for ($i=0; $i < 25; $i++) { 
								# code...
								if($i<count($patient_insured_name_exp)){
									$html .="<input class=blockwise value=\"".$patient_insured_name_exp[$i]."\">";
								}
								else{
									$html .= "<input  class=blockwise>";
								}
							}
							
							$html .= "</div><br>
                        <div class= updown>
                        <input type=text class=patient_insured_sign style=height: 45px;width: 12rem; margin-left: 5px; size=50 value=\"".$patient_insured_sign."\" >

						<br>
                        <label class=inlinedivs > Patient/Insured Name & Signature</label>
                        </div>
						<div class=updown></div>
                        <div class=updown aligninput>
                            <label class=inlinedivs >Contact Number :</label>
                            ";
		
							for ($i=0; $i < 9; $i++) { 
								# code...
								if($i<count($contact_declaration_exp)){
									$html .="<input class=blockwise value=\"".$contact_declaration_exp[$i]."\">";
								}
								else{
									$html .= "<input  class=blockwise>";
								}
							}
							
							$html .= "
                        </div><br>

                        <div class= aligninput  >
                                            
                                            <h4>
                                                Hospital DECLARATION
                                            </h4>
                                        </div><br>
                                        
 
    <div class=updown aligninput>
    <span class=alphabet>1.</span>
    <label class=inlinedivs >We have no objection to any authorized TPA / Insurance Company official verifying documents pertaining to hospitalization.</label>
</div>
    <div class=updown aligninput>
                    <span class=alphabet>2.</span>
                    
                    <label class=inlinedivs >All valid original documents duly countersigned by the insured I patient as per the checklist mentioned below will be sent to TPA / Insurance Company within 7 days of the patient's discharge.</label>
                                
                </div>
    <div class=updown aligninput>
                    <span class=alphabet>3.</span>
                    
                    <label class=inlinedivs >All nonmedical expenses OR expenses not relevant to hospitalization or illness OR expenses disallowed in the Authorisation Letter of the TPA / Insurance Co. OR arising out of incorrect information in the pre-authorisation form will be collected from the patient.</label>
                                
                </div>
    <div class=updown aligninput>
                    <span class=alphabet>4.</span>
                    
                    <label class=inlinedivs >WE AGREE THAT TPA / INSURANCE COMPANY WILL NOT BE LIABLE TO MAKE THE PAYMENT IN THE EVENT OF ANY DISCREPANCY BETWEEN THE FACTS IN THIS FORM AND  DISCHARGE SUMMARY or other documents.</label>
                                
                </div>
    <div class=updown aligninput>
                    <span class=alphabet>5.</span>
                    
                    <label class=inlinedivs >The patient declaration has been signed by the patient or by his representative in our presence.</label>
                                
                </div>
<div class=updown aligninput>
                    <span class=alphabet>6.</span>
                    
                    <label class=inlinedivs >We agree to provide clarifications for the queries raised regarding this hospitalization and we take the sole responsibility for any delay in offering clarifications.</label>
                                
</div>
<div class=updown aligninput>
                    <span class=alphabet>7.</span>
                    
                    <label class=inlinedivs >We will abide by the terms and conditions agreed in the MOU.</label>
                                
</div>


                        <div class= updown hospital_div_final>
                            <input type=text  class=hospital_final value=\"".$hospital_seal_final."\"  size=25>
                            <p style=margin-left:75px>Hospital Seal </p>
                     
                        </div>       
                        <div class= updown doctor_div>
                        <input type=text class=doctor_sign value=\"".$doctor_signature."\">
                            <p style=margin-left:65px>Doctor's Signature</p>
 						</div>


</div><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


";
$html .="


			<div class=margin  formdesign style=  width: 62%;>
							<div class= adjust > 
					
						
 
									<div class= aligninput  >

						 <h4>
						DOCUMENTS TO BE PROVIDED BY THE HOSPITAL IN SUPPORT OF THE CLAIM
						</h4>

									 </div>
												
			<div class=aligninput>
							<span class=alphabet>1.</span>
							
							<label class=inlinedivs >Detailed Discharge Summary and all Bills from the hospital .
			</label>
										
			 </div>
			
			<div class=aligninput>
							<span class=alphabet>2.</span>
							
							<label class=inlinedivs >Cash Memos from the Hospitals / Chemists supported by proper prescription
			</label>
										
			 </div>
			
				<div class=aligninput>
								<span class=alphabet>3.</span>
								
								<label class=inlinedivs >Receipts and Pathological Test Reports from Pathologists , Supported by note from the attending Medical Practitioner I  Surgeon recommending such pathological Tests.
				</label>
											
				 </div>

							
				<div class=aligninput>
								<span class=alphabet>4.</span>
								
								<label class=inlinedivs >Surgeon's Certificate stating nature of operation performed and Surgeon's Bill and Receipt.
				</label>
											
				 </div>
				<div class=aligninput>
								<span class=alphabet>5.</span>
								
								<label class=inlinedivs >Certificates from attending Medical Practitioner / Surgeon that the patient is fully cured.
				</label>
											
  				</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class=aligninput>
<label  class=inlinedivs>Aditya Birla Health Insurance Co. Limited. IRDAI Reg.153. CIN No. U66000MH2015PLC263677</label>
</div>
<div class=aligninput>

<label style=margin-right  : 10px><strong>Address:-</strong>10th Floor, R-Tech Park, Nirlon Compound, Next to HUB Mall, Off Western Express Highway, Goregaon East, Mumbai - 400 063<br>
Telephone: +91 22 6225 7600, Fax: +91 22 6225 7700. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. Aditya Birla Health Logo is owned by its respective Owners and Used under license by us. </label>
</div>
</div>

</div>
</div>
";
	


		require_once __DIR__ . '/vendor/autoload.php';

		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => [405, 505]]);

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
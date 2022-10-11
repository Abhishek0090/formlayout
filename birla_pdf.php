
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
			$heart_disease_exp = str_split($heart_disease_date);
			$heart_disease_date_exp = str_split($heart_disease);
			$hypertension_exp = str_split($hypertension);
			$hypertension_date_exp = str_split($hypertension_date);
			$hyperlipidemias_exp =str_split('hyperlipidemias');
			$hyperlipidemias_date_exp = str_split('hyperlipidemias_date');
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

		<div>
			
			<div class=col d-flex flex-row aligninput  >
				
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
				<div class=col-md-6 aligninput form-group>

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
				$html .= "
			</div>
			"; 
			$html .="</div>
			<div class=col-md-6 aligninput form-group>

				<span class=alphabet>iii.</span>
				<label class=inlinedivsfor=>Reported to Police : </label>";
		
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
				</div>
			<div class=col-md-6 aligninput form-group>
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

	<div class=col-md-6 aligninput form-group>
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
	<div class=col-md-6 aligninput form-group>
	<span class=alphabet>q.</span>

	<label class=inlinedivsfor=>In case of Maternity :</label>";
		
	if($maternity == "G"){

		$html .="<input type=checkbox checked=checked>";
	}

	$html .= "
	<label class=inlinedivsclass=form-check-label for=checkbox>G</label>";


				if($maternity == "P"){
				
					$html .="<input type=checkbox checked=checked>";
				}
				
				$html .= "
					<label class=inlinedivs class=form-check-label for=checkbox >P</label>";
		
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

	<h5>TO BE FILLED BY THE INSURED/PATIENT</h5>
	<h5>Details of the patient admitted </h5>
	<div class=col-md-6 aligninput>
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


	<div class=col-md-6 aligninput>
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

	</div>

	<div class=col-md-6 aligninput>
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

	<div class=col-md-6 aligninput>
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

	<div class=col-md-6 aligninput>
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

	<div class=col-md-6 aligninput>
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

	<div class=col-md-6 aligninput>
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
	</div>
	<div class=col-md-6 aligninput>
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

	<div class=col-md-6 aligninput>
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
	<div class=col-md-6 aligninput>
	<span class=alphabet>k.</span>

	<label class=inlinedivs >Medicines + Consumables + Cost of Implants(if applicable specify)Other hospital expenses if any:</label>

	</div>
	<div class=col-md-6 aligninput>";
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
	<div class=col-md-6 aligninput>
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


	<div class=col-md-6 aligninput>
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
	<div class=margin>
	<div class=col-md-6 aligninput margin>
	<h6>Mandatory : Past History of any chronic illness If yes , since (month/year)</h6>";

	if($diabetes == "Diabetes"){

		$html .="<input type=checkbox checked=checked> Diabetes";
		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "
				</div>  
				<div class=col-md-6 aligninput>
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
	<div class=col-md-6 aligninput>
	";

	if($diabetes == "Diabetes"){

		$html .="<input type=checkbox checked=checked> Diabetes";
		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "
	</div>
	<div class=col-md-6 aligninput>
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
	<div class=col-md-6 aligninput>";


	if($hypertension == "hypertension"){

		$html .="<input type=checkbox checked=checked> hypertension";
		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "
	</div>  
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
	<div class=col-md-6 aligninput>

	<div class=form-check checkwidth>";

	if($hyperlipidemias == "hyperlipidemias"){

		$html .="<input type=checkbox checked=checked> hyperlipidemias";
		$html .= "
		<input type=checkbox>";
	}
	
	$html .= "
		</div>                          
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

	<div class=col-md-6 aligninput>

	<div class=form-check checkwidth>";

	if($osteoarthritis == "osteoarthritis"){

		$html .="<input type=checkbox checked=checked> osteoarthritis";
		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "
	</div>
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
				
				$html .= "
	</div>

	<div class=col-md-6 aligninput>

	<div class=form-check checkwidth>";

	if($ashtma_copd_bronchitis == "ashtma_copd_bronchitis"){

		$html .="<input type=checkbox checked=checked> ashtma_copd_bronchitis";
		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "
				</div>  

	<label class=inlinedivs >Asthma/COPD/Bronchitis :</label>

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

	<div class=col-md-6 aligninput>

	<div class=form-check checkwidth>
	";

	if($cancer == "cancer"){

		$html .="<input type=checkbox checked=checked> cancer";
		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "				</div>  
			
			<label class=inlinedivs >Cancer :</label>

			<input type=text class= form-control autosave input_size    id= cancer  name= cancer >

	</div>
	<div class=col-md-6 aligninput>
	<div class=form-check checkwidth>
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
	<label class=inlinedivs >Alcohol or drug abuse :</label>
	";

	if($alcohol_drug == "alcohol_drug"){

		$html .="<input type=checkbox checked=checked> alcohol_drug";
		$html .= "
		<input type=checkbox>";
	}
	

	$html .= "		</div>
	<div class=col-md-6 aligninput>

	<div class=form-check checkwidth>
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

	";

	if($hiv_std == "hiv_std"){

		$html .="<input type=checkbox checked=checked> hiv_std";
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
	<div class=col-md-6  aligninput>

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
	
	$html .= "	</div>
	<p>(PLEASE READ VERY CAREFULLY)</p>
	<label class=inlinedivs  style=margin:auto ; margin-right:10px;>We confirm having read understood and agreed to the Declarations on the reverse of this form</label>
	<div class=col-md-6 aligninput>

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
	<div class=col-md-6 aligninput>
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
	<div class=col-md-6 aligninput>
	<span class=alphabet>c.</span>

	<label class=inlinedivs >Registration No. with State Code :</label>
	";
		
	for ($i=0; $i < 10; $i++) { 
		# code...
		if($i<count($state_code_exp)){
			$html .="<input class=blockwise value=\"".$state_code_exp[$i]."\">";
		}
		else{
			$html .= "<input  class=blockwise>";
		}
	}
	
	$html .= "	</div>
	<div style=display:flex;>

	<div class=form-group col-md-6  style=margin-right:70px;>

	<input type=text class=hospital_seal style=height: 45px;width: 12rem; margin-left: 25px; id=hospital_seal value=\"".$state_code_exp[$i]."\">
	<p>Hospital Seal (Must include Hospital ID)</p>
	<p>(IMPORTANT PLEASE TURN OVER)</p>
	</div>        
	<div class=form-group col-md-6 style=float:right;>
	<input type=text class=patient_signature style=height: 45px;width: 12rem; margin-left: 25px; name=patient_signature id=patient_signature value=\"".$patient_signature_exp[$i]."\">
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
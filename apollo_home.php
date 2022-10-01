
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
	background-image:url(apollo/apollo.jpg);
	

	background-size: 10rem 5rem;
}
.margin{
	padding-top:50px;
	
	
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

input:checked {
	height: 50px;
	width: 50px;
  }
  h6,h3{
    text-align:center;
    text-decoration : underline;
  }
  p{
    text-align : center;
  }
</style>';
	
	$link = mysqli_connect("localhost","root","","birlaform");
	$no = 0;
	$q = "SELECT * FROM `apollo` ORDER BY id DESC";
	$res = mysqli_query($link,$q);
	
	$row = mysqli_num_rows($res);
	
    
   //for admin
	if($row > 0) { 
	if($row = mysqli_fetch_assoc($res) ) {


		//admin 
		$name_company_apollo = $row['name_company_apollo'];
        $toll_number_apollo = $row['toll_number_apollo'];
        $toll_fax_apollo = $row['toll_fax_apollo'];
        $name_hospital_apollo = $row['name_hospital_apollo'];
        $address_apollo  = $row['address_apollo'];
        $rohiniid_apollo  = $row['rohiniid_apollo'];
        $emailid_apollo  = $row['emailid_apollo'];

		//string split using split func
        $name_company_exp = str_split($name_company_apollo);
        $toll_number_exp = str_split($toll_number_apollo);
		$toll_fax_exp = str_split($toll_fax_apollo);
        $name_hospital_exp = $row['name_hospital_apollo'];
        $address_exp  = $row['address_apollo'];
        $rohiniid_exp  = $row['rohiniid_apollo'];
        $emailid_exp  = $row['emailid_apollo'];
    

		//patient

		$employeeid_apollo = $row['employeeid_apollo'];
        $name_patient_apollo = $row['name_patient_apollo'];
        $gender_apollo = $row['gender_apollo'];
        $age_apollo = $row['age_apollo'];
        $dob_apollo = $row['dob_apollo'];
        $contact_patient_apollo = $row['contact_patient_apollo'];
        $contact_relative_apollo = $row['contact_relative_apollo'];
        $insured_number_apollo = $row['insured_number_apollo'];
        $policy_number_apollo = $row['policy_number_apollo'];
        $mediclaim_apollo = $row['mediclaim_apollo'];
        $company_name_apollo = $row['company_name_apollo'];
        $give_details_apollo = $row['give_details_apollo'];
        $physician_apollo = $row['physician_apollo'];
        $name_physician_apollo = $row['name_physician_apollo'];
        $contact_physician_apollo = $row['contact_physician_apollo'];
        $address_patient_apollo = $row['address_patient_apollo'];
        $occupation_patient_apollo = $row['occupation_patient_apollo'];

		//split into string char
        $employeeid_exp = str_split($employeeid_apollo);
		$name_patient_exp = str_split($name_patient_apollo);
		$gender_exp = str_split($gender_apollo);
		$age_exp = str_split($age_apollo);
		$dob_exp = str_split($dob_apollo);
		$contact_patient_exp = str_split($contact_patient_apollo);
		$contact_relative_exp = str_split($contact_relative_apollo);
		$insured_number_exp = str_split($insured_number_apollo);
		$policy_number_exp = str_split($policy_number_apollo);
		$mediclaim_exp = str_split($mediclaim_apollo);
		$company_name_exp = str_split($company_name_apollo);
		$physician_exp = str_split($physician_apollo);
		$name_physician_exp = str_split($name_physician_apollo);
		$contact_physician_exp = str_split($contact_physician_apollo);
		$address_patient_exp = str_split($contact_physician_apollo);
		$contact_physician_exp = str_split($contact_physician_apollo);
		
		//doctor
		$name_doctor_apollo = $row['name_doctor_apollo'];
        $contact_doctor_apollo = $row['contact_doctor_apollo'];
        $nature_illness_apollo = $row['nature_illness_apollo'];
        $relevant_apollo = $row['relevant_apollo'];
        
       
		//split into string char
        $name_doctor_exp = str_split($name_doctor_apollo);
		$contact_doctor_exp = str_split($contact_doctor_apollo);
		$nature_illness_exp = str_split($nature_illness_apollo);
		$relevant_exp = str_split($relevant_apollo);
		

	}
	} else {
        echo "Something went wrong" ;
	}

	
	$html .="

<div class=margin>
<div class=form-group>
<h6 style=text-align : center ;    text-decoration: underline;>REQUEST FOR CASHLESS HOSPILISATION FOR HEALTH INSURANCE<br> POLICY PART-C(Revised)</h6><P style=text-align : center  ;  text-decoration: underline;>(To be filled in block letters)</P>
<h6  style=text-decoration: underline, text-align : center>DETAILS OF THE THIRD PARTY ADMINISTRATOR/INSURER/HOSPITAL:</h6>
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
</div>


</div>
	
 </div>
	<div>
	<span>c.</span>

<label>Toll free Fax</label>&nbsp; &nbsp;"; 
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
<div >
<span>d.</span>

<label>Name of Hospital</label>&nbsp;
";
for ($i=0; $i < 30; $i++) { 
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

<span >i.</span>

<label>Address</label>&nbsp;";
for ($i=0; $i < 30; $i++) { 
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
<div >

<span >ii.</span>

<label>Rohini</label>&nbsp;
";
for ($i=0; $i < 30; $i++) { 
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

<span >iii.</span>

<label>Email id</label>&nbsp;
";
for ($i=0; $i < 30; $i++) { 
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
	for ($i=0; $i < 9; $i++) { 
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
	if($physician_apollo == "Yes"){

		$html .="<input type=checkbox checked=checked> Yes";
		$html .= "
		<input type=checkbox>No";
	}
	if($physician_apollo == "No"){
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


	<h3>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h3>
	
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
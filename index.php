<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="refresh" content = "600">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="apollo.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>      <title>Document</title>
</head>
<body>
    <div >
        
            <div class="left_section">
                        <select class="form-select"  style = "width:80%" ; aria-label="Default select example">
            <option selected>Select Patient</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            <br>

                <select class="form-select" id = "select_form"  style = "width:80%" ; aria-label="Default select example">
                    <option selected value="1">Select Category</option>
                    <option  value="1">Aditya Birla</option>
                    <option value="Alankit">Alankit</option>
                    <option value="Anmol">Anmol</option>
                    <option value="Apollo">Apollo</option>
                
                </select>
     
             </div>
       
       
        <div class="top_section col-2 mt-2 " >
                <button class="btn btn-warning ">Next</button>
                <button class="btn btn-dark" >Prev</button>
                <button class="btn btn-success" >Auto Save</button>
        </div>


                    <div id="Anmol" class="center_section data"><img class="image" src="Anmol/1.png" alt=""> </div>
                    <div id="Alankit" class=" center_section data"><img class="image" src="Alankit/1.png" alt=""> </div>
                     
                    
                    <!-- for apollo -->

            <div id="Apollo" class="data">
            <div class="center_section mt-5  formalign1">
                                    <div class="row d-flex flex-column col"> 
                   <form  method="post">

                    <div class="form-group">
                        <h6 style="text-align : center ;    text-decoration: underline;";>REQUEST FOR CASHLESS HOSPILISATION FOR HEALTH INSURANCE<br> POLICY PART-C(Revised)</h6><P style="text-align : center  ;  text-decoration: underline;";>(To be filled in block letters)</P>
                        <h6  style="text-decoration: underline; text-align : center ;   ">DETAILS OF THE THIRD PARTY ADMINISTRATOR/INSURER/HOSPITAL:</h6>
                        <div class="col d-flex flex-row aligninput  form-group">
                            
                            <span class="alphabet">a.</span> <label>Name of TPA/Insurance Company : </label> <input type="text" class="form-control class autosave"  name="name_company_apollo" id="name_company_apollo"  >
                        </div>
                        <div class="col-md-6 aligninput form-group">
                            <span class="alphabet">b.</span>
                            <label for="">Toll free phone number</label>
                    <input type="text" class="form-control class autosave"  name="toll_number_apollo" id="toll_number_apollo"  >
                </div>
                <div class="col-md-6 aligninput form-group">
                        <span class="alphabet">c.</span>

                    <label for="">Toll free Fax</label>
                    <input type="text" class="form-control class autosave"   name="toll_fax_apollo" id="toll_fax_apollo" >
                    </div>
                    
                <div class="col-md-6 aligninput form-group">
                        <span class="alphabet">d.</span>

                    <label for="">Name of Hospital</label>
                    
                    <input type="text" class="form-control class autosave"   name="name_hospital_apollo" id="name_hospital_apollo" >
                </div>
                    <div class="col-md-6 aligninput form-group">

                        <span class="alphabet">i.</span>
                        
                        <label for="">Address</label>
                        <input type="text" class="form-control class autosave"   name="apollo_address_apollo" id="name_hospital_apollo" >
                        
                    </div>
                    <div class="col-md-6 aligninput ">

                        <span class="alphabet">ii.</span>
                        
                        <label for="">Rohini</label>
                        <input type="text" class="form-control class autosave"   name="rohini_id_apollo" id="rohini_id_apollo" >
                    </div>
                    <div class="col-md-6 aligninput ">

                        <span class="alphabet">iii.</span>
                        
                        <label for="">email id</label>
                        <input type="text" class="form-control class autosave"   name="email_hospital_apollo" id="email_hospital_apollo" >
                    </div>
                </div>
                    

                </div>
                
                <h5 style="text-align : center ;  text-decoration: underline; ">TO BE FILLED BY THE INSURED/PATIENT</h5>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">a.</span>
                    
                    <label for="">Name of the Patient</label>
                    <input type="text" class="form-control class autosave"  name="name_patient_apollo"  id="name_patient_apollo">
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">b.</span>
                    <label for="">Gender</label>
                    
                    <div class="form-check checkwidth">
                        <input  type="radio" class="form-check-input autosave gender_apollo"   id="gender_apollo" name="gender_apollo" value="Male" checked >Male
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
            <input type="radio" class="form-check-input autosave gender_apollo" id="gender_apollo" name="gender_apollo" value="Female" >Female
            <label class="form-check-label" for="radio2" ></label>
        </div>
                    <div class="form-check">
            <input type="radio" class="form-check-input autosave gender_apollo" id="gender_apollo" name="gender_apollo" value="Third Gender" >Third Gender
            <label class="form-check-label" for="radio3" ></label>
        </div>
    </div>



<div class="col-md-6 aligninput">
    <span class="alphabet">c.</span>
    <div class="age aligninput">
        
        <label for="">Age</label>
                        <input type="text" class="form-control autosave" id="age_apollo" name="age_apollo" > 
                        
                    </div>
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">d.</span>
                    
                    <label for="">Date of Birth</label>
                    <input type="text" class="form-control autosave" id="dob_apollo"  name="dob_apollo" >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">e.</span>
                    
                    <label for="">Contact Number</label>
                    <input type="text" class="form-control autosave" id="contact_patient_apollo" name="contact_patient_apollo" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">f.</span>

                <label for="">Contact number of attending relative</label>
                <input type="text" class="form-control autosave" id="contact_relative_apollo" name="contact_relative_apollo" >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">g.</span>
                    
                    <label for="">Insured Card ID number</label>
                    <input type="text" class="form-control autosave" id="insured_number_apollo" name="insured_number_apollo"_apollo >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">h.</span>
                    
                    <label for="">Policy number / Name of corporate</label>
                    <input type="text" class="form-control autosave" id="policy_number_apollo" name="policy_number_apollo" ">
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">i.</span>
                
                <label for="">Employee ID</label>
                <input type="text" class="form-control autosave" id="employeeid_apollo" name="employeeid_apollo" >
            </div>
            
            <div class="col-md-6 aligninput">
                <span class="alphabet">j.</span>

                <label for="">Currently do you have any other Mediclaim/Health insurance</label>
                <div class="form-check checkwidth">
                    <input  type="radio" class="form-check-input autosave mediclaim_apollo"   id="mediclaim_apollo" name="mediclaim_apollo" value="Yes" checked >Yes
                    <label class="form-check-label" for="radio1"></label>
                </div>
            <div class="form-check">
                <input type="radio" class="form-check-input autosave mediclaim_apollo" id="mediclaim_apollo" name="mediclaim_apollo" value="No" >No
            <label class="form-check-label" for="radio2" ></label>
        </div>
        
    </div>
    <div class="col-md-6 aligninput">
        <span class="alphabet">i.</span>

                    <label for="">Company Name:</label>
                    <input type="text" class="form-control autosave" id="company_name_apollo" name="company_name_apollo" >
</div>
<div class="col-md-6 aligninput" >
                    <span class="alphabet">ii.</span>
                    <label for="">Give details</label>
                    <input type="text" class="form-control autosave" id="give_details_apollo" name="give_details_apollo" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">k.</span>
                    
                    <label for="">Do you have any family  physician</label>
                    <div class="form-check checkwidth">
                        <input  type="radio" class="form-check-input autosave physician_apollo"   id="physician_apollo" name="physician_apollo" value="Yes" checked >Yes
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input autosave physician_apollo" id="physician_apollo" name="physician_apollo" value="No" >No
                        <label class="form-check-label" for="radio2" ></label>
                    </div>
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">l.</span>
                    
                    <label for="">Name of the family physician</label>
                    <input type="text" class="form-control autosave" id="name_physician_apollo" name="name_physician_apollo" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">m.</span>
                
                <label for="">Contact number if any :</label>
                <input type="text" class="form-control autosave" id="contact_physician_apollo" name="contact_physician_apollo" >
                    </div>


                <div class="col-md-6 aligninput">
                <span class="alphabet">n.</span>
                
                <label for="">Current Address of Insured Patient :</label>
                <input type="text" class="form-control autosave" id="contact_physician_apollo" name="contact_physician_apollo" >
                    </div>
                <div class="col-md-6 aligninput">
                <span class="alphabet">o.</span>
                
                <label for="">Occupation of Insured Patient :</label>
                <input type="text" class="form-control autosave" id="contact_physician_apollo" name="contact_physician_apollo" >
                    </div>
                    
                    
                    <p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>
                    
                    
                    <h5 style="text-align : center ; text-decoration: underline;  ">TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h5>
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">a.</span>
                        
                        <label for="">Name of the treating doctor :</label>
                        
                        <input type="text" class="form-control autosave" id="name_doctor_apollo" name="name_doctor_apollo">
                    </div> 
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">b.</span>
                        
                        <label for="">Contact number:</label>
                        <input type="text" class="form-control autosave" id="contact_doctor_apollo" name="contact_doctor_apollo">
                    </div> 
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">c.</span>
                        
                        <label for="">Name of ILLNESS / Disease with presenting Complaints :</label>
                        <input type="text" class="form-control autosave" id="nature_illness_apollo" name="nature_illness_apollo" >
                    </div> 
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">d.</span>
                        
                        <label for="">Relevant clinical findings :</label>
                        <input type="text" class="form-control autosave" id="relevant_apollo" name="relevant_apollo" >
                    </div>
                   
            <div class="form-group">  
                    <input type="hidden" name="post_id" id="post_id" />  
                     <div id="autoSave"></div> 
                     
                    </div>  
                    
                </div>
               
            </form>
        
<div  class="right_section">
                
                <h4 style="text-align : center";>Pdf Preview</h4>
                <iframe src="apollo_home.php" width="100%" height="600" id="refresh" title="pdf preview">
                    </iframe>
     
        </div> 
</div>
           
       

   <!-- Aditya Birla -->
                         <div  id="1" class="data">
                    <div class="center_section mt-5   formalign ">
                        <div class="row d-flex adjust flex-column col"> 
                
                            <form  method="post">

                    <div class="form-group">
                        <h5>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h5><P>(To be filled in block letters)</P>
                        <div class="col d-flex flex-row aligninput  form-group">
                            
                            <span class="alphabet">a.</span> <label for="">Name of TPA/Insurance Company : </label> <input type="text" class="form-control class autosave"  name="name_company" id="name_company"  >
                        </div>
                        <div class="col-md-6 aligninput form-group">
                            <span class="alphabet">b.</span>
                            <label for="">Toll free phone number</label>
                    <input type="text" class="form-control class autosave"  name="toll_number" id="toll_number"  >
                </div>
                <div class="col-md-6 aligninput form-group">
                        <span class="alphabet">c.</span>

                    <label for="">Toll free Fax</label>
                    <input type="text" class="form-control class autosave"   name="toll_fax" id="toll_fax" >
                    </div>
                    

                </div>
                
                <h5>TO BE FILLED BY THE INSURED/PATIENT</h5>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">a.</span>
                    
                    <label for="">Name of the Patient</label>
                    <input type="text" class="form-control class autosave"  name="name_patient"  id="name_patient">
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">b.</span>
                    <label for="">Gender</label>
                    
                    <div class="form-check checkwidth">
                        <input  type="radio" class="form-check-input autosave gender"   id="gender" name="gender" value="Male" checked >Male
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
            <input type="radio" class="form-check-input autosave gender" id="gender" name="gender" value="Female" >Female
            <label class="form-check-label" for="radio2" ></label>
        </div>
    </div>
</div>


<div class="col-md-6 aligninput">
    <span class="alphabet">c.</span>
    <div class="age aligninput">
        
        <label for="">Age</label>
                        <input type="text" class="form-control autosave" id="age" name="age" > 
                        &nbsp;<label>Years
                    </label>
                    </div>

                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">d.</span>
                    
                    <label for="">Date of Birth</label>
                    <input type="date" class="form-control autosave" id="dob"  name="dob" >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">e.</span>
                    
                    <label for="">Contact Number</label>
                    <input type="text" maxlength="10" class="form-control autosave" id="contact_patient" name="contact_patient" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">f.</span>

                <label for="">Contact number of attending relative</label>
                <input type="text" maxlength="10" class="form-control autosave" id="contact_relative" name="contact_relative" >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">g.</span>
                    
                    <label for="">Insured Card ID number</label>
                    <input type="text" class="form-control autosave" id="insured_number" name="insured_number" >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">h.</span>
                    
                    <label for="">Policy number / Name of corporate</label>
                    <input type="text" class="form-control autosave" id="policy_number" name="policy_number" ">
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">i.</span>
                
                <label for="">Employee ID</label>
                <input type="text" class="form-control autosave" id="employeeid" name="employeeid" >
            </div>
            
            <div class="col-md-6 aligninput">
                <span class="alphabet">j.</span>

                <label for="">Currently do you have any other Mediclaim/Health insurance</label>
                <div class="form-check checkwidth">
                    <input  type="radio" class="form-check-input autosave mediclaim"   id="mediclaim" name="mediclaim" value="Yes" checked >Yes
                    <label class="form-check-label" for="radio1"></label>
                </div>
            <div class="form-check">
                <input type="radio" class="form-check-input autosave mediclaim" id="mediclaim" name="mediclaim" value="No" >No
            <label class="form-check-label" for="radio2" ></label>
        </div>
        
    </div>
    <div class="col-md-6 aligninput">
        <span class="alphabet">k.</span>

                    <label for="">Company Name:</label>
                    <label for="">Give details</label>
                    <input type="text" class="form-control autosave" id="company_name" name="company_name" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">l.</span>
                    
                    <label for="">Do you have any family  physician</label>
                    <div class="form-check checkwidth">
                        <input  type="radio" class="form-check-input autosave physician"   id="physician" name="physician" value="Yes" checked >Yes
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input autosave physician" id="physician" name="physician" value="No" >No
                        <label class="form-check-label" for="radio2" ></label>
                    </div>
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">m.</span>
                    
                    <label for="">Name of the family physician</label>
                    <input type="text" class="form-control autosave" id="name_physician" name="name_physician" >
                </div>
                <div class="col-md-6 aligninput">
                <span class="alphabet">n.</span>
                
                <label for="">Contact number if any :</label>
                <input type="text" maxlength="10" class="form-control autosave" id="contact_physician" name="contact_physician" >
                    </div>
                    
                    
                    <p>PLEASE COMPLETE DECLARATION ON THE REVERSE SIDE OF THIS FORM</p>
                    
                    
                    <h5>TO BE FILLED BY THE TREATING DOCTOR/HOSPITAL</h5>
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">a.</span>
                        
                        <label for="">Name of the treating doctor :</label>
                        
                        <input type="text" class="form-control autosave" id="name_doctor" name="name_doctor">
                    </div> 
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">b.</span>
                        
                        <label for="">Contact number:</label>
                        <input type="text" maxlength="10" title="Please enter valid phone number" class="form-control autosave" id="contact_doctor" name="contact_doctor">
                    </div> 
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">c.</span>
                        
                        <label for="">Name of ILLNESS / Disease with presenting Complaints :</label>
                        <input type="text" class="form-control autosave" id="nature_illness" name="nature_illness" >
                    </div> 
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">d.</span>
                        
                        <label for="">Relevant clinical findings :</label>
                        <input type="text" class="form-control autosave" id="relevant" name="relevant" >
                    </div>
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">e.</span>
                    
                        <label for="">Duration of the present ailment :</label> 
                        <input type="text" class="form-control class d-flex flex-row-reverse" id="duration"  name="duration"  >
                    <span>Days</span>
                </div>

                    <label for="">Date of first consultation :</label>
                    <input type="date" class="form-control autosave input_size" style="width:40%"; id="date_consultation" name="date_consultation"  >
                    
                    <label for="">Past history of present ailment if any :</label>
                    <input type="text" class="form-control autosave input_size"   style="width:40%"; id="past_history" name="past_history">

                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">f.</span>
                        
                        <label for="">Provisional diagnosis :</label>
                    <input type="text" class="form-control autosave" id="diagnosis" name="diagnosis">
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">g.</span>
                    
                    <label for="">ICD 10 Code :</label>
                    <input type="text" maxlength="10" class="form-control autosave" id="icd_code" name="icd_code" >
                </div>
                <div class="col-md-6  aligninput">
                    <span class="alphabet">h.</span>
                    
                    <label for="" style="margin-right:12px";>Proposed line of treatment :</label>
                </div>
                <label for="" style="margin:auto ; margin-right:10px;">Medical Management Surgical Management Intensive care Investigation Non allopathic treatment.</label>
                <input type="text" class="form-control autosave input_size "   style="width:50%"; id="line_treatment" name="line_treatment" >
                <div class="col-md-6 aligninput" >
                    <span class="alphabet">I.</span>
                    
                    <label for="">If Investigation &/or Medical Management provide :</label>
                    <input type="text" class="form-control autosave" id="invest_medical" name="invest_medical" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">j.</span>
                    
                    <label for="">Route of drug administration :</label>
                    <input type="text" class="form-control autosave" id="route_drug" name="route_drug" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">k.</span>
                    
                    <label for="">If Surgical, name of surgery :</label>
                    <input type="text" class="form-control autosave" id="name_surgery" name="name_surgery" > 
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">l.</span>
                    
                    <label for="">ICD 10 PCS Code :</label>
                    <input type="text" maxlength="10" class="form-control autosave" id="icd_pcs" name="icd_pcs" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">m.</span>
                    
                    <label for="">If other treatments provide details :</label>
                    <input type="text" class="form-control autosave" id="other_treatment" name="other_treatment" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">n.</span>
                    
                    <label for="">How did injury occur :</label>
                    <input type="text" class="form-control autosave" id="injury_occur" name="injury_occur" >
                </div>
              
                
                
               
                <div class="form-group">  
                    <input type="hidden" name="post_id" id="post_id" />  
                     <div id="autoSave"></div>  
                    </div>  
                </div>
                
            </form>
        
            
            
            <div class="right_section">
                
                
                <h4 style="text-align : center";>Pdf Preview</h4>
                <iframe src="home.php" width="100%" height="600" id="refreshpdf" title="pdf preview">
                    </iframe>
     
        </div>
</div>
       
    </div>
</div>
<div class="bottom_section">
    
    <button class = "btn btn-success"><a href="home.php" class= "auto" style="text-decoration:none ; color : white"; target="_blank" onclick=download();>Download pdf</a></button>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script>
  
$(document).ready(function () {

    //select change

    $('#select_form').change(function (){
        $('.data').hide();
        $('#'+$(this).val()).fadeIn(400);
    }).change();

   

      $('.autosave').change(function () { 
     
        
            var gender = [];
            var mediclaim = [];
            var physician = [];
          
        
            var gender_apollo = [];
            var mediclaim_apollo = [];
            var physician_apollo = [];
          

            $(".gender").each(function(){
            if($(this).is(":checked")){
                gender.push($(this).val());
            }
            });

            $(".mediclaim").each(function(){
            if($(this).is(":checked")){
                mediclaim.push($(this).val());
            }
            });

            $(".physician").each(function(){
            if($(this).is(":checked")){
                physician.push($(this).val());
            }
            });


            $(".gender_apollo").each(function(){
            if($(this).is(":checked")){
                gender_apollo.push($(this).val());
            }
            });

            $(".mediclaim_apollo").each(function(){
            if($(this).is(":checked")){
                mediclaim_apollo.push($(this).val());
            }
            });

            $(".physician_apollo").each(function(){
            if($(this).is(":checked")){
                physician_apollo.push($(this).val());
            }
            });
            gender = gender.toString();
            mediclaim = mediclaim.toString();
            physician = physician.toString();

            gender_apollo = gender_apollo.toString();
            mediclaim_apollo = mediclaim_apollo.toString();
            physician_apollo = physician_apollo.toString();

            var name_company = $('#name_company').val();
           var toll_number = $('#toll_number').val();  
      
           var toll_fax = $('#toll_fax').val();  
           
           var name_patient = $('#name_patient').val();  
       
           var age = $('#age').val();  
           var dob = $('#dob').val();  
           var contact_patient = $('#contact_patient').val();  
           var contact_relative = $('#contact_relative').val();  
           var insured_number = $('#insured_number').val();  
           var employeeid = $('#employeeid').val();  
           var policy_number = $('#policy_number').val();  
       
           var company_name = $('#company_name').val();  
     
           var name_physician = $('#name_physician').val();  
           var contact_physician = $('#contact_physician').val();  
           var name_doctor = $('#name_doctor').val();  
           var contact_doctor = $('#contact_doctor').val();  
           var nature_illness = $('#nature_illness').val();  
           var relevant = $('#relevant').val();  
           var duration = $('#duration').val();  
           var date_consultation = $('#date_consultation').val();  
           var past_history = $('#past_history').val();  
           var diagnosis = $('#diagnosis').val();  
           var icd_code = $('#icd_code').val();  
           var line_treatment = $('#line_treatment').val();  
           var invest_medical = $('#invest_medical').val();  
           var route_drug = $('#route_drug').val();  
           var name_surgery = $('#name_surgery').val();  
           var icd_pcs = $('#icd_pcs').val();  
           var other_treatment = $('#other_treatment').val();  
           var injury_occur = $('#injury_occur').val();  
           var post_id = $('#post_id').val(); 
          
           

        //    //apollo form
           var name_company_apollo = $('#name_company_apollo').val();
           var toll_number_apollo = $('#toll_number_apollo').val();  
      
           var toll_fax_apollo = $('#toll_fax_apollo').val();  
           
           var name_patient_apollo = $('#name_patient_apollo').val();  
       
           var age_apollo = $('#age_apollo').val();  
           var dob_apollo = $('#dob_apollo').val();  
           var contact_patient_apollo = $('#contact_patient_apollo').val();  
           var contact_relative_apollo = $('#contact_relative_apollo').val();  
           var insured_number_apollo = $('#insured_number_apollo').val();  
           var employeeid_apollo = $('#employeeid_apollo').val();  
           var policy_number_apollo = $('#policy_number_apollo').val();  
       
           var company_name_apollo = $('#company_name_apollo').val();  
     
           var name_physician_apollo = $('#name_physician_apollo').val();  
           var contact_physician_apollo = $('#contact_physician_apollo').val();  
           var name_doctor_apollo = $('#name_doctor_apollo').val();  
           var contact_doctor_apollo = $('#contact_doctor_apollo').val();  
           var nature_illness_apollo = $('#nature_illness_apollo').val();  
           var relevant_apollo = $('#relevant_apollo').val();  
           var duration_apollo = $('#duration_apollo').val();  
           var date_consultation_apollo = $('#date_consultation_apollo').val();  
           var past_history_apollo = $('#past_history_apollo').val();  
           var diagnosis_apollo = $('#diagnosis_apollo').val();  
           var icd_code_apollo = $('#icd_code_apollo').val();  
           var line_treatment_apollo = $('#line_treatment_apollo').val();  
           var invest_medical_apollo = $('#invest_medical_apollo').val();  
           var route_drug_apollo = $('#route_drug_apollo').val();  
           var name_surgery_apollo = $('#name_surgery_apollo').val();  
           var icd_pcs_apollo = $('#icd_pcs_apollo').val();  
           var other_treatment_apollo = $('#other_treatment_apollo').val();  
           var injury_occur_apollo = $('#injury_occur_apollo').val();  
           0

                $.ajax({  
                     url:"admin.php",  
                     method:"POST",  
                     data:{
                        name_company : name_company,
                        toll_number:toll_number,
                        toll_fax:toll_fax, 
                        name_patient:name_patient,
                        gender:gender, 
                        age:age,
                        dob:dob, 
                        contact_patient:contact_patient,
                        contact_relative:contact_relative, 
                        employeeid : employeeid,
                        insured_number:insured_number,
                        policy_number:policy_number, 
                        mediclaim:mediclaim,
                        company_name:company_name, 
                        physician:physician,
                        name_physician:name_physician, 
                        contact_physician:contact_physician,
                        name_doctor:name_doctor, 
                        contact_doctor:contact_doctor,
                        nature_illness:nature_illness, 
                        relevant:relevant,
                        duration:duration, 
                        date_consultation:date_consultation,
                        past_history:past_history, 
                        diagnosis:diagnosis,
                        icd_code:icd_code,
                        line_treatment:line_treatment,
                        invest_medical:invest_medical, 
                        route_drug:route_drug,
                        name_surgery:name_surgery, 
                        icd_pcs:icd_pcs,
                        other_treatment:other_treatment, 
                        injury_occur:injury_occur,
                        
                        post_id:post_id
                    },  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          if(data != '')  
                          {  
                               $('#post_id').val(data);  
                               document.getElementById("refreshpdf").contentDocument.location.reload(true);
                          }  
                         
                     }  
                });  
      
            });
        });

    
</script>
</body>
</html>
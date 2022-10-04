<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="birla2.css">
    <link rel="stylesheet" href="apollo.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <title>Document</title>
</head>
<body>



        <div class="left_section">
            <select class="form-select"  style = "width:80%" ; aria-label="Default select example">
                <option selected>Select Patient</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <br>

                <select class="form-select" id = "select_form"  style = "width:80%" ; aria-label="Default select example">
                    <option selected value="birla">Select Category</option>
                    <option  value="birla">Aditya Birla</option>
                    <option value="Alankit">Alankit</option>
                    <option value="Anmol">Anmol</option>
                    <option value="Apollo">Apollo</option>
                    
                </select>
                
            </div>
            
            
            <div class="top_section col-2 mt-2 " >
                <button class="btn btn-warning "><a href="birla_2.php">Next</a></button>
                <button class="btn btn-dark" >Prev</button>
                <button class="btn btn-success" >Auto Save</button>
        </div>
    <div id="birla_2">
        
        <div class="center_section mt-5 formdesign">
            <div class="row d-flex adjust flex-column col"> 
                
                            <form  method="post">
                                
                                <div class="form-group">
                                    
                                    <div class="col d-flex flex-row aligninput  form-group">
                                        
                                        <span class="alphabet">o.</span> <label for="">In case of accident : </label> 
                                        <span class="alphabet">i.</span>
                                        <label for="">Is it RTA-</label>
                                        
                                        <div class="form-check checkwidth">
                                            <input  type="radio" class="form-check-input autosave RTA"   id="RTA" name="RTA" value="Yes" checked >Yes
                                            <label class="form-check-label" for="radio1"></label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input autosave RTA" id="RTA" name="RTA" value="No" >No
                                            <label class="form-check-label" for="radio2" ></label>
                                        </div>
                                        <span class="alphabet">ii.</span>
                                        <label for="">Date of Injury : </label>
                                        <input type="text" class="form-control class autosave"  name="date_injury" id="date_injury"  >
                                        <br>
                                        <span class="alphabet">iii.</span>
                                        <label for="">Reported to Police : </label>
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
                <input type="text" class="form-control autosave" id="dob"  name="dob" >
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
            <iframe src="home2.php" width="100%" height="600" id="refreshpdf" title="pdf preview">
                </iframe>
                
            </div>
            <div class="bottom_section">
                
                <button class = "btn btn-success"><a href="birla_2.php" class= "auto" style="text-decoration:none ; color : white"; target="_blank" >Download pdf</a></button>
            </div>
        </div>
   


    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
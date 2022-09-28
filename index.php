<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="refresh" content = "600">
    <link rel="stylesheet" href="style.css">
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

                <select class="form-select" style = "width:80%" ; aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
     
        </div>
       
       
        <div class="top_section col-2 mt-2 " >
                <button class="btn btn-warning ">Next</button>
                <button class="btn btn-dark" >Prev</button>
                <button class="btn btn-success" >Auto Save</button>
        </div>
       
        <div class="center_section mt-5 formalign">
            
            <div class="row d-flex flex-column col"> 
                
                <form  method="post">

                    <div class="form-group">
                        <h5>DETAILS OF THE THIRD PARTY ADMINISTRATOR</h5><P>(To be filled in block letters)</P>
                        <div class="col d-flex flex-0row  form-group">
                            
                            <span class="alphabet">a.</span> <label>Name of TPA/Insurance Company : Aditya Birla Insurance Company Limited </label>
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
                    <input type="text" class="form-control class autosave" name="name_patient"  id="name_patient">
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
                    <input type="text" class="form-control autosave" id="contact_patient" name="contact_patient" >
                </div>

                <div class="col-md-6 aligninput">
                <span class="alphabet">f.</span>

                    <label for="">Contact number of attending relative</label>
                    <input type="text" class="form-control autosave" id="contact_relative" name="contact_relative" >
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
                    <input type="text" class="form-control autosave" id="contact_physician" name="contact_physician" >
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
                        <input type="text" class="form-control autosave" id="contact_doctor" name="contact_doctor">
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
                    <input type="text" class="form-control autosave input_size" style="width:40%"; id="date_consultation" name="date_consultation"  >
                        
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
                    <input type="text" class="form-control autosave" id="icd_code" name="icd_code" >
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
                    
                    <label for="">Route of drug administartion :</label>
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
                    <input type="text" class="form-control autosave" id="icd_pcs" name="icd_pcs" >
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
              
            
               
        <!-- <input type="submit" class="btn btn-success" name="submit" id="submit"> -->
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
        <div class="bottom_section">
                    
                    <button class = "btn btn-success"><a href="home.php" class= "auto" style="text-decoration:none ; color : white"; target="_blank" onclick=download();>Download pdf</a></button>
                </div>
       
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script>
  
$(document).ready(function () {

    // function download(){
    //      const element = document.getElementById("auto");
    //      setInterval(() => {
    //         element.click();
    //      }, 1000);
    // }
    // download();
      $('.autosave').change(function () { 
        // e.preventDefault();
        
            var gender = [];
            var mediclaim = [];
            var physician = [];
          

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
            gender = gender.toString();
            mediclaim = mediclaim.toString();
            physician = physician.toString();

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
          
           
                $.ajax({  
                     url:"admin.php",  
                     method:"POST",  
                     data:{
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
                          }  
                         
                     }  
                });  
      
            });
        });

    
</script>
</body>
</html>
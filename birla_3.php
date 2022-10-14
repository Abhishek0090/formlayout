        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
                    <link rel="stylesheet" href="apollo.css">
                    <!-- <link rel="stylesheet" href="birla2.css"> -->
                    <link rel="stylesheet" href="birla_3.css">
                    
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <title>Document</title>
        </head>
        <body>

            <div  id="birla" class="data hide3 container">
            <div class="center_section mt-5   formdesign " style="  width: 62%";>
                                        <div class="row d-flex adjust flex-column col"> 
                                
                                            <form  method="post">

                                            <div class="form-group">
                                                
                                                <div class="col d-flex flex-row aligninput  form-group">
                                                    
            <h6>
                DECLARATION BY THE PATIENT/REPRESENTATIVE:
            </h6>
        </div>

        <div class="col-md-6 aligninput">
                            <span class="alphabet">1.</span>
                            
                            <label class="inlinedivs" >I agree to allow the hospital to submit all original documents pertaining to hospitalization to the Insurer / TPA after the discharge. I agree to sign on the Final Bill & the Discharge Summary, before my discharge.
        </label>
                                        
                        </div>
        <div class="col-md-6 aligninput">
                            <span class="alphabet">2.</span>
                            
                            <label class="inlinedivs" >Payment to hospital is governed by the terms and conditions of the policy. In case the Insurer / TPA is not liable to settle the hospital bill, I undertake to settle the bill as per the terms and conditions of the policy.</label>
                                        
                        </div>

        <div class="col-md-6 aligninput">
                            <span class="alphabet">3.</span>
                            
                            <label class="inlinedivs" >All non-medical expenses and expenses not relevant to current hospitalization and the amounts over & above the limit authorised by the Insurer / TPA not governed by the terms and conditions of the policy will be paid by me.</label>
                                        
                        </div>
        <div class="col-md-6 aligninput">
                            <span class="alphabet">4.</span>
                            
                            <label class="inlinedivs" >I hereby declare to abide by the terms and conditions of the policy and if at any time the facts disclosed by me are found to be false or incorrect, I forfeit my claim and agree to indentify the Insurer / TPA.</label>
                                        
                        </div>
        <div class="col-md-6 aligninput">
                            <span class="alphabet">5.</span>
                            
                            <label class="inlinedivs" >I agree and understand that TPA is in no way warranting the service of the hospital & that the Insurer / TPA is in no way guaranteeing that the services provided by the hospital will be of a particular quality or standard.</label>
                                        
                        </div>
        <div class="col-md-6 aligninput">
                            <span class="alphabet">6.</span>
                            
                            <label class="inlinedivs" >I hereby warrant the truth of the forgoing particu lars in every respect and I agree that if I have made or shall make any false or untrue statement, suppression or concealment with respect to the claim, my right to claim reimbursement of the said expenses shall be absolutely forfeited.</label>
                                        
                        </div>
        <div class="col-md-6 aligninput">
                            <span class="alphabet">7.</span>
                            
                            <label class="inlinedivs" >I agree to identify the hospital against all expenses incurred on my behalf, which are not reimbursed by the Insurer / TPA. </label>
                                        
                        </div>
                        <div class="col-md-6 aligninput">
                                    
                                    
                                    <label class=""for="">Patient's /Insured Name:</label>
                                    <input type="text" class="form-control inputsize " id="patient_insured_name" name="patient_insured_name" onchange="update_data('patient_insured_name','patient_insured_name')" style="width:400px">
                                </div>
                                <div class="form-group col-md-6">
                                <input type="text" class="patient_insured_sign" style="height: 45px;width: 12rem; margin-left: 5px;" name="patient_insured_sign" id="patient_insured_sign" onchange="update_data('patient_insured_sign','patient_insured_sign')">
                                <label for="" class="inlinedivs">Patient/Insured Name & Signature</label>
                    
                                </div>
                                <div class="col-md-6 aligninput">
                                    <label for="" class="inlinedivs">Contact Number :</label>
                                    <input type="text" maxlength="10" class="form-control " id="contact_declaration" name="contact_declaration" onchange="update_data('contact_declaration','contact_declaration')">
                                </div>

                                <div class="col d-flex flex-row aligninput  form-group">
                                                    
                                                    <h6>
                                                        Hospital DECLARATION
                                                    </h6>
                                                </div>
                                                
            </div>
            <div class="col-md-6 aligninput">
            <span class="alphabet">1.</span>
            <label class="inlinedivs" >We have no objection to any authorized TPA / Insurance Company official verifying documents pertaining to hospitalization.</label>
        </div>
            <div class="col-md-6 aligninput">
                            <span class="alphabet">2.</span>
                            
                            <label class="inlinedivs" >All valid original documents duly countersigned by the insured I patient as per the checklist mentioned below will be sent to TPA / Insurance Company within 7 days of the patient's discharge.</label>
                                        
                        </div>
            <div class="col-md-6 aligninput">
                            <span class="alphabet">3.</span>
                            
                            <label class="inlinedivs" >All nonmedical expenses OR expenses not relevant to hospitalization or illness OR expenses disallowed in the Authorisation Letter of the TPA / Insurance Co. OR arising out of incorrect information in the pre-authorisation form will be collected from the patient.</label>
                                        
                        </div>
            <div class="col-md-6 aligninput">
                            <span class="alphabet">4.</span>
                            
                            <label class="inlinedivs" >WE AGREE THAT TPA / INSURANCE COMPANY WILL NOT BE LIABLE TO MAKE THE PAYMENT IN THE EVENT OF ANY DISCREPANCY BETWEEN THE FACTS IN THIS FORM AND  DISCHARGE SUMMARY or other documents.</label>
                                        
                        </div>
            <div class="col-md-6 aligninput">
                            <span class="alphabet">5.</span>
                            
                            <label class="inlinedivs" >The patient declaration has been signed by the patient or by his representative in our presence.</label>
                                        
                        </div>
        <div class="col-md-6 aligninput">
                            <span class="alphabet">6.</span>
                            
                            <label class="inlinedivs" >We agree to provide clarifications for the queries raised regarding this hospitalization and we take the sole responsibility for any delay in offering clarifications.</label>
                                        
        </div>
        <div class="col-md-6 aligninput">
                            <span class="alphabet">7.</span>
                            
                            <label class="inlinedivs" >We will abide by the terms and conditions agreed in the MOU.</label>
                                        
        </div>
        <div style="display:flex;">

                                <div class="form-group col-md-6 " style="margin-right:70px;">
                                    <input type="text" class="hospital_seal_final" style="height: 45px;width: 12rem; margin-left: 25px;" id="hospital_seal_final" onchange="update_data('hospital_seal_final','hospital_seal_final')">
                                    <p style="margin-left:75px">Hospital Seal </p>
                            
                                </div>        
                                <div class="form-group col-md-6" style="float:right;">
                                <input type="text" class="doctor_signature" style="height: 45px;width: 12rem; margin-left: 25px;" name="doctor_signature" id="doctor_signature" onchange="update_data('doctor_signature','doctor_signature')">
                                    <p style="margin-left:65px">Doctor's Signature</p>
                                </div>
                                
                            </div>
        </div>
        </form>
        </div>



        <div class="right_section">
                                
                                <h4 style="text-align : center";>Pdf Preview</h4>
                                <iframe src="birla_pdf.php" width="100%" height="600" id="refreshpdf" title="pdf preview">
                                    </iframe>
                                    
                                </div>
                                
                                <div class="bottom_section">
                                    
                                    <button class = "btn btn-success"><a href="birla_pdf.php" class= "auto" style="text-decoration:none ; color : white"; target="_blank" >Download pdf</a></button>
                                </div>
                                <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

        </body>
        </html>
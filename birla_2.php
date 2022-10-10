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
    
    <div  id="birla" class="data hide2 container" >
                            <div class="center_section mt-5   formdesign " style="  width: 62%";>
                                <div class="row d-flex adjust flex-column col"> 
                        
                                    <form  method="post">

                                    <div class="form-group">
                                        
                                        <div class="col d-flex flex-row aligninput  form-group">
                                            
                                            <span class="alphabet">o.</span> 
                                            <label class="inlinedivs"for="">In case of accident : </label> 
                                            <span class="alphabet">i.</span>
                                            <label class="inlinedivs"for="">Is it RTA -</label>
                                            <div class="form-check checkwidth">
                                                <input  type="radio" class="form-check-input  rta"   id="rta" name="rta" value="Yes" checked onchange="update_data('rta','rta')" >Yes
                                                <label class="inlinedivs"class="form-check-label" for="radio1"></label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input  rta" id="rta" name="rta" onchange="update_data('rta','rta')" value="No" >No
                                                <label class="inlinedivs"class="form-check-label" for="radio2" ></label>
                                            </div>
                                     </div>
                                            <div class="col-md-6 aligninput form-group">

                                            <span class="alphabet">ii.</span>
                                            <label class="inlinedivs"for="">Date of Injury : </label>
                                            <input type="text" class="form-control class "  name="date_injury" id="date_injury"  >
                                            
                                        </div>
                                        <div class="col-md-6 aligninput form-group">

                                            <span class="alphabet">iii.</span>
                                            <label class="inlinedivs"for="">Reported to Police : </label>
                                            <div class="form-check checkwidth">
                                                <input  type="radio" class="form-check-input  police"   id="police" name="police" value="Yes" checked >Yes
                                                <label class="inlinedivs"class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input  police" id="police" name="police" value="No" >No
                                                <label class="inlinedivs"class="form-check-label" for="radio2" ></label>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6 aligninput form-group">
                                <span class="alphabet">b.</span>
                                <label class="inlinedivs"for="">Injury / Disease caused due to substance abuse / alcohol consumption : </label>
                                <div class="form-check checkwidth">
                                                <input  type="radio" class="form-check-input  alcohol"   id="alcohol" name="alcohol" value="Yes" checked >Yes
                                                <label class="inlinedivs"class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input  alcohol" id="alcohol" name="alcohol" value="No" >No
                                                <label class="inlinedivs"class="form-check-label" for="radio2" ></label>
                                </div>
    </div>
                            
                    <div class="col-md-6 aligninput form-group">
                        <label class="inlinedivs"for="">Test Conducted to establish this :</label>
                        <div class="form-check checkwidth">
                                                <input  type="radio" class="form-check-input  test"   id="test" name="test" value="Yes" checked >Yes
                                                <label class="inlinedivs"class="form-check-label" for="radio1"></label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input  test" id="test" name="test" value="No" >No (if Yes attach reports)
                                                <label class="inlinedivs"class="form-check-label" for="radio2" ></label>
                                </div>       
                    </div>
                    <div class="col-md-6 aligninput form-group">
                        <span class="alphabet">q.</span>
                        
                        <label class="inlinedivs"for="">In case of Maternity</label>
                        <div class="form-check checkwidth">
                            <label class="inlinedivs"class="form-check-label" for="checkbox"></label>
                            <input  type="checkbox" class="form-check-input  "   id="maternity" name="maternity" value="Yes" checked >G
    </div>
                                            <div class="form-check checkwidth">
                                                <input type="checkbox" class="form-check-input  maternity" id="maternity" name="maternity" value="No" >P
                                                <label class="inlinedivs"class="form-check-label" for="checkbox" ></label>
                                        </div>  
                                        <div class="form-check checkwidth">
                                                        <input type="checkbox" class="form-check-input  maternity" id="maternity" name="maternity" value="No" >L
                                                        <label class="inlinedivs"class="form-check-label" for="checkbox" ></label>
                                        </div>  
                                            <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  maternity" id="maternity" name="maternity" value="No" >A
                                                            <label class="inlinedivs"class="form-check-label" for="checkbox" ></label>
                                            </div>  
    </div>  
                                    <div class="col-md-6 aligninput">
    
                                    
                                    <label class="inlinedivs"for="">Date of Delivery</label>
                                    <input type="text" class="form-control " id="dod"  name="dod" >
                                </div>
                
                    

                <h5>TO BE FILLED BY THE INSURED/PATIENT</h5>
                <h5>Details of the patient admitted </h5>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">a.</span>
                    
                    <label class="inlinedivs"for="">Date of admission : </label>
                    <input type="text" class="form-control " id="doa"  name="doa" >
                </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">b.</span>
                    <label class="inlinedivs"for="">Time</label>
                    <input type="time" class="form-control " id="time"  name="time" >
                </div>
            </div>
            
            
            <div class="col-md-6 aligninput">
                <span class="alphabet">c.</span>
                <div class="col-md-6 aligninput">
                    
                        <label class="inlinedivs"for="">Is this an emergency / a planned hospitalization event ?</label>
                        <div class="form-check checkwidth">
                                                            <input type="radio" class="form-check-input  emergency" id="emergency" name="emergency" value="Emergency"  checked >Emergency
                                                            <label class="inlinedivs"class="form-check-label" for="radio2" ></label>
                               </div>  
                                    <div class="form-check checkwidth">
                                                                <input type="radio" class="form-check-input  planned" id="emergency"      name="emergency" value="Planned" >Planned
                                                                <label class="inlinedivs" class="form-check-label" for="radio2" ></label>
                                 </div>  
                        </div>
                        
                    </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">d.</span>
                    
                    <label class="inlinedivs"for="">Expected no. of days stay in hospital :</label>
                    <input type="text" class="form-control " id="stay_hospital"  name="stay_hospital" >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">e.</span>
                    
                    <label class="inlinedivs"for="">Room Type : </label>
                    <input type="text" class="form-control " id="room_type" name="room_type" >
                </div>
                
                <div class="col-md-6 aligninput">
                    <span class="alphabet">f.</span>
                    
                    <label class="inlinedivs"for="">Per Day Room Rent + Nursing & Service Charges + Patient's Diet</label>
                    <input type="text"  class="form-control  rent" id="rent" name="rent" >
                </div>
                
                <div class="col-md-6 aligninput">
                        <span class="alphabet">g.</span>
                        
                        <label class="inlinedivs"for="">Expected cost of Investigation + diagnostics</label>
                        <input type="text" class="form-control  cost_investigation" id="cost_investigation" name="cost_investigation" >
                    </div>
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">h.</span>
                        
                        <label class="inlinedivs"for="">ICU Charges : </label>
                        <input type="text" class="form-control  icu_charges " id="icu_charges" name="icu_charges">
                    </div>
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">i.</span>
                    
                        <label class="inlinedivs"for="">OT Charges</label>
                        <input type="text" class="form-control  ot_charges" id="ot_charges" name="ot_charges" >
                    </div>
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">j.</span>
                        
                        <label class="inlinedivs"for="">Professional fees Surgeon + Anaesthetist Fees + consultation Charges :</label>
                    
                        <input type="text" class="form-control  fees_charges" id="fees_charges" name="fees_charges" >
            
                    </div>
                <div class="col-md-6 aligninput">
                    <span class="alphabet">k.</span>
                    
                    <label class="inlinedivs"for="">Medicines + Consumables + Cost of Implants(if applicable specify)Other hospital expenses if any:</label>
                                
                </div>
        <div class="col-md-6 aligninput">
            
            <input type="text" class="form-control " id="medicines_expense" name="medicines_expense" >
        </div>
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">l.</span>
                        
                        <label class="inlinedivs"for="">All inclusive package charges if any applicable</label>
                        <input type="text" class="form-control " id="inclusive" name="inclusive" > 
                    </div>
                    
                    
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">m.</span>
                        
                        <label class="inlinedivs"for="">Sum total expected cost of hospitalisation</label>
                        <input type="text" class="form-control " id="cost_hospital" name="cost_hospital" >
                    </div class="col-md-6 aligninput">
                    <h6>Mandatory : Past History of any chronic illness If yes , since (month/year)</h6>
                    
                    <div>

                    </div>
                        
                        <div class="col-md-6 aligninput">
                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  diabetes" id="diabetes" name="diabetes" value="No" >
                                            </div>  
                            <label class="inlinedivs"for="">Diabetes :</label>
                            
                            <input type="text" class="form-control " id="diabetes" name="diabetes">
                        </div> 
                        <div class="col-md-6 aligninput">

                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  heart_disease" id="heart_disease" name="heart_disease" value="No" >
                                            </div>  
                            <label class="inlinedivs"for="">Heart Disease :</label>
                            <input type="text" class="form-control " id="heart_disease" name="heart_disease">
                        </div> 
                        <div class="col-md-6 aligninput">
                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  hypertension" id="hypertension" name="hypertension" value="No" >
                                            </div>  
                            <label class="inlinedivs"for="">Hypertension :</label>
                            <input type="text" class="form-control " id="hypertension" name="hypertension">
                        </div> 
                        <div class="col-md-6 aligninput">

                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  hyperlipidemias" id="hyperlipidemias" name="hyperlipidemias" value="No" >
                                            </div>                          
                            <label class="inlinedivs"for="">Hyperlipidemias :</label>
                            <input type="text" class="form-control " id="hyperlipidemias" name="hyperlipidemias" >
                        </div>
                        
                        <div class="col-md-6 aligninput">
                            
                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  osteoarthritis" id="osteoarthritis" name="osteoarthritis" value="No" >
                                            </div> 
                                            <label class="inlinedivs" for="">Osteoarthritis :</label> 
                            <input type="text" class="form-control class " id="osteoarthritis"  name="osteoarthritis">
                        </div>
                        
                        <div class="col-md-6 aligninput">

                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  ashtma_copd_bronchitis" id="ashtma_copd_bronchitis" name="ashtma_copd_bronchitis" value="No" >
                                            </div>  

                        <label class="inlinedivs"for="">Asthma/COPD/Bronchitis :</label>

                        <input type="text" class="form-control  input_size"  id="ashtma_copd_bronchitis" name="ashtma_copd_bronchitis">
                    </div>

                    <div class="col-md-6 aligninput">

                    <div class="form-check checkwidth">
                                      <input type="checkbox" class="form-check-input  cancer" id="cancer" name="cancer" value="No" >
                                            </div>  
                                        
                                        <label class="inlinedivs"for="">Cancer :</label>

                                        <input type="text" class="form-control  input_size"   id="cancer" name="cancer">
                        
                      </div>
                        <div class="col-md-6 aligninput">
                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  alcohol" id="alcohol" name="alcohol" value="No" >
                                            </div>  
                            <label class="inlinedivs"for="">Alcohol or drug abuse :</label>
                            <input type="text" class="form-control " id="alcohol_drug" name="alcohol_drug">
                        </div>
                        <div class="col-md-6 aligninput">
                        
                        <div class="form-check checkwidth">
                                                            <input type="checkbox" class="form-check-input  alcohol" id="alcohol" name="alcohol" value="No" >
                                            </div>  

                            <label class="inlinedivs"for="">Any HIV or STD/Related ailment :</label>

                            <input type="text" class="form-control " id="hiv_std" name="hiv_std" >
                        </div>
                        <div class="col-md-6  aligninput">

                            <label class="inlinedivs"for="" style="margin-right:12px";>Any other Ailment give details :</label>
                            <input type="text" class="form-control " id="aliment" name="aliment" >
                        </div>
                        <p>(PLEASE READ VERY CAREFULLY)</p>
                        <label class="inlinedivs"for="" style="margin:auto ; margin-right:10px;">We confirm having read understood and agreed to the Declarations on the reverse of this form</label>
                        <div class="col-md-6 aligninput">
                        
                                <span class="alphabet">a.</span>
                                
                                <label class="inlinedivs"for="">Name of the treating doctor :</label>
                                <input type="text" class="form-control " id="treating_doctor" name="treating_doctor" >
                    
                        </div>
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">b.</span>
                        
                        <label class="inlinedivs"for="">Qualification :</label>
                        <input type="text" class="form-control " id="qualification" name="qualification" >
                    </div>
                    <div class="col-md-6 aligninput">
                        <span class="alphabet">c.</span>
                        
                        <label class="inlinedivs"for="">Registration No. with State Code :</label>
                        <input type="text" class="form-control " id="state_code" name="state_code" > 
                    </div>
                    <div style="display:flex;">

                        <div class="form-group col-md-6 " style="margin-right:70px;">
                            <input type="text" class="hospital_seal" style="height: 45px;width: 12rem; margin-left: 25px;" id="hospital_seal">
                            <p>Hospital Seal (Must include Hospital ID)</p>
                            <p>(IMPORTANT PLEASE TURN OVER)</p>
                        </div>        
                        <div class="form-group col-md-6" style="float:right;">
                        <input type="text" class="patient_signature" style="height: 45px;width: 12rem; margin-left: 25px;" name="patient_signature" id="patient_signature">
                            <p>Patient/Insured Name & Signature</p>
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
    <script>
        // $(document).ready(function () {
            
          
        //     $('#select_form').change(function (){
        //     $('.data').hide();
        //     $('#'+$(this).val()).fadeIn(400);
        // }).change();

        // $('.').change(function () { 
            
            
            
        //     var rta = [];
        //     var police = [];
        //     var physician = [];
           

        //     $(".rta").each(function(){
        //     if($(this).is(":checked")){
        //         rta.push($(this).val());
        //     }
        //     });

        //     $(".police").each(function(){
        //     if($(this).is(":checked")){
        //         police.push($(this).val());
        //     }
        //     });

        //     $(".physician").each(function(){
        //     if($(this).is(":checked")){
        //         physician.push($(this).val());
        //     }
        //     });


        
        //     rta = rta.toString();
        //     // alert(rta);return false;
        //     police = police.toString();
        //     physician = physician.toString();




        //     var date_injury = $('#date_injury').val(); 
            


        

        // var test = $('#test').val();  
        // var maternity = $('#maternity').val();  
        // var dod = $('#dod').val();  
        // var alcohol = $('#alcohol').val();  
        // var doa = $('#doa').val();  
        // var time = $('#time').val();  
        // var emergency = $('#emergency').val();  
        // var stay_hospital = $('#stay_hospital').val();  

        // var room_type = $('#room_type').val();  

        // var rent = $('#rent').val();  
        // var cost_investigation = $('#cost_investigation').val();  
        // var icu_charges = $('#icu_charges').val();  
        // var ot_charges = $('#ot_charges').val();  
        // var fees_charges = $('#fees_charges').val();  
        // var medicines_expense = $('#medicines_expense').val();  
        // var inclusive = $('#inclusive').val();  
        // var cost_hospital = $('#cost_hospital').val();  
        // var diabetes = $('#diabetes').val();  
        // var heart_disease = $('#heart_disease').val();  
        // var hypertension = $('#hypertension').val();  
        // var osteoarthritis = $('#osteoarthritis').val();  
        // var ashtma_copd_bronchitis = $('#ashtma_copd_bronchitis').val();  
        // var cancer = $('#cancer').val();  
        // var alcohol_drug = $('#alcohol_drug').val();  
        // var hiv_std = $('#hiv_std').val();  
        // var aliment = $('#aliment').val();  
        // var treating_doctor = $('#treating_doctor').val();  
        // var qualification = $('#qualification').val();  
        // var state_code = $('#state_code').val();  
        // var hospital_seal = $('#hospital_seal').val();  
        // var patient_signature = $('#patient_signature').val();  
        // var post_id = $('#post_id').val(); 
        
        
        //         $.ajax({  
        //             url:"birla_data.php",  
        //             method:"POST",  
        //             data:{
        //                 rta : rta,
        //                 date_injury:date_injury,
        //                 police:police, 
        //                 alcohol:alcohol,
        //                 test:test, 
        //                 maternity:maternity,
        //                 dod:dod, 
        //                 doa:doa,
        //                 time:time, 
        //                 emergency : emergency,
        //                 stay_hospital:stay_hospital,
        //                 room_type:room_type, 
        //                 rent:rent,
        //                 cost_investigation:cost_investigation, 
        //                 icu_charges:icu_charges,
        //                 ot_charges:ot_charges, 
        //                 fees_charges:fees_charges,
        //                 medicines_expense:medicines_expense, 
        //                 inclusive:inclusive,
        //                 cost_hospital:cost_hospital, 
        //                 diabetes:diabetes,
        //                 heart_disease:heart_disease, 
        //                 hypertension:hypertension,
        //                 hyperlipidemias:hyperlipidemias, 
        //                 osteoarthritis:osteoarthritis,
        //                 ashtma_copd_bronchitis:ashtma_copd_bronchitis,
        //                 cancer:cancer,
        //                 alcohol_drug:alcohol_drug, 
        //                 hiv_std:hiv_std,
        //                 aliment:aliment, 
        //                 treating_doctor:treating_doctor,
        //                 qualification:qualification, 
        //                 state_code:state_code,
        //                 hospital_seal:hospital_seal,
        //                 patient_signature:patient_signature,
                        
        //                 post_id:post_id
        //             },  
        //             dataType:"text",  
        //             success:function(data)  
        //             {  
        //                 if(data != '')  
        //                 {  
        //                     $('#post_id').val(data);  
        //                     document.getElementById("refreshpdf").contentDocument.location.reload(true);
        //                 }  
                        
        //             }  
        //         });  

    // });
    //     });

    </script>
     
    </body>
    </html>
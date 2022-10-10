    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <meta http-equiv="refresh" content = "600">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="apollo.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>      <title>Document</title>
    </head>
    <body>
        <div >
            
                <div class="left_section">
                            <select class="form-select" id="patient_id" style = "width:80%" ; aria-label="Default select example">
                <option defaultValue>Select Patient</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
                <br>

                    <select class="form-select" id = "select_form"  style = "width:80%" ; aria-label="Default select example">
                        <option defaultValue value="birla">Select Category</option>
                        <option  value="birla">Aditya Birla</option>
                        <option value="Alankit">Alankit</option>
                        <option value="Anmol">Anmol</option>
                        <option value="Apollo">Apollo</option>
                    
                    </select>
        
                </div>
        
        
            <div class="top_section col-2 mt-2 " >
                    <button class="btn btn-warning " onclick="loaddata()">Next</button>
                    <button class="btn btn-dark" onclick="loadprevious()" >Prev</button>
                                
        <button class="btn btn-success">
            <input type="hidden"  name="post_id" id="post_id"/>  
            AutoSave
        </button>        
                            
            </div>
            <?php include 'apollo.php'?>
                <section class="hide1">
                    <?php include 'birla.php'?>;
    </section>
                <section class="hide2">
                <?php include 'birla_2.php'?>;
    </section>
        </div>

    </div>
    <script>
  $('#select_form').change(function (){
                $('.data').hide();
                $('#'+$(this).val()).fadeIn(400);
            }).change();

            $('.hide2').hide();
        
    function loaddata(){
            
                if( $('.hide2').hide()){
                    $('.hide1').hide();
            $('.hide2').show();
                }
        

        }
        function loadprevious(){
            // window.location.href = "index.php";
            $('.hide2').hide();
            $('.hide1').show();

        }

    </script>
     <script>
        function update_data(inputid,field_name ){
            var patientid = $('#patient_id').val();
            var field_value = $('#'+inputid).val()
            $.ajax({
                    url: "save_birla_data.php",
                    type: "POST",
                    cache: false,
                    data:{
                        field_value:field_value,
                        patientid: patientid,
                        field_name: field_name
                    },
                    success: function(dataResult){
                        console.log(dataResult);
                        var result = JSON.parse(dataResult);
                        if(result.code='200'){
                            // alert(result.message);
                            document.getElementById("refreshpdf").contentDocument.location.reload(true);
                        }
                        else{
                            // alert(result.message);
                        }
                    }
            });
        }       


        </script>
    <!-- <script>
        $(document).ready(function () {

            $('#select_form').change(function (){
                $('.data').hide();
                $('#'+$(this).val()).fadeIn(400);
            }).change();

            $("#dob").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
            $("#date_consultation").datepicker({ dateFormat: "dd/mm/yy"  ,changeMonth  :true , changeYear  :true });
    

            $("#doa").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#dod").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#date_injury").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
                // $("#date_consultation").datepicker({ dateFormat: "dd/mm/yy"  ,changeMonth  :true , changeYear  :true });


            $('.autosave').change(function () { 
                
                
                
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

                var rta = [];
                var police = [];
                var physician = [];
            

                $(".rta").each(function(){
                if($(this).is(":checked")){
                    rta.push($(this).val());
                }
                });

                $(".police").each(function(){
                if($(this).is(":checked")){
                    police.push($(this).val());
                }
                });

                $(".physician").each(function(){
                if($(this).is(":checked")){
                    physician.push($(this).val());
                }
                });


            
                rta = rta.toString();
                // alert(rta);return false;
                police = police.toString();
                physician = physician.toString();




                var date_injury = $('#date_injury').val(); 
                


            

            var test = $('#test').val();  
            var maternity = $('#maternity').val();  
            var dod = $('#dod').val();  
            var alcohol = $('#alcohol').val();  
            var doa = $('#doa').val();  
            var time = $('#time').val();  
            var emergency = $('#emergency').val();  
            var stay_hospital = $('#stay_hospital').val();  

            var room_type = $('#room_type').val();  

            var rent = $('#rent').val();  
            var cost_investigation = $('#cost_investigation').val();  
            var icu_charges = $('#icu_charges').val();  
            var ot_charges = $('#ot_charges').val();  
            var fees_charges = $('#fees_charges').val();  
            var medicines_expense = $('#medicines_expense').val();  
            var inclusive = $('#inclusive').val();  
            var cost_hospital = $('#cost_hospital').val();  
            var diabetes = $('#diabetes').val();  
            var heart_disease = $('#heart_disease').val();  
            var hypertension = $('#hypertension').val();  
            var osteoarthritis = $('#osteoarthritis').val();  
            var ashtma_copd_bronchitis = $('#ashtma_copd_bronchitis').val();  
            var cancer = $('#cancer').val();  
            var alcohol_drug = $('#alcohol_drug').val();  
            var hiv_std = $('#hiv_std').val();  
            var aliment = $('#aliment').val();  
            var treating_doctor = $('#treating_doctor').val();  
            var qualification = $('#qualification').val();  
            var state_code = $('#state_code').val();  
            var hospital_seal = $('#hospital_seal').val();  
            var patient_signature = $('#patient_signature').val();  

                var post_id = $('#post_id').val(); 
                
                

                        $.ajax({  
                            url:"birla_data.php",  
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
                                rta : rta,
                            date_injury:date_injury,
                            police:police, 
                            alcohol:alcohol,
                            test:test, 
                            maternity:maternity,
                            dod:dod, 
                            doa:doa,
                            time:time, 
                            emergency : emergency,
                            stay_hospital:stay_hospital,
                            room_type:room_type, 
                            rent:rent,
                            cost_investigation:cost_investigation, 
                            icu_charges:icu_charges,
                            ot_charges:ot_charges, 
                            fees_charges:fees_charges,
                            medicines_expense:medicines_expense, 
                            inclusive:inclusive,
                            cost_hospital:cost_hospital, 
                            diabetes:diabetes,
                            heart_disease:heart_disease, 
                            hypertension:hypertension,
                            hyperlipidemias:hyperlipidemias, 
                            osteoarthritis:osteoarthritis,
                            ashtma_copd_bronchitis:ashtma_copd_bronchitis,
                            cancer:cancer,
                            alcohol_drug:alcohol_drug, 
                            hiv_std:hiv_std,
                            aliment:aliment, 
                            treating_doctor:treating_doctor,
                            qualification:qualification, 
                            state_code:state_code,
                            hospital_seal:hospital_seal,
                            patient_signature:patient_signature,
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
        </script> -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    
    </body>
    </html>
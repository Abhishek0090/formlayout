    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <meta http-equiv="refresh" content = "600">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="apollo.css">
        <link href="mdtimepicker.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>     
         <title>Forms</title>
       
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
                    <button class="btn btn-warning nextbtn" onclick="loaddata()">Next</button>
                    <button class="btn btn-dark prevbtn" onclick="loadprevious()" >Prev</button>
                                
        <button class="btn btn-success savenow">
            <!-- <input type="hidden"  name="post_id" id="post_id"/>   -->
            
            AutoSave
        </button>        
                            
            </div>
            <?php include 'apollo.php'?>
                <section id="div1" class="hide1">
                    <?php include 'birla.php'?>
                </section>
                <section id="div2" class="hide2">
                <?php include 'birla_2.php'?>
                </section>
                <section id="div3" class="hide3">
                <?php include 'birla_3.php'?>
                </section>
                <section id="div4" class="hide4">
                <?php include 'birla_4.php'?>
                </section>
               
    

    </div>
    <script>
            
    // function save(){
    //     alert("Your data saved successfully");
    //     window.location = "index.php";
    // }

            $('#select_form').change(function (){
                $('.data').hide();
                $('#'+$(this).val()).fadeIn(400);
            }).change();

            
            $("#dob").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
            $("#date_consultation").datepicker({ dateFormat: "dd/mm/yy"  ,changeMonth  :true , changeYear  :true });
    
            
            $("#doa").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#dod").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#date_injury").datepicker({ dateFormat: "dd/mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#diabetes_date").datepicker({ dateFormat: "mm/yy" , changeMonth  :true , changeYear  :true });
                $("#heart_disease_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#hypertension_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#hyperlipidemias_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#osteoarthritis_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#ashtma_copd_bronchitis_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#cancer_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#alcohol_drug_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
                $("#hiv_std_date").datepicker({ dateFormat: "mm/yy" ,changeMonth  :true , changeYear  :true });
         
            
                $('.hide2').hide();
                $('.hide3').hide();
                $('.hide4').hide();
                var count = 0;
    function loaddata(){
           
        if(count==0){
            $('.hide2').show();
            $('.hide1').hide();
            $('.hide3').hide();
            $('.hide4').hide();
        }
        if(count==1){
            $('.hide3').show();
            $('.hide1').hide();
            $('.hide2').hide();
            $('.hide4').hide();
        }
        if(count==2){
            $('.hide3').hide();
            $('.hide1').hide();
            $('.hide2').hide();
            $('.hide4').show();
        }
        count++;                   
    
                }
             
            function loadprevious(){
                if(count==1){
                    $('.hide1').show();
                    $('.hide2').hide();
                    $('.hide3').hide();
                    $('.hide4').hide();
                    
                }
                if(count==2){
                    $('.hide2').show();
                    $('.hide1').hide();
                    $('.hide3').hide();
                    $('.hide4').hide();
                    
                }
                if(count==3){
                    $('.hide3').show();
                    $('.hide1').hide();
                    $('.hide2').hide();
                    $('.hide4').hide();
                    
                }
                count--;

        }

        </script>
     <script>
        function update_data(inputid,field_name ){
            var patientid = $('#patient_id').val();
            var field_value = $('#'+inputid).val();
            // alert(field_value);return false;

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
                            // alert()
                            if(dataResult){

                                $('.savenow').click(function (e) { 
                                    alert(result.message);
                                    
                                });
                            }
                            else{

                            }
                            document.getElementById("refreshpdf").contentDocument.location.reload(true);
                        }
                        else{
                            // alert(result.message);


                        }
                    }
                });
            }       

            </script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="mdtimepicker.js"></script>
    <script>
      $(document).ready(function () {
        $('#time').mdtimepicker(); 
        
        
                
      });
  
       </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    
    </body>
    </html>
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

        <?php include 'birla.php';?>

                <!-- <div id="Anmol" class="center_section data"><img class="image" src="Anmol/1.png" alt=""> </div>
                <div id="Alankit" class=" center_section data"><img class="image" src="Alankit/1.png" alt=""> </div> -->
                
</div>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script>
    function next(){
        var data =  []; 
    }
</script>

  
</body>
</html>
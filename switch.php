<?php
                   

                    if (isset($_POST['firstnum']) and isset($_POST['scndnum'])) {
                        $firstnum = $_POST['firstnum'];
                        $scndnum = $_POST['scndnum'];
                        if (!empty($_POST['firstnum']) or !empty($_POST['scndnum'])) {
                        if(isset($_POST['add'])) {
                            $add=$firstnum + $scndnum;
                           $result="Addition is : $add";
                        }
                        elseif(!empty($_POST['sub'])) {
                            $sub=$firstnum - $scndnum;
                           $result="Subtraction is : $sub";
                        }
                        elseif(!empty($_POST['multi'])) {
                            $multi=$firstnum * $scndnum;
                           $result="Multiplication is : $multi";
                        }
                        elseif(!empty($_POST['div'])) {
                            if($scndnum==0){
                            $result="Infinite";
                            }
                            $div=$firstnum / $scndnum;
                           $result="Division is : $div";
                        }
                        elseif(!empty($_POST['mod'])) {
                            $mod=$firstnum % $scndnum;
                           $result= "Modulus is : $mod";
                        }
                        else{
                            echo "<label style='color:red;'> Enter valid Number!</label>";
                        }
                    }}

                    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
    <link href="switch.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container text-center mt-4 ">
        <div class="row align-items-start form_number">
            <div class="col">
                <form method="post" action=" ">
                    <div class="row mb-3">
                        <label for="first_num" class="col-sm-2 col-form-label mt-4">First Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control mt-4" id="firstnum" name="firstnum" placeholder="Enter Your First Number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="second_num" class="col-sm-2 col-form-label">Second Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="scndnum" name="scndnum" placeholder="Enter Your Second Number">
                        </div>
                    </div>
                  <?php
                  if(!empty($result))
                  echo "$result";
                  ?><br>
                    <input type="submit" class="btn btn-dark mybtn mt-2" name="add" value="Addition">
                    <input type="submit" class="btn btn-dark mybtn mt-2" name="sub" value="Subtraction">
                    <input type="submit" class="btn btn-dark mybtn mt-2" name="multi" value="Multiplication">
                    <input type="submit" class="btn btn-dark mybtn mt-2" name="div" value="Division">
                    <input type="submit" class="btn btn-dark mybtn mt-2" name="mod" value="Modulus">
                </form>
            </div>    
        </div>
</div>    
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
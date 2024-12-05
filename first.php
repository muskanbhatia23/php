<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
    <link href="first.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <div class="container text-center mt-4">
        <div class="row align-items-start">
            <div class="col">
                <h3>Odd / Even</h3>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label mt-4">Enter Your Number:</label>
                    <form method="post" action="first.php">
                        <div class="number_width"><input type="number" class="form-control form_number" id="formGroupExampleInput" placeholder="Number" name="oe_number"></div>
                    </form>
                </div>

                <?php

                $result = "";
                $warn_msg = "";
                if (isset($_REQUEST['oe_number'])) {
                    $number = $_REQUEST['oe_number'];
                    if (($number) == 0 or empty($number)) {
                        $warn_msg = "<label style='color:red;'> Enter valid Number!</label>";
                    } elseif (($number) % 2 == 0) {
                        $result = "<label style='color:green;'>Number is EVEN</label>";
                    } else {
                        $result = "<label style='color:green;'>Number is ODD </label>";
                    }
                }
                echo "$warn_msg";
                echo "$result";

                ?><br>
                <button type="submit" class="btn btn-dark mybtn mt-1">Find</button>

            </div>

            <div class="col">
                <h3>Result</h3>
                <form method="post" action="first.php">
                    <div class="row mb-3">
                        <label for="eng_marks" class="col-sm-2 col-form-label mt-4">English</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control mt-4" id="engmarks" name="english" placeholder="Enter English Marks">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="evs_marks" class="col-sm-2 col-form-label">EVS</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="evsmarks" name="evs" placeholder="Enter EVS Marks">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="physics_marks" class="col-sm-2 col-form-label">Physics</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="physicsmarks" name="physics" placeholder="Enter Physics Marks">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="chemistry_marks" class="col-sm-2 col-form-label">Chemistry</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="chemistrymarks" name="chemistry" placeholder="Enter Chemistry Marks">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="math_marks" class="col-sm-2 col-form-label">Maths</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="mathmarks" name="math" placeholder="Enter Maths Marks">
                        </div>
                    </div>

                    <?php

                    $result = "";
                    $warn_msg = "";
                    $average = "";
                    $total = "";
                    if (isset($_REQUEST['english']) and isset($_REQUEST['evs']) and isset($_REQUEST['physics']) and isset($_REQUEST['chemistry']) and isset($_REQUEST['math']) ) {
                        $english = $_REQUEST['english'];
                        $evs = $_REQUEST['evs'];
                        $physics = $_REQUEST['physics'];
                        $chemistry = $_REQUEST['chemistry'];
                        $math = $_REQUEST['math'];

                        if (empty($_REQUEST['english']) or empty($_REQUEST['english']) or empty($_REQUEST['english']) or empty($_REQUEST['english']) or empty($_REQUEST['english'])) {
                            echo "<label style='color:red;'> Enter valid Number!</label>";
                        } else {
                            $total = $english + $evs + $physics + $chemistry + $math;
                            $average = ($total / 500) * 100;

                            if ($average >= 80) {
                                $result = "Merit";
                            } elseif ($average <= 60 and $average >= 33) {
                                $result = "Pass";
                            } else {
                                $result = "Fail";
                            }
                            echo "Total Marks: $total/500 <br> Percentage : $average%";
                            echo "<br>$result";
                        }
                       
                    }

                    ?><br>
                    <button type="submit" class="btn btn-dark mybtn mt-2">Find The Result</button>
                </form>
            </div>

            <div class="col">
                <h3>What is my Age Group</h3>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label mt-4">Enter Your Age:</label>
                    <form method="post" action="first.php">
                        <div class="number_width"><input type="number" class="form-control form_number" id="formGroupExampleInput" placeholder="Your Age" name="age"></div>
                    </form>
                </div>
               <?php
                $result = "";
                $warn_msg = "";
                if (isset($_REQUEST['age'])) {
                    $age = $_REQUEST['age'];
                    if (($age) == 0 or empty($age))
                     {
                        $warn_msg = "<label style='color:red;'> Enter valid Number!</label>";
                    } elseif ($age<=12) {
                        $result = "<label style='color:green;'>You are a CHILD</label>";
                    } elseif ($age>=13 and $age<=17) {
                        $result = "<label style='color:green;'>You are a SENIOR KID </label>";
                    }
                    elseif ($age>=18 and $age<=64) {
                        $result = "<label style='color:green;'>You are an ADULT </label>";
                    }
                    else{
                        $result = "<label style='color:green;'>You are a SENIOR CITIZEN </label>";
                    }
                }
                echo "$warn_msg";
                echo "$result";

                ?><br>
                <button type="submit" class="btn btn-dark mybtn mt-1">Find Age-Group</button>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
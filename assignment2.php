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
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h3>Assignment 2</h3>
                <div class="mb-4">
                    <label for="formGroupExampleInput" class="form-label mt-4">Enter Your Number :</label>
                    <form method="post" action="assignment2.php">
                        <div class="number_width mydiv"><input type="number" class="form-control form_number" id="formGroupExampleInput"
                                placeholder="Enter Your Number" name="num"></div>
                </div>
                <input type="submit" class="btn btn-dark mybtn mt-2" name="table" value="Table">
                <input type="submit" class="btn btn-dark mybtn mt-2" name="factorial" value="Factorial">
                </form><br></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-12 mt-4">
               
               <?php
if (!empty($_POST['num'])) {
    $operation = !empty($_POST['table']) ? 'table' : (!empty($_POST['factorial']) ? 'factorial' : null);
    $num = $_POST['num'];
    $result = " ";
    switch ($operation) {
        case 'table': {
            for($i=1;$i<=10;$i++){
                $ans= $num*$i;
                echo "$num x $i = $ans <br>";  
            }
        break;
        }
        case 'factorial': {
            $fact=1;
            for($i=$num;$i>=1;$i--){
                $fact= $fact*$i;
            }
            echo "$fact";
            break;
        }
        default: {
                $result = "Enter Valid Number";
                break;
            }
    }
}
?>

                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php
            if (isset($_REQUEST['firstlast'])) {
                $n=$_REQUEST['number'];
                $first="0";
                $last=$n%10;
                $sum=0;
                while($n>10)
                    {
                        $n=$n/10;
                        $first=(int)$n; //extracting int value from float
                    }
                    $sum= $first+$last;
            }

        ?>  
   <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ASSIGNMENT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>

    <body>
        <div class="container text-center mt-4">
        <div class="row align-items-start">
        <div class="row col-sm-4 mt-4 text-center"></div>
        <div class="row col-sm-4 mt-4 text-center">
        <form method="post" action="asn3.php">
            <h5 class="mt-4">Sum of First and Last Digit</h5><br>Enter Any Digit:
            <div class="number_width mt-4"><input type="number" class="form-control form_number" id="formGroupExampleInput"
                    placeholder="Enter Digit" name="number"></div>
                    <br>
                    <?php
        echo "Sum of First and Last Digit is : $sum";
        ?><br>
            <input type="submit" class="btn btn-dark mybtn mt-4" name="firstlast" value="Submit">
            
        </form>
        </div>
        <div class="row col-sm-4 mt-4 text-center"></div>
    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </html>
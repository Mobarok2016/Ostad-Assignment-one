<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>Grade Calculator</h1>
        <form action="" method="POST">
            <input type="number" name="first" placeholder="Enter the first test score">
            <input type="number" name="second" placeholder="Enter the second test score">
            <input type="number" name="third" placeholder="Enter the third test score">

            <div class="btn"><button type="submit">Submit</button></div>
        </form>

        <div class="output">
            <?php
            if($_SERVER['REQUEST_METHOD']='POST'){
                $first=$_POST['first'];
                $second=$_POST['second'];
                $third=$_POST['third'];

                $avg = ($first+$second+$third)/3;
                $avg = round($avg,2);
                echo "<h2>Average : $avg</h2>";

                switch($avg){
                    case ($avg>=80 && $avg<=100) : 
                        echo "<h2>You Got A+</h2>";
                        break;
                    case ($avg>=70 && $avg<=79) : 
                        echo "<h2>You Got A</h2>";
                        break;
                    case ($avg>=60 && $avg<=69) : 
                        echo "<h2>You Got A-</h2>";
                        break;
                    case ($avg>=50 && $avg<=59) : 
                        echo "<h2>You Got B</h2>";
                        break;
                    case ($avg>=40 && $avg<=49) : 
                        echo "<h2>You Got C</h2>";
                        break;
                    case ($avg>=33 && $avg<=39) : 
                        echo "<h2>You Got D</h2>";
                        break;
                    default :
                    echo "<h2>Fail</h2>";

                };
                
            };

            ?>
        </div>
    </div>
</body>
</html>
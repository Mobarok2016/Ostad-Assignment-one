<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
<div class="container">
        <h1>Comparison Tool </h1>
        <form action="" method="POST">
            <input type="number" name="num1" placeholder="Enter the first Number">
            <input type="number" name="num2" placeholder="Enter the second Number">
            

            <div class="btn"><button type="submit">compare</button></div>
        </form>

        <div class="output">
            <?php 
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $num1= $_POST['num1'];
                $num2= $_POST['num2'];

                $larger = $num1>$num2 ?  "<h2> $num1 is larger </h2>" :  "<h2> $num2 is larger </h2>";
                echo $larger;
            }
            
            
            ?>
        </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
<div class="container">
        <h1>Even Odd Checker</h1>
        <form action="" method="POST">
            <input type="number" name="num" placeholder="Enter the Number">
            

            <div class="btn"><button type="submit">Check</button></div>
        </form>

        <div class="output">
            <?php 
            if($_SERVER['REQUEST_METHOD']='POST'){
                $number = $_POST['num'];

                if($number%2==0){
                    echo "<h2>The Number is Even</h2>";
                }

                else{
                    echo "<h2>The Number is Odd</h2>";
                }
            }
            
            
            
            ?>
        </div>
</div>
</body>
</html>
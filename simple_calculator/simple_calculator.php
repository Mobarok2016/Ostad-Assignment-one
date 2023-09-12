<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>Simple Calculator</h1>

        <form action="" method ="POST">
            <input type="number" name="num1" placeholder="Enter the first number">
            <input type="number" name="num2" placeholder="Enter the second number">

            <select name="operation" id="">
                <option value="add">Add</option>
                <option value="sub">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="division">Division</option>
            </select>

            <div class="btn"><button>calculate</button></div>
        </form>

        <div class="output">
            <?php
            if($_SERVER['REQUEST_METHOD']='POST'){
                $num1= $_POST['num1'];
                $num2= $_POST['num2'];
                $operation= $_POST['operation'];

                switch($operation){
                    case "add" :
                        $addition = $num1+$num2;
                        echo "<h2> $addition </h2>";
                        break;
                    case "sub" :
                        $addition = $num1-$num2;
                        echo "<h2> $addition </h2>";
                        break;
                    case "multiply" :
                        $addition = $num1*$num2;
                        echo "<h2> $addition </h2>";
                        break;
                    default :
                        $addition = $num1/$num2;
                        echo "<h2> $addition </h2>";
                        
                }
            } 
            
            
            
            ?>
        </div>
    </div>
</body>
</html>
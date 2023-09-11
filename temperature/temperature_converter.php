<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatur Converter </title>

    <style>
     <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>Temperature Converter</h1>
        <form action="" method="POST">
            <input type="number" name="temperature" required placeholder="Enter the temperature"><br>
            <select name="operation" id="">
                <option value="ferhenheit">Celcius to Ferhenheit</option>
                <option value="celcius">Ferhenheit to Celcius</option>
            </select><br>

            <div class="btn"><button type="submit">Convert</button></div>
        </form>

        <div class="output">
            <?php 
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $temperature = $_POST['temperature'];
                $operation = $_POST['operation'];

                if($operation=='ferhenheit'){
                    $result = $temperature*9/5+32;
                    echo "<h3> Result : $result </h3>";
                }
                else if($operation=='celcius'){
                    $result = ($temperature-32)*5/9;
                    echo "<h3> Result : $result </h3>";
                }
            }
            
            ?>
        </div>
    </div>

</body>
</html>
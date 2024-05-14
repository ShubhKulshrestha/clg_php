<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        Enter Number: <br>
        <input type="text" name="n1" placeholder="Enter the number"><br>
        <input type="text" name="n2" placeholder="Enter the number"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $sum = $n1 + $n2;
        echo "The sum is ".$sum;
    }
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        First Name:<input type="text" name="fn"><br>
        Last Name: <input type="text" name="ln"><br>
        Email: <input type="email" name="em"><br><br>
        <label for="mySelection">What's your favourite language</label>
        <select  name="mySelection" id="mySelection" size="1" multiple="multiple">
            <option value="PHP">PHP Language</option>
            <option value="Java">Java Programming Language</option>
            <option value="C">C Language</option>
        </select>
        <label for="tested"> Choice one?</label>
        <input type="checkbox" name="choice[]" id="choice one" value="testTask">
        <label for="designed"> choice two?</label>
        <input type="checkbox" name="choice[]" id="choice two" value="designTask">
        <input type="submit" name= "Submitbutton" id="submitbutton" value="sendDetails">
        <input type="reset" name="resetButton" id="resetButtton" value="ResetForm">
    </form>
</body>
</html>
<?php

?>

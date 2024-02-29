<?php


    if(isset($_POST['mySelection'])) {
        foreach($_POST['mySelection'] as $widget){
            $mySelection = $widget. ",";
        }
    }
    if(isset($_POST['choices'])){
        foreach( $_POST['choices'] as $choices){
            $choices = $choices.",";
    }
}
?>
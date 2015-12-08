<?php
/**
 * Created by PhpStorm.
 * User: Shahriar R Mahmud
 * Date: 12/9/15
 * Time: 12:32 AM
 */

if(isset($_GET['value'])){

    $chars = $_GET['value'];

    $len = strlen($chars);

    echo "<h2 style='color: blueviolet; float: right'>Character write so far: ".$len."</h2>";

    if($len>140){

        echo "<br><br><p style='color:#ff0000; font-size: 17px;font-family: 'comic sans MS'; '>You are crossing the limit!</p>";

    }
}

?>
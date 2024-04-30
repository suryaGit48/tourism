<?php
$con = new mysqli("localhost", "root", "", "tourism");
if ($con === False) {
    echo "Connection failed";
}
?>
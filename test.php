<?php
    // echo phpversion();

    echo isPhone("06 90 90 90 90 90");
    
    function isPhone($phone){
        return preg_match("/^[0-9]*$/", $phone);
    }
?>
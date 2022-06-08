<?php

function checkLogin($login = false){
    if ($login == true ) {
        return ('- '.rand(10,50));
    }
}
?>

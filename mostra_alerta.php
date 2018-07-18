<?php
session_start();
function mostraalerta($tipo){
    if(isset($SESSION[$tipo])){
        echo "<p class='alert-$tipo'>$SESSION[$tipo]</p>";
    }
};

function alert(){
    if (isset($_SESSION["danger"])) {
        echo "<p class='alert-danger'>" . $_SESSION["danger"] . "</p>";
        unset($_SESSION["danger"]);
    };
    if (isset($_SESSION["success"])) {
        echo "<p class='alert-success'>" . $_SESSION["success"] . "</p>";
        unset($_SESSION["success"]);
    };
}
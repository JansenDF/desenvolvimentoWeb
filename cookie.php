<?php

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}
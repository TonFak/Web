<?php
session_start();
if(isset($_SESSION['userData']))
{
    foreach ($_SESSION['userData'] as $key => $value) {
        echo "$key: $value <br />";
    }
}
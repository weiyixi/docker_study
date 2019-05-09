<?php
/**
 * Created by PhpStorm.
 * User: weiyixi
 * Date: 2018/12/26
 * Time: 7:09 PM
 */

session_start();


$_SESSION['aaa'] = 'dddd';
echo "<img src='../'/>";
var_dump($_SESSION);
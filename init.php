<?php
const DIR=__DIR__;

function monVarDump($param){
    echo'<pre>';
    print_r($param);
    echo '</pre>';
}

$tab = [34,87,90,5];
$dbh = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');


/**
 * Undeocumennted function
 *  @param integer $param
 * @return integer 
 */

function multipliPar10 (int $param) :int 
{
    return $param * 10;
}
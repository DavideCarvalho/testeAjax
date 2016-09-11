<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

$array = array('status'=>'');

if ($login == "davi" && $senha == "123"){
    $array['status'] = 'okay';
} else {
    $array['status'] = 'not okay';
}

echo json_encode($array);
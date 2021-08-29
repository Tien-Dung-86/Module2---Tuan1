<?php
$path = "demo.json";
function saveData($arr)
{
    global $path;
    $dataJson = json_encode($arr);
    file_put_contents("demo.json", $dataJson);
}

function loadData()
{
    $data = file_get_contents($GLOBALS["path"]);
    $result = json_decode($data, true);
    return $result;
}

function addUser($data){
    $users = loadData();
    array_push($users, $data);
    saveData($users);
}

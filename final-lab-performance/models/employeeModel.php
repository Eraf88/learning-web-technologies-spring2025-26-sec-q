<?php
require_once('db.php');

function registerEmployee($employee){
    $con = getConnection();
   
    $sql = "INSERT into employees values('', '{$employee['name']}', '{$employee['contact']}', '{$employee['username']}', '{$employee['password']}')";
    if(mysqli_query($con, $sql)) return true;
    return false;
}

function updateEmployee($employee){
    $con = getConnection();
    $sql = "UPDATE employees set name='{$employee['name']}', contact='{$employee['contact']}' WHERE username='{$employee['username']}'";
    if(mysqli_query($con, $sql)) return true;
    return false;
}

function searchEmployees($name){
    $con = getConnection();
    $sql = "SELECT * from employees WHERE name like '%{$name}%'";
    $result = mysqli_query($con, $sql);
    $employees = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($employees, $row);
    }
    return $employees;
}
?>
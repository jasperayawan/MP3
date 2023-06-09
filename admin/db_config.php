<?php
    
   $hostName = 'localhost';
   $uname = 'root';
   $pass = '';
   $db = 'admin_db';

   $conn = mysqli_connect($hostName,$uname,$pass,$db);

   if(!$conn){
       die('unable to connect'. mysqli_connect_error());
   }

   function filteration($data){
        foreach($data as $key => $value){
            
            //Site Title = Bayangan

            $value = trim($value);
            $value = stripcslashes($value);
            $value = htmlspecialchars($value);
            $value = strip_tags($value);
            $data[$key] = $value;
        }
    return $data;
   }

   function selectAll($table)
   {
    $conn = $GLOBALS['conn'];
    $res =  mysqli_query($conn,"SELECT * FROM $table");
    return $res;
   }

   function select($sql,$values,$datatypes){

    $conn = $GLOBALS['conn'];

    if($stmt = mysqli_prepare($conn,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed');
        }
    }else{
        die('Query cannot be executed');
    }
   }

   function update($sql,$values,$datatypes){

    $conn = $GLOBALS['conn'];

    if($stmt = mysqli_prepare($conn,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed - Update');
        }
    }else{
        die('Query cannot be executed - Update');
    }
   }

   function insert($sql,$values,$datatypes){

    $conn = $GLOBALS['conn'];

    if($stmt = mysqli_prepare($conn,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed - Insert');
        }
    }else{
        die('Query cannot be executed - Insert');
    }
   }

   function delete($sql,$values,$datatypes){

    $conn = $GLOBALS['conn'];

    if($stmt = mysqli_prepare($conn,$sql)){
        mysqli_stmt_bind_param($stmt,$datatypes,...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed - Delete');
        }
    }else{
        die('Query cannot be executed - Delete');
    }
   }
?>
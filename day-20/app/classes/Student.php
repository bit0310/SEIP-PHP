<?php
namespace App\classes;

class Student
{

    public function saveStudentInfo($data){

        $link = mysqli_connect("localhost", "root", "", "bitm-sofiq-71");
        $sql= "INSERT INTO students (name, email, mobile) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";

       if(mysqli_query($link, $sql)){
            $message = "Student info save successfully";
            return $message;
       }else{
           die('Query problem'.mysqli_error($link));
       }
    }



    public function getAllStudentInfo(){
        $link = mysqli_connect("localhost", "root", "", "bitm-sofiq-71");
        $sql= "SELECT * FROM students";
        if(mysqli_query($link, $sql)){
            $queryResult = (mysqli_query($link, $sql));
            return $queryResult;

//            echo "<pre>";
//            print_r($queryResult);
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

}
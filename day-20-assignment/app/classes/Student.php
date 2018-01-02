<?php
/**
 * Created by PhpStorm.
 * User: USER-PC
 * Date: 1/2/2018
 * Time: 10:34 PM
 */

namespace App\classes;


class Student{

    public function saveStudentInfo($data){
        $link = mysqli_connect("localhost", "root", "", "day-22");
        $sql = "INSERT INTO students(firstname, lastname, email, mobile, address) 
                VALUES('$data[firstname]', '$data[lastname]', '$data[email]', '$data[mobile]', '$data[address]') ";

        if (mysqli_query($link, $sql)){
            $message = "Student information save successfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }


    public function getAllStudentInfo($data){
        $link = mysqli_connect("localhost", "root", "", "day-22");
        $sql = "SELECT * FROM students";

        if (mysqli_query($link, $sql)){
            $queryResult = (mysqli_query($link, $sql));
            return $queryResult;
        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

}




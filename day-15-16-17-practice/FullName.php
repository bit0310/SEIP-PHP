<?php
/**
 * Created by PhpStorm.
 * User: USER-PC
 * Date: 12/27/2017
 * Time: 11:25 PM
 */

class FullName
{
 function makeFullName($firstName, $lastName ){
     $fullName = $firstName.' '.$lastName;
     return $fullName;
 }

    function calculator($data ){
        $btn = $data['btn'];
        switch ($btn) {
            case '+' :
                $result = $data['first_number']+ $data['last_number'];
                break;
            case '-' :
                $result = $data['first_number']- $data['last_number'];
                break;
            case '*' :
                $result = $data['first_number']* $data['last_number'];
                break;
            case '/' :
                $result = $data['first_number']/ $data['last_number'];
                break;
            case '%' :
                $result = $data['first_number']% $data['last_number'];
                break;
        }
        return $result;
    }
}
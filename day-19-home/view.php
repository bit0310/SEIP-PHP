<?php
//require_once 'app/classes/Example.php';
//require_once 'app/classes/Student.php';
require_once 'vendor/autoload.php';

use App\classes\Student;
Student::addition();



$result= [];
$result['string_length']=' ';
$result['word_length'] = ' ';

if (isset($_POST['btn'])){
    $example = new App\classes\Example();
    $result = $example->wordCharacterCount($_POST);
}






?>


<form action="" method="post">
    <table>
        <tr>
            <th>Enter a string</th>
                <td><input type="text" name="given_string" value="<?php if(isset($_POST['given_string'])) echo $_POST['given_string']; ?>"></td>
        </tr>

        <tr>
            <th>Total number of character</th>
            <td><input type="text"  value="<?php echo $result['string_length']; ?>"></td>
        </tr>

        <tr>
            <th>Total number of word</th>
            <td><input type="text"  value="<?php echo $result['word_length']; ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit"  name="btn" value="submiT"></td>
        </tr>
    </table>

</form>

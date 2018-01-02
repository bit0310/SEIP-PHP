<?php
require_once 'vendor/autoload.php';

use App\classes\Student;
Student::addition();

$result =[];
$result ['string_length']= ' ';
$result ['word_length']= ' ';

if(isset($_POST['btn'])) {
    $example = new App\classes\Example();
    $result = $example->wordCharacterCount($_POST);
}

//use app\classes\Example;
//
//if (isset($_POST['btn'])){
//    $result = Example::wordCharacterCount($_POST);
//}

?>


<form action="" method="post">
    <table>
    <tr>
        <th>Enter Your string</th>
        <td><input type="text" name="given_string" value="<?php if(isset($_POST['given_string'])) echo $_POST['given_string']; ?>"></td>
    </tr>

    <tr>
        <th>Total number of world</th>
        <td><input type="text" value="<?php echo $result['string_length']; ?>" ></td>
    </tr>

    <tr>
        <th>Total number of character</th>
        <td><input type="text"  value="<?php echo $result['word_length']; ?>" > </td>
    </tr>

    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="Submit"> </td>
    </tr>
    </table>
</form>



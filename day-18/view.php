<?php

require_once "Demo.php";
 $demo = new Demo();
 $result=$demo->demo();



?>


<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <th><input type="text" name="first_number"  value="<?php if(isset($_POST['first_number']))
                echo $_POST['first_number']; ?>"/></th>
        </tr>

        <tr>
            <th>Last Number</th>
            <th><input type="text" name="last_number" value="<?php if(isset($_POST['last_number']))
                echo $_POST['last_number']; ?>"/></th>
        </tr>

        <tr>
            <th>Choice</th>
            <th>
                <input type="radio" name="check" value="ODD">ODD
                <input type="radio" name="check" value="Even">Even
            </th>
        </tr>

        <tr>
            <th>Result</th>
            <th><textarea type="text" rows="5" name="result" >
                    <?php echo $result; ?>
                </textarea>
        </tr>
        <tr>
            <th></th>
            <th><input type="submit" name="btn" value="Submit"></th>
        </tr>
    </table>
</form>

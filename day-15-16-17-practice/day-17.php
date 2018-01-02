<?php

$result = ' ';
if(isset($_POST['btn'])){
    require_once 'FullName.php';
    $fullName = new FullName();
    $result = $fullName->makeFullName($_POST['first_name'], $_POST['last_name'] );

}


?>


<form action="" method="post">
    <table>
    <tr>
        <th>First Name</th>
        <th>
            <input type="text" name="first_name"/>
        </th>
    </tr>

    <tr>
        <th>Last Name</th>
        <th>
            <input type="text" name="last_name"/>
        </th>
    </tr>

    <tr>
        <th>Full Name</th>
        <th>
            <input type="text" name="full_name" value="<?php echo $result; ?>"/>
        </th>
    </tr>

    <tr>
        <th></th>
        <th>
            <input type="submit" name="btn" value="submit"/>
        </th>
    </tr>
    </table>
</form>


<hr/>


<?php

$result = ' ';
if(isset($_POST['btn'])){
    require_once 'FullName.php';
    $fullName = new FullName();
    $result = $fullName->calculator($_POST);

}

?>


<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <th>
                <input type="text" name="first_number"  value="<?php echo $_POST['first_number']; ?>"/>
            </th>
        </tr>

        <tr>
            <th>Last Number</th>
            <th>
                <input type="text" name="last_number" value="<?php echo $_POST['last_number']; ?>"/>
            </th>
        </tr>

        <tr>
            <th>Result</th>
            <th>
                <input type="text" name="full_name" value="<?php echo $result; ?>"/>
            </th>
        </tr>

        <tr>
            <th></th>
            <th>
                <input type="submit" name="btn" value="+"/>
                <input type="submit" name="btn" value="-"/>
                <input type="submit" name="btn" value="*"/>
                <input type="submit" name="btn" value="/"/>
                <input type="submit" name="btn" value="%"/>
            </th>
        </tr>
    </table>
</form>
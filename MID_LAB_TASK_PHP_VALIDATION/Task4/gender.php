<html>

<head>
    <title>TASK GENDER</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
            <hr>
        <input type="submit" name="submit" value="Submit">
        <br>
            <?php
            if (isset($_REQUEST['submit'])) {
                if (isset(($_REQUEST['gender']))) {
                    echo  $_REQUEST['gender'] . ' is Submitted';
                } else {
                    echo "Select Atleast One..!";
                }
            }
            ?>
        </fieldset>
    </form>
</body>

</html>
<?php
$id = $_GET['id'];
$myfile = fopen('../model/user.txt', 'r');
$counter = 0;

while (!feof($myfile)) {
    $data = fgets($myfile);
    if ($data != "") {
        $user = explode('|', $data);
        if (++$counter == $id) {
            echo '
            <html>
                <body>
                    <form method="post" action="../controller/editUserCheck.php?id=' . $id . '">
                        <fieldset>
                            <legend>Edit</legend>
                            <table>
                                <tr>
                                    <td>Name:</td>
                                    <td><input type="text" name="name" value="' . $user[0] . '"></td>
                                </tr>
                                <tr>
                                   <td>User Name:</td>
                                    <td><input type="text" name="username" value="' . $user[1] . '"></td>
                                </tr>
                                <tr>
                                    <td>email:</td>
                                    <td><input type="email" name="email" value="' . $user[2] . '"></td>
                                </tr>
                                <tr>
                                    <td>Contact Number:</td>
                                    <td><input type="text" name="number" value="' . $user[3] . '"></td>
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type="password" name="password" value="' . $user[4] . '"></td>
                                </tr>
                                
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="submit" value="Submit"></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </body>
            </html>
            ';
        }
    }
}


fclose($myfile);
?>
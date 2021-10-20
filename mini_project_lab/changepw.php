<?php
    session_start();

    if(!isset($_COOKIE['user'])){  
        header("location: Login.php");
    }
?>

            <html>
                <body>
                    <form method="post" action="changepwcheck.php">
                        <fieldset>
                            <legend>CHANGE PASSWORD</legend>
                            <table>
                                <tr>
                                    <td>Current Password:</td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="currentpw" value=""></td>
                                </tr>
                                <tr>
                                    <td> New Password:</td>
                                </tr>
                                 <tr>
                                    <td><input type="password" name="newpw" value=""></td>
                                </tr>
                                <tr>
                                    <td> Retype New Password:</td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="repw" value=""></td>
                                </tr>


                                <tr>
                                    <td><hr><input type="submit" name="submit" value="Submit"></td>
                                    <td><br><a href="adminIndex.php">Home</a></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </body>
            </html>

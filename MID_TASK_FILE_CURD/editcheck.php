<?php
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    if ($_POST['username'] != "") {
        if ($_POST['password'] != "") {
            if ($_POST['email'] != "") {

                if (copy('user.txt', 'PrevUser.txt') != 1) {
                    echo 'Error !!!';
                    return;
                }

                $myfile = fopen("user.txt", 'w');
                $myPrevfile = fopen("PrevUser.txt", "r");
                $counter = 0;

                while (!feof($myPrevfile)) {
                    $data = fgets($myPrevfile);
                    if ($data != "") {
                        if (++$counter == $id) {
                            fwrite($myfile, $_POST['username'] . "|" . $_POST['password'] . "|" . $_POST['email']);
                        } else {
                            $user = explode('|', $data);
                            fwrite($myfile, trim($user[0]) . '|' . trim($user[1]) . '|' . trim($user[2]));
                        }
                        fwrite($myfile, "\n");
                    }
                }

                fclose($myfile);
                fclose($myPrevfile);
                $myPrevfile = fopen("PrevUser.txt", "w");
                fwrite($myPrevfile, "");
                fclose($myPrevfile);

                header('location: userlist.php');
            } else {
                echo "Invalid email...";
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid username...";
    }
}
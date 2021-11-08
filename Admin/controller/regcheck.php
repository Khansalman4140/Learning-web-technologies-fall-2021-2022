<?php
session_start();
if (isset($_POST['submit'])){

   
          $name = $_POST['name'];
          $username = $_POST['username'];
          $email = $_POST['email'];
          $num = $_POST['number'];
          $password = $_POST['password'];
          $Cpassword = $_POST['Cpassword'];

          
          function hasTwoWord($name)
                {
                    for ($i = 0; $i < strlen($name); ++$i) {
                        if ($i != strlen($name) - 1 && $name[$i] == " " && $i != 0) {
                            if ($name[strlen($name) - 1] != ' ') {
                                return true;
                            }
                        }
                    }
                    return false;
                }

                function validName($name)
                {
                    for ($i = 0; $i < strlen($name); ++$i) {
                        $c = ord(strtolower($name)[$i]);
                        if ($c < 'a' || $c > 'z' || $c == ' ') {
                          return true; 
                        } else{ return false; } 
                }
            }

            function validUserName($username)
                {
                    for ($i = 0; $i < strlen($username); ++$i) {
                        $c = ord(strtolower($username)[$i]);
                        if (($c < 'a' || $c > 'z' ) && ($c < '0' || $c > '9' )) {
                          return true; 
                        } else{ return false; } 
                }
            }

            function validNum($num)
                {
                    for ($i = 0; $i < strlen($num); ++$i) {
                        $c = ord(strtolower($num)[$i]);
                        if ($c < '0' || $c > '9' ) {
                          return true; 
                        } else{ return false; } 
                }
            }

             function validEmail($email)
                {
                    for ($i = 0; $i < strlen($email); ++$i) {
                        $c = ord(strtolower($email)[$i]);
                        if ( ($c < 'a' || $c > 'z')  || ($c < '0' || $c > '9')  && $c == '.' ) 
                        {
                          return true; 
                        } else{ return false; } 
                }
            }

          


        if($name == "")
        {
            echo "Please Enter Your Name!<br>";
            
        }
          
        elseif(strlen($name)<=4)
            {
             echo "Length is too Short!<br>";
            
            } 

        elseif(!hasTwoWord($name)) 
         {
              echo "Please Enter Your Full Name as String and start with a letter!<br>";
         }
         elseif(!validName($name))
            {
              echo "Please Enter a Valid Name that start with a letter!<br>";
         }

         if($username == "")
        {
            echo "Please Enter Your User Name!<br>";
            
        }
          
        elseif(strlen($username)<=4)
            {
             echo "Length is too Short For User Name!<br>";
            
            }   
        elseif(!validUserName($username))
         {
              echo "Please Enter User Name as String that should start with a letter and may contain number!<br>";
         }

         if($email == "")
        {
            echo "Please enter your email!<br>";
            
        }


        elseif (!validEmail($email))
        {
            echo " Please Enter Valid Email Address!<br>";
        }

         if ($num == "") {
            echo "Please Enter Mobile Number! <br>";
        }
        elseif (!validNum($num))  {
            echo "Please Enter a Valid Mobile Number!<br>";
        }
        elseif (strlen ($num) != 11) {
            echo "Mobile Number Must Contain 11 Digits!<br>";
        }



        if($password == "")
        {
            echo "Password is required!<br>";
            
        }
        elseif(strlen($password)<=3)
        {
            echo "Password is too short!<br>";
        }
        elseif($Cpassword == "")
        {
            echo "Please type your password again in Confirm Password!<br>";
        }
        elseif($password != $Cpassword)
        {
            echo "Passwords do not match!<br>";
        }
        

       
       else{

        $myfile = fopen('../model/user.txt', 'a');
                $user = $_POST['name'] . "|" .$_POST['username'] . "|" . $_POST['email'] . "|" . $_POST['number'] . "|" . $_POST['password'] . "\r\n";

                fwrite($myfile, $user);
                fclose($myfile);

                //echo $user;

                $des = "../assets/upload/".$_FILES['pic']['name'];
                $src = $_FILES['pic']['tmp_name'];

                 if(move_uploaded_file($src, $des)){
                     /*echo "Done";*/
                  $_SESSION['profile'] = $_FILES['pic']['name'];
                  header('location: ../views/login.html');
                   }else{
                   echo "Error in uploading picture";
                }

                //header('location: login.html');
}
}
?>
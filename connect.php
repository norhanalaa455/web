<?php
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST, 'password');
    if (!empty($username)){
        if (!empty($password)){
            $host = "localhost";
            $dbusername = "root";
            dbpassword = "";
            dbname = "mytravel";
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()){
                die('connect Error(' . mysqli_connect_errno().')'
                . mysqli_connect_error());

            }
            else{
                $sql = "INSERT INTO mytravel (username,password)
                values ('$username','$password')";
                if ($conn->query($sql)){
                    echo "New record is inserted sucessfully";

                }
                else{
                    echo "error:" .$sql."<br>".$conn->error;
                }
                $conn->close();
            }

        }
        else{
            echo "password should not be empty";
            die();
        }
        else{
            echo "username should not be empty";
            die();
        }
    }
    ?>
<?php
$Name =$_POST['name1'];
$mobile = $_POST['mobile'];
$bloodgroup = $_POST['dpBloodGroup'];
$country = $_POST['dpCountry'];
$state = $_POST['dpState'];
$city = $_POST['dpCity'];

if (!empty($Name)) {
    if (!empty($mobile)) {
        if (!empty($bloodgroup)) {

             if (empty($county)) {
                if (!empty($state)) {
                    if (!empty($city)) {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dpname = "bloodline";
                        $conn = new mysqli($servername, $username, $password, $dpname);


                        if (mysqli_connect_error()) {
                            die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
                        } else {
                            $sql = "INSERT INTO registerusers(Name ,MobileNumber,BloodGroup,Country,State,City)
                                values ('$Name','$mobile','$bloodgroup','$country','$state','$city')";

                            if ($conn->query($sql)) {
                                echo "NEW RECORD IS INSERTED";
                            } else {
                                echo "Error :" . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();

                        }




                    } else {
                        echo "city should not be empty";
                        die();
                    }





                } else {
                    echo "state should not be empty";
                    die();
                }
            } else {
                echo "county should not be empty";
                die();
            }

        } else {
            echo "bloodgroup should not be empty";
            die();
        }


    } else {
        echo "mobile should not be empty";
        die();
    }


} else {
    echo "Name should not be empty";
    die();
}

?>
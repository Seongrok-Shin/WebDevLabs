<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Add New Memebr</title>
</head>

<body>
    <?php
    $homepage = '<a href="vip_member.php"><input class="py-2 px-4 font-semibold rounded-lg shadow-md
        text-white bg-green-500 hover:bg-green-700" type="submit" value = "Homepage"/></a>';


    function database($fname, $lname, $phone, $dob, $email, $adl1, $adl2, $city, $zpcode, $gender)
    {
        global $homepage;

        require("../../../conf/settings.php");

        $conn = @mysqli_connect(
            $host,
            $user,
            $pswd,
            $dbnm
        );
        if (!$conn) {
            echo "<p>Unable to connect to the database server.</p>";
            echo $homepage;
            exit();
        } else {
            $table = mysqli_query($conn, "SHOW TABLES LIKE 'vipmember'");

            $is_exist = mysqli_num_rows($table) > 0;

            if (!$is_exist) {
                $create_table = "CREATE TABLE vipmember (  
                    member_id INT AUTO_INCREMENT PRIMARY KEY,
                    fname VARCHAR(40) NOT NULL UNIQUE,
                    lname VARCHAR(40) NOT NULL UNIQUE,
                    phone VARCHAR(20) NOT NULL,
                    dob VARCHAR(10),
                    email VARCHAR(40),
                    address_line1 VARCHAR(50),
                    address_line2 VARCHAR(50),
                    city VARCHAR(50),
                    zipcode VARCHAR(50),
                    gender VARCHAR(1)
                    )";
                if (mysqli_query($conn, $create_table)) {
                    echo "<p>Table created successfully<p>";
                } else {
                    echo "<p>Error creating table: <p>" . mysqli_error($conn);
                    echo $homepage;
                }
            }


            $sql_insert = "INSERT INTO vipmember (fname, lname, phone, dob, email, address_line1, address_line2, city, zipcode, gender) VALUES ('$fname', '$lname', '$phone', '$dob', '$email', '$adl1', '$adl2', '$city', '$zpcode', '$gender')";
            $insert_result = mysqli_query($conn, $sql_insert);

            if ($insert_result) {
                echo "<p>New record created successfully<p>";
            } else {
                echo "<p>Error: " . $sql_insert . "<br><p>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $adl1 = $_POST['adl1'];
    $adl2 = $_POST['adl2'];
    $city = $_POST['city'];
    $zpcode = $_POST['zpcode'];
    $gender = $_POST['gender'];

    database($fname, $lname, $phone, $dob, $email, $adl1, $adl2, $city, $zpcode, $gender);
    echo $homepage;
    ?>
</body>

</html>
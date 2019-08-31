<?php
    include 'connect.php';


    $desc = description;

    $sql = "SELECT ID, name, price, guarantee, groups, dataofpurchase, 
            image1, image2, image3, image4, image5, $desc  FROM mythings";
    $res = mysqli_query($conn,$sql);


    /*
        echo "<br><br> sample: ";

        if (mysqli_num_rows($res) > 0) {

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<br> id: " . $row["ID"] . " - Name: " . $row["name"];

            }
        }
    else {
        echo "0 result";
    }

    mysqli_close ($conn); */

    <?php
    include 'connect.php';


$celector = $_POST['groups'];
    if (empty($celector) or $celector == 'all') {$condition = NULL;}
    else $condition = "WHERE groups = '$celector' ";


if (!empty($_POST))     // if the value is not empty
    {
// The eppearance of the card
    if (isset($_POST['image']) && $_POST['image'] == 'yes') { $image_eppearance = image1; }
    else  $image_eppearance = 0;
    if (isset($_POST['price']) && $_POST['price'] == 'yes') {$price_eppearance = price;}
    else $price_eppearance = 0;
    if (isset($_POST['description']) && $_POST['description'] == 'yes') {$description_eppearance = description; }
    else $description_eppearance = 0;
    if (isset($_POST['groups']) && $_POST['groups'] == 'yes') {$groups_eppearance = groups;}
    else $groups_eppearance = 0;
    if (isset($_POST['yearofpurchase']) && $_POST['yearofpurchase']) {$dataofpurchase_eppearance = dataofpurchase; }
    else $dataofpurchase_eppearance = 0;
    if (isset($_POST['guarantee']) && $_POST['guarantee'] == 'yes') {$guarantee_eppearance = guarantee;}
    else $guarantee_eppearance = 0;

    if ($condition == !NULL) {$image_eppearance = image1;};

    $sql = "SELECT ID, name, $price_eppearance, $guarantee_eppearance, $groups_eppearance, $dataofpurchase_eppearance,
$image_eppearance, $description_eppearance  FROM mythings $condition";
    $res = mysqli_query($conn,$sql);

}
else
{
    $sql = "SELECT ID, name, image1, description  FROM mythings $condition";
    $res = mysqli_query($conn,$sql);
}



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

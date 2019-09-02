<! Doctype html>
<Html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- For correct work on different device-->
    <title>Homemade Things</title>
    <script src="style/jquery.min.js"></script>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="style/popper.min.js"></script>
    <script src="style/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php
    include 'function.php';
?>
<body>
<script>
    $(document).ready(function () {
        $("#logo")
            .animate({top: '10px', left:'30%', opacity: '0.5', fontSize:'3em'},2000)
            .animate({opacity: '1'});
    })
</script>

<div id="logo">
    Home Things - Домашні речі</div>

<!-- navbar panel-------------------------- -->
<nav class="navbar navbar-fixed-top navbar-expand-sm bg-dark navbar-dark sticky-top navbar-my">
    <a class="navbar-brand" href="#">
        <img src="img/logo11.PNG" alt="logo" style="height: 40px"> Head
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links     -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="edit.php" class="nav-link">Edit</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">planing</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">thrown things</a>
            </li>
            <li class="nav-item">
                <a href="log.php" class="nav-link">login</a>
            </li>
        </ul>
        </div>
</nav>

<div class="container MainContainer"> <!--main container-->
    <div class="row"> <!--container left right-->
        <div class="col-lg-8 col-xl-9">
            <div class="row"> <!-- things container-->
                <!--Card-->
                <?php
                while ($row=mysqli_fetch_assoc($res))
                {
                ?>
                <div class="col-xl-6">
                    <div class="card mb-3 overlay" style="max-width: 640px;">
                        <div class="row no-gutters">
                            <?php
                            if (isset($row['image1']))
                                {echo '<div class="col-md-4">
                                <img src="images/'.$row['image1'].'" class="card-img" alt="...">
                            </div>';}
                            ?>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['name'] ?> </h5>
                                    <?php
                                        if (isset($row['price']))
                                            { echo '<div class="card-text text-right">' . $row['price'] . ' грн.</div>'; } ?>
                                    <p class="card-text"><?=$row['description']?></p>
                                    <p class="card-text"><small class="text-justify">
                                            <?php
                                            if (isset($row['groups']))
                                                { echo 'Groups the things: <u>'.$row['groups'].'</u>';}
                                            if (isset($row['dataofpurchase']))
                                                {echo '<br> Data of purchase: <u>'.$row['dataofpurchase'].'</u>';}
                                            if (isset($row['guarantee']))
                                                {echo '<br> Warranty period up to: <u>'.date('d-M-Y', strtotime(date($row['dataofpurchase']).'+'.$row['guarantee'].'year')).'</u>';}
                                            ?>
                                                    </small></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <? } ?>
            </div>
            <!--end things container-->
            <p>left</p>
        </div>
        <!--right container-->
        <div class="order-first order-lg-0 col-lg-4 col-xl-3">
            <div class="container rightBar">
                <!--slider script-->
                <script>
                    $(document).ready(function () {
                        $("#slid1").click(function () {
                            $("#slider1").slideToggle(2000);
                        })
                    })
                </script>
                <div id="slid1" class="rightBarButtonSlide">
                    The appearance of the card
                </div>
                <div class="row">
                    <form action="index.php" method="post">
                        <div id="slider1" class="col my-none d-lg-block">

                                <!-- <div class="form-check">
                                    <lebel class="form-check-label">
                                        Show by default <input type="checkbox" checked="checked" class="form-check-inline"></div>
                                    </lebel>-->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="image" value="yes" class="form-check-inline">  - Image
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="price" value="yes" class="form-check-inline"> - Price
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="description" value="yes" class="form-check-inline"> - Description
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="groups" value="yes" class="form-check-inline"> - Grousp
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="yearofpurchase" value="yes" class="form-check-inline"> - Year of purchase
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="guarantee" value="yes" class="form-check-inline"> - Guarantee
                                    </label>
                                </div>
                                <input type="submit" value="condition" class="btn btn-dark buttonSite">
                            <!-- </form> -->
                        </div>
                    </div>
                    <!--end the appearance of the card-->
                </div>
                <div class="container rightBar">
                    <!--Sorting by groups-->
                    <script>
                        $(document).ready(function () {
                            $("#slid2").click(function () {
                                $("#slider2").slideToggle(2000);
                            })
                        })
                    </script>
                    <div id="slid2" class="rightBarButtonSlide"> Sorting by groups</div>
                    <div class="row">
                        <div id="slider2" class="col my-none d-lg-block">
                            <!-- <form id="groupsForm" action="index.php" method="post"> -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        All groups: <input type="radio" name="groups" value="all" class="form-check-inline" checked="checked">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="groups" value="tourisn" class="form-check-inline"> Tourism
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="groups" value="tools" class="form-check-inline"> Tools
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="groups" value="garden" class="form-check-inline"> House, garden
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="groups" value="clothes" class="form-check-inline"> Clothes, shoes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="groups" value="men" class="form-check-inline"> Fot the husband
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="groups" value="women" class="form-check-inline"> For a women
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="groups" value="both" class="form-check-inline"> For a both
                                    </label>
                                </div>
                                <input type="submit" value="condition" class="btn btn-dark buttonSite">
                        </div>
                    </form>
                </div>
                <!--end Sorting by groups-->
            </div>
        </div>
        <!--end right container-->
    </div>
    <!--footer small-->
    <div class="row align-irem-end">
        <div class="col-lg-6 col-xl-4">
            <div class="footer-small1">
                <p align="center"><ins>Result:</ins></p>
                <div class="row">
                    <div class="col-7">
                        <ul>
                            <li>
                                All things -
                            </li>
                            <li>
                                For tourism -
                            </li>
                            <li>
                                Tools -
                            </li>
                            <li>
                                House, garden -
                            </li>
                            <li>
                                For the husband -
                            </li>
                            <li>
                                For a women -
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <p>0<br>0<br>0<br>0<br>0<br>0<br></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-8">
            <div class="footer-small2">
                <h5 align="center">Messages and announcements</h5>
            </div>
        </div>
    </div>
    <!--end footer small-->
</div>

                <!--footer-->
<div class="row align-items-end footerContainer">
    <div class="col-md-4 footer">
        © 2019 Yaroslav
    </div>
    <div class="col-md-4 footer">
        ***
    </div>
    <div class="col-md-4 footer">
        Home - things
    </div>
</div>


</body>
</Html>

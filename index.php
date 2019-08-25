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
                <div class="col-xl-6">
                    <!--Card-->
                    <div class="card mb-3 overlay" style="max-width: 640px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/500" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 111</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-3 overlay" style="max-width: 640px;"> <!--Card-->
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/500" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title222</h5>
                                    <p class="card-text">This is a widercontent. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end things container-->
            <p>left</p>
        </div>
        <!--right container-->
        <div class="order-first order-lg-0 col-lg-4 col-xl-3">
            <div class="container rightBar">
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
                    <div id="slider1" class="col my-none d-lg-block">
                        <form name="AppearanceCard">
                            <div class="form-check">
                                <lebel class="form-check-label">
                                    Show by default <input type="checkbox" checked="checked" class="form-check-inline"></div>
                                </lebel>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="image" class="form-check-inline">  - Image
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="price" class="form-check-inline"> - Price
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="description" class="form-check-inline"> - Description
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="year of purchase" class="form-check-inline"> - Year of purchase
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="guarantee" class="form-check-inline"> - Guarantee
                                </label>
                            </div>
                            <button type="submit" class="btn btn-dark buttonSite">Submit</button>
                        </form>
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
                        <form name="">
                            <div class="form-check">
                                <label class="form-check-label">
                                    All groups: <input type="radio" name="groups" class="form-check-inline" checked="checked">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="groups" class="form-check-inline"> Tourism
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="groups" class="form-check-inline"> Tools
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="groups" class="form-check-inline"> House, garden
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="groups" class="form-check-inline"> Clothes, shoes
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="groups" class="form-check-inline"> Fot the husband
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="groups" class="form-check-inline"> For a women
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="groups" class="form-check-inline"> For a both
                                </label>
                            </div>
                            <button type="submit" name="" class="btn btn-dark buttonSite">Submit</button>
                        </form>
                    </div>
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

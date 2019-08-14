<! Doctype html>
<Html>
<head>
    <meta charset="UTF-8">
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
            .animate({top: '30px', left:'30%', opacity: '0.5', fontSize:'2em'},2000)
            .animate({opacity: '1'});
    })
</script>
<div style="position: absolute" id="logo">
    Home Things - Домашні речі</div>

<!-- navbar panel-------------------------- -->
<nav class="navbar navbar-fixed-top navbar-expand-sm bg-dark navbar-dark navbar-my">
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

<header class="header">
<br><br><br><br><br><br><br><br><br><br>
    jjjdjdjdjdjdjdjd
</header>
</body>
</Html>

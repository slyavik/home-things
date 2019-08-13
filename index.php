<! Doctype html>
<Html>
<head>
    <meta charset="UTF-8">
    <title>Homemade Things</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="style/jquery.min.js"></script>
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


</body>
</Html>

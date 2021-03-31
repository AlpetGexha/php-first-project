<!DOCTYPE html>
<html>

<head>
    <title>Gur-let&euml;r-g&euml;sh&euml;</title>
</head>
<!-- ------------ Meta ------------------ -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta charset="utf-8">

<body>
    <h4 class="title">preke figur&euml;n p&euml;r 0.5s p&euml;r t&euml; fituar</h4>
    <p class="link"><a class="link" href="../lojëra.php">Kthehu tek loj&euml;rat</a></p>
    <div class="hapesira-potenciale"></div>
    <div id="circle" class="circle"></div>
    <div id="time" class="time"></div>

    <Script src="../assets/js/function.js"></Script>
</body>

<style type="text/css">
    .circle {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: red;
        display: none;
        position: absolute;
    }

    .time {
        position: absolute;
        right: 20px;
        top: 10px;
        font-size: 20px;
    }

    .hapesira-potenciale {
        width: 900px;
        height: 500px;
        border: 1px dotted #ddd;
        margin: 0px;
        display: none;
    }

    .title {
        text-align: center;
    }

    .link {
        text-align: center;
        text-decoration: none;
    }
</style>

</html>
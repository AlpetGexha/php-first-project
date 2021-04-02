<!DOCTYPE html>
<html>

<head>
    <title>Shpejtesia e klikimit</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/count_click.css">
    <!-- ------------ Meta ------------------ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">

    <!-- ------------ Boostrap css ------------------ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <p class="link"><a class="link" href="../lojëra.php">Kthehu tek loj&euml;rat</a></p>

        <div id="button">Kliko k&euml;tu</div> <br>

        <div class="rows">
            <div class="col1">
                <div id=tm>?</div>
            </div>

            <div class="col2">
                <div id=count>0</div>
            </div>

            <div class="col3">
                <div id=persec>KPS ?</div>

            </div>
        </div>
        <br>
        <div id=resTable>
            <div id="h1">№</div>
            <div id="h2">Klikime</div>
            <div id="h3">KPS</div>
        </div>

    </div>
    <script src="../assets/js/count_click.js"></script>
</body>

</html>
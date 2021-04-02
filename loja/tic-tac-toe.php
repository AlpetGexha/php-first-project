<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/tic_tac-toe.css">
    <script src="../assets/js/tic_tak_toe.js" defer></script>
    <title>Tic-tac-toe</title>
</head>

<body>
    <p class="link" ><a class="link" href="../lojëra.php">Kthehu tek loj&euml;rat</a></p>
    <div class="board" id="board">
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
    </div>
    <div class="winning-message" id="winningMessage">
        <div data-winning-message-text></div>
        <button id="restartButton">Restarto</button>
    </div>
</body>

</html>
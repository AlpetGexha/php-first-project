<!DOCTYPE HTML>
<html>

<head>
    <meta name="description" content="Rock-Paper-Scissors">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Rock-Paper-Scissors</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<style type="text/css">
    body {
    font-family: 'Roboto Mono', monospace;
    font-size: 21px;
    margin: 0 0 0 0;
    background-color: #ffffff;
    background-image: url(https://i.imgur.com/25PFnQi.jpg);
}

button {
    font-size: 17px;
    font-family: arial, helvetica;
    font-weight: bold;
    padding: 7px 15px 7px 15px;
    margin: 10px 0 0 0;
    border: 2px solid #202020;
    background-color: #ffffff;
    color: #202020;
    cursor: pointer;
}

button:hover {
    background-color: #202020;
    border: 2px solid #202020;
    color: #ffffff;
}

#main {
    position: relative;
    margin: auto;
    width: 360px;
    height: 440px;
    overflow: hidden;
}

#header {
    position: relative;
    margin: auto;
    width: 350px;
    height: 70px;
    background-image: url(https://i.imgur.com/jDXgErG.png);
}

.buttons {
    position: absolute;
    bottom: 10px;
    width: 75px;
    height: 75px;
    border: 2px solid #000000;
    cursor: pointer;
    -webkit-border-radius: 38px;
    -moz-border-radius: 38px;
    border-radius: 38px;
    background-image: url(https://i.imgur.com/cFwdFze.png);
}

.buttons#b_rock {
    right: 180px;
    background-position: 0 0;
}

.buttons#b_paper {
    right: 95px;
    background-position: -75px 0;
}

.buttons#b_scissor {
    right: 10px;
    background-position: -150px 0;
}

#playagain {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 245px;
    height: 75px;
    border: 2px solid #000000;
    cursor: pointer;
    -webkit-border-radius: 38px;
    -moz-border-radius: 38px;
    border-radius: 38px;
    background-image: url(https://i.imgur.com/cFwdFze.png);
    background-position: 0 -75px;
    display: none;
}

.scores {
    position: absolute;
    top: 34px;
    width: 53px;
    height: 28px;
    text-align: center;
}

.scores#score_computer {
    left: 153px;
}

.scores#score_you {
    left: 280px;
}

.options {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 165px;
    height: 165px;
    background-image: url(https://i.imgur.com/zUXYeIU.png);
}

@keyframes you_rotating {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -ms-transform: rotate(30deg);
        -moz-transform: rotate(30deg);
        -webkit-transform: rotate(30deg);
        -o-transform: rotate(30deg);
        transform: rotate(30deg);
    }
}

@keyframes computer_rotating {
    0% {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -ms-transform: rotate(-30deg);
        -moz-transform: rotate(-30deg);
        -webkit-transform: rotate(-30deg);
        -o-transform: rotate(-30deg);
        transform: rotate(-30deg);
    }
}

.options#o_you {
    background-position: 0 0;
    -webkit-transform-origin: right top;
    -moz-transform-origin: right top;
    -ms-transform-origin: right top;
    -o-transform-origin: right top;
    transform-origin: right top;
    -webkit-animation: you_rotating .2s linear infinite;
    -moz-animation: you_rotating .2s linear infinite;
    -ms-animation: you_rotating .2s linear infinite;
    -o-animation: you_rotating .2s linear infinite;
    animation: you_rotating .2s linear infinite;
    -webkit-animation-direction: alternate;
    -moz-animation-direction: alternate;
    -ms-animation-direction: alternate;
    -o-animation-direction: alternate;
    animation-direction: alternate;
}

.options#o_computer {
    background-position: 0 -165px;
    -webkit-transform-origin: left top;
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -o-transform-origin: left top;
    transform-origin: left top;
    -webkit-animation: computer_rotating .2s linear infinite;
    -moz-animation: computer_rotating .2s linear infinite;
    -ms-animation: computer_rotating .2s linear infinite;
    -o-animation: computer_rotating .2s linear infinite;
    animation: computer_rotating .2s linear infinite;
    -webkit-animation-direction: alternate;
    -moz-animation-direction: alternate;
    -ms-animation-direction: alternate;
    -o-animation-direction: alternate;
    animation-direction: alternate;
}

#result {
    position: absolute;
    top: 0;
    left: 0;
    width: 220px;
    height: 29px;
    background-image: url(https://i.imgur.com/Bp97CXQ.png);
    display: none;
}
</style>
<body>
    <div id="main">
        <div id="header">
            <div class="scores" id="score_computer">0</div>
            <div class="scores" id="score_you">0</div>
        </div>
        <div class="buttons" id="b_scissor"></div>
        <div class="buttons" id="b_paper"></div>
        <div class="buttons" id="b_rock"></div>
        <div id="playagain"></div>
        <div class="options" id="o_computer"></div>
        <div class="options" id="o_you"></div>
        <div id="result"></div>
    </div>
    <script>
        var ww = 0;
var wh = 0;
const options = ["rock", "paper", "scissor"];
$(document).ready(function () {
    $("#playagain").on("click", function (event) {
        $("#playagain,#result").hide();
        $(".buttons").show();
        $("#o_you").css("background-position", "0 0");
        $("#o_computer").css("background-position", "0 -165px");
        start();
    });
    $(".buttons").on("click", function (event) {
        $(".buttons").hide();
        var rps = $(this).attr("id").substr(2);
        stop(rps);
    });
    ww = $(window).width();
    wh = $(window).height();
    $("#main").css({
        "width": ww + "px",
        "height": wh + "px"
    });
    $(".options").css({
        "top": ((wh - 165) / 2) + "px"
    });
    $("#o_computer").css({
        "left": (ww / 2 - 190) + "px"
    });
    $("#o_you").css({
        "left": (ww / 2 + 25) + "px"
    });
    $("#result").css({
        "left": ((ww - 220) / 2) + "px",
        "top": ((wh - 165) / 2 + 165) + "px"
    });
});

function start() {
    $("#o_computer,#o_you").css({
        "-ms-animation-play-state": "running",
        "-o-animation-play-state": "running",
        "-moz-animation-play-state": "running",
        "-webkit-animation-play-state": "running",
        "animation-play-state": "running"
    });
}

function stop(which_you) {
    switch (which_you) {
        case "rock":
            bgp_you = "0 0";
            break;
        case "paper":
            bgp_you = "-165px 0";
            break;
        case "scissor":
            bgp_you = "-330px 0";
            break;
    }
    $("#o_you").css("background-position", bgp_you);
    which_computer = options[Math.floor(Math.random() * 5000) % 3];
    switch (which_computer) {
        case "rock":
            bgp_computer = "0 -165px";
            break;
        case "paper":
            bgp_computer = "-165px -165px";
            break;
        case "scissor":
            bgp_computer = "-330px -165px";
            break;
    }
    $("#o_computer").css("background-position", bgp_computer);
    result = "tie";
    if (which_you == "rock" && which_computer == "scissor") {
        result = "win";
    } else if (which_you == "scissor" && which_computer == "paper") {
        result = "win";
    } else if (which_you == "paper" && which_computer == "rock") {
        result = "win";
    } else if (which_you == which_computer) {
        result = "tie";
    } else {
        result = "lose";
    }
    switch (result) {
        case "win":
            bgp_result = "0 0";
            increment("you");
            break;
        case "lose":
            bgp_result = "0 -29px";
            increment("computer");
            break;
        default:
            bgp_result = "0 -58px";
            break;
    }
    $("#result").css("background-position", bgp_result).show();
    $("#o_computer,#o_you").css({
        "-ms-animation-play-state": "paused",
        "-o-animation-play-state": "paused",
        "-moz-animation-play-state": "paused",
        "-webkit-animation-play-state": "paused",
        "animation-play-state": "paused"
    });
    $("#playagain").show();
}

function increment(who) {
    value = parseInt($("#score_" + who).html()) + 1;
    $("#score_" + who).html(value);
}
    </script>
</body>

</html>
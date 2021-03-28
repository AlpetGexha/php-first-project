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
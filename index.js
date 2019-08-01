var forward = null;
var left = null;
var right = null;
var back = null;
var rainbow = null;
var donut = null;
var honk = null;

//Key is Pressed Down
$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
        case 65:
        {
        $("#left").attr('src',"arrow_pressed.svg");
        left = 1;
        break;
        }
        case 38: // up
        case 87:
        {    
        $("#up").attr('src',"arrow_pressed.svg");
        forward = 1;
        break;
        }
        case 39: // right
        case 68:
        {
        $("#right").attr('src',"arrow_pressed.svg");
        right = 1;
        break;
        }
        case 40: // down
        case 83:
        {
        $("#down").attr('src',"arrow_pressed.svg");
        back = 1;
        break;
        }
        case 49:
            console.log("Rainbow Initiated"); 
            var moveObj = {rainbow: 1};
            $.post('process.php', 'val=' + JSON.stringify(moveObj));
            break;
        case 50:
            console.log("Donut Initiated");
            var moveObj = {donut: 1};
            $.post('process.php', 'val=' + JSON.stringify(moveObj));
            break;
        case 51:
            console.log("Honk Initiated");
            var moveObj = {honk: 1};
            $.post('process.php', 'val=' + JSON.stringify(moveObj));
            break;
        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
    requestSend();
});
//Key is Up
$(document).keyup(function(e) {
    switch(e.which) {
        case 37: // left
        case 65:
        {
        $("#left").attr('src',"arrow.svg");
        left = 0;
        break;
        }
        case 38: // up
        case 87:
        {    
        $("#up").attr('src',"arrow.svg");
        forward = 0;
        break;
        }
        case 39: // right
        case 68:
        {
        $("#right").attr('src',"arrow.svg");
        right = 0;
        break;
        }
        case 40: // down
        case 83:
        {
        $("#down").attr('src',"arrow.svg");
        back = 0;
        break;
        }
        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
    requestSend();
});

//Gathers all the values from the sliders
function callback(){
    var moveObj = {forward: forward, left: left, right: right, back: back };
    return JSON.stringify(moveObj);
}
function rainbow(){
  console.log("Rainbow Initiated"); 
  var moveObj = {rainbow: 1};
  $.post('process.php', 'val=' + JSON.stringify(moveObj));
}
function donut(){
    console.log("Donut Initiated");
    var moveObj = {donut: 1};
    $.post('process.php', 'val=' + JSON.stringify(moveObj));
}
function honk(){
    console.log("Honk Initiated");
    var moveObj = {honk: 1};
    $.post('process.php', 'val=' + JSON.stringify(moveObj));
}
function forward(){
    forward = 1;
    requestSend();
}
function left(){
    left = 1;
    requestSend();
}
function right(){
    right = 1;
    requestSend();
}
function back(){
    back = 1;
    requestSend();
}
function requestSend(){
    var moveObj = callback();
    console.log(moveObj);
    $.post('process.php', 'val=' + moveObj);
}
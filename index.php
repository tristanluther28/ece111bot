<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ECE 111 Bot</title>
        <link rel="shortcut icon" type="image/png" href="http://eecs.oregonstate.edu/education/favicon.ico">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">        
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://web.engr.oregonstate.edu/~luthert/ece111bot/style.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="row centered">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./index.html"><img class="img-responsive" src="https://web.engr.oregonstate.edu/~luthert/ece111bot/tekbots.png" alt="TekBots"></a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="center-text">
                    <h3>Quark the ECE 111 Bot</h3>
                    <h5>Use the arrow keys or WASD on your computer to control the bot!</h5>
                </div>
            </div>
            <div class="cent">
                <!-- Head: Left-Right -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="toobig">
                            <button type="button" class="btn btn-warning" onclick="rainbow()">Rainbow! (1)</button>
                            <div class="pad"></div>
                            <button type="button" class="btn btn-dark" onclick="donut()">Donut! (2)</button>
                            <div class="pad"></div>
                            <button type="button" class="btn btn-danger" onclick="honk()">Honk! (3)</button>
                            <div class="pad"></div>
                        </div>
                    </div>
                    <div class="col-sm-1">
        
                    </div>
                    <div class="col-sm-4">
                        <img class="rotateimg270" id="up" src="arrow.svg" alt="Up!" onclick="forward()"/>
                    </div>
                    <div class="col-sm-4">
                    
                    </div>
                </div>
                <!-- Directional Buttons -->
                <div class="row">
                    <div class="col-sm-4">
                        <img class="rotateimg180" id="left" src="arrow.svg" alt="Left!" onclick="left()"/>
                    </div>
                    <div class="col-sm-4">
                        <img class="rotateimg90" id="down" src="arrow.svg" alt="Down!" onclick="back()"/>
                    </div>
                    <div class="col-sm-4">
                        <img id="right" src="arrow.svg" alt="Right!" onclick="right()"/>
                    </div>
                </div>
                <div class="row mobile-row">
                    <div class="pad"></div>
                    <button type="button" class="btn btn-warning btn-lg btn-block" onclick="rainbow()">Rainbow! (1)</button>
                    <div class="pad"></div>
                    <button type="button" class="btn btn-dark btn-lg btn-block" onclick="donut()">Donut! (2)</button>
                    <div class="pad"></div>
                    <button type="button" class="btn btn-danger btn-lg btn-block" onclick="honk()">Honk! (3)</button>
                    <div class="pad"></div>  
                </div>
            </div>
        </div>
        <div class="pad"></div>
        <div class="pad"></div>
        <div class="footer">
                <p>© 2019 Copyright: <a href="https://eecs.oregonstate.edu/tekbots/store" class="text-muted">TekBots</a> All Rights Reserved</p>
        </div>
    </body>
    <script src="index.js"></script>
</html>

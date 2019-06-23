<?php

session_start();

?>
<html>
    <head>
    <style>

        body{
            margin: 0;
            padding: 0;
        }
        #box1{
            height: 100vh;
            width: 100%;
            background-image: url(i1.jpg);
            background-size: cover;
            display: table;
            background-attachment: fixed;
        }
        #box2{
            height: 100vh;
            width: 100%;
            background-image: url(i2.jpg);
            background-size: cover;
            display: table;
            background-attachment: fixed;
        }
        #box3{
            height: 100vh;
            width: 100%;
            background-image: url(i3.jpg);
            background-size: cover;
            display: table;
            background-attachment: fixed;
        }

        h1{
            font-family: Futura, "Trebuchet MS";

            text-shadow: 0 1px 0 #ccc,
               0 2px 0 #4CAF20,
               0 3px 0 #4CAF20,
               0 4px 0 #4CAF20,
               0 5px 0 #4CAF20,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);

            font-size: 55px;
            color:#4CAF20;
            margin: 10px;
            text-align: center;
            display: table-cell;
            vertical-align:middle;
            padding:hsl(360, 90%, 80%); px;

    </style>
    </head>
    <body>
        <div id="box1">
            <h1>
         Omni Games
      </h1>
        </div>
        <div id="box2">
            <h1>Two-Player Tetris</h1>
        </div>
        <div id="box3">
            <h1>Snake</h1>
        </div>
    </body>
</html>

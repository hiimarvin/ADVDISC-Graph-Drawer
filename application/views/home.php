<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <?php $this->load->view('templates/include');?>
        <script>
            $(document).ready(function(){
                drawCartesian();
                
                function drawCartesian(){
                    var canvas = document.getElementById("myCanvas");
                    var ctx = canvas.getContext("2d");
                    ctx.moveTo(0,canvas.height/2);
                    ctx.lineTo(canvas.width,canvas.height/2);
                    ctx.stroke();

                    ctx.moveTo(canvas.height,0);
                    ctx.lineTo(canvas.height,canvas.width/2);
                    ctx.stroke();

                    var xCenter = canvas.width/2;
                    var yCenter = canvas.height/2;

//                    ctx.moveTo(xCenter, yCenter);
//                    ctx.lineTo(xCenter+400, yCenter+200);
//                    ctx.stroke();
                }
                
                function drawVector(x,y){
                    
                }
                
                function drawLineSegment(x1,y1,x2,y2){
                    
                }
            });
        </script>
    </head>
    <body>
        <canvas id="myCanvas" width="1200" height="600"style="border:1px solid #d3d3d3;">
            Your browser does not support the canvas element.
        </canvas>
    </body>
</html>
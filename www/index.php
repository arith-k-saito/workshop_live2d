<?php

    require('header.php');


    ?>

    <body onload="sampleApp1()">
    <div id="page" data-role="page">
        <div id="header" data-role="header" data-position="fixed">
        Fixed Header!<button id="btnChange" class="active">Change Model</button>
        </div>'
        
        
        <div>
            <canvas id="glcanvas" width="640" height="960" 
                style="border:dashed 1px #CCC">
            </canvas>
        </div>
        
        <div id="myconsole" style="color:#000">---- Log ----</div>


        <div id="footer" data-role="footer" data-position="fixed">
        <div class="button" id="talk"></div>
        <div class="button"></div>
        <div class="button"></div>
        <div class="button"></div>
        <div class="button"></div>
        </div>

        <!-- Live2D Library -->
        <script src="../../lib/live2d.min.js"></script>

        <!-- Live2D Framework -->
        <script src="../../framework/Live2DFramework.js"></script>
        
        <!-- User's Script -->
        <script src="src/utils/MatrixStack.js"></script>
        <script src="src/utils/ModelSettingJson.js"></script>
        <script src="src/PlatformManager.js"></script>
        <script src="src/LAppDefine.js"></script>
        <script src="src/LAppModel.js"></script>
        <script src="src/LAppLive2DManager.js"></script>
        <script src="src/SampleApp1.js"></script>



    </div>
    </body>

    </html>

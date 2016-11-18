<?php

    require('header.php');


    ?>

    <body onload="sampleApp1()">
        
        <p>
            <button id="btnChange" class="active">Change Model</button>
        </p>
        
        <div>
            <canvas id="glcanvas" width="680" height="940" 
                style="border:dashed 1px #CCC">
            </canvas>
        </div>
        
        <div id="myconsole" style="color:#000">---- Log ----</div>

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

    </body>

    </html>
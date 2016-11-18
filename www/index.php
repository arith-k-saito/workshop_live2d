<?php

    require('header.php');


    ?>

    <body onload="sampleApp1()">
    <div id="page" data-role="page">
        <div id="header" data-role="header" data-position="fixed">
        <button id="btnChange" class="active">Change Model</button>
        <div id="bgbutton"></div>
        </div>
        
        
        <div>
            <canvas id="glcanvas" width="640" height="960" 
                style="border:dashed 1px #CCC">
            </canvas>
        </div>
        
        <div id="myconsole" style="color:#000">---- Log ----</div>


        <div id="footer" data-role="footer" data-position="fixed">
        <div class="button speechify"></div>
        <div class="button"></div>
        <div class="button"></div>
        <div class="button"></div>
        <div class="button"></div>
        </div>


        <div class="speechbg"></div>
        <div class="speechwords"></div>

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

        <div id="popupDialog" data-role="popup">
            <div class="header" data-role="header">
                <h2>Change the Background?</h2>
            </div>
            <div data-role="content">

                <center>
                    Please choose a background
                    <br>

                    <select name="background" id="bgSelect">
                    </select>

                    <div class="message" style="display:none">
                        Keep this background?
                    </div>

                    <a href="#" data-role="button">Change</a>
                    <a href="#" data-role="button">Cancel</a>
                </center>
            
            </div>

        </div>



    </div>
    </body>

    </html>
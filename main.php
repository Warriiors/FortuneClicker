<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 19/06/2015
 * Time: 12:28
 */

    include 'including_file.php';
    //include 'Include/checkLog.php';
    include 'Include/header.php';

    include 'include/start.php';


?>
        <link rel="stylesheet" href="css/main.css" />
        <script src="Js/main.js" ></script>
    </head>
    <body>
        <div id="contener">
            <div id="jeu">
            <div id="gauche">
                <div id="result" class="boxBorder box">
                    <p>Mine Fortune <br />
                    Nombre de pépite : <div id="PepiteDispoHTML"> <?php echo $user->getRessourceList(); ?></div><br />
                    Nombre de pépite/s : <div id="RessourceParInstance"><?php echo $user->getAllProcPerInstance(); ?></div><br />
                    Nombre de pépite/Click : <?php ?></p>
                </div>

                <div id="divers" class="boxBorder box">
                    <img src="Media/Image/U/icon-pepite.png" id="pepite">
                </div>
            </div>
            <div id="centre">
                <div id="menu" class="boxBorder box">
                    Menu
                </div>
                <div id="main" class="boxBorder box">

                </div>
            </div>
            <div id="droite">
                <div id="upgrade" class="boxBorder box">
                    UPGRADE
                </div>
                <div id="farmer"  class="boxBorder box">
                    <?php
                        include 'Block/farmer1.php';
                        include 'Block/farmer2.php';
                        include 'Block/farmer3.php';
                        include 'Block/farmer4.php';
                    ?>
                </div>
            </div>
         </div>





        </div>
    </body>
</html>
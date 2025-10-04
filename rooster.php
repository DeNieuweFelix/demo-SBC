<!DOCTYPE html>
<html>

<?php include_once("templates/head.php"); ?>
<body>
    <script src="lib/roosterLogic.js" defer></script>

    <?php
    include_once("templates/header.php");

    $dagen = [
        "Maandag",
        "Dinsdag",
        "Woensdag",
        "Donderdag",
        "Vrijdag",
        "Zaterdag",
        "Zondag"
    ];

    ?>
    <main id="roosterMain">

    <div id="roosterDagSelect">
        <?php 

        $k = 0;
        echo "<div id='dagSelect'>";
        foreach($dagen as $b){
            echo "<button id='b".$k."' class='daySelectButton'>".$b."</button>";
            $k++;
        }
        echo "</div>"

        ?>
    </div>
    <div id="roosterPage">
        <?php
        include("test/fake-db.php");

        $db = $dataBase["rooster"];
        $i = 0;
        foreach($db as $dag){
            foreach($dag as $info){
                echo "
                <div class='roosterDagdiv d".$i."'>
                    <h3>".$dagen[$i].":</h3>
                
                ";

                $j = 0;
                foreach($info as $a){
                    if($j == 3 and $a == false){
                        break;
                    }

                    if($j == 1){
                        echo "<p>".substr($a,0,2).":".substr($a,2,2)."</p>";
                    }else if($j == 3 and $a == true){
                        echo "<button class='IschBtn'>inschrijven</button>";
                    }
                    else{
                        echo "<p>".$a."</p>";
                    }
                    $j++;
                }
                
                echo "</div>";
            }
            $i++;
        }
        ?>
    </div>
    </main>
</body>
</html>
<?php       

    require_once 'config/function.php';
    require_once 'inc/header.inc.php';
    require_once 'navDis.php';
    if (isset($_GET['a']) && $_GET['a']=='dis'){

        unset($_SESSION['user']);
        $_SESSION['messages']['info'][]='A bientôt !!';
        header('location:./');
        exit();


    }
?>

<div class="fondEvent">
    <div class="containEvent">
            <div class="imgEvent">
                <img class="eventImage" src="<?=  BASE_PATH; ?>assets/upload/prisonds.png" alt="image de l'évennement" >
            </div>

            <div class="eventBlockTxt">
                    <h2 class="titleEvent">TIME REMAINING</h2>


            <div id="countdown" class="countdownHolder">
                <span class="countDays">
                    <span class="position">
                    <span class="digit static">
                    </span>
                </span>
            <span class="position">
                <span class="digit static"></span>
            </span>
        </span>
            </span>
        
        <span class="countHours">
            <span class="position">
                <span class="digit static">
                </span>
        </span>
        <span class="position">
        <span class="digit static"></span>
        </span>
        </span>
        <span class="countMinutes">
        <span class="position">
        <span class="digit static"></span>
        </span>
        <span class="position">
        <span class="digit static"></span>
        </span>
        </span>
        <span class="countSeconds">
        <span class="position">
        <span class="digit static"></span>
        </span>
        <span class="position">
        <span class="digit static"></span>
        </span>
        </span>

    </div>
                    <h3 class="HtitleEvent">TITRE EVENT</h3>
                    <p class="pTxtEvent">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa quaerat labore doloribus commodi non asperiores amet dolores ipsum vitae. Et aperiam aliquid sunt non vitae labore minus distinctio, corporis provident?</p>
            </div>
    </div>
</div>
<script src="<?=  BASE_PATH; ?>/assets/js/timer.js" defer ></script>

<?php     require_once 'inc/footer.inc.php';          ?>

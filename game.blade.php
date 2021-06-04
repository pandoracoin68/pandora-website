<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pandora Flip - Flop Game</title>
    <link type="text/css" rel="stylesheet" href="assets/css/GameStyles.css" />
</head>

    <body class="nk-body body-wider bg-theme">
	   <div style="text-align: center;margin:20px auto;">
        <a href="/"><img src="img/pandoracoin.png" style="text-align: center;margin:auto;"></a>
        </div>
       <div class="flipflop">
    	    <h1 class="game-title">Pandora Flip - Flop Game</h1>
    	    <div class="overlay-text visible">
    	        Click to Start
    	    </div>
    	    <div id="gameOverText" class="overlay-text">
    	        GAME OVER!
    	        <span class="overlay-text-small">Click to Restart</span>
    	    </div>
    	    <div id="winText" class="overlay-text">
    	        YOU WIN!
    	        <span class="overlay-text-small">Click to Restart</span>
    	    </div>

    	    <div id="gameMainBlock" class="game-container">
    	        <div id="gameInfoBlock" class="game-info-block">
    	            <div class="game-info">
    	                 <span id="Timer"></span>                  
    	            </div>
    	            <div class="game-info">
    	                 <span id="Flips"></span>
    	            </div>
    	        </div>
    	    </div>
        </div>
    <!-- JavaScript -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="assets/js/Controllers.js"></script>
    <script type="text/javascript" src="assets/js/FlipFlop.js"></script>
    <script src="assets/js/jquery.bundle.js?ver=1930"></script>
    <script src="assets/js/scripts.js?ver=1930"></script>
    <script src="assets/js/charts.js?ver=1930"></script>
</body>
</html>

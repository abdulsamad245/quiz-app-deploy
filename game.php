<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Quiz-Play</title>

    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="game.css">
</head>
<body>
    <div class="container">
    <div id="loader"></div>
<div id="game" class="justify-center flex-column  " >
    <div id="hud">
        <div id="hud-item">
            <p id="progress-text" class="hud-prefix">Question</p>
           <div id="progressBar">
               <div id="progressBarFull"></div>
           </div>
        </div>
        <div id="hud-item">
            <p class="hud-prefix">Score</p>
            <h1 class="hud-maintext" id="score">0</h1>
        </div>
    </div>

   <h2 id="question">What is the answer to this question?</h2>
   <div class="choice-container">
       <p class="choice-prefix">A</p>
       <p class="choice-text" data-number="1">Choice 1</p>
   </div>
   <div class="choice-container">
    <p class="choice-prefix">B</p>
    <p class="choice-text" data-number="2">Choice 2</p>
</div>
<div class="choice-container">
    <p class="choice-prefix">C</p>
    <p class="choice-text" data-number="3">Choice 3</p>
</div>
<div class="choice-container" >
    <p class="choice-prefix">D</p>
    <p class="choice-text" data-number="4">Choice 4</p>
</div>
</div>



</div>
<script src="game.js"></script>


    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Bungee+Shade|Vast+Shadow" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <title>YOU WIN</title>

  <link rel="stylesheet" href="win.css">
</head>
<body onload="gameOver()">

        <div class="container">
            <br>
                <div class="notification">
                        <h1 class="a">Memory Math Game</h1>
                        <h1 class="a">Level 7</h1>
                        <br>
                        <h1 class="b">>>> You win <<<</h1>
                        <br>
                        <h1 class="c"><div>With <label id="score"></label> Score</div></h1>

                            <br>
                            <br>
                  
                              <center>
                                <a class="button is-success is-medium is-rounded" href="level7.php" onclick="clearLocal()">Playagain</a> 
                                <br>
                                <br>
                                <a class="button is-success is-medium is-rounded" href="level8.php" onclick="clearLocal()">Next Level</a> 
                                <br>
                                <br>
                                <a class="button is-success is-medium is-rounded" href="index.php" onclick="clearLocal()">HOME</a> 
                              </center>        
                         
                             
                          </div>
                      </div>
                  
                </div>
              </div>

              <script src="level7.js"></script>
        
</body>
</html>
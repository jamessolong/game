
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  


  <title>Memory Game</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Bungee+Shade|Vast+Shadow" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>
<body onload="startGame()">



    <div class="containerdiv"  >
        <br>
        <h1 class="a">&nbsp;&nbsp;&nbsp;&nbsp;Memory Math Game</h1>
        <br>
        <div id="score-panel">
          <div class="leftdiv">
            <ul class="stars">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
            </ul>
           
           
          

                <br>
                <br>

                <center>
                    <a class="button is-success  is-medium is-rounded" href="level1.html" onclick="clearLocal()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Play&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
                    <br>
                    <br>
                    <a class="button is-warning  is-medium is-rounded" href="howto.html" onclick="clearLocal()">&nbsp;&nbsp;&nbsp;How to play&nbsp;&nbsp;&nbsp;</a>
                    <br>
                    <br>
                    <a class="button is-danger  is-medium is-rounded" href="howto.html" onclick="clearLocal()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 

            
                  </center>        
             
        
       
      </div>
      <div class="timers">
        <article class="timer">
          
        </article>
        <div class="restart">
          <i class="fa fa-repeat"></i>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <ul class="deck"></ul>
  </div>
 





  <section class="memory-game">
    <div class="memory-card" data-framework="aurelia">
      <img class="front-face" src="img3/m.png" alt="Aurelia" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="aurelia">
      <img class="front-face" src="img3/e.png" alt="Aurelia" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>

    <div class="memory-card" data-framework="vue">
      <img class="front-face" src="img3/m.png" alt="Vue" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="vue">
      <img class="front-face" src="img3/o.png" alt="Vue" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>

    <div class="memory-card" data-framework="angular">
      <img class="front-face" src="img3/m.png" alt="Angular" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="angular">
      <img class="front-face" src="img3/a.png" alt="Angular" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>

    <div class="memory-card" data-framework="ember">
      <img class="front-face" src="img3/t.png" alt="Ember" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="ember">
      <img class="front-face" src="img3/h.png" alt="Ember" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>

    <div class="memory-card" data-framework="backbone">
      <img class="front-face" src="img3/g.png" alt="Backbone" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="backbone">
      <img class="front-face" src="img3/a.png" alt="Backbone" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>

    <div class="memory-card" data-framework="react">
      <img class="front-face" src="img3/m.png" alt="React" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="react">
      <img class="front-face" src="img3/e.png" alt="React" />
      <img class="back-face" src="img3/w.png" alt="JS Badge" />
    </div>
  </section>


  <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyAcLsTj-xnkyUZZq4vJyw434WXALXM_A14",
      authDomain: "testgame-5361d.firebaseapp.com",
      databaseURL: "https://testgame-5361d.firebaseio.com",
      projectId: "testgame-5361d",
      storageBucket: "testgame-5361d.appspot.com",
      messagingSenderId: "434208329897"
    };
    firebase.initializeApp(config);
  </script>


  <script src="index.js"></script>
</body>
</html>
<?php 
//starting the session
session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faves | The Best of Everything!</title>
  <link rel="stylesheet" href="faves.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
</head>

<body>
<div class="astro">
  <div class="header">
    <a href="index.html">
      <div class="left-section-desktop">FAVES</div>
      <!-- <div class="left-section-mobile">F</div> -->
    </a>
    <div class="middle-section">
        <div class="middle-box">
         <!--  <input id="search-box" type="text" placeholder="Food type...">
          <input id="search-box2" type="text" placeholder="Sydney">
          <input id="search-box3" type="text" placeholder="0km"> -->
           <!-- <button id="search-button"><img class="search-icon" src="images/search_icon.png"></button> --> 
          </div>
    </div>
    <div class="right-section">
      <a href="email.php"><button class="sign-in">Login</button></a>
      <a href="email.php"><button class="join">Join</button></a>
    </div>
  </div>
    
  <!-- <div class="hero_image">
    <img class="bar" src="images/bar.jpg">
      <div class="search_wrapper"><h1 class="hero-text"><span>What city are you in?</span></h1></div>
  </div> 

  <div class="search-area">
    <div class="left-box"></div>
    <div class="middle-box">
      <input id="search-box" type="text" placeholder="Search anywhere in the world!">
        <button id="search-button"><img class="search-icon" src="images/search_icon.png"></button>
      </div>
    <div class="right-box"></div>
  </div> -->

  


<!-- THIS IS THE CURRENT IMAGE (WORKS WELL ENOUGH)

  <div class="hero_container">
    <picture class="second-hero">
      <img class="bar2" src="images/bar2.jpg"></picture>
    <div class="second-title">
          <h1>Share your favourites.<br>
              Uncover hidden gems.</h1>
    </div>
  </div> 

  -->

  <!-- THIS is the CURRENT HERO IMAGE WITH A GREEN ACTION BUTTON
  <div class="hero">
      <div class="flex-hero">
        <img class="bar3" src="images/bar2.jpg">
        <div class="action-button"><button>GET STARTED - IT'S FREE!</button></div>
      </div>
  </div> -->

  <!-- THIS is the ATTEMPTED HERO IMAGE WITH STANDARD TEXT-->
  <div class="hero">
    <div class="flex-hero">
      <img class="bar3" src="/bar2.jpg">
      <div class="fourth">
      <div class="fourth-title">
        <h1>Share your favourites.<br>
        Uncover hidden gems.</h1> 
        <p><a href="product.php"><span>Get Started Here!</span></a></p>
      </div>
      </div>
    </div> 
  </div>


<!-- THIS is the CURRENT FLEXBOX LAYER OF TEXT (UNCOMMENT TO BRING BACK)

   <div class="thirdie">
    <div class="third-title">
      <h1>Share your favourites.<br>
          Uncover hidden gems.</h1>
    </div>
  </div>     -->


<!-- <div id="results-container"></div> -->

 <div class="icon-section">
    <div class="icon-container">
    <div class="icon-row">
      <div class="Cheeseburger">
        <div class="burg"><a href="product.php"><img class="burgie" src="/cheeseburger.svg"></div></a>
        <div class="burgie-text">Burgers</div>
        </div>
        <div class="Pizza">
          <div class="pizz"><a href="product.php"><img class="pie" src="/pizza.svg"></div></a>
          <div class="pizza-text">Pizza</div>
        </div>
        <div class="chicken">
          <div class="chi"><a href="product.php"><img class="chick" src="/chicken.svg"></div></a>
          <div class="chicken-text">Fried Chicken</div>
        </div>
        <div class="sushi">
          <div class="shi"><a href="product.php"><img class="su" src="/sushi.svg"></div></a>
          <div class="sushi-text">Sushi</div>
        </div>
        <div class="ramen">
          <div class="ra"><a href="product.php"><img class="men" src="/ramen.svg"></div></a>
          <div class="ramen-text">Ramen</div>
        </div>
        <div class="tacos">
          <div class="ta"><a href="#" onclick="activateTabOnProductPage('tacos')"><img class="cos" src="/taco.svg"></a></div>
          <div class="tacos-text">Tacos</div>
      </div>
        <div class="udon">
          <div class="ud"><a href="product.php"><img class="on" src="/udon.svg"></div></a>
          <div class="udon-text">Udon</div>
        </div>
        <div class="pho">
          <div class="ph"><a href="product.php"><img class="phoo" src="/pho.svg"></div></a>
          <div class="pho-text">Pho</div>
        </div>
        <div class="burrito">
          <div class="burr"><a href="product.php"><img class="rito" src="/burrito.svg"></div></a>
          <div class="burrito-text">Burrito</div>
        </div>
        <div class="fish">
          <div class="fi"><a href="product.php"><img class="shy" src="/fish.svg"></div></a>
          <div class="fish-text">Fishn'Chips</div>
        </div>
        <div class="thai">
          <div class="pad"><a href="product.php"><img class="thi" src="/pad.svg"></div></a>
          <div class="thai-text">Pad Thai</div>
        </div>
        <div class="bahn">
          <div class="bah"><a href="product.php"><img class="nun" src="/coffee.svg"></div></a>
          <div class="bahn-text">Coffee</div>
        </div>
    </div>
    </div>
  </div>

  <div class="by">
    <img src="/profile_pic.jpg">
    <p>by marcus_c5</p>
  </div>

  <div class="footer">
  <div class="footerbox">
    <div class="box2">
      <ul class="boxe2">
        <a href="support.html"><li>About</li></a>
                                 <li>|</li>
          <a href="support.html#faq1"><li>FAQ</li></a>
                                 <li>|</li>
          <a href="support.html#contact1"><li>Contact</li></a>
                                 <li>|</li>
          <a href="support.html#conduct1"><li>Code of Conduct</li></a>
                                 <li>|</li>
          <a href="support.html#privacy1"><li>Privacy Policy</li></a>
      </ul>
    </div>
  </div>
  </div>

  <!-- cntrl k + cntrl J will maximise all my folders back out. Cntrl k + cntrl zero
  will minimse everyrhting into their folders-->
  <!-- <h1>Palmies</h1> -->
  <script src="script.js"> </script>
</div>

<?php  
  
  //checking if the session 'success' is set.
    if(ISSET($_SESSION['success'])){
  ?>
  <!-- Display regostration success message -->
  <div class="alert alert-success"><?php echo $_SESSION['success']?></div>
  <?php
    //Unsetting the 'success' session after displaying the message. 
    unset($_SESSION['success']);
    }



?>

</body>

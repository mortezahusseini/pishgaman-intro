<!doctype html>
<html lang="en">
<head>
    <title> Sollar Graphic Design </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">
</head>
<style media="screen">
body{
  background-color: black;
  /* overflow: hidden; */
}
a, h5, h4, h3, p, div{
  font-family: cormorantgaramon serif;
  font-style: italic;
}
#Fader{
  position: absolute;
  bottom: 30%;
  background: black;
  color:  rgba(255,255,255,.5);
  z-index: 100;
  margin-bottom: 50px;
}
.fadein, .fadeout {
    opacity: 0;
    -moz-transition: opacity 0.8s ease-in-out;
    -o-transition: opacity 0.8s ease-in-out;
    -webkit-transition: opacity 0.8s ease-in-out;
    transition: opacity 0.8s ease-in-out;
}
.fadein {
    opacity: 1;
}
button{
  cursor: pointer;
}
a{
  color: rgba(255, 255, 255, 0.5);
  font-size: 16px;
}
a:hover{
  text-decoration: none;
  color: rgba(255, 255, 255, 0.7)
}
.bg-black{
  background-color: black;
}
.wprapper{
  min-height: 520px;
  background-image: url('StockSnap_XZI69BCJTX.jpg');
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
}
.border-white-0{
  border-color: #343434 !important;
  border-width: 1px !important;
}
.text-gray{
  color: rgba(255, 255, 255, 0.5) !important;
}
.text-gray:hover{
  color: rgba(255, 255, 255, 0.7) !important;
}
.sidr{
  height: 83%;
  background: black;
  margin-top: 3rem;
  margin-bottom: 3rem;
  padding: 2rem;
  box-shadow: 0 0 2px 2px #222 inset;
}
.sidr h5{
  background-image: none;
  color: rgba(255, 255, 255, 0.5) !important;
}
.sidr ul{
  border: none;
}
.sidr ul li{
  border: none;
}
i{
  font-size: 18px;
}
.sidr-class-bg{
  width: 100%;
  height: auto;
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}
.sidr-class-bg :hover{
  -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
  filter: grayscale(0%);
}
.play{ background-image:url('/faq/img/icon_play.svg'); background-size:contain; display:block; background-repeat: no-repeat; width: 3em; height: 3em; }

.pause{ background-image:url('/faq/img/icon_pause.svg'); background-size:contain; display:block; width:3em; height:3em; }
#circle-big {
/* display: block;
position: absolute;
margin-top: -15px;
margin-left: -15px;
transition: all 1s linear;
width: 60px;
height: 60px;
z-index: 3;
text-align: center;
border: 2px solid red;
border-radius: 50%;
}

#circle {
display: block;
position: absolute;
margin: auto;
width: 15px;
height: 15px;
margin-top: 7.5px;
margin-left: 7.5px;
background-color: rgba(255, 0, 0, 0.5);
border-radius: 50%;
z-index: 3;
box-shadow: 0px 0px 10px 4px rgba(255, 255, 255, 1);
}

#cursor.on-link #circle-big {
border: 2px solid blue;
} */

a {
text-align: center;
}
@media (max-width: 420px) {
  body{
    font-size: 13px !important;
  }
  a{
    font-size: 13px !important;
  }
}

</style>
<body>
    <!-- <div id="circle-big"></div>
    <div id="circle"></div> -->
    <div class="wprapper position-relative rounded-0 my-5 mx-1 mx-md-5 border bg-black border-white-0">
      <div class="cursor">
        <header>
          <div class="menu d-flex float-left">
              <a class="rounded-0 bg-black p-3 border border-white-0" id="existing-content-menu" href="#existing-content-menu"> <i class="fas fa-bars"></i> </a>
              <a class="bg-black text-gray p-3"> My Projects </a>
          </div>
          <div class="menu d-flex float-right">
            <a class="bg-black text-gray p-3" > About Me </a>
            <a class="rounded-0 bg-black p-3 border border-white-0" id="about-me-co" href="#about-me-co"><i class="fas fa-bars"></i> </a>
          </div>
        </header>
        <main class="h-100 text-center">
          <h4 class="text-gray position-absolute w-100 text-center" style="bottom:80px;"> Sollar Web Design <br> <a href="#">
             <!-- <p class="click-Me d-inline-block"> ↓ </p> -->
           </a> </h4>
        </main>
        <footer class="position-absolute align-bottom" style="bottom:10px;right:5px; left:5px;">
              <div class="menu pl-3 d-flex float-left">
                <article class="primary-menu">
                  <ul id="Fader" class="fadeout list-unstyled mr-3">
                    <li> <a class="p-2" href="https://github.com/mortezahusseini" title="Github"> <i class="fab fa-github-alt mr-2"></i> Github </a> </li>
                    <li><a class="p-2" href="https://t.me/morteza_hoosseini" title="Telegram"> <i class="fab fa-telegram-plane mr-2"></i> Telegram </a></li>
                    <li><a class="p-2" href="mailto:mortezahosseini901@gmail.com" title="Gmail"> <i class="fas fa-envelope mr-2"></i> Email </a></li>
                    <li><a class="p-2" href="tel:+989389682841" title="Phone"> <i class="fas fa-phone fa-flip-horizontal mr-2"></i> Phone  </a></li>
                  </ul>
                  <button id="Trigger2" type="button" name="showButton" class="border-0 text-gray" style="background:none;"> <i class="fas fa-bars"></i>  </button>
                  <a class="bg-black text-gray p-3" > Social </a>
                </article>
              </div>
              <div class="menu d-flex float-right">
                <a class="bg-black text-gray p-2"> Levo Music </a>
                <button id="playpause" type="button" name="playButton" class="border-0 text-gray" style="background:none;" onclick="setPlayPause()"><i class="fas fa-volume-up"></i>  </button>
                <audio src="LevievGroup.mp3" autoplay id="music"></audio>
              </div>

        </footer>
        <div id="project-content" style="display:none">
          <h5> <img src="Capture21.PNG" class="bg" alt="Morteza Hosseini"> </h5>
          <h5> <a style="font-size:18px;"> Project Done </a>  </h5>
          <hr class="text-white">
          <h5> <a href="https://robotafzar.com/"> Robot Afzar Company </a> </h5>
          <hr>
          <h5> <a href="http://barnama.org/"> Barnama Company </a> </h5>
          <hr>
          <h5> <a href="http://pioneers.pro/"> Pionners Group </a> </h5>
          <hr>
          <h5> <a href="http://apstick.ir/fa/user/home.php"> Apstick Company </a> </h5>
        </div>
        <div id="about-me-content">
          <div>
            <h5> <img src="Capture21.PNG" class="bg" alt="Morteza Hosseini"> </h5>
              <h5 class="text-center"> <a style="font-size:18px;">Morteza Hosseini</a>  </h5>
              <hr>
              <h5> <a style="font-siza:16px;">M E at University of Tehran</a>  </h5>
              <h5> <a style="font-siza:16px;">Entrepreneurship at UT</a>  </h5>
              <h5> <a style="font-siza:16px;">Web course at Ilia academy</a>  </h5>
              <h5> <a style="font-siza:16px;">Minning Engineer</a>  </h5>
              <h5> <a style="font-siza:16px;">Web Developer</a> </h5>
              <h5> <a style="font-siza:16px;"> Web Designer</a> </h5>
              <h5> <a style="font-siza:16px;">Graphic Designer</a>  </h5>
          </div>
        </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
<script>
$("#Trigger2").click(function () {
    if ($("#Fader").hasClass("fadeout"))
        $("#Fader").removeClass("fadeout").addClass("fadein");
    else
        $("#Fader").removeClass("fadein").addClass("fadeout");
    });

$(document).ready(function() {
    $('#existing-content-menu').sidr({
      name: 'sidr-existing-content',
      source: '#project-content',
      side:'left',
    });
    $('#about-me-co').sidr({
      name: 'about-me-content',
      source: '#about-me-content',
      side:'right',
    });
});

var playpause = true;
function setPlayPause()
{
    let music = document.getElementById('music');
    // Here we toggle playpause from true to false and vice versa
    playpause = !playpause;
    if(playpause)
    {
        document.getElementById("playpause").value = "Play";
        music.play();
        // Instead of the alert statement you would actually do the pausing of the gallery here
    }
    else
    {
        document.getElementById("playpause").value = "Pause";
        music.pause();
        // Instead of the alert statement you would place the code here that would start the gallery playing
    }
}

// $('body').mouseover(function() {
//   $(this).css({
//     cursor: 'none'
//   });
// });
//
// $(document).on('mousemove', function(e) {
//   $('#circle-big').css({
//     left: e.pageX,
//     top: e.pageY
//   });
//   $('#circle').css({
//     left: e.pageX,
//     top: e.pageY
//   });
// });
// $('a').mouseover(function() {
//   $('#cursor').addClass('on-link');
// })
// $('a').mouseout(function() {
//   $('#cursor').removeClass('on-link');
// })

// slideup/slidedown

</script>
</body>
</html>

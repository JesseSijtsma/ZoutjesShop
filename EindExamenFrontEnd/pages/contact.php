<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zoutjes Webshop | Snacks | Zoutjes | Koekjes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Koekjes van zoutjes zijn de lekkerste en de benalux echt waar komt u maar eens langs of besteld u eens bij onze webshop">
    <meta name="keywords" content="Home, producten, contact, Kom langs voor een kopje koffie en een koekje, naam, achternaam, land, nederland, belgie, luxemburg, onderwerp">
    <meta name="google-site-verification" content="3irGrF3IDi4422wue4AlFuH_VVTUpWxiCPMK7A93uRs" />
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css">
</head>
<body>
        <div class="topnav" id="myTopnav">
            <a class="navTxt" href="../index.php">Home</a>
            <a class="navTxt" href="products.php">Producten</a>
            <a class="navTxt" href="#">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
               <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="container">
            <div style="text-align:center">
              <h2>Berijk Ons</h2>
              <p>Kom langs voor een kopje koffie en een koekje</p>
            </div>
            <div class="row">
              <div class="column">
                <iframe src="https://maps.google.com/maps?q=Contactweg%2036%2C%201014%20AN%20Amsterdam&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe>
              </div>
              <div class="column">
                <form action="/action_page.php">
                  <label for="fname">Naam</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  <label for="lname">Achternaam</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  <label for="country">Land</label>
                  <select id="country" name="country">
                    <option value="nederland">Nederland</option>
                    <option value="belgie">Belgie</option>
                    <option value="luxemburg">Luxemburg</option>
                  </select>
                  <label for="subject">Onderwerp</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                  <input type="submit" value="Verzend">
                </form>
              </div>
            </div>
          </div>
        <div class="google-maps">
            
        </div>
     </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
     <script src="../main.js"></script>
</body>
</html>
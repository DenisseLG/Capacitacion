<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8" />
       <link rel="stylesheet" href="style.css" />
       <title>Zozor - Travel diaries</title>
   </head>

   <style type="text/css">
   /* Definir fuentes personalizadas */

@font-face
{
   font-family: 'BallparkWeiner';
   src: url('polices/ballpark.eot');
   src: url('polices/ballpark.eot?#iefix') format('embedded-opentype'),
        url('polices/ballpark.woff') format('woff'),
        url('polices/ballpark.ttf') format('truetype'),
        url('polices/ballpark.svg#BallparkWeiner') format('svg');
   font-weight: normal;
   font-style: normal;
}

@font-face
{
   font-family: 'Dayrom';
   src: url('polices/dayrom.eot');
   src: url('polices/dayrom.eot?#iefix') format('embedded-opentype'),
        url('polices/dayrom.woff') format('woff'),
        url('polices/dayrom.ttf') format('truetype'),
        url('polices/dayrom.svg#Dayrom') format('svg');
   font-weight: normal;
   font-style: normal;

   
}

</style>

   <body>
       <div id="main_wrapper">
           <header>
               <div id="main_title">
                   <img src="images/zozor_logo.png" alt="Logo de Zozor" id="logo" />
                   <h1>Zozor</h1>
                   <h2>Travel diariese</h2>
               </div>
               
               <nav>
                   <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">Blog</a></li>
                       <li><a href="#">Resume</a></li>
                       <li><a href="#">Contact</a></li>
                   </ul>
               </nav>
           </header>
           
           <div id="banner_image">
               <div id="banner_description">
                   Reflections on my holiday in the United States...
                   <a href="#" class="red_button">See article <img src="images/small_arrow.png" alt="" /></a>
               </div>
           </div>
           <div>
             @yield('seccionA')
           </div>
           <section>
               <article>
                   <h1><img src="images/pin.png" alt="Travel category" class="ico_categorie" />I'm a great traveller</h1>
                   <p>Lorem ipsum dolor sit amet...</p>
                   <p>Vivamus sed libero nec mauris pulvinar facilisis ut non sem...</p>
                   <p>Phasellus ligula massa, congue ac vulputate non, dignissim at augue...</p>
               </article>
               <aside>
                   <h1>About the author</h1>
                   <img src="images/arrow.png.png" alt="" id="arrow" />
                   <p id="zozor_picture"><img src="images/images/zozor.png" alt="Zozor Picture" /></p>
                   <p>Let me introduce myself: My name's Zozor. I was born on 23 November 2005.</p>

</html>                   
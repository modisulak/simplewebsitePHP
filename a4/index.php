<?php
require_once('tools.php');
 if(!empty($_POST)) {
   $errorfound = validateUserInput(); 
   if ($errorfound) {
     header("Location: index.php");
   } else {
     header("Location: receipt.php");
     $_SESSION["custDetails"] = $_POST["cust"];
     $_SESSION["movieDetails"] = $_POST["movie"];
     $_SESSION["seats"] = $_POST["seats"];
   }
 }
?>

<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
    <script type="text/javascript" src="script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <a href="reciept.php" target="_blank">A4</a>

  </head>

  <body onload="start()">
    <header>
      <center>
        <div><img src='../../media/logo.png' alt="Company Logo" style="margin:5px 0px" height=55  />
        </div>
        <div>
          <h2>LUNARDO</h2>
        </div>
      </center>


    </header>

    <nav role="full-horizontal">

      <ul class ="nav">
        <li><a class ="navs" href="#ABOUT US">ABOUT US</a></li>
        <li><a class ="navs" href="#PRICES">PRICES</a></li>
        <li><a class ="navs" href="#NOW SHOWING">NOW SHOWING</a></li>
        <li><a class ="navs" href="#SYPNOSIS">SYNOPSIS</a></li>
      </ul>

    </nav>


    <main>


      <section id="WELCOME">
        <div class="container">
          <div class="centered"></div> 
        </div>
        <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <div class="parallax">
          <h1>Fish Creek's Finest Cinema Experience</h1>

        </div>
      </section>

      <!-- One -->
      <article class = "anchor" id= "ABOUT US"> 
        <section id="one" class="wrapper style1">
          <div class="inner">
            <section class="feature left">
              <span class="image"><img src="https://images.pexels.com/photos/109669/pexels-photo-109669.jpeg?cs=srgb&dl=architecture-auditorium-chairs-109669.jpg&fm=jpg" alt="Lux Theatre Interior" />
              </span>
              <div class="content">
                <h2>About Us</h2>
                <p>
                  Welcome to the new and improved Lunardo Cinema! We know you've missed us, but following extensive renovations we are proud to be re-opening soon, bringing world class films and comforts to your back-door. Our roots and history are the most important things to us, and we can't wait to open up our doors and show off our brand new screens, sound and seats to all of you- familiar or new. Stay tuned and join us for the next step in our story... see you at the movies! 
                </p>

              </div>
            </section>
            <section class="feature right">
              <span class="image"><img src="../../media/atmos.jpg" alt="Dolby Atmos Sound System Diagram" /></span>
              <div class="content">
                <h2>Dolby Atmos Sound System</h2>
                <p>
                  Say hello to the next big thing in Screen and Sound... Dolby Atmos. 

                  'Surround' doesnt do this justice, with up to 128 individual speakers placed throughout the theatre, making for the most immersive watching experience on the market. Flowing from around, above and behind, you'll feel like you're right there in the battle with your favourite Hero, or listening to every drop of rain or chatter in a quiet, thoughtful cafe. We've also upgraded to <b>3D Projectors</b> for selected shows, so stay tuned to grab your tickets quickly! 
                </p>

              </div>
            </section>
            <section class="feature left">
              <span class="image"><img src='../../media/seat.jpg' alt="Image of New Standard Chair" /></span>
              <div class="content">
                <h2>Upgraded Seats</h2>
                <p>
                  Your eyes and ears won't be the only things thanking you for choosing Lunardo.. We've also installed brand new seats for our standard theatres! These seats are so soft, the only hard part will be standing up to leave them.
                </p>

              </div>
            </section>

            <section class="feature right">
              <span class="image"><img src='../../media/seat2.png' alt="First Class Seating Image" /></span>
              <div class="content">
                <h2>First Class</h2>
                <p>
                  Here at Lunardo we believe that every cinema experience is special... But we also understand that sometimes you feel <b>Extra Special</b>. As of our Grand re-opening, we have the just the thing- First Class. Complete with padded, reclining premium seats and in-film service, First Class is the perfect treat for yourself, or anyone special in your life. Whether you've got something to celebrate, or just need a treat, we hope you'll give it a shot.. Be warned though, it's hard to go back! Find pricing information below. 

                </p>

              </div>
            </section>
          </div>
        </section>
      </article>

      <article class = "anchor" id= "PRICES"> 
        <h1>PRICES</h1>
        <h3> Discount Prices during all day Mon and Tue and 12PM on Weekends</h3>

        <!-- Three -->
        <section id="pricesSection" class="section3">
          <a class = "anchor" id= "PRICES"> </a>

          <section id="prices" class="flex-container" style = margin:0>



            <div class="pricesbox">
              <div class="flex-container"> 


                <h3> ADULT PRICES 
                </h3>

                <table> <tr class="firstRow">
                  <th>Seat</th>
                  <th>Discount Prices</th>
                  <th>Full Price</th>
                  </tr>

                  <tr>
                    <td>Standard </td>
                    <td>$14.00</td>
                    <td>$19.80</td>
                  </tr>
                  <tr>
                    <td>First Class</td>
                    <td>$24.00</td>
                    <td>$30.00</td>
                  </tr>
                </table>


                <h3> CHILD PRICES 
                </h3>
                <table> <tr class="firstRow">
                  <th>Seat</th>
                  <th>Discount Prices</th>
                  <th>Full Price</th>
                  </tr>

                  <tr>
                    <td>Standard</td>
                    <td>$11.00</td>
                    <td>$15.30</td>
                  </tr>
                  <tr>
                    <td>First Class</td>
                    <td>$21.00</td>
                    <td>$24.00</td>
                  </tr>
                </table>
                <div class="flex-container"> 
                  <h3>  CONCESSION PRICES </h3> 
                  <table> <tr class="firstRow">
                    <th>Seat</th>
                    <th>Discount Prices</th>
                    <th>Full Price</th>
                    </tr>

                    <tr>
                      <td>Standard</td>
                      <td>$12.50</td>
                      <td>$17.50</td>
                    </tr>
                    <tr>
                      <td>First Class</td>
                      <td>$22.50</td>
                      <td>$27.00</td>
                    </tr>

                  </table>
                </div>

              </div>
            </div>



          </section>
        </section>
      </article>



      <article class = "anchor" id= "NOW SHOWING">
        <h1>NOW SHOWING</h1>
        <section class="nowShow4">



          <section class="flex-container">
            <div class="movieCard"  id="ACT" onclick= "changeSynopsis('ACT')">
              <img src='../../media/avengers.jpg' alt="Avengers Poster">
              <h1>Avengers Endgame (M) </h1>
              <ul>
                <li>Wed,Thu,Fri<br>9:00PM</li>
                <li>Sat,Sun<br>6:00PM</li>
              </ul>

            </div>

            <div class="movieCard"  id="RMC" onclick="changeSynopsis('RMC')">
              <img src='../../media/wedding.jpg' alt="Top End Wedding Poster">
              <h1>Top End Wedding (M) </h1>
              <ul> 
                <li>Mon,Tue<br>6:00PM</li>
                <li>Sat,Sun<br>3:00PM</li>
              </ul> 
            </div>

            <div class="movieCard"  id="ANM" onclick="changeSynopsis('ANM')">
              <img src='../../media/dumbo.jpg' alt="Dumbo Poster">
              <h1>Dumbo (M)</h1>
              <ul> 
                <li>Mon,Tue<br>12:00PM</li>
                <li>Wed,Thu,Fri<br>6:00PM</li>
                <li>Sat,Sun<br>12:00PM</li>
              </ul> 
            </div>

            <div class="movieCard" id="AHF"  onclick="changeSynopsis('AHF')">
              <img src='../../media/prince.jpg'alt="Happy Prince Poster" >
              <h1>The Happy Prince (M) </h1>
              <ul> 
                <li>Wed,Thu,Fri<br>12:00PM</li>
                <li>Sat,Sun<br>9:00PM</li>
              </ul> 
            </div>
          </section>
        </section>
      </article>

      <article class = "anchor" id= "SYPNOSIS"> 
        <h1>SYNOPSIS</h1>
        <section class="synopsis" id="synopsisACT">

          <section> 
            <a class = "anchor" id= "SYPNOSIS"> </a>

            <div class="synopsis-box">

              <div class="flex-container-Image">
                <span> 
                  <h1> Avengers Endgame (M) </h1> 
                  <p> That cheeky Thanos is at it again! Team up with all your favourite millionaires for the 23rd time in a row, as they try and fix the mess that big purple left them in following the acclaimed Infinity War (2018). Will Spiderman be back in time for the release of Spiderman 2 in a few weeks? Tune in and find out.. tickets on sale soon! </p>
                </span>
                <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c">
                </iframe>
              </div>
              <div class="synopsis-bar"> 
                <div class="flex-containerButton"> 
                  <p> 
                    BOOK NOW:<br> 
                    <button onclick="triggerForm('ACT','WED','T21')"> WED 9:00pm</button>
                    <button onclick="triggerForm('ACT','THU','T21')"> THU 9:00pm</button>
                    <button onclick="triggerForm('ACT','FRI','T21')"> FRI 9:00pm</button>
                    <button onclick="triggerForm('ACT','SAT','T18')"> SAT 6:00pm</button>
                    <button onclick="triggerForm('ACT','SUN','T18')"> SUN 6:00pm</button>
                  </p> 
                </div>
              </div>
            </div>
          </section>
        </section>



        <section class="synopsis" id="synopsisRMC">

          <section> 


            <div class="synopsis-box">

              <div class="flex-container-Image">
                <span> 
                  <h1> Top End Wedding (M) </h1> 
                  <p> From the makers of The Sapphires, come along for the next big thing in Australian film. Set against the stunning backdrop of the northern territory, this film follows Ned and Lauren as they attempt to reunite their families' and pull of their dream wedding in the Top End.</p>
                </span>
                <iframe src="https://www.youtube.com/embed/uoDBvGF9pPU">
                </iframe>
              </div>
              <div class="synopsis-bar"> 
                <div class="flex-containerButton"> 
                  <p> 
                    BOOK NOW:<br> 
                    <button onclick="triggerForm('RMC','MON','T18')"> MON 6:00pm</button>
                    <button onclick="triggerForm('RMC','TUE','T18')"> TUE 6:00pm</button>
                    <button onclick="triggerForm('RMC','SAT','T15')"> SAT 3:00pm</button>
                    <button onclick="triggerForm('RMC','SUN','T15')"> SUN 3:00pm</button>
                  </p> 
                </div>
              </div>
            </div>
          </section>
        </section>

        <section class="synopsis" id="synopsisANM">

          <section> 
            <a class = "anchor" id= "SYPNOSIS"> </a>

            <div class="synopsis-box">

              <div class="flex-container-Image">
                <span> 
                  <h1> Dumbo </h1> 
                  <p> Childhood Remake? Check. Big Ears? Check. Tim Burton? Check. Stunning visuals? Check, check and check! A vivid re-imagining of a timeless classic-as surprising as it is familiar. One for the whole family! Buy your tickets to Dumbo now.  </p>
                </span>
                <iframe src="https://www.youtube.com/embed/7NiYVoqBt-8">
                </iframe>
              </div>
              <div class="synopsis-bar"> 
                <div class="flex-containerButton"> 
                  <p> 
                    BOOK NOW:<br> 
                    <button onclick="triggerForm('ANM','MON','T12')"> MON 12:00pm</button>
                    <button onclick="triggerForm('ANM','TUE','T12')"> TUE 12:00pm</button>
                    <button onclick="triggerForm('ANM','WED','T18')"> WED 6:00pm</button>
                    <button onclick="triggerForm('ANM','THU','T18')"> THU 6:00pm</button>
                    <button onclick="triggerForm('ANM','FRI','T18')"> FRI 6:00pm</button>
                    <button onclick="triggerForm('ANM','SAT','T12')"> SAT 12:00pm</button>
                    <button onclick="triggerForm('ANM','SUN','T12')"> SUN 12:00pm</button>
                  </p> 
                </div>
              </div>
            </div>
          </section>
        </section>



        <section class="synopsis" id="synopsisAHF">

          <section> 


            <div class="synopsis-box">

              <div class="flex-container-Image">
                <span> 
                  <h1> THe happy Prince (M) </h1> 
                  <p> Starring Colin Firth. The oft- neglected story of the last days of Oscar Wilde. As tragic as it is poignant and reflective, this not-quite biopic oozes passion and reverence for one of the most famous authors in history. Limited Season- On sale now. </p>
                </span>
                <iframe src="https://www.youtube.com/embed/4HmN9r1Fcr8">
                </iframe>
              </div>
              <div class="synopsis-bar"> 
                <div class="flex-containerButton"> 
                  <p> 
                    BOOK NOW:<br> 
                    <button onclick="triggerForm('AHF','WED','T12')"> WED 12:00pm</button>
                    <button onclick="triggerForm('AHF','THU','T12')"> THU 12:00pm</button>
                    <button onclick="triggerForm('AHF','FRI','T12')"> FRI 12:00pm</button>
                    <button onclick="triggerForm('AHF','SAT','T21')"> SAT 9:00pm</button>
                    <button onclick="triggerForm('AHF','SUN','T21')"> SUN 9:00pm</button>
                  </p> 
                </div>
              </div>
            </div>
          </section>
        </section>
      </article>


      <section id="booking-form" class="booking-form">
        <div class = "formStyle"> 
          <form action="index.php" method="post" style="border-style: solid">
            <div id="movie-info" class="hidden-fields">
              <input type="hidden" name="movie[id]" value="" title="Movie-ID" id="movie-id"> 
              <br>
              <input type="hidden" name="movie[day]" value="" title="Movie-day" id="movie-day"> <br>   
              <input type="hidden" name="movie[hour]" value="" title="Movie-hour" id="movie-hour"> <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </div>
            <span id="customer-view" class="customer-view"> TITLE-DAY-TIME </span>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="cust-info" id="customer-info">   
              <fieldset><legend>Personal Details</legend>
                <label> Name: </label> <input type="text" name="cust[name]" value="" required pattern="[a-z A-Z -.,']{1,40}" title="Name" id="cust-name"> 
                <br> 
                <label> Email: </label> <input type="email" name="cust[email]" value="" title="Email" id="cust-email">

                <br>   
                <label> Mobile: </label> <input type="tel" name="cust[mobile]" required, pattern="^[(04\)|04|\+614)( ?\d)}{6}" title="Phone Number" id="cust-mobile" value = "04">

                <br>  
                <label> Credit Card: </label> <input type="text" name="cust[card]" required pattern="[(\d)]{4} ?[(\d)]{4} ?[(\d)]{4} ?[(\d)]{4} ?" id="cust-card">  

                <br/>
                <label>
                  Expiry: </label> <select class="cardSelection"  name="cust[expiryMonth]" id="cust-expiryMonth" onchange="validateCard()"> 
                <option value=''> Month</option>
                <script>
                  for (var i=1; i<=12; i++ )
                    document.write('<option value="'+i+'">'+i+'</option>');
                </script>

                </select>


                <select class="cardSelection"  size="" title="cust[expiryYear]" id="cust-expiryYear"  name="cust[expiryYear]" onchange="validateCard()">
                  <option value=''> Year</option>
                  <script>
                    var year = new Date().getFullYear();
                    for ( var i=year; i<=(year+10); i++ )
                      document.write('<option value="'+i+'">'+i+'</option>');
                  </script>
                </select>

                <span class="cardWarning" id="card-warning"> </span>
              </fieldset>
            </div>

            <div class="seat-info" id="seat-info1">
              <fieldset class="seat-info1"><legend>Standard</legend>

                <label> Adults:  </label> <select class= "ticketSelection" size="" title="seats[STA]" id="STA" onchange="calcResult()" name="seats[STA]"> 
                <option value=''> Please Select</option>
                <script>
                  for (var i=1; i<=10; i++ )
                    document.write('<option value="'+i+'">'+i+'</option>');
                </script>
                </select> 
                <br> 

                <label> Concession: </label> <select class= "ticketSelection" size="" title="seats[STP]" id="STP" onchange="calcResult()" name = "seats[STP]"> 
                <option value=''> Please Select</option>
                <script>
                  for (var i=1; i<=10; i++ )
                    document.write('<option value="'+i+'">'+i+'</option>');
                </script>
                </select> 
                <br> 

                <label>  Child: </label> <select class= "ticketSelection" size="" title="seats[STC]" id="STC" onchange="calcResult()" name = "seats[STC]"> 
                <option value=''> Please Select</option>
                <script>
                  for (var i=1; i<=10; i++ )
                    document.write('<option value="'+i+'">'+i+'</option>');
                </script>
                </select>

              </fieldset>




              <fieldset><legend>First Class</legend>
                <label> Adults:  </label> <select class= "ticketSelection" size="" title="seats[FCA]" id="FCA" onchange="calcResult()" name = "seats[FCA]"> 
                <option value=''> Please Select</option>
                <script>
                  for (var i=1; i<=10; i++ )
                    document.write('<option value="'+i+'">'+i+'</option>');
                </script>
                </select> 
                <br>

                <label> Concession:  </label> <select class= "ticketSelection" size="" title="seats[FCP]", id="FCP" onchange="calcResult()" name = "seats[FCP]"> 
                <option value=''> Please Select</option>
                <script>
                  for (var i=1; i<=10; i++ )
                    document.write('<option value="'+i+'">'+i+'</option>');
                </script>
                </select> 
                <br> 

                <label> Child:  </label> <select class= "ticketSelection" size="" title="seats[FCC]" id="FCC" onchange="calcResult()" name = "seats[FCC]"> 
                <option value=''> Please Select</option>
                <script>
                  for (var i=1; i<=10; i++ )
                    document.write('<option value="'+i+'">'+i+'</option>');
                </script>
                </select>

              </fieldset>
              <br>
              <br>
              <br>
            </div>

            <div class="submission-bar">
              <span class ="totalText"> Total $ </span><span class="priceText" >  
              <span id="total-Price" name= "totalPrice"> 0.00 </span> </span>
              <input type="submit" name="order" value="Order" class="order-button" > 
            </div>
          </form> 
        </div>
      </section>

    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
        </script> Maximillian Young, Moditha Sulakshana, s3769993,s3756843, Max n Modi. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

    </footer>
    preShow($_POST); // ie echo a string
    preShow($_SESSION);

  </body>
  <script> discountTest();</script>
</html>

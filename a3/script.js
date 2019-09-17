function clearSynopsis() { 
    //alert("In the method");
    var x = document.getElementById("synopsisACT");
    x.style.display = "none";
    //alert("avengers cleared");

    var y = document.getElementById("synopsisRMC");
    y.style.display = "none";
    //alert("top end cleared")

    var z = document.getElementById("synopsisANM");
    z.style.display = "none";
    //alert("dumbo cleared");

    var a = document.getElementById("synopsisAHF");
    a.style.display = "none";
    //alert("cleared");
}

function changeSynopsis(workingId) { 
    //alert("clearing current synopsis");
    clearSynopsis();
    //alert(workingId);
    var y = 'synopsis'+workingId;
    //alert(y);
    var x = document.getElementById(y);
    x.style.display = "block";   
}


function displayActive()
{
    var nav = document.getElementsByClassName("navs");

    for (var i = 0; i < nav.length; i++) {

        nav[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");

            // If there's no active class
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }

            // Add the active class to the current/clicked button
            this.className += " active"; 
        });
    }
}

function displayScroll() {
    window.onscroll = function() { 
        //console.log(window.scrollY);
        var articles = document.getElementsByTagName('main')
        [0].getElementsByTagName('article');
        //console.log(article);
        var navlinks = document.getElementsByTagName('nav')
        [0].getElementsByTagName('a');
        //console.log(navlinks); 
        
        var n=-1;
        while(n < articles.length -1 && articles[n+1].offsetTop <= window.scrollY) { 
            n++
        }
        console.log(n); 
        for (var a=0; a<navlinks.length; a++) {
            navlinks[a].classList.remove('active');
            
        }
        if (n < 0) 
            console.log('No active'); 
        else {
            console.log(articles[n].id+":"+articles[n].offsetTop); 
            navlinks[n].classList.add('active');
        }
        
    }
}

function start() { 
    displayActive();
    displayScroll(); 
}

var seatPrices = {
      full: {
      FCA: 30,
      FCP: 27,
      FCC: 24,
      STA: 19.8,
      STP: 17.5,
      STC:15.3
    },  
    discount: { 
    FCA:24,
    FCP: 22.5,
    FCC: 21,
    STA:14,
    STP:12.5,
    STC: 11
    }
  }
      
function isFullOrDiscount(day, hour) {
    var ret = "full";
    alert(day);
    if(day=="Monday" || "Wednesday")
        {
            ret = "discount"
        }
    if(day=="Tuesday" || "Thursday" || "Friday" & hour==12)
          {
             ret = "discount" 
          }
    return ret;
}

function calcResult() {
     alert("in the method start");
    var qtySeats = {
      FCA: document.getElementById('FCA').value,
      FCP: document.getElementById('FCP').value,
      FCC: document.getElementById('FCC').value,
      STA: document.getElementById('STA').value,
      STP: document.getElementById('STP').value,
      STC: document.getElementById('STC').value,
    };
    var fod = isFullOrDiscount(document.getElementById('movie-day').value, document.getElementById('movie-hour').value);
      alert(fod);
    var total = 0;
    for ( seatCode in qtySeats ) {
      total += qtySeats[seatCode] * seatPrices[fod][seatCode];
    }
    document.getElementById("total-Price").innerHTML = total;
  }

function triggerForm(MovieId,MovieDay,MovieHour)
{
    alert("in the trigger form method");
    var x = document.getElementById("booking-form");
    x.style.display = "block";
    var id = document.getElementById("movie-id");
    id.value = MovieId;
    id.innerHTML = MovieId;
    var day = document.getElementById("movie-day");
    day.value = MovieDay;
    day.innerHTML = MovieDay;
    var hour = document.getElementById("movie-hour");
    hour.value = MovieHour;
    hour.innerHTML = MovieHour;
}

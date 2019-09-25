function clearSynopsis() { 
    var x = document.getElementById("synopsisACT");
    x.style.display = "none";

    var y = document.getElementById("synopsisRMC");
    y.style.display = "none";

    var z = document.getElementById("synopsisANM");
    z.style.display = "none";

    var a = document.getElementById("synopsisAHF");
    a.style.display = "none";
}

function changeSynopsis(workingId) { 
    clearSynopsis();
    var y = 'synopsis'+workingId;
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
    changeSynopsis('ACT');
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

function isFullOrDiscount(day, hour) {  //??? syntax issues??//
    //alert(day);
    // alert(hour);
    var ret = "full";
    if(day == "MON" || day == "WED")
    {
        alert("In the monday loop")
        ret = "discount"
    }
    if((day== "TUE" || day == "THU" || day == "FRI") && hour=="T12")
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
    for ( seatCode in qtySeats ) 
    {
        total += qtySeats[seatCode] * seatPrices[fod][seatCode];
        var roundedTotal = (Math.round(total*100)/100).toFixed(2)
    }
    document.getElementById("total-Price").innerHTML = roundedTotal;
}

function triggerForm(MovieId,MovieDay,MovieHour)
{
    //alert("in the trigger form method");
    var x = document.getElementById("booking-form");
    x.style.display = "block";
    var id = document.getElementById("movie-id");
    id.value = MovieId;
    id.innerHTML = MovieId;
    alert(MovieId);
    var day = document.getElementById("movie-day");
    day.value = MovieDay;
    day.innerHTML = MovieDay;
    //alert(MovieDay);
    var hour = document.getElementById("movie-hour");
    hour.value = MovieHour;
    hour.innerHTML = MovieHour;
    //alert(MovieHour);
    var movieTitle = movieString(MovieId);
    var movieHourString = timeString(MovieHour); 
    document.getElementById("customer-view").innerHTML = movieTitle + " on " +MovieDay + " at " + movieHourString;
}

function movieString(MovieId) { 

    if (MovieId == "ACT" ) {
        var movieTitle = "Avengers"

        }
    if (MovieId == "RMC" ) {
        var movieTitle = "Top End Wedding"

        }
    if (MovieId == "ANM" ) {
        var movieTitle = "Dumbo"

        }
    if (MovieId == "AHF" ) {
        var movieTitle = "The Happy Prince"

        }
    return movieTitle; 
}

function timeString (MovieHour) { 

    if (MovieHour == "T12" ) {
        var movieHour = "12:00 PM"
        }
    if (MovieHour == "T15" ) {
        var movieHour = "3:00 PM"
        }
    if (MovieHour == "T18" ) {
        var movieHour = "6:00 PM"
        }
    if (MovieHour == "T21" ) {
        var movieHour = "9:00 PM"
        }
    return movieHour; 

}

function validateCard()
{
    
    var Cardyear = document.getElementById("cust-expiryYear").value;
    //alert(Cardyear);
    var year = new Date().getFullYear();
    //alert(year);
    var cardMonth = document.getElementById("cust-expiryMonth").value;
    //alert(cardMonth);
    var month = new Date().getMonth()+1;
    //alert(month);

    var year = new Date().getFullYear();
    var cardMonth = document.getElementById("cust-expiryMonth").value;
    var month = new Date().getMonth()+1;

    if(Cardyear==year & cardMonth<month)
    {
        document.getElementById("card-warning").innerHTML = "Invalid Card Expiry.";
    }
    else
    {
        document.getElementById("card-warning").innerHTML = ""; 
    }
}




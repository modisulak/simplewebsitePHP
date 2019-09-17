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

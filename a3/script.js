function clearSynopsis() { 
        alert("In the method");
        var x = document.getElementById("synopsisACT");
        x.style.display = "none";
        alert("avengers cleared");
        
        var y = document.getElementById("synopsisRMC");
        y.style.display = "none";
        alert("top end cleared")
        
        var z = document.getElementById("synopsisANM");
        z.style.display = "none";
        alert("dumbo cleared");
        
        var a = document.getElementById("synopsisAHF");
        a.style.display = "none";
        alert("cleared");
    }
    
    function changeSynopsis(workingId) { 
        alert("clearing current synopsis");
        clearSynopsis();
        alert(workingId);
        var y = 'synopsis'+workingId;
        alert(y);
        var x = document.getElementById(y);
        x.style.display = "block";   
    }

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



	
$(document).ready(function () {
	$(document).on("scroll", onScroll);
	
	// Trigger Click to go specific section or add active
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");

		$('a').each(function () {
			$(this).removeClass('active');
		})
		$(this).addClass('active');

		var target = this.hash;
		$target = $(target);
		
		// Scrolling 
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top+2
		}, 500, 'swing', function () {
			window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	});
});

function onScroll(event){
	var scrollPosition = $(document).scrollTop();
	
	// set your navigation a class name
	$('nav a').each(function () {
		var currentLink = $(this);
		var refElement = $(currentLink.attr("href"));
		if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
			$('nav ul li a').removeClass(" active");
			currentLink.addClass(" active");
		}
		else{
			currentLink.removeClass(" active");
		}
	});
}

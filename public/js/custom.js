
//======== Scroll to top  Start =========



let mybutton = document.getElementById("scroll-top");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//======== Scroll to top  end =========



//======== Registration type dropdown start =========
var select = document.getElementById('type-select');
var inputSection = document.getElementById('input-section');

// Add a change event listener to the <select> element
select.addEventListener('change', function () {
    if (select.value === "1") {
        inputSection.style.display = 'none'; // Hide the section
    } else if (select.value === "2") {
        inputSection.style.display = 'block'; // Show the section
    } else {
        inputSection.style.display = 'none'; // Default to hidden
    }
});

// Set initial state (hide inputs initially)
inputSection.style.display = 'none';
//======== Registration type dropdown end =========

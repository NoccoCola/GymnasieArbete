const items = document.querySelectorAll('.fade');

const active = function (entries) {
    entries.forEach(entry => {        //Kollar om elementen är på användarens skärm och kallar på css-klassen "fadeInLeft" 
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('fadeInLeft');
            }, 1500);
            typeWriter();

        }
    });
}

const io2 = new IntersectionObserver(active);
for (let i = 0; i < items.length; i++) {
    io2.observe(items[i]);
}

var i = 0;
var txt = "Today's News"; // Texten som ska skrivas in
var speed = 75; // tiden det tar att skriva in i ms

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("typewriter").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


var cursor = document.querySelector('.cursor');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function (e) {
    var x = e.clientX;
    var y = e.clientY;
    cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function (e) {
    var x = e.clientX;
    var y = e.clientY;
});

a.forEach(item => {
    item.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
    });
    item.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover');
    });
})
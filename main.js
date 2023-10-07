function updateList() {
	const titles = [...document.querySelectorAll('h1, h2')].sort((a, b) => {
		return Math.abs(a.getBoundingClientRect().top) - Math.abs(b.getBoundingClientRect().top);
	});

	document.querySelectorAll(".selected-circle").forEach(c => c.classList.remove("selected-circle"));
	
	document.querySelectorAll(".nav-dot")[[...document.querySelectorAll('h1, h2')].indexOf(titles[0])].classList.add("selected-circle");
}

updateList();
window.addEventListener('scroll', () => {
    updateList();
})

//Hamburger Menu
const burger  = document.querySelector('.burger');
const menu = document.querySelector('.menu');

burger.addEventListener('click', () => {
	if (menu.classList.contains('hidden')) {
		menu.classList.remove('hidden');
	} else {
		menu.classList.add('hidden');
	}
})

//Type Writer effect
var typed = new Typed( ".auto-input", {
	strings: ["am Ofentse Rampa", "am a Front End Web Developer", "am a Software Developer", "construct beautiful responsive, web experiences"],
	typeSpeed: 100,
	backSpeed: 100,
	loop: true
})
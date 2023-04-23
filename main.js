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

// function Menu (e) {
//     let list = document.querySelector('ul');

//     e.name === 'menu' ? (e.name = 'close', list.classList.add('top-[80px]'), list.classList.add('opacity-100')) :(e.name = 'menu' , list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
// }
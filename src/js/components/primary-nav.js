(() => {
	const toggle = document.querySelector(".toggle-menu"),
				menu = document.querySelector(".primary-nav > ul");

	toggle.addEventListener("click", () => {
		toggle.classList.toggle("open");
		menu.classList.toggle("open");
	});

	menu.querySelectorAll('a').forEach(item => {
		item.addEventListener('click', e => e.preventDefault());
	});

})();

(() => {
	const toggle = document.querySelector(".toggle-menu"),
				sidebar = document.querySelector('aside'),
				menu = document.querySelector(".primary-nav > ul");

	toggle.addEventListener("click", () => {
		toggle.classList.toggle("open");
		menu.classList.toggle("open");
	});

	async function updateDom(path) {
		const res = await fetch(path),
					data = await res.text();

		let main = new DOMParser().parseFromString(data, "text/html").querySelector('main');
		document.querySelector('main').replaceWith(main);
	}

	window.onpopstate = function (event) {
		updateDom(event.target.location.href);
		menu.querySelectorAll('li').forEach(li => {
			li.classList.remove('current-menu-item');
			if(li.querySelector('a').href === window.location.href) {
				li.classList.add('current-menu-item');
			}
		});
	}

	sidebar.querySelectorAll('a').forEach(item => {
		item.addEventListener('click', e => {
			e.preventDefault();
			if(item.href !== window.location.href) {
				history.pushState(item.href, item.title, item.href);
				dispatchEvent(new PopStateEvent('popstate'));
			}
		});
	});

})();

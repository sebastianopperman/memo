import $ from 'jquery';

function filterCourses(status, list) {
	document.querySelector('.list').innerHTML = list.innerHTML;
	if(status !== 'all') {
		const courses = $('.course').filter((i, course) => course.getAttribute('data-filter') == status);
		$('.list').empty().append(courses);
	}
}

export function filterEvents() {
	const filter = document.querySelector('.filter');
	if(filter && document.querySelector('.course')) {
		const list = document.querySelector('.list').cloneNode(true);
		if(filter.querySelector('ul')) {
			filter.querySelectorAll('ul li').forEach(item => {
				item.addEventListener('click', e => {
					e.preventDefault();
					filter.querySelectorAll('li').forEach(li => li.classList.remove('active'));
					item.classList.add('active');
					filterCourses(item.getAttribute('data-filter'), list);
				});
			});
		}
		if(filter.querySelector('select')) {
			const select = filter.querySelector('select');
			select.addEventListener('change', () => {
				const select = filter.querySelector('select');
				filterCourses(select.value, list);
			});
		}
	}
}

filterEvents();
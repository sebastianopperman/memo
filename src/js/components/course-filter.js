import $ from 'jquery';

(() => {
	const filter = document.querySelector('.filter'),
				mq = window.matchMedia('(min-width:768px)');

	function filterCourses(status) {
		if(status == 'all') {
			$('.course').removeClass('hide');
		} else {
			const courses = $('.course').filter((i, course) => course.getAttribute('data-filter') == status);
			$('.course').addClass('hide');
			courses.removeClass('hide');
		}
	}
	
	if(filter) {
		if(mq.matches) {
			filter.querySelectorAll('ul a').forEach(item => {
				item.addEventListener('click', e => {
					e.preventDefault();
					filter.querySelectorAll('li').forEach(li => li.classList.remove('active'));
					item.parentElement.classList.add('active');
					filterCourses(item.getAttribute('href'));
				});
			});
		} else {
			const select = filter.querySelector('select');
			select.addEventListener('change', () => {
				filterCourses(select.value);
			});
		}
	}
})();
function toggleTheme() {
	const html = document.documentElement;
	const current = html.getAttribute('data-theme') || 'light';
	const next = current === 'light' ? 'dark' : 'light';
	html.setAttribute('data-theme', next);
	localStorage.setItem('theme', next);
}

function toggleMobileMenu() {
	const nav = document.getElementById('siteNav');
	if (nav) {
		nav.classList.toggle('open');
	}
}

document.addEventListener('click', function(e) {
	const nav = document.getElementById('siteNav');
	const btn = document.querySelector('.mobile-menu-btn');
	if (nav && nav.classList.contains('open') && !nav.contains(e.target) && btn && !btn.contains(e.target)) {
		nav.classList.remove('open');
	}
});

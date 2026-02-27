function toggleTheme() {
	const html = document.documentElement;
	const current = html.getAttribute('data-theme') || 'light';
	const next = current === 'light' ? 'dark' : 'light';
	html.setAttribute('data-theme', next);
	localStorage.setItem('theme', next);
}

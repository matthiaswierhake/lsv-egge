document.addEventListener('DOMContentLoaded', function () {

	const toggle = document.querySelector('.lsv-toggle-password');
	const field  = document.getElementById('lsv-password');

	if (!toggle || !field) {
		return;
	}

	toggle.addEventListener('click', function () {
		field.type = field.type === 'password' ? 'text' : 'password';
	});
});

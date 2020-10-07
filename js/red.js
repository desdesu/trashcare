const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const containera = document.getElementById('containera');

signUpButton.addEventListener('click', () => {
	containera.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	containera.classList.remove("right-panel-active");
});
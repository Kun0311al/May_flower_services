const loginForm = document.getElementById('login-form');
const signupForm = document.getElementById('signup-form');

loginForm.addEventListener('submit', function (event) {
  event.preventDefault();
  // Handle login logic here
  console.log('Login submitted');
});

signupForm.addEventListener('submit', function (event) {
  event.preventDefault();
  // Handle signup logic here
  console.log('Sign Up submitted');
});


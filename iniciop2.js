document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    
    let valid = true;

    const usernameError = document.getElementById('usernameError');
    if (username.length < 3) {
        usernameError.textContent = 'El usuario debe tener al menos 3 caracteres.';
        usernameError.style.display = 'block';
        valid = false;
    } else {
        usernameError.style.display = 'none'; 
    }

    const passwordError = document.getElementById('passwordError');
    if (password.length < 6) {
        passwordError.textContent = 'La contraseña debe tener al menos 6 caracteres.';
        passwordError.style.display = 'block';
        valid = false;
    } else {
        passwordError.style.display = 'none'; 

    
    if (valid) {
        window.location.href = 'inicio.html';
    }
}}); 
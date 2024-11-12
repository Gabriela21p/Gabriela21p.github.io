document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('login-button').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = 'log_in.php'; 
    });
});
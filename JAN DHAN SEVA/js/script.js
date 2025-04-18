document.getElementById('signup-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    
    fetch('signup.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `username=${username}&email=${email}&password=${password}`
    })
    .then(res => res.text())
    .then(data => document.getElementById('signup-message').innerHTML = data);
});

document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let email = document.getElementById('login-email').value;
    let password = document.getElementById('login-password').value;

    console.log("EMAIL:"+email);
    
    fetch('login.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `email=${email}&password=${password}`
    })
    .then(res => res.text())
    .then(data => {
        if (data === 'success') window.location.href = '../Home.html';
        else document.getElementById('login-message').innerHTML = data;
    });
});
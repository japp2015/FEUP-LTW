var LogIn = document.getElementById('logIn');

var LogInBtn = document.getElementById('logInBtn');

var closeBtn = document.getElementsByClassName('closeBtn')[0];

LogInBtn.addEventListener('click', openLogIn);
closeBtn.addEventListener('click', closeLogIn);
window.addEventListener('click', clickOutside);

function openLogIn() {
    LogIn.style.display='block';
}

function closeLogIn() {
    LogIn.style.display='none';
}

function clickOutside(e) {
    if (e.target == LogIn) { //vê se está a clicar fora
        LogIn.style.display='none';
    }
}
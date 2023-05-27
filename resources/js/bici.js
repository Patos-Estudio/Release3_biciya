function home(){
    window.location.href = "../Inicio/index.blade.php"
}

function login_princi(){
    window.location.href = ""
}

function login(){
    window.location.href = "login.html"
}

function login2(){
    window.location.href = "login2.html"
}

function login3(){
    window.location.href = "login3.html"
}

function acceso(){
    window.location.href = "../acceso/acceso.blade.php"
}


function validar(){
    let pass = document.getElementById('password').value;
    let pass1 = document.getElementById('password1').value;
    if(pass != pass1 ){
        pass.style.borderColor = 'linear-gradient(to right, #ed213a, #93291e)';
        document.getElementById('password1').style.background = 'linear-gradient(to right, #ed213a, #93291e)';
    }else{
        document.getElementById('password').style.background = 'linear-gradient(to right, #93F9B9, #1D976C)';
        document.getElementById('password1').style.background = 'linear-gradient(to right, #93F9B9, #1D976C)';
    }
}


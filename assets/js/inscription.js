
let msg ; 
let password = document.getElementById('mdp') ;
let letter = document.getElementById('letter') ; 
let capital = document.getElementById('capital')
let numberMin = document.getElementById('numberMin') ;
let number = document.getElementById('number') ;
let special = document.getElementById('special') ;



password.onfocus = function(){
    document.getElementById('messagemdp').style.display = "block"
}
password.onblur = function(){
    document.getElementById('messagemdp').style.display = "none"
}
password.onkeyup = function(){
    var lowerCaseLetters = /[a-z]/g
    if(password.value.match(lowerCaseLetters)){
        letter.classList.remove('invalid');
        letter.classList.add('valid');
    }else{
        letter.classList.remove('valid');
        letter.classList.add('invalid');
    }

    var upperCaseLetters = /[A-Z]/g
    if(password.value.match(upperCaseLetters)){
        capital.classList.remove('invalid');
        capital.classList.add('valid');
    }else{
        capital.classList.remove('valid');
        capital.classList.add('invalid');
    }

    var numbers = /[0-9]/g
    if(password.value.match(numbers)){
        numberMin.classList.remove('invalid');
        numberMin.classList.add('valid');
    }else{
        numberMin.classList.remove('valid');
        numberMin.classList.add('invalid');
    }

    
    if(password.value.length >= 8 ){
        number.classList.remove('invalid');
        number.classList.add('valid');
    }else{
        number.classList.remove('valid');
        number.classList.add('invalid');
    }
    if(password.value.match (/[$/&/+/,/:/;/=/?/@/#/|/'/</>/./-/^/*/(/)/%/!]/)){
        special.classList.remove('invalid');
        special.classList.add('valid');
    }else{
        special.classList.remove('valid');
        special.classList.add('invalid');
    }


}

"[$&+,:;=?@#|'<>.-^*()%!]"











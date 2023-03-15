var reg_form = document.getElementById('reg_form');
var firstName = document.getElementById('firstName');
var lastName = document.getElementById('lastName');
var email = document.getElementById('email');
var password = document.getElementById('password');
var empty = document.getElementById('password');


var valid_firstName = document.getElementById('val_firstName');
var valid_lastName = document.getElementById('val_lastName');
var valid_email = document.getElementById('val_email');
var valid_password = document.getElementById('val_password');
var valid_empty = document.getElementById('empty');


const reg = new RegExp('^[A-Z, a-z]+$');
// const emailRegex = new RegExp(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/, "gm");
const emailRegex = new RegExp(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@/);
const passwordRegex = new RegExp(/^[A-Za-z0-9]\w{4,7}$/);
const emptyRegex = new RegExp('/^$/');
// const emptyRegex = new RegExp(/^[A-Za-z0-9]*$/);


    firstName.addEventListener('input', function(e){
        var pattern = reg;
        var currentValue = e.target.value;
        var valid = pattern.test(currentValue);
        if(valid){
            valid_firstName.style.display = 'none'
        }else {
            valid_firstName.style.display = 'block'
        }
    })

    lastName.addEventListener('input', function(e){
        var pattern = reg;
        var currentValue = e.target.value;
        var valid = pattern.test(currentValue);
        if(valid){
            valid_lastName.style.display = 'none'
        }else {
            valid_lastName.style.display = 'block'
        }
    })

    email.addEventListener('input', function(e){
        var pattern = emailRegex;
        var currentValue = e.target.value;
        var valid = pattern.test(currentValue);
        if(valid){
            valid_email.style.display = 'none'
        }else {
            valid_email.style.display = 'block'
        }
    })

    password.addEventListener('input', function(e){
        var pattern = passwordRegex;
        var currentValue = e.target.value;
        var valid = pattern.test(currentValue);
        if(valid){
            valid_password.style.display = 'none'
        }else {
            valid_password.style.display = 'block'
        }
    })

    password.addEventListener('input', function(e){
        valid_empty.style.display = 'none'
        var pattern = emptyRegex;
        // var currentValue = e.target.value;
        // var valid = pattern.test(currentValue);
        if(pattern){
            valid_empty.style.display = 'none'
        }else {
            // valid_empty.style.display = 'none'
        }
    })




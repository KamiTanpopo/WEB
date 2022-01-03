var form = document.querySelector('.formWithValidation')
var submit = form.querySelector('.validateBtn')
var first_name = form.querySelector('.first_name')
var last_name = form.querySelector('.last_name')
var phone = form.querySelector('.phone')
var password = form.querySelector('.password')
var passwordConfirmation = form.querySelector('.passwordConfirmation')
var date = form.querySelector('.date')
var email = form.querySelector('.email')
var float = form.querySelector('.float')
var fields = form.querySelectorAll('.field')
submit.addEventListener('click', function (event) {

    event.preventDefault()
  //  removeValidation()
    checkFieldsPresence()
    checkPasswordMatch()
    checkFieldsFloat()
    checkFieldsInt()
  })
  // var generateError = function (text) {
  //   var error = document.createElement('div')
  //   error.className = 'error'
  //   error.style.color = 'white'
  //   error.innerHTML = text
  //   return error
  // }
  // var removeValidation = function () {
  //   var errors = form.querySelectorAll('.error')
  //   for (var i = 0; i < errors.length; i++) {
  //     errors[i].remove()
  //   }
  // }
  var checkFieldsPresence = function ()
  {
  let text = "*Це поле не може бути пустим";
  if ((first_name.value).length==0){
    document.getElementById('first_name').innerHTML=text; }
   else{document.getElementById('first_name').innerHTML="";}
   if ((email.value).length==0){
    document.getElementById('email').innerHTML=text;}
    else{document.getElementById('email').innerHTML="";}
   if ((password.value).length==0){
      document.getElementById('password').innerHTML=text;}
      else{document.getElementById('password').innerHTML="";}
   if ((passwordConfirmation.value).length==0){
      document.getElementById('password_confirm').innerHTML=text;}
      else{document.getElementById('password_confirm').innerHTML="";}
  }


  var checkPasswordMatch = function () {
    if (password.value !== passwordConfirmation.value) {
      txt = "Password doesnt match";
      console.log('not equals')
      document.getElementById("password").innerHTML="*Паролі не сходяться";
      return false;
    }
  }
  function isInt(n){
    return Number(n) === n && n % 1 === 0;
}

function isFloat(n){
    return Number(n) === n && n % 1 !== 0;
}
var checkFieldsFloat = function () {
    dot=(float.value).indexOf(".");
    if (dot < 1){
      document.getElementById('float').innerHTML='*Це поле повинно мати дробні числа';
      return false;
    }
    else{document.getElementById("float").innerHTML="";
  }
}
  var checkFieldsInt = function () {
    dot=(phone.value).indexOf(".");
    if (dot >= 1){
      document.getElementById('phone').innerHTML='*Це поле повинно мати цілі числа';
      return false;
    }
      else{document.getElementById("phone").innerHTML = "";}
}
   
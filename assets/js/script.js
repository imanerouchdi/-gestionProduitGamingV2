// variable inputconsole.log("ss");
    const username = document.getElementById('name');
    const email = document.getElementById('email');
    const password1 = document.getElementById('password1');
    const password2 = document.getElementById('password2');

// variable span 
    const nameError=document.getElementById('name-error');
    const emailError=document.getElementById('email-error');
    const passwordError1=document.getElementById('password1-error');
    const passwordError2=document.getElementById('password2-error');
    // const passError=document.getElementById('password1-error').value;
function validName(){

    const re= /^\w{5,12}$/;

    if(username.value.length==0){
        nameError.innerHTML ='name is required';
        nameError.style.color = "#ff0000";
        document.getElementById('name').classList.add('is-valid');
        return false;
    }
    if(!username.value.match(re)){
        nameError.innerHTML='not valid';
        document.getElementById('name').classList.remove('is-valid');
        username.classList.add('is-invalid');
        return false;
    }
    document.getElementById('name').classList.add('is-valid');
    username.classList.remove('is-invalid');
    nameError.innerHTML='';
    return true;
}
function validEmail(){
    const RegEmail= /^([a-z\d\.-]+)@([a-z\d-]+).([a-z]{2,8})(\.[a-z]{2,8})?$/;
    if(email.value.length==0){
        emailError.innerHTML='should to write your email';
        emailError.style.color = "#ff0000";
        document.getElementById('email').classList.remove('is-valid');
        emailError.classList.add('is invalid');
        return false;
    }
    if(!email.value.match(RegEmail)){
        emailError.innerHTML=' email invalid Format';
        document.getElementById('email').classList.remove('is-valid');
        emailError.classList.add('is-invalid');
        return false;
    }
    document.getElementById('email').classList.add('is-valid');
    emailError.classList.remove('is-invalid');
    emailError.innerHTML='';
    return true;
}
function validPassword1(){
   validPassword2();

    const RegPassword=/^[\w@-]{8,20}$/ ;
    if(password1.value.length==0){

        passwordError1.style.color = "#ff0000";
        passwordError1.innerHTML='should to write your password';
        document.getElementById('password1').classList.remove('is-valid');
        return false;
    }
    if(!password1.value.match(RegPassword)){
        passwordError1.innerHTML='password valid';
        password1.classList.remove('is-valid');
        return false;
    }
    password1.classList.add('is-valid');
    passwordError1.innerHTML='';
    return true;
}
function validPassword2(){
    if(password2.value.length==0) {
        passwordError2.style.color = "#ff0000";
        passwordError2.innerHTML='please confirm your pasword';
        document.getElementById('password2').classList.remove('is-valid');
        return false;
    }
    if(password1.value !== password2.value){ 
        passwordError2.innerHTML="Passwords doesn't match";
        password2.classList.add('is-invalid');
        return false;

    }
    password2.classList.remove('is-invalid');
    password2.classList.add('is-valid');
    passwordError2.innerHTML='';
    return true;
    


}
const validateForm = () => {

    if(validName() ){
        if(validEmail() ){
            if(validPassword1()){
                if(validPassword2()){
                    document.getElementById('register').click();
                    
                }
            } 
        }
    }
};

// const validsignin(){
//     if(validEmail()){
//         if(validPassword1()){
//             document.getElementById('signin').click();
//         }
//     }
// }

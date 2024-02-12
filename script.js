let meun=document.querySelector('#menu-btn');
let navbar =document.querySelector('.header .navbar');

meun.onclick = ()=>{
    meun.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscrollc = () =>{
    meun.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".reviews-slider",{
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints:{
        640:{
            slidesPerView: 1,
           
        },
        768:{
            slidesPerView: 2,
            // spaceBetween: 40,  
        },
        1024:{
            slidesPerView: 3,
            // spaceBetween: 50,
        },
    }
})
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////

// document.getElementById("reg").onsubmit = function () {
//     // Email
//     let emin = document.getElementById("email").value;
//     let emiR = /\w+@(gmail|hotmail|yahoo).(com|net|org)$/i;
//     let va = emiR.test(emin);
//     // Image Type
//     let fileInput = document.getElementById('user_img');
//     let filePath = fileInput.value;
//     // Allowing file type
//     let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;

//     if (document.querySelector("#Fname").value === "") { 
//         alert("You must enter the name or Enter only ALPHABET characters");
//         return false;
//     }
//     if (document.querySelector("#Lname").value === "") { 
//         alert("You must enter the name or Enter only ALPHABET characters");
//         return false;
//     }
    
//     if (/^(?=.[0-9])(?=.[A-Z])(?=.[!@#$%^&])[a-zA-Z0-9!@#$+()={}/|_%^&\u0621-\u064A-]{4,}$/s.test(document.querySelector("#pass").value) === false) {
//         alert("Password should be at least 4 characters in length and should include at least one upper case letter, one number, and one special character");
//         return false;
//     }
//     if (document.querySelector("#pass1").value.length == 0) {
//         alert("You must enter the confirming password");
//         return false;
//     }
//     if (document.querySelector("#pass1").value 
//     !== document.querySelector("#pass").value) {
//         alert("Your confirming password is not correct");
//         return false;
//     }
//     if (emin === "") {
//         alert("You must enter your email");
//         return false;
//     }
//     if (va === false) {
//         alert("You must enter your email correctly");
//         return false;
//     }
//     if (/^[0-9]{9}$/g.test(document.getElementById("tel").value) === false){
//         alert("You must enter the number and it must be correct");
//         return false;
//     }
//     if (Register.user_gender[0].checked == false && Register.user_gender[1].checked == false) {
//         alert("You must choose the gender");
//         return false;
//     }
//     if (document.querySelector("#country").selectedIndex == 0) {
//         alert("You must select the country");
//         return false;
//     }
//     if (!allowedExtensions.exec(filePath)) {
//         alert("Invalid file type");
//         fileInput.value = '';
//         return false;
//     }
//     return true;
// }
// function theChecker() {
//     if (document.Register.agree.checked == true)
//         document.Register.ok.disabled = false;
//     else
//         document.Register.ok.disabled = true;
// }


/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////
document.getElementById("reg").onsubmit = function () {
    // Email
    let emin = document.getElementById("email").value;
    let emiR = /\w+@(gmail|hotmail|yahoo).(com|net|org)$/i;
    let va = emiR.test(emin);
    // Image Type
    let fileInput = document.getElementById('user_img');
    let filePath = fileInput.value;
    // Allowing file type
    let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.svg)$/i;

    if (document.querySelector("#Fname").value === "") { 
        alert("You must enter the frist name or Enter only ALPHABET characters");
        return false;
    }
    if (document.querySelector("#Lname").value === "") { 
        alert("You must enter the last name or Enter only ALPHABET characters");
        return false;
    }
    
    if (/^(?=.[0-9])(?=.[A-Z])(?=.[!@#$%^&])[a-zA-Z0-9!@#$+()={}/|_%^&\u0621-\u064A-]{4,}$/s.test(document.querySelector("#pass").value) === false) {
        alert("Password should be at least 4 characters in length and should include at least one upper case letter, one number, and one special character");
        return false;
    }
    if (document.querySelector("#pass1").value.length === 0) {
        alert("You must enter the confirming password");
        return false;
    }
    if (document.querySelector("#pass1").value !== document.querySelector("#pass").value) {
        alert("Your confirming password is not correct");
        return false;
    }
    if (emin === "") {
        alert("You must enter your email");
        return false;
    }
    if (va === false) {
        alert("You must enter your email correctly");
        return false;
    }
    if (/^[0-9]{9}$/g.test(document.getElementById("tel").value) === false){
        alert("You must enter the number and it must be correct");
        return false;
    }
    if (document.querySelector('input[name="user_gender"]:checked') === null) {
        alert("You must choose the gender");
        return false;
    }
    if (document.querySelector("#country").selectedIndex === 0) {
        alert("You must select the country");
        return false;
    }
    if (!allowedExtensions.test(filePath)) {
        alert("Invalid file type");
        fileInput.value = '';
        return false;
    }
    return true;
};

function theChecker() {
    if (document.getElementById("agree").checked === true)
        document.getElementById("ok").disabled = false;
    else
        document.getElementById("ok").disabled = true;
}
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.reg-link');
const btnPopup = document.querySelector('.btnLogin');
const iconClose = document.querySelector('.exit');
const passwordField = document.querySelector('#toggle_password');
const showPasswordIcon = document.querySelector('#show_password');
const regField = document.querySelector('#reg_toggle');
const regIcon = document.querySelector('#reg_password');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

showPasswordIcon.addEventListener("click", () => {
    passwordField.type = passwordField.type === "password" ? "text" : "password";
    showPasswordIcon.className = passwordField.type === "password" ? 'fa fa-eye' : 'fa fa-eye-slash';
});

regIcon.addEventListener("click", () => {
    regField.type = regField.type === "password" ? "text" : "password";
    regIcon.className = regField.type === "password" ? 'fa fa-eye' : 'fa fa-eye-slash';
});
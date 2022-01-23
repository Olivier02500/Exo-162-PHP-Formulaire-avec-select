const form = document.querySelector('.form');
const submit = document.getElementById('submit');

submit.addEventListener('click', (e) =>{
    e.preventDefault();
    form.style.display = "none";
});
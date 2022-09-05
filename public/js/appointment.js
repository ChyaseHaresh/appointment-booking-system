let selected_date = document.querySelector('.date');
var valuess = selected_date.options[select.selectedIndex].value;

let selected_button = document.getElementsByClassName('times')
let selected_time = selected_button.innerText;
selected_button.addEventListener('click', (e)=>{
    console.log(valuess)
    console.log(selected_time)
    console.log('hello')
})


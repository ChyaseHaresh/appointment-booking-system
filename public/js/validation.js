let sdate = document.querySelector(".sdate");
let stime = document.querySelector(".stime");

let edate = document.querySelector(".edate");
let etime = document.querySelector(".etime");
let validitys = document.querySelector(".validitys");

sdate.addEventListener("change", (e) => {
    e.preventDefault();
    dates = sdate.value;
    edate.setAttribute("min", dates);
    console.log(dates);
});

stime.addEventListener("change", (e) => {
    e.preventDefault();
    stimes = stime.value;
    etime.setAttribute("min", stimes);
    if (!stime.validity.valid) {
        stime.classList.add("borders");
        validitys.textContent="The appointment time  is between 11:00 AM to 6:00 PM"
    } else {
        stime.classList.remove("borders");
        validitys.textContent=""
    }
});

etime.addEventListener("change", (e) => {
    e.preventDefault();

    if (!etime.validity.valid) {
        etime.classList.add("borders");
    } else {
        etime.classList.remove("borders");
    }
});
 
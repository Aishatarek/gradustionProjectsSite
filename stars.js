/*const rate = document.querySelectorAll(".st i");
rate.forEach((star, index) => {
  star.addEventListener("click", () => {
    rate.forEach(el => el.classList.remove("fas", "checked"))
    for (let i = 0; i <= index; i++) {
      rate[i].classList.add("fas", "checked")
    }
  });
});
const rate1 = document.querySelectorAll(".st1 i");
rate1.forEach((star, index) => {
  star.addEventListener("click", () => {
    rate1.forEach(el => el.classList.remove("fas", "checked"))
    for (let i = 0; i <= index; i++) {
      rate1[i].classList.add("fas", "checked")
    }
  });
});
const rate2 = document.querySelectorAll(".st2 i");
rate2.forEach((star, index) => {
  star.addEventListener("click", () => {
    rate2.forEach(el => el.classList.remove("fas", "checked"))
    for (let i = 0; i <= index; i++) {
      rate2[i].classList.add("fas", "checked")
    }
  });
});
const rate3 = document.querySelectorAll(".st3 i");
rate3.forEach((star, index) => {
  star.addEventListener("click", () => {
    rate3.forEach(el => el.classList.remove("fas", "checked"))
    for (let i = 0; i <= index; i++) {
      rate3[i].classList.add("fas", "checked")
    }
  });
});
const rate4 = document.querySelectorAll(".st4 i");
rate4.forEach((star, index) => {
  star.addEventListener("click", () => {
    rate4.forEach(el => el.classList.remove("fas", "checked"))
    for (let i = 0; i <= index; i++) {
      rate4[i].classList.add("fas", "checked")
    }
  });
});
const rate5 = document.querySelectorAll(".st5 i");
rate5.forEach((star, index) => {
  star.addEventListener("click", () => {
    rate5.forEach(el => el.classList.remove("fas", "checked"))
    for (let i = 0; i <= index; i++) {
      rate5[i].classList.add("fas", "checked")
    }
  });
});*/
const readmorebtn = document.querySelector('.readmore_btn');
const text = document.querySelector('.text');
readmorebtn.addEventListener('click',()=>{
    text.classList.toggle('show-more')
    if(readmorebtn.innerText ==='Read More'){
        readmorebtn.innerText = 'Read Less';
    }else{
        readmorebtn.innerText = 'Read More';
    }
   
})

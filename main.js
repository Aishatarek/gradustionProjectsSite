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


const readmorebtn1 = document.querySelector('#readmore_btn1');
const text1 = document.querySelector('.text1');
readmorebtn1.addEventListener('click',()=>{
    text1.classList.toggle('show-more1')
    if(readmorebtn1.innertext ==='Read More'){
        readmorebtn1.innertext = 'Read Less';
    }else{
        readmorebtn1.innertext = 'Read More';
    }
   
})


function myfunction(){
    var dots=document.getElementById("dots");
    var moretext=document.getElementById("moretext");
    var btntext=document.getElementById("readmore_btn");
    if(dots.style.display==="none"){
        dots.style.display="inline";
        btntext.innerHTML="Read more";
        moretext.style.display="none";
    }else{
        dots.style.display="none";
        btntext.innerHTML="Read less";
        moretext.style.display="inline";
    }
}

function myfunction2(){
    var dots=document.getElementById("dots2");
    var moretext=document.getElementById("moretext2");
    var btntext=document.getElementById("readmore_btn2");
    if(dots.style.display==="none"){
        dots.style.display="inline";
        btntext.innerHTML="Read more";
        moretext.style.display="none";
    }else{
        dots.style.display="none";
        btntext.innerHTML="Read less";
        moretext.style.display="inline";
    }
}



function myfunction3(){
    var dots=document.getElementById("dots3");
    var moretext=document.getElementById("moretext3");
    var btntext=document.getElementById("readmore_btn3");
    if(dots.style.display==="none"){
        dots.style.display="inline";
        btntext.innerHTML="Read more";
        moretext.style.display="none";
    }else{
        dots.style.display="none";
        btntext.innerHTML="Read less";
        moretext.style.display="inline";
    }
}



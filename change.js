let yes_button=document.querySelector('#age_yes');
let no_button=document.querySelector("#age_no");
let image=document.getElementById('images');
let content=document.querySelector('#content');
let heading=document.querySelector('h2');

yes_button.addEventListener('click',() =>{
    if(heading.innerText=='Are you 18-75 years old?'){
    heading.innerText='Had a tattoo in the last 4 months?';
    image.innerHTML='<img class="images" src="heart.jpg">';
    }
    else if(heading.innerText=='Had a tattoo in the last 4 months?'){
        heading.innerText='Did you get you tattoo in a licensed or regulated premises?';
        image.innerHTML='<img class="images" src="heart.jpg">';
    }
    else if(heading.innerText=='Did you get you tattoo in a licensed or regulated premises?'){
        heading.innerText='Are you pregnant or recently given birth?';
        image.innerHTML='<img class="images" src="pregnant.jpg">';
    }
    else if(heading.innerHTML=='Are you pregnant or recently given birth?')
    {
        heading.innerHTML='Sorry! You are not eligible to Donate Blood.';
        image.innerHTML='<img class="images" src="alert2.jpg">';
    }
    else if(heading.innerHTML=='Do you have a heart condition?')
    {
        heading.innerHTML='Sorry! You are not eligible to Donate Blood.';
        image.innerHTML='<img class="images" src="alert2.jpg">';
    }
    else if(heading.innerHTML=='Are you low in iron?')
    {
        heading.innerHTML='Sorry! You are not eligible to Donate Blood.';
        image.innerHTML='<img class="images" src="alert2.jpg">';
    }
    else if(heading.innerHTML=='Have you injected recreational drugs in the last 5 years?')
    {
        heading.innerHTML='Sorry! You are not eligible to Donate Blood.';
        image.innerHTML='<img class="images" src="alert2.jpg">';
    }
    
    console.log(heading.innerText);
});

no_button.addEventListener('click',() =>{
    if(heading.innerText=='Are you 18-75 years old?'){
        heading.innerText='Sorry! You are not eligible to Donate Blood.';
        image.innerHTML='<img class="images" src="alert2.jpg">';
    }
    else if(heading.innerText=='Had a tattoo in the last 4 months?'){
        heading.innerText='Are you pregnant or recently given birth?';
        image.innerHTML='<img class="images" src="pregnant.jpg">';
    }
    else if(heading.innerText=='Are you pregnant or recently given birth?'){
        heading.innerText='Do you have a heart condition?';
        image.innerHTML='<img class="images" src="heart3.png">';
    }
    else if(heading.innerText=='Do you have a heart condition?'){
        heading.innerText='Are you low in iron?';
        image.innerHTML='<img class="images" src="iron.jpg">';
    }
    else if(heading.innerHTML=='Are you low in iron?')
    {
        heading.innerHTML='Have you injected recreational drugs in the last 5 years?';
        image.innerHTML='<img class="images" src="drugs.jpg">';
    }
    else if(heading.innerHTML=='Have you injected recreational drugs in the last 5 years?')
    {
        heading.innerHTML='Congratulations you should be able to give blood!!';
        image.innerHTML='<img class="images" src="check.png">';
    }
    
    
    //console.log(heading.innerText);
});
//console.log(heading.innerText);
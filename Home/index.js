let container = document.getElementsByClassName('container');
let slider = document.getElementById('slider');
let images = document.getElementsByClassName('mySlides');
let next = document.getElementById('next');
let prev = document.getElementById('prev');

images[0].style.display = "block";
var count = 0;
function move(){
    count += 1;
    if(count >= images.length){
        count = 0;
    }
    for(var i=0; i<images.length; i++){
        images[i].style.display = 'none';
    }
    images[count].style.display = "block";
    
}
next.addEventListener('click', ()=>{
    count += 1;
    if(count >= images.length){
        count = 0;
    }
    for(var i=0; i<images.length; i++){
        images[i].style.display = 'none';
    }
    images[count].style.display = "block";
})

prev.addEventListener('click', ()=>{
    count -= 1;
    if(count < 0){
        count = images.length - 1;
    }
    for(var i=0; i<images.length; i++){
        images[i].style.display = 'none';
    }
    images[count].style.display = "block";
})
setInterval(move, 5000);

// ************************** sidebar ****************************

let dropdown = document.getElementById('dropdown');
let sidebar = document.getElementById('sidebar');

if(dropdown.style.display == "none"){
    sidebar.style.display = "none"
}

dropdown.addEventListener('click', ()=>{
    if(sidebar.style.display == "none"){
        sidebar.style.display = "block";
    } 
    else{
        sidebar.style.display = "none"
    }
})
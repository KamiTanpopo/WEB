var controls = document.querySelectorAll('.controls');
for(var i = 0; i < controls.length; i++){
	controls[i].style.display = 'inline-block';
}

var scale50 = document.getElementById('50%');
var scale75 = document.getElementById('75%');
var scale100 = document.getElementById('100%');
var images = document.querySelectorAll('.image');

function setScale(scale){
	for(var j = 0; j < images.length; j++){
		images[j].style.width = scale.id;
		images[j].style.height = scale.id;
	}
}

scale50.onclick = function(){
	setScale(this);
}
scale75.onclick = function(){
	setScale(this);
}
scale100.onclick = function(){
	setScale(this);
}

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var time = 2000;
var slideInterval = setInterval(nextSlide,time);

function nextSlide(){
	goToSlide(currentSlide+1);
}

function previousSlide(){
	goToSlide(currentSlide-1);
}

function goToSlide(n){
	slides[currentSlide].className = 'slide';
	currentSlide = (n+slides.length)%slides.length;
	slides[currentSlide].className = 'slide showing';
}


var playing = true;
var pauseButton = document.getElementById('pause');

function pauseSlideshow(){
	pauseButton.innerHTML = '&#9658;'; // play character
	playing = false;
	clearInterval(slideInterval);
}

function playSlideshow(){
	pauseButton.innerHTML = '&#10074;&#10074;'; // pause character
	playing = true;
	slideInterval = setInterval(nextSlide,time);
}

pauseButton.onclick = function(){
	if(playing){ pauseSlideshow(); }
	else{ playSlideshow(); }
};

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function(){
	pauseSlideshow();
	nextSlide();
};
previous.onclick = function(){
	pauseSlideshow();
	previousSlide();
};

var timer1s = document.getElementById('timer1s');
var timer2s = document.getElementById('timer2s');
var timer5s = document.getElementById('timer5s');

timer1s.onclick = function(){
	time = 1000;
}
timer2s.onclick = function(){
	time = 2000;
}
timer5s.onclick = function(){
	time = 5000;
}
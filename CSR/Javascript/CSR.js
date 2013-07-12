function displayBIG() {
	var bigimg=this;
	clearInterval(l);
	var CSRimages = document.getElementById("CSRslider").getElementsByTagName("img");
	for (var i=0;i<CSRimages.length;++i) {
		var image=CSRimages[i];
		$(image).stop();
		switch(i) {
		case 0:
			$(image).animate({
		top:50+'px',
		left:250+'px'
		},1500);
		break;
		case 1:
			$(image).animate({
		top:50+'px',
		left:400+'px'
		},1500);
		break;
		case 2:
			$(image).animate({
		top:200+'px',
		left:250+'px'
		},1500);
		break;
		case 3:
			$(image).animate({
		top:200+'px',
		left:400+'px'
		},1500,function () {
	var bigImg = document.getElementById("Bigimg");
	bigImg.src=bigimg.src;
	bigImg.style.display="block";
	$(bigImg).animate({
		opacity:1
	});	
});
		break;
}
}

}
function displaySMALL() {
	cSRanimation();	
	$(this).animate({
		opacity:0
	},function () {
	this.style.display="none";
});
}
function cSRanimation() {
	var slider = document.getElementById("CSRslider");	
	CSRimages = slider.getElementsByTagName("img");
	l = setInterval(function () {
		for (var i=0;i<(CSRimages.length-1);++i) {
		var image = CSRimages[i];
		
		xAxis=Math.random()*1200;
		yAxis=Math.random()*400;		
		$(image).animate({
		top:yAxis+'px',
		left:xAxis+'px'
		},1300);
}
},1400);

}

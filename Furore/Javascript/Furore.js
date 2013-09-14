function slide(lowEnd) {
	var snapshots = document.getElementsByClassName("magazineThumbnail");
	for (var i=0;i<snapshots.length;++i) {
	//alert(snapshots[i].style.top);	
	if(snapshots[i].style.top=="-200px")		
	{
snapshots[i].style.top=lowEnd+'px';	
	}
	$(snapshots[i]).animate({
	top :"-=205px"
	},1500);
	}
}
function magazinePlacing() {
	document.getElementById('currentHead').style.display='block';
	document.getElementById('currentText').style.display='block';
	var snapshots = document.getElementsByClassName("magazineThumbnail");
	var itop=5;
	for (var i=0;i<snapshots.length;++i) {
	snapshots[i].style.top=itop+'px';
	snapshots[i].onclick=Maximize_Magazine;
	itop += 205;
}
itop-=205;

h=setInterval(function () {
	 slide(itop);
},2000);
}
function Maximize_Magazine(){
	var call = this;
	$('#CmagazinePhoto').fadeOut('slow',magazine_photo_effect(call));
	$('#CmagazinePhoto').fadeIn('slow');
	var number = this.getAttribute('data-number');
	var heading = document.getElementById('magazineInfo').getElementsByClassName('magazineHead');
	var text = document.getElementById('magazineInfo').getElementsByClassName('magazineText');
	$('#currentHead').fadeOut('slow');
	$('#currentText').fadeOut('slow',magazine_info_animate(text[number],heading[number]));
	/*document.getElementById('currentHead').style.display='none';
	document.getElementById('currentText').style.display='none';*/
	document.getElementById('currentHead').id='';
	document.getElementById('currentText').id='';
	heading[number].id='currentHead';
	text[number].id='currentText';
}
function magazine_photo_effect(call){
	t = setTimeout(function(){
	document.getElementById('CmagazinePhoto').style.display='none';
	document.getElementById('CmagazinePhoto').style.backgroundImage = call.style.backgroundImage;
},500);
}
function magazine_info_animate(call1,call2){
	t = setTimeout(function(){
	$(call1).fadeIn('slow');
	$(call2).fadeIn('slow');
},500);
}
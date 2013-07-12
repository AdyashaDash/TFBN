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
	var snapshots = document.getElementsByClassName("magazineThumbnail");
	var itop=5;
	for (var i=0;i<snapshots.length;++i) {
	snapshots[i].style.top=itop+'px';
	itop += 205;
}
itop-=205;

h=setInterval(function () {
	 slide(itop);
},2000);
}

<script>
/*function codereplace() {
	while (div=divs.pop())
	{
	code = codes.pop();
	document.getElementById(div).innerHTML=code;		
	}
}*/
window.onload=function () {
/*<?php
if ($_GET["link"]) {
	$j = 'p' . $_GET["link"];	
?>
var getpage = <?php echo json_encode($j);?>;
var main=document.getElementById(getpage);
document.getElementById("p0").id=getpage;
main.id="p0";
<?php
}
?>*/
positioning();
placing();
//codereplace();
cSRanimation();
magazinePlacing();
for (var i=0;i<CSRimages.length;++i) {
var image = CSRimages[i];
if (i!=4) {
image.onclick = displayBIG;
}
else {
	image.onclick = displaySMALL;
}
}
var buttons= document.getElementById("menu").getElementsByTagName("span");
for(var i=0;i<buttons.length;++i)
{
buttons[i].onclick = controller;
}
$("#menu span").hover(function () {
	this.style.color="#414746";
	this.style.backgroundColor="#FFAC09";
	this.style.fontWeight = 'bold';
},function () {
	this.style.color="white";
	this.style.backgroundColor="#414746";
	this.style.fontWeight = '';
});
$("#header span a").hover(function () {
	this.style.color="#FFAC09";
},function () {
	this.style.color="white";
});
	var newsfeed=document.getElementById("newsfeed");
	var news=newsfeed.getElementsByTagName("div");
	for(var i =0;i<news.length;++i) {
$(news[i]).mouseenter(function(){	
	newscontroller(this);
});	
$(news[i]).mouseleave(function(){
	minimize(this);
});	
}
members=document.getElementsByClassName("member");
for (var i=0;i<members.length;++i) {
	members[i].onclick=displayinfo;
}
document.getElementById("close").onclick = function () {
	$("#cover").fadeOut();
$("#memberInfo").fadeOut();
}
$("#social img").hover(function () {
	this.src="Images/"+this.alt+"2.jpg";
},function () {
	this.src="Images/"+this.alt+".jpg";
});
}
</script>
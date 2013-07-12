c=460;
d=1240;
e=0;
horiend = 2440;
vertend = 940;
function positioning() {
	for (var i=0;i<5;++i) {
var j= 'p'+i;
var pag=document.getElementById(j);
switch(i) {
	case 0:
		pag.style.left='0px';
		break;
	case 1:
		pag.style.left='-1240px';
		break;
	case 3:
		pag.style.left='1240px';
		break;
	case 2:
		pag.style.top='-460px';
		break;
	case 4:
		pag.style.top='460px';
		break;
}
}
}
function placing(){
wid = $(window).width();
hig = $(window).height();

var menu=document.getElementById("menu").getElementsByTagName('span');
for (var i=0;i<menu.length;++i) {
menu[i].style.width=(wid-20)/5+'px';
}
if (hig>650) {
	document.getElementById("header").style.height=0.2*hig+10+'px';
	document.getElementById("header").style.width=wid+10+'px';
	document.getElementById("footer").style.height=0.1*hig+'px';
	document.getElementById("footer").style.width=wid+10+'px';
	document.getElementById("footer").style.lineHeight=0.1*hig+'px';
	document.getElementById("social").style.top=(0.1*hig-35)/2+'px';
	document.getElementById("menu").style.height=0.06*hig+'px';
	document.getElementById("menu").style.width=wid+10+'px';
	document.getElementById("menu").style.lineHeight=0.06*hig+'px';
	document.getElementById("container").style.top=0.26*hig+10+'px';
	document.getElementById("container").style.height=hig*0.64+'px';
	var pages=document.getElementsByClassName("page");
	for (var i=0;i<pages.length;++i) {
		pages[i].style.height=hig*0.64+'px';
	}
	document.getElementById("p2").style.top=-1*(hig*0.64+40)+'px';
	document.getElementById("p4").style.top=hig*0.64+40+'px';
	vertend = 2*(hig*0.64+40)+20;
	c=hig*0.64+40;
}
if(wid>1200)
{
document.getElementById("container").style.width=wid+'px';
var pages=document.getElementsByClassName("page");
/*for(var i=0;i<pages.length;++i)
{
pages[i].style.width=wid+'px';
}*/
for (var i=0;i<5;++i) {
var j= 'p'+i;
var pag=document.getElementById(j);
switch(i) {
	case 0:
		pag.style.left=(wid-1200)/2+'px';
		break;
	case 1:
		pag.style.left=-1240 +'px';
		break;
	case 3:
		pag.style.left=wid+1240+'px';
		break;
	case 2:
		pag.style.left=(wid-1200)/2+'px';
		break;
	case 4:
		pag.style.left=(wid-1200)/2+'px';
		break;
}
}
d = wid+1200;
horiend = d+1200;
e=(wid-1200)/2;
}
}
function movehoriz() {
	$(alpha).animate({
	left : e+'px'},'slow');	
	$(beta).animate({
	left : a + 'px'},'slow');	
	$(gamma).animate({
	left : b+'px'},'slow');	
}
function movevert() {
	$(alpha).animate({
	top : '0px'},'slow');	
	$(beta).animate({
	top : a + 'px'},'slow');	
	$(gamma).animate({
	top : b+'px'},'slow');	
}
function moveleft() {
	 alpha = document.getElementById("p3");
	 beta = document.getElementById("p0");
	 gamma = document.getElementById("p1");
	gamma.style.left = horiend+'px';
	a=-1*d;
	b=d;
	alpha.id="p0";
	beta.id="p1";
	gamma.id="p3";
	movehoriz();
}
function movedown() {
	alpha = document.getElementById("p2");
	 beta = document.getElementById("p0");
	 gamma = document.getElementById("p4");
	gamma.style.top = -1*(vertend)+'px';
	a=c;
	b=-1*c;
	alpha.id="p0";
	beta.id="p4";
	gamma.id="p2";
	movevert();
}
function moveright() {
	alpha = document.getElementById("p1");
	 beta = document.getElementById("p0");
	 gamma = document.getElementById("p3");
	gamma.style.left = -1*(horiend)+'px';
	a=d;
	b=-1*d;
	alpha.id="p0";
	beta.id="p3";
	gamma.id="p1";
	movehoriz();
}
function moveup() {
	alpha = document.getElementById("p4");
	 beta = document.getElementById("p0");
	 gamma = document.getElementById("p2");
	gamma.style.top = vertend+'px';
	a=-1*c;
	b=c;
	alpha.id="p0";
	beta.id="p2";
	gamma.id="p4";
	movevert();
}
function controller(){
var pageid =this.id;
var pagebox=document.getElementsByClassName(pageid);
var pos=pagebox[0].id;
if(pos=="p1")
moveright();
if(pos=="p2")
movedown();
if(pos=="p3")
moveleft();
if(pos=="p4")
moveup();
 }


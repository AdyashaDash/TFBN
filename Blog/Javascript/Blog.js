function newsright() {
//CHANGE THE IDS,CHANGE Z-INDEX
			$('#temp3').animate({
		left:725+'px'	},500,function () {  });
			$('#temp').animate({
		left:425+'px'	},500,function () {this.style.zIndex=1;});
			$('#temp2').animate({
		left:100+'px'	},500,function () {this.style.zIndex=0;});
			$('#leftend').animate({
		left:-1*225+'px'	},500,function () {this.style.zIndex=1;
															document.getElementById("rightend").style.left=-1*525+'px';	
															document.getElementById("rightend").id="leftend";
															document.getElementById("temp3").id='rightend';
															document.getElementById("temp").id='right';	
															document.getElementById("temp2").id="center";											
															this.id="left";
															
			});
			}
function newsleft() {
//CHANGE THE IDS,CHANGE Z-INDEX
			$('#temp2').animate({
		left:-525+'px'	},500,function () {this.style.zIndex=0;});
			$('#temp').animate({
		left:-225+'px'	},500,function () {this.style.zIndex=1;});
			$('#temp3').animate({
		left:100+'px'	},500,function () {  });			
			$('#rightend').animate({
		left:425+'px'	},500,function () {this.style.zIndex=1;
															document.getElementById("leftend").style.left=725+'px';	
															document.getElementById("leftend").id="rightend";
															document.getElementById("temp3").id='center';
															document.getElementById("temp").id='left';	
															document.getElementById("temp2").id="leftend";											
															this.id="right";
															
			});
			}

function newscontroller(news) {

	if(news.id=='center')
	{
	var newsid = news.getAttribute('data-id');
	var newsinfo = news.firstChild.nextSibling;
	var hyperlink= newsinfo.firstChild;
	//hyperlink.innerHTML=newsi[newsid];
	
	$(newsinfo).animate({opacity:0.5},'fast');
	news.style.zIndex='9';
	var img=news.firstChild;
	$(news).animate({
	width:'500px',
	height:'300px',
	left:'0px',
	top:'0px'
	},'fast');
	$(img).animate({
	width:'500px',
	height:'300px'
	},'fast');
	}
	if(news.id=='left')
	{
	
	document.getElementById("center").id="temp";
	document.getElementById("left").id="temp2";
	document.getElementById("right").id="temp3";
	newsright();	
	}
	if(news.id=='right')
	{
	
	document.getElementById("center").id="temp";
	document.getElementById("left").id="temp2";
	document.getElementById("right").id="temp3";
	newsleft();	
	}
	}
	

function minimize(news) {
if (news.id=='center') {
var img=news.firstChild;
var newsinfo = news.firstChild.nextSibling;
$(newsinfo).animate({opacity:0.0},'fast');
	$(img).animate({
	width:'300px',
	height:'200px'
	},'fast');	
		
	$(news).animate({
	width:'300px',
	height:'200px',
	left:'100px',
	top:'50px'
	},'fast');
	
}
}

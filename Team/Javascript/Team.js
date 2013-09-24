function displayinfo() {
var work=this.getAttribute("data-work");
var photo=this.getAttribute("data-photo");
var fblink=this.getAttribute("data-link");	
var nam=this.innerHTML;
document.getElementById("memWork").innerHTML=work;
document.getElementById("memName").innerHTML=nam;
document.getElementById("memPhoto").src=photo;
document.getElementById("memLink").href=fblink;
$("#cover").fadeIn();
$("#memberInfo").fadeIn();
//document.getElementById("memberInfo").style.display="block";
//document.getElementById("cover").style.display="block";
}
var Did_It_Leave=false;
var already_open = false;
function set_timer(src){
	Did_It_Leave=src.getAttribute('data-group');
	t = setTimeout(function(){expand_group(src)},800);
}
function existing_group(){
		//alert(document.getElementById(Did_It_Leave).style.height=='300px');
		if(document.getElementById(Did_It_Leave).style.height=='300px')
		{already_open = Did_It_Leave;
		Did_It_Leave='';}
	}
function expand_group(src){
	if(src.getAttribute('data-group')==Did_It_Leave)
	{	
		if(Did_It_Leave!=already_open){
			var Teamexpands = document.getElementsByClassName('groupexpand');
			for (var i = Teamexpands.length - 1; i >= 0; i--) {
				if(Teamexpands[i].style.height=='300px'){
					$(Teamexpands[i]).animate({
						height:'0px'
					});
					$('#'+Teamexpands[i].id+' span').fadeOut();
				}
			};
		}
		$('#'+Did_It_Leave).animate({
			height:'300px'
		});
		$('#'+Did_It_Leave+' span').fadeIn();
	}
}

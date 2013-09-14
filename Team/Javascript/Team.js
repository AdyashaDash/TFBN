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

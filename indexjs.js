//coding page filter
function myweb(){
  document.getElementById("webc").style.display="block";
  document.getElementById("java1").style.display="none";
  document.getElementById("footer").style.marginTop="200px";
  
}
function myjava(){
  document.getElementById("webc").style.display="none";
  document.getElementById("java1").style.display="block";
  document.getElementById("footer").style.marginTop="0";
}
//coding page access
function mycode()
{
  document.getElementById("code").style.display="block";
  document.getElementById("video").style.display="none";
  document.getElementById("home").style.display="none";
}
//video page access
function myvideo()
{
  document.getElementById("code").style.display="none";
  document.getElementById("video").style.display="block";
  document.getElementById("home").style.display="none";
}
//code video page
function mycv()
{
  document.getElementById("cvp").style.display="block";
  document.getElementById("tnp").style.display="none";
}
//tech video page
function mytnv()
{
  document.getElementById("tnp").style.display="block";
  document.getElementById("cvp").style.display="none";
}
function myhome(){
  document.getElementById("code").style.display="none";
  document.getElementById("video").style.display="none";
  document.getElementById("home").style.display="block";
}


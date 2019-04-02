function test(){
var mail = document.getElementById("mail").value;
var pwd = document.getElementById("pwd").value;
var a = "@";
var pt = ".";
if( mail.length== 0 || pwd.length== 0)
{
alert("Verifier votre login et votre de mot de passe");
}
else{
var prenom = mail.substring(0,mail.indexOf(pt) );
var nom = mail.substring(mail.indexOf(pt) + 1,mail.indexOf(a));
alert('Bienvenue ' + prenom + " " + nom ) ;
window.location.href="index.html";}
}
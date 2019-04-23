function envoyer()
{
var date = new Date();

a = date.getFullYear(); 
m = date.getMonth(); 
j = date.getDate();

    date = new Date(a, m, j);

	
	
var sdate2 = document.getElementById('controledate').value
var date2 = new Date();
date2.setFullYear(sdate2.substr(6,4));
date2.setMonth(sdate2.substr(3,2));
date2.setDate(sdate2.substr(0,2));
date2.setHours(0);
date2.setMinutes(0);
date2.setSeconds(0);
date2.setMilliseconds(0);
var controledate=date2.getTime()

//si la date d'arrviée et superieur a la date de depart en afficher un message d'erreur
if(date>controledate)
{ 
  alert('Verfier Vos Dates')
  return false;
}

}
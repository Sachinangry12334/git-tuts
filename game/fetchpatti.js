setInterval(fetchpattia,1000);

function fetchpattia()
{
	var patti = new XMLHttpRequest();
	patti.open('get','fetchpatti.php?get=teama',true);
	patti.onload=function()
	{
		document.getElementById('teama').innerHTML=this.responseText;
	}
	patti.send();
}

setInterval(fetchpattib,1000);

function fetchpattib()
{
	var pattib = new XMLHttpRequest();
	pattib.open('get','fetchpatti.php?get=teamb',true);
	pattib.onload=function()
	{
		document.getElementById('teamb').innerHTML=this.responseText;
	}
	pattib.send();
}
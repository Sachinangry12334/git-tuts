// button work here to selected win or restart match

function teamafunc()
{
	var reqa=new XMLHttpRequest();
	reqa.open('get','betata.php?type=teama',true);
	reqa.onload=function()
	{
		alert(this.responseText);
	}
	reqa.send();
}

function teambfunc()
{
	var reqb=new XMLHttpRequest();
	reqb.open('get','betatb.php?type=teamb',true);
	reqb.onload=function()
	{
		alert(this.responseText);
	}
	reqb.send();
}

function restartfunc()
{
	var reqr=new XMLHttpRequest();
	reqr.open('get','betat.php?type=restart',true);
	reqr.onload=function()
	{
		alert(this.responseText);
	}
	reqr.send();
}

// close game
function closefunc()
{
	var reqc=new XMLHttpRequest();
	reqc.open('get','close.php?type=close',true);
	reqc.onload=function()
	{
		alert(this.responseText);
	}
	reqc.send();
}

// start game
function startfunc()
{
	var reqrs=new XMLHttpRequest();
	reqrs.open('get','start.php?type=start',true);
	reqrs.onload=function()
	{
		alert(this.responseText);
	}
	reqrs.send();
}

// fetch data from server

setInterval(datageta,100);


function datageta()
{
	var reqs=new XMLHttpRequest();
	reqs.open('get','fetchscore.php?type=scorea',true);
	reqs.onload=function()
	{
		document.getElementById('scorea').innerHTML=this.responseText;
	}
	reqs.send();
}



setInterval(datagetb,100);
function datagetb()
{
	var reqe=new XMLHttpRequest();
	reqe.open('get','fetchscore.php?type=scoreb',true);
	reqe.onload=function()
	{
		document.getElementById('scoreb').innerHTML=this.responseText;
	}
	reqe.send();
}
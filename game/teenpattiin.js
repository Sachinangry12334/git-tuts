// set value in the input box A
var btna1 = document.getElementById('btna1');
var btna2 = document.getElementById('btna2');
var btna3 = document.getElementById('btna3');
var btna4 = document.getElementById('btna4');
var btna5 = document.getElementById('btna5');
var cleara = document.getElementById('cleara');
var submita = document.getElementById('submita');

btna1.addEventListener('click',setvaluea1);
btna2.addEventListener('click',setvaluea2);
btna3.addEventListener('click',setvaluea3);
btna4.addEventListener('click',setvaluea4);
btna5.addEventListener('click',setvaluea5);
cleara.addEventListener('click',clearvaluea);
submita.addEventListener('click',submitvaluea);

function setvaluea1()
{
	document.getElementById('inpa').value=btna1.innerText;
}

function setvaluea2()
{
	document.getElementById('inpa').value=btna2.innerText;
}

function setvaluea3()
{
	document.getElementById('inpa').value=btna3.innerText;
}

function setvaluea4()
{
	document.getElementById('inpa').value=btna4.innerText;
}

function setvaluea5()
{
	document.getElementById('inpa').value=btna5.innerText;
}

function clearvaluea()
{
	document.getElementById('inpa').value='';
}

// send bet to server

function submitvaluea()
{
	var req = new XMLHttpRequest();
	var betval = document.getElementById('inpa').value;
	if(betval!="" && betval>=100)
	{
		req.open('get','bet.php?value='+betval+'&team=A',true);
		req.onload=function()
		{
			document.getElementById('dismissa').style.display='block';
			document.getElementById('alerta').innerHTML=this.responseText;
			document.getElementById('inpa').value='';
		}	
		req.send();
	}
	else
	{
		document.getElementById('dismissa').style.display='block';
		document.getElementById('alerta').innerHTML='bet price min-100 pts!';
	}
	
	
}

// set value in the input box B

var btnb1 = document.getElementById('btnb1');
var btnb2 = document.getElementById('btnb2');
var btnb3 = document.getElementById('btnb3');
var btnb4 = document.getElementById('btnb4');
var btnb5 = document.getElementById('btnb5');
var clearb= document.getElementById('clearb');
var submitb = document.getElementById('submitb');

btnb1.addEventListener('click',setvalueb1);
btnb2.addEventListener('click',setvalueb2);
btnb3.addEventListener('click',setvalueb3);
btnb4.addEventListener('click',setvalueb4);
btnb5.addEventListener('click',setvalueb5);
clearb.addEventListener('click',clearvalueb);
submitb.addEventListener('click',submitvalueb);

function setvalueb1()
{
	document.getElementById('inpb').value=btnb1.innerText;
}

function setvalueb2()
{
	document.getElementById('inpb').value=btnb2.innerText;
}

function setvalueb3()
{
	document.getElementById('inpb').value=btnb3.innerText;
}

function setvalueb4()
{
	document.getElementById('inpb').value=btnb4.innerText;
}

function setvalueb5()
{
	document.getElementById('inpb').value=btnb5.innerText;
}

function clearvalueb()
{
	document.getElementById('inpb').value='';
}

function submitvalueb()
{
	var req = new XMLHttpRequest();
	var betval = document.getElementById('inpb').value;
	
	if(betval!="" && betval>=100)
	{
		console.log(betval);
		req.open('get','bet.php?value='+betval+'&team=B',true);
		req.onload=function()
		{
			document.getElementById('dismissb').style.display='block';
			document.getElementById('alertb').innerHTML=this.responseText;
			document.getElementById('inpb').value='';
		}
		req.send();
	}
	else
	{
		document.getElementById('dismissb').style.display='block';
		document.getElementById('alertb').innerHTML='bet price min-100 pts!';
	}
}

// set pair value A

var btnap1 = document.getElementById('btnap1');
var btnap2 = document.getElementById('btnap2');
var btnap3 = document.getElementById('btnap3');
var btnap4 = document.getElementById('btnap4');
var btnap5 = document.getElementById('btnap5');
var clearap = document.getElementById('clearap');
var submitap = document.getElementById('submitap');

btnap1.addEventListener('click',setvalueap1);
btnap2.addEventListener('click',setvalueap2);
btnap3.addEventListener('click',setvalueap3);
btnap4.addEventListener('click',setvalueap4);
btnap5.addEventListener('click',setvalueap5);
clearap.addEventListener('click',clearvalueap);
submitap.addEventListener('click',submitvalueap);

function setvalueap1()
{
	document.getElementById('inpap').value=btnap1.innerText;
}

function setvalueap2()
{
	document.getElementById('inpap').value=btnap2.innerText;
}

function setvalueap3()
{
	document.getElementById('inpap').value=btnap3.innerText;
}

function setvalueap4()
{
	document.getElementById('inpap').value=btnap4.innerText;
}

function setvalueap5()
{
	document.getElementById('inpap').value=btnap5.innerText;
}

function clearvalueap()
{
	document.getElementById('inpap').value='';
}

// send bet to server

function submitvalueap()
{
	var req = new XMLHttpRequest();
	var betval = document.getElementById('inpap').value;
	if(betval!="" && betval>=100)
	{
		req.open('get','bet.php?value='+betval+'&team=AP',true);
		req.onload=function()
		{
			document.getElementById('dismissap').style.display='block';
			document.getElementById('alertap').innerHTML=this.responseText;
			document.getElementById('inpap').value='';
		}
		req.send();
	}
	else
	{
		document.getElementById('dismissap').style.display='block';
		document.getElementById('alertap').innerHTML='bet price min-100 pts!';
	}
	
	
}



// set pair value B

var btnbp1 = document.getElementById('btnbp1');
var btnbp2 = document.getElementById('btnbp2');
var btnbp3 = document.getElementById('btnbp3');
var btnbp4 = document.getElementById('btnbp4');
var btnbp5 = document.getElementById('btnbp5');
var clearbp= document.getElementById('clearbp');
var submitbp = document.getElementById('submitbp');

btnbp1.addEventListener('click',setvaluebp1);
btnbp2.addEventListener('click',setvaluebp2);
btnbp3.addEventListener('click',setvaluebp3);
btnbp4.addEventListener('click',setvaluebp4);
btnbp5.addEventListener('click',setvaluebp5);
clearbp.addEventListener('click',clearvaluebp);
submitbp.addEventListener('click',submitvaluebp);

function setvaluebp1()
{
	document.getElementById('inpbp').value=btnbp1.innerText;
}

function setvaluebp2()
{
	document.getElementById('inpbp').value=btnbp2.innerText;
}

function setvaluebp3()
{
	document.getElementById('inpbp').value=btnbp3.innerText;
}

function setvaluebp4()
{
	document.getElementById('inpbp').value=btnbp4.innerText;
}

function setvaluebp5()
{
	document.getElementById('inpbp').value=btnbp5.innerText;
}

function clearvaluebp()
{
	document.getElementById('inpbp').value='';
}

function submitvaluebp()
{
	var req = new XMLHttpRequest();
	var betval = document.getElementById('inpbp').value;
	if(betval!="" && betval>=100)
	{
		req.open('get','bet.php?value='+betval+'&team=BP',true);
		req.onload=function()
		{
			
			document.getElementById('dismissbp').style.display='block';
			document.getElementById('alertbp').innerHTML=this.responseText;
			document.getElementById('inpbp').value='';
		}
		req.send();
	}
	else
	{
		document.getElementById('dismissbp').style.display='block';
		document.getElementById('alertbp').innerHTML='bet price min-100 pts!';
	}
}

setInterval(timeget,100);

function timeget()
{
	var reqt=new XMLHttpRequest();
	reqt.open('get','timer.php',true);
	reqt.onload=function()
	{
		var time=parseInt(this.responseText);
		console.log(time);
		document.getElementById('timeslap').innerHTML=time;
		if(time>5)
		{
			$('#sess1').show();
			$('#sess2').show();
		}
		if(time<=5)
		{
			$('#sess1').hide();
			$('#sess2').hide();
		}	
	}
	reqt.send();
}
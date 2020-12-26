setInterval(session,1000);

function session()
{
	var sess = new XMLHttpRequest();
	sess.open('get','session.php?get=session',true);
	sess.onload=function()
	{
		var status=this.responseText;
		if(status=='close')
		{
			// document.getElementById('sess1').style.display='none';
			// document.getElementById('sess2').style.display='none';
			$('#sess1').hide();
			$('#sess2').hide();
		}
		if(status=='start')
		{
			$('#sess1').show();
			$('#sess2').show();
		}
	}
	sess.send();
}

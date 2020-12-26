function withdrawc()
{
	var dealerid=document.getElementById('wdealerid').value;
	var dealerpoints=document.getElementById('wdealerpoints').value;
	var wid=new XMLHttpRequest();
	wid.open('get','withdrawdealer.php?id='+dealerid+'&points='+dealerpoints,true);
	wid.onload=function()
	{
		$('#dismissw').show();
		$('#alertw').html(this.responseText);
	}
	wid.send();
}
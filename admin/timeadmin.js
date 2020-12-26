function refreshfunc()
{
    var seconds = 31;
    var countdown = setInterval(function()
     {
        seconds--;
        
        document.getElementById("countdown").innerHTML = seconds;
        if (seconds <= 0) clearInterval(countdown);
        var req=new XMLHttpRequest();
        req.open('get','timeadmin.php?time='+seconds,true);
        req.onload=function()
        {
            console.log(this.responseText);
        }
        req.send();
    }, 1000);
}
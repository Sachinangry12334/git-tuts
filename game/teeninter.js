// bet history fetch
function betbet(){

setInterval(

  function bethistory()
  {
    var fetch = new XMLHttpRequest();
    fetch.open('get','fetch.php?get=bhistory',true);
    fetch.onload=function()
    {
      document.getElementById('bethistoryp').innerHTML=this.responseText;
    }
    fetch.send();
  },1000);
}
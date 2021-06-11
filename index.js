var timeleft = 5;
var modal = document.getElementById("myModal");
var btn = document.getElementById("countdown");

var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Finished";
    var x = document.getElementById("countdown").value;
    if(x = "Finished"){
      window.location.assign("http://localhost/BAI1/insert.php");
    }

  } else {
    document.getElementById("countdown").innerHTML = " Time Remaining: " + timeleft +" s";
  }
  timeleft -= 1;
}, 1000);


function reLoad() {
  window.location.assign("http://localhost/BAI1/index.php");
  
}
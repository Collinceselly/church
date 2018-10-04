var timeleft = 10;
var downloadTimer = setInterval(function(){
  document.getElementById("progressBar").value = 10 - --timeleft;
  if(timeleft <= 0) {

    clearInterval(downloadTimer);
  }
},1000);

if (downloadTimer === 0) {
	 document.getElementById("code_entry").className = "form-control form-control-solid placeholder-no-fix disabled";
	// $("input").prop('disabled', true);
}
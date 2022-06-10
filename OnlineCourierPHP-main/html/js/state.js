
function states(){



  		var xhttp = new XMLHttpRequest();

      	xhttp.onreadystatechange=function(){
          if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("state").innerHTML = this.responseText;
			}
    }
    xhttp.open("GET","../php/state.php");
    xhttp.send();

}

function states2(){



  		var xhttp = new XMLHttpRequest();

      	xhttp.onreadystatechange=function(){
          if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("state2").innerHTML = this.responseText;
			}
    }
    xhttp.open("GET","../php/state.php");
    xhttp.send();

}

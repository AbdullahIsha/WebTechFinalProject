function complainData(){
	var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/complaincheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('get='+true);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('complain').innerHTML = this.responseText;
            }else{
                document.getElementById('complain').innerHTML = "";
            }
        }	
    }
}
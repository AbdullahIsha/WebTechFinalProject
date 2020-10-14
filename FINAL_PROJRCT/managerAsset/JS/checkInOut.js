function checkInOutData(){
    var search = document.getElementById('search').value;
	var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/checkInOutcheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('search='+search);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('showCheckIn').innerHTML = this.responseText;
            }else{
                document.getElementById('showCheckIn').innerHTML = "";
            }
        }	
    }
}

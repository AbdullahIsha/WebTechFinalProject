function bookingExtendData(){
	//var customerId = document.getElementById('customerId').value;
	var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/bookingExtendcheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('get='+true);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('bookingExtend').innerHTML = this.responseText;
            }else{
                document.getElementById('bookingExtend').innerHTML = "";
            }
        }	
    }
}
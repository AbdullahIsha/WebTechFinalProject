function invoiceData(){
    var customerId = document.getElementById('customerId').value;
	var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/invoicecheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('customerId='+customerId);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('invoice').innerHTML = this.responseText;
            }else{
                document.getElementById('invoice').innerHTML = "";
            }
        }	
    }
}

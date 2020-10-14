function customerData(){
    //var customerId = document.getElementById('customerId').value;
	var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/customerOrdercheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('get='+true);

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('customerOrder').innerHTML = this.responseText;
            }else{
                document.getElementById('customerOrder').innerHTML = "";
            }
        }	
    }
}

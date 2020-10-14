function ShowImg(){
	var file = document.getElementById('file'); 
	document.getElementById('img').src = window.URL.createObjectURL(file.files[0]);
}
function validate(){


  var itemName=document.getElementById('itemName').value;
  var itemName1=false;
  if (itemName == "")
  {
    document.getElementById('nmsg').innerHTML="Must be filled up";
    itemName1 = false;
  }
  else
  {
    document.getElementById('nmsg').innerHTML="";
    itemName1=true;
  } 

  var quantity=document.getElementById('quantity').value;
  var quantity1=false;
  if (quantity == "")
  {
    document.getElementById('qmsg').innerHTML="Must be filled up";
    quantity1 = false;
  }
  else
  {
    document.getElementById('qmsg').innerHTML="";
    quantity1=true;
  } 

  var file=document.getElementById('file').value;
  var file1=false;
  if (file == "")
  {
    document.getElementById('pmsg').innerHTML="Must be filled up";
    file1 = false;
  }
  else
  {
    document.getElementById('pmsg').innerHTML="";
    file1=true;
  } 

   if(file1 && quantity1 && itemName1)
  {
    return true;
  }
  else
  {
    return false;
  }

}

function removerpicture()
{
  document.getElementById('pmsg').innerHTML="";
}

function removeritemName()
{
  var itemName =document.getElementById('itemName').value;
  if(itemName!="")
  {
    document.getElementById('nmsg').innerHTML="";
  }
}

function removerquantity()
{
  var quantity =document.getElementById('quantity').value;
  if(quantity!="")
  {
    document.getElementById('qmsg').innerHTML="";
  }
}
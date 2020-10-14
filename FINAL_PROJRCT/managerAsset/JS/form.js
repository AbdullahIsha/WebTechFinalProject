function val()
{
  var name1=false;
  var userName=document.getElementById('name').value;
  
  
  if(userName=="")
  {
    document.getElementById('namemsg').innerHTML="cannot be empty";
    name1=false;
  }
  else
  {
    if((userName[0]>='A' && userName[0]<='Z') ||(userName[0]>='a' && userName[0]<='z'))
    {
      if(userName.length>=2)
      {
        var i=0;
        while(i<userName.length)
        {
          if(!((userName[i]>='A' && userName[i]<='Z') ||(userName[i]>='a' && userName[i]<='z') || userName[i]=='.' || userName[i]=='-' || userName[i]==' '))
          {
            document.getElementById('namemsg').innerHTML="Invalid!!";
            name1=false;
          }
          i=i+1;
        }
        document.getElementById('namemsg').innerHTML="";
        name1=true;
      }
      else
      {
        document.getElementById('namemsg').innerHTML="at least 2 words";
        name1=false;
      }
    }
    else
    {
      document.getElementById('namemsg').innerHTML="Must start with a letter";
      name1=false;
    }
  }

  var email=document.getElementById('email').value;
  var email1=false;
  if (email == "")
  {
    document.getElementById('emailmsg').innerHTML="Must be filled up";
    email1 = false;
  }
  else
  {
    document.getElementById('emailmsg').innerHTML="";
    email1=true;
  } 

  var dob1=false;
  var day=document.getElementById('day').value;
  var month=document.getElementById('month').value;
  var year=document.getElementById('year').value;
  if((day!="") && (month!="") && (year!=""))
  {
    if((day>0 && day<32) && (month>0 && month<13) && (year>1899 && year<2017))
    {
      document.getElementById('dobmsg').innerHTML="";
      dob1=true;
    }
    else
    {
      document.getElementById('dobmsg').innerHTML="Invalid!!!";
      dob1=false;
    }
  }
  else
  {
    document.getElementById('dobmsg').innerHTML="Invalid!!!";
    dob1=false;
  }

  var picture1=false;
  var pic =document.getElementById('file').value;
  if( pic != "")
  {
    document.getElementById('picmsg').innerHTML="";
    picture1 = true;
  }
  else
  {
    document.getElementById('picmsg').innerHTML="select a picture";
    picture1 = false;
  }

  var type1=false;
  var type = document.getElementById('bg').value;
  if( type != "")
  {
    document.getElementById('bgmsg').innerHTML="";
    type1 = true;
  }
  else
  {
    document.getElementById('bgmsg').innerHTML="select one!!";
    type1 = false;
  }

  var phone1 =false;
  var phone =document.getElementById('phone').value;
  if( phone != "")
  {
    document.getElementById('phonemsg').innerHTML="";
    phone1 = true;
  }
  else
  {
    document.getElementById('phonemsg').innerHTML="no phone number!";
    phone1 = false;
  }

  var password1 =false;
  var password =document.getElementById('password').value;
  if( password != "")
  {
    document.getElementById('passwordmsg').innerHTML="";
    password1 = true;
  }
  else
  {
    document.getElementById('passwordmsg').innerHTML="no phone password!";
    password1 = false;
  }

  var Cpassword1 =false;
  var Cpassword =document.getElementById('Cpassword').value;
  if( Cpassword != "" && (Cpassword == password))
  {
    document.getElementById('Cpasswordmsg').innerHTML="";
    Cpassword1 = true;
  }
  else
  {
    document.getElementById('Cpasswordmsg').innerHTML="pass != Cpassword";
    Cpassword1 = false;
  }


  if(name1 && email1 && dob1 && type1 && picture1 && phone1 && password1 && Cpassword1)
  {
    return true;
  }
  else
  {
    return false;
  }
}

function removername()
{
  var userName =document.getElementById('name').value;
  if(userName!="")
  {
    document.getElementById('namemsg').innerHTML="";
  }
}
function removerphone()
{
  var phone =document.getElementById('phone').value;
  if(phone!="")
  {
    document.getElementById('phonemsg').innerHTML="";
  }
}
function removerpassword()
{
  var password =document.getElementById('password').value;
  if(password!="")
  {
    document.getElementById('passwordmsg').innerHTML="";
  }
}
function removerCpassword()
{
  var Cpassword =document.getElementById('Cpassword').value;
  if(Cpassword!="")
  {
    document.getElementById('Cpasswordmsg').innerHTML="";
  }
}
function removeremail()
{
  var email =document.getElementById('email').value;
  if(email!="")
  {
    document.getElementById('emailmsg').innerHTML="";
  }
}
function removerdob()
{
  var day=document.getElementById('day').value;
  var month=document.getElementById('month').value;
  var year=document.getElementById('year').year;
  
  if(day!="" && month!="" && year!="")
  {
    document.getElementById('dobmsg').innerHTML="";
  }
}
function removertype(){
  var type =document.getElementById('bg').value;
  if(type!="")
  {
    document.getElementById('bgmsg').innerHTML="";
  }
}
function removerpicture()
{
  document.getElementById('picmsg').innerHTML="";
}


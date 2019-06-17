// JavaScript Document

function validatecustomername()
{	
	var n=document.forms[0]["name"].value;
	if(n==null || n=="")
	{
		document.getElementById('message').style.visibility="visible";
		document.getElementById('message').innerHTML="Customer name must not be blank";
		
	}
        else if(n.charAt(0)==' ')
	{
			document.getElementById('message').style.visibility="visible";
			document.getElementById('message').innerHTML="First character can not have space";
	}
	else if(/^[A-Za-z\s]+$/.test(n))
	{
		document.getElementById('message').style.visibility="hidden";
	}
				
	else
	{
		if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(n))
		{
			document.getElementById('message').style.visibility="visible";
			document.getElementById('message').innerHTML="Special characters are not allowed";
		}
		else
		{
			document.getElementById('message').style.visibility="visible";
			document.getElementById('message').innerHTML="Numbers are not allowed";
		}
		
	}
}

function validateaccountno()
{

	
	var x= document.forms[0]["accountno"].value;
	if(x==null || x=="")
	{
		document.getElementById('message2').style.visibility="visible";
		document.getElementById('message2').innerHTML="Account Number must not be blank";
	}
	else if(x!=parseInt(x))
	{ if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(x))
		   {
			document.getElementById('message2').style.visibility="visible";
			document.getElementById('message2').innerHTML="Special characters are not allowed";
		   }
	    else
	    {
		document.getElementById('message2').style.visibility="visible";
		document.getElementById('message2').innerHTML="Characters are not allowed";
		return false;
		
	    }
	}
       else
	{
         document.getElementById('message2').style.visibility="hidden";
	 } 
		
	
	
}



function validateammount()
{
	var y = document.forms[0]["ammount"].value;
	if(y==null || y=="")
	{
		document.getElementById('message1').style.visibility="visible";
		document.getElementById('message1').innerHTML="Amount field must not be blank";
	}
	else if(y!=parseInt(y))
	{ if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(y))
		   {
			document.getElementById('message1').style.visibility="visible";
			document.getElementById('message1').innerHTML="Special characters are not allowed";
		   }
	    else
	    {
		document.getElementById('message1').style.visibility="visible";
		document.getElementById('message1').innerHTML="Characters are not allowed";
		return false;
		
	    }
	}
       else
	{
         document.getElementById('message1').style.visibility="hidden";
	 } 
		 
     

		

}

function validateAddress()
{	
	var addr=document.forms[0]["addr"].value;
	if(addr==null || addr=="")
	{
		document.getElementById('message3').style.visibility="visible";
		document.getElementById('message3').innerHTML="Address Field must not be blank";
	}
        else if(addr.charAt(0)==' ')
	{
			document.getElementById('message3').style.visibility="visible";
			document.getElementById('message3').innerHTML="First character can not have space";
	}
        else if(/^[A-Za-z0-9\s]+$/.test(addr))
	{
		document.getElementById('message3').style.visibility="hidden";
	}
				
	else
	{
		if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(addr))
		{
			document.getElementById('message3').style.visibility="visible";
			document.getElementById('message3').innerHTML="Special characters are not allowed";
		}
		
	}
}

function validateCity()
{	
	var cit=document.forms[0]["city"].value;
	if(cit==null || cit=="")
	{
		document.getElementById('message4').style.visibility="visible";
		document.getElementById('message4').innerHTML="City Field must not be blank";
	}
        else if(cit.charAt(0)==' ')
	{
			document.getElementById('message4').style.visibility="visible";
			document.getElementById('message4').innerHTML="First character can not have space";
	}
        else if(/^[A-Za-z\s]+$/.test(cit))
	{
		document.getElementById('message4').style.visibility="hidden";
	}
				
	else
	{
		if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(cit))
		{
			document.getElementById('message4').style.visibility="visible";
			document.getElementById('message4').innerHTML="Special characters are not allowed";
		}
		else
		{
			document.getElementById('message4').style.visibility="visible";
			document.getElementById('message4').innerHTML="Numbers are not allowed";
		}
		
	}
}
function validateState()
{	
	var s=document.forms[0]["state"].value;
	if(s==null || s=="")
	{
		document.getElementById('message5').style.visibility="visible";
		document.getElementById('message5').innerHTML="State must not be blank";
	}
        else if(s.charAt(0)==' ')
	{
			document.getElementById('message5').style.visibility="visible";
			document.getElementById('message5').innerHTML="First character can not have space";
	}
	else if(/^[A-Za-z\s]+$/.test(s))
	{
		document.getElementById('message5').style.visibility="hidden";
	}
				
	else
	{
		if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(s))
		{
			document.getElementById('message5').style.visibility="visible";
			document.getElementById('message5').innerHTML="Special characters are not allowed";
		}
		else
		{
			document.getElementById('message5').style.visibility="visible";
			document.getElementById('message5').innerHTML="Numbers are not allowed";
		}
		
	}
}

function validateTelephone()
{
 
         var tele=document.forms[0]["telephoneno"].value;
         if(tele==null || tele=="")
         {
                document.getElementById('message7').style.visibility="visible";
                document.getElementById('message7').innerHTML="Mobile no must not be blank";
         }
         else if(tele.charAt(0)==' ')
         {
		document.getElementById('message7').style.visibility="visible";
		document.getElementById('message7').innerHTML="First character can not have space";
         }
        else if(tele!=parseInt(tele))
        {
            if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(tele))
            {
                document.getElementById('message7').style.visibility="visible";
                document.getElementById('message7').innerHTML="Special characters are not allowed";
            }
            else
            {
                document.getElementById('message7').style.visibility="visible";
                document.getElementById('message7').innerHTML="Characters are not allowed";
                return false;

            }
        }
       else
        {
                document.getElementById('message7').style.visibility="hidden";
         } 
}

function validatePIN()
{ 
        var pin=document.forms[0]["pinno"].value;
        if(pin==null || pin=="")
        {
                document.getElementById('message6').style.visibility="visible";
                document.getElementById('message6').innerHTML="PIN Code must not be blank";
        }
        else if(pin.charAt(0)==' ')
        {
                document.getElementById('message6').style.visibility="visible";
                document.getElementById('message6').innerHTML="First character can not have space";
        }
        else if(pin!=parseInt(pin))
        { 
            if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(pin))
            {
                document.getElementById('message6').style.visibility="visible";
                document.getElementById('message6').innerHTML="Special characters are not allowed";
            }
            else
            {
                document.getElementById('message6').style.visibility="visible";
                document.getElementById('message6').innerHTML="Characters are not allowed";
                return false;

            }
        }
        else if(pin.length < 6)
        {
                document.getElementById('message6').style.visibility="visible";
                document.getElementById('message6').innerHTML="PIN Code must have 6 Digits";
        }
        else
        {
                document.getElementById('message6').style.visibility="hidden";
        } 

 
}

function validateEmail()
{	


	var email=document.forms[0]["emailid"].value;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	
	if(email==null || email=="")
	{
		document.getElementById('message9').style.visibility="visible";
		document.getElementById('message9').innerHTML="Email-ID must not be blank";
	}
        else if(email.charAt(0)==' ')
	{
			document.getElementById('message9').style.visibility="visible";
			document.getElementById('message9').innerHTML="First character can not have space";
	}
	else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
			document.getElementById('message9').style.visibility="visible";
			document.getElementById('message9').innerHTML="Email-ID is not valid";	
	}
	else
	{
		document.getElementById('message9').style.visibility="hidden";
	}
}

function validatepayersaccountno()
{	
	
	var payersacc=document.forms[0]["payersaccount"].value;
	if(payersacc==null ||payersacc=="")
	{
		document.getElementById('message10').style.visibility="visible";
		document.getElementById('message10').innerHTML="Payers Account Number must not be blank";
	}
	
	else if(payersacc!=parseInt(payersacc))
	{ if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(payersacc))
		   {
			document.getElementById('message10').style.visibility="visible";
			document.getElementById('message10').innerHTML="Special characters are not allowed";
		   }
	    else
	    {
		document.getElementById('message10').style.visibility="visible";
		document.getElementById('message10').innerHTML="Characters are not allowed";
		return false;
		
	    }
	}
       else
	{
         document.getElementById('message10').style.visibility="hidden";
	 } 
		 
}

function validatepayeeaccountno()
{	
	
	var payeeacc=document.forms[0]["payeeaccount"].value;
	if(payeeacc==null ||payeeacc=="")
	{
		document.getElementById('message11').style.visibility="visible";
		document.getElementById('message11').innerHTML="Payees Account Number must not be blank";
	}
	else if(payeeacc!=parseInt(payeeacc))
	{ 
	    if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(payeeacc))
		   {
			document.getElementById('message11').style.visibility="visible";
			document.getElementById('message11').innerHTML="Special characters are not allowed";
		   }
	    else
	    {
		document.getElementById('message11').style.visibility="visible";
		document.getElementById('message11').innerHTML="Characters are not allowed";
		return false;
		
	    }
	}
       else
	{
         document.getElementById('message11').style.visibility="hidden";
	} 
		 
}

function validateamount_lowerlimit()
{	

		
	var ammountlower=document.forms[0]["amountlowerlimit"].value;
	
    
        if(ammountlower==null ||ammountlower=="")
	{
		document.getElementById('message12').style.visibility="hidden";
	
	}
        else if(ammountlower!=parseInt(ammountlower))
	{ 
	    if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(ammountlower))
		   {
			document.getElementById('message12').style.visibility="visible";
			document.getElementById('message12').innerHTML="Special characters are not allowed";
		   }
	    else
	    {
		document.getElementById('message12').style.visibility="visible";
		document.getElementById('message12').innerHTML="Characters are not allowed";
		return false;
		
	    }
	}
       else
	{
         document.getElementById('message12').style.visibility="hidden";
	} 
		
	
	
}

function validatenum_transaction()
{	

     var numtran=document.forms[0]["numtransaction"].value;
	if(numtran==null ||numtran=="")
	{
		document.getElementById('message13').style.visibility="hidden";
	
	}
	else if(numtran!=parseInt(numtran))
	{ 
	    if (/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(numtran))
		   {
			document.getElementById('message13').style.visibility="visible";
			document.getElementById('message13').innerHTML="Special characters are not allowed";
		   }
	    else
	    {
		document.getElementById('message13').style.visibility="visible";
		document.getElementById('message13').innerHTML="Characters are not allowed";
		return false;
		
	    }
	}
       else
	{
         document.getElementById('message13').style.visibility="hidden";
	} 
		
		
}

function validatecustomerid()
{ 
 var cid=document.forms[0]["cusid"].value;
 if(cid==null || cid=="")
 {
  document.getElementById('message14').style.visibility="visible";
  document.getElementById('message14').innerHTML="Customer ID is required";
 }
 else if(cid.charAt(0)==' ')
{
	document.getElementById('message14').style.visibility="visible";
	document.getElementById('message14').innerHTML="First character can not have space";
}
 else if(cid!=parseInt(cid))
 {
  if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(cid))
  {
   document.getElementById('message14').style.visibility="visible";
   document.getElementById('message14').innerHTML="Special characters are not allowed";
  }
  else
  { 
   document.getElementById('message14').style.visibility="visible";
   document.getElementById('message14').innerHTML="Characters are not allowed";
   return false;
  }
  
 }
  else
  {
   document.getElementById('message14').style.visibility="hidden";
  }
  
}

function validatebalance()
{	
	var bal=document.forms[0]["balance"].value;
	if(bal==null || bal=="")
	{
		document.getElementById('message15').style.visibility="visible";
		document.getElementById('message15').innerHTML="Amount Field must not be blank";
	}
	else if(/^[A-Za-z\s]+$/.test(bal))
	{
			document.getElementById('message15').style.visibility="visible";
			document.getElementById('message15').innerHTML="Characters are not allowed";
	}
	else
	{
		if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(bal))
		{
			document.getElementById('message15').style.visibility="visible";
			document.getElementById('message15').innerHTML="Special characters are not allowed";
		}
		else
		{
			document.getElementById('message15').style.visibility="hidden";
		}
		
	}
}

function validatebankcode()
{	
	var bank=document.forms[0]["bankcode"].value;
	if(bank==null || bank=="")
	{
		document.getElementById('message16').style.visibility="visible";
		document.getElementById('message16').innerHTML="Bank Code must not be blank";
	}
	else if(bank.charAt(0)==' ')
	{
			document.getElementById('message16').style.visibility="visible";
			document.getElementById('message16').innerHTML="First character can not have space";
	}
	else
	{
		if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(bank))
		{
			document.getElementById('message16').style.visibility="visible";
			document.getElementById('message16').innerHTML="Special characters are not allowed";
		}
		else
		{
			document.getElementById('message16').style.visibility="hidden";
		}
		
	}
}

function validatedesc()
{	
	var des=document.forms[0]["desc"].value;
	if(des==null || des=="")
	{
		document.getElementById('message17').style.visibility="visible";
		document.getElementById('message17').innerHTML="Description can not be blank";
	}
        else
	{
		document.getElementById('message17').style.visibility="hidden";
        }
}
function validateuserid()
{	
	var ui=document.forms[0]["uid"].value;
	if(ui==null || ui=="")
	{
		document.getElementById('message23').style.visibility="visible";
		document.getElementById('message23').innerHTML="User-ID must not be blank";
	}
        else
	{
		document.getElementById('message23').style.visibility="hidden";
        }
}

function validatepassword()
{	
	var pass=document.forms[0]["password"].value;
	if(pass==null || pass=="")
	{
		document.getElementById('message18').style.visibility="visible";
		document.getElementById('message18').innerHTML="Password must not be blank";
	}
        else
	{
		document.getElementById('message18').style.visibility="hidden";
        }
}

function validateinideposit()
{	
	var ideposit=document.forms[0]["inideposit"].value;
 if(ideposit==null || ideposit=="")
 {
  document.getElementById('message19').style.visibility="visible";
  document.getElementById('message19').innerHTML="Initial Deposit must not be blank";
 }
  else if(ideposit.charAt(0)==' ')
 {
  document.getElementById('message19').style.visibility="visible";
  document.getElementById('message19').innerHTML="First character can not have space";
 }
 else if(ideposit!=parseInt(ideposit))
 {
  if(/[\/!:\-\*?"<>_|~@#$`%^.&[()-,+=/\\/'";\]{}]/.test(ideposit))
  {
   document.getElementById('message19').style.visibility="visible";
   document.getElementById('message19').innerHTML="Special characters are not allowed";
  }
  else
  { 
   document.getElementById('message19').style.visibility="visible";
   document.getElementById('message19').innerHTML="Characters are not allowed";
   return false;
  }
  
 }
  else
  {
   document.getElementById('message19').style.visibility="hidden";
  }
}

function validateoldpassword()
{	
	var opass=document.forms[0]["oldpassword"].value;
	if(opass==null || opass=="")
	{
		document.getElementById('message20').style.visibility="visible";
		document.getElementById('message20').innerHTML="Old Password must not be blank";
	}
        else
	{
		document.getElementById('message20').style.visibility="hidden";
	}
}

function validatenewpassword()
{	
	var npass=document.forms[0]["newpassword"].value;
	var num = new RegExp("[0-9]","g");
	var spe = new RegExp("[\!\@\#\$\%\^\&\*\(\)\_\+]");
	if(npass==null || npass=="")
	{
		document.getElementById('message21').style.visibility="visible";
		document.getElementById('message21').innerHTML="New Password must not be blank";
	}
	else if(!(npass.search(num) >= 0))
	{
			document.getElementById('message21').style.visibility="visible";
			document.getElementById('message21').innerHTML="Enter at-least one numeric value";
	}
	else if(!(npass.search(spe) >= 0))
	{
			document.getElementById('message21').style.visibility="visible";
			document.getElementById('message21').innerHTML="Enter at-least one special character";
	}
	else if(npass.match("password") || npass.match("Password") || npass.match("New Password"))
	{
			document.getElementById('message21').style.visibility="visible";
			document.getElementById('message21').innerHTML="Choose a difficult Password";
	}
	else
	{
		document.getElementById('message21').style.visibility="hidden";
	}
}

function validateconfirmpassword()
{	
	var cpass=document.forms[0]["confirmpassword"].value;
	var npass=document.forms[0]["newpassword"].value;
	
	if(cpass==null || cpass=="")
	{
		document.getElementById('message22').style.visibility="visible";
		document.getElementById('message22').innerHTML="Confirm Password must not be blank";
	}
	else if(cpass != npass)
	{
		document.getElementById('message22').style.visibility="visible";
		document.getElementById('message22').innerHTML="Passwords do not Match";
	}
	else
	{
		document.getElementById('message22').style.visibility="hidden";
	}

}
function validatedob()
{ 
 var dob=document.forms[0]["dob"].value;
 
 
 if(dob == "dd-mm-yyyy")
 {
  document.getElementById('message24').style.visibility="visible";
  document.getElementById('message24').innerHTML="Date Field must not be blank";
 }
 else if(dob.length!=10)
        {
             document.getElementById('message24').style.visibility="visible";
  document.getElementById('message24').innerHTML="Date Field must not be blank";
        }
 else
 {
                
  document.getElementById('message24').style.visibility="hidden";
 }

}
function validatenewCust()
{
        var v1=document.getElementById("message").style.visibility;
        var v2=document.getElementById("message4").style.visibility;
        var v3=document.getElementById("message5").style.visibility;
        var v4=document.getElementById("message6").style.visibility;
        var v5=document.getElementById("message7").style.visibility;
        var v6=document.getElementById("message9").style.visibility;
        var v7=document.getElementById("message3").style.visibility;
        var v8=document.getElementById("message24").style.visibility;
        var v9=document.getElementById("message18").style.visibility;

        if(v1=="hidden" && v2=="hidden" && v3=="hidden" && v4=="hidden" && v5=="hidden" && v6=="hidden" && v7=="hidden" && v8=="hidden" &&  v9=="hidden")
        {
            return true;
        }
        else{
         alert("please fill all fields");
         return false;
        }
}

function validateone()
{
	//alert('called');
	var s1=document.getElementsByTagName('label');
	var i1=s1[0].getAttribute("id");
	var i2=document.getElementById(i1).style.visibility;
	if(i2=="hidden")
	{
		return true;
	}
	else{
		alert('Please fill all fields');
		return false;
	}
}
function ConfirmDelete()
{
	var conf=confirm("Do you really want to delete this Account?");
	if(conf==true)
	{	
	return true;
	}
	else{
	return false;
	}
}

function ConformcustDelete()
{
	var conf=confirm("Do you really want to delete this Customer?");
	if(conf==true)
	{	
	return true;
	}
	else{
	return false;
	}
}



function validateChangePassword()
{
var v1=document.getElementById("message20").style.visibility;
var v2=document.getElementById("message21").style.visibility;
var v3=document.getElementById("message22").style.visibility;

if(v1=="hidden" && v2=="hidden" && v3=="hidden")
{
 return true;
}
else{
 alert("Please fill all fields");
 return false;
}
}


function validateFundTransfer()
{
var v1=document.getElementById("message1").style.visibility;
var v2=document.getElementById("message10").style.visibility;
var v3=document.getElementById("message11").style.visibility;
var v4=document.getElementById("message17").style.visibility;

if(v1=="hidden" && v2=="hidden" && v3=="hidden" && v4=="hidden")
{
 return true;
}
else{
 alert("Please fill all fields");
 return false;
}
}
function validateAddAccount()
{
var v1=document.getElementById("message14").style.visibility;
var v2=document.getElementById("message19").style.visibility;

if(v1=="hidden" && v2=="hidden")
{
 return true;
}
else{
 alert("Please fill all fields");
 return false;
}
}
function validateDeposite()
{
var v1=document.getElementById("message2").style.visibility;
var v2=document.getElementById("message1").style.visibility;
var v3=document.getElementById("message17").style.visibility;

if(v1=="hidden" && v2=="hidden" && v3=="hidden")
{
 return true;
}
else{
 alert("Please fill all fields");
 return false;
}
}
function validateaccount()
{	
	var acc1=document.forms[0]["accountno"].value;
	if(acc1 == "Select Account")
	{
		document.getElementById('message25').style.visibility="visible";
		document.getElementById('message25').innerHTML="Please Select atleast one Account";
	}
	else
	{
		document.getElementById('message25').style.visibility="hidden";
	}

}
function fromdate()
{ 
        var dob=document.forms[0]["fdate"].value;


        if(dob == "dd-mm-yyyy")
        {
         document.getElementById('message26').style.visibility="visible";
         document.getElementById('message26').innerHTML="From Date Field must not be blank";
        }
        else if(dob.length!=10)
               {
                    document.getElementById('message26').style.visibility="visible";
                    document.getElementById('message26').innerHTML="From Date Field must not be blank";
               }
        else
        {

         document.getElementById('message26').style.visibility="hidden";
        }

}
function todate()
{ 
        var dob=document.forms[0]["tdate"].value;


        if(dob == "dd-mm-yyyy")
        {
         document.getElementById('message27').style.visibility="visible";
         document.getElementById('message27').innerHTML="To Date Field must not be blank";
        }
        else if(dob.length!=10)
               {
                    document.getElementById('message27').style.visibility="visible";
                    document.getElementById('message27').innerHTML="To Date Field must not be blank";
               }
        else
        {

         document.getElementById('message27').style.visibility="hidden";
        }

}
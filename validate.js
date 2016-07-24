function pleaselogin()
{	
	alert("You need to login first");
}

function loginvalidation()
{
	var uname=document.login.username;
	var password=document.login.password;
		
	if(uname.value.length==0)
	{
		alert("Enter a username");
		uname.focus();
		return false;
	}
	
	var letters = /^[A-Za-z]+[_]?[A-Za-z0-9]+$/;  
	
	if(uname.value.length>15)
	{
		alert("Max length: 15");
		uname.focus();
		return false;
	}
	
	if(!uname.value.match(letters))
	{  
		alert('Username can only have numeric characters or alphabets');  
		uname.focus();  
		return false;  
	} 
	
	if(password.value.length==0||password.value.length<6)
	{
		alert("Incorrect password");
		password.focus();
		return false;
	}
	
	if(password.value.length>15)
	{
		alert("Max length: 15");
		password.focus();
		return false;
	}
	
	return true;
}

function signupvalidation()
{
	var name=document.signup.name;
	var username=document.signup.username;
	var email=document.signup.email;
	var password=document.signup.password;
	var repassword=document.signup.repassword;
	
	if(name.value.length==0)
	{
		alert("Enter the Summary please..!");
		name.focus();
		return false;
	}
	
	var letters = /^[A-Za-z ]+$/; 
	
	if(!name.value.match(letters))
	{  
		alert('It can only have alphabet characters or a space.');  
		name.focus();  
		return false;  
	} 
	
	if(username.value.length==0)
	{
		alert("Enter valid data");
		username.focus();
		return false;
	}
	
	var alphanum = /^[A-Za-z]+[_]?[A-Za-z0-9]+$/; 
	
	if(!username.value.match(alphanum))
	{  
		alert('It can only have alphabet characters or numbers or an underscore.');  
		username.focus();  
		return false;  
	}
	
	var mail= /^\w+([\._]?\w+)*@\w+(\.[\w]{2,3})+$/;
	if(email.value.length==0)
	{
		alert("Enter all your details please");
		email.focus();
		return false;
	}
	
	if(!email.value.match(mail))
	{
		alert("Invalid. Enter again.");
		email.focus();
		return false;
	}
	
	if(password.value.length==0||password.value.length<6)
	{
		alert("Enter correctly.");
		password.focus();
		return false;
	}
	
	if(repassword.value.length==0)
	{
		alert("Enter correctly");
		repassword.focus();
		return false;
	}
	
	
	
}

function feedvalidation()
{
	var city=document.feed.city;
	var contact=document.feed.contact;
	var feedb=document.feed.feedb;
	
	if(city.value.length==0)
	{
		alert("Enter your city");
		city.focus();
		return false;
	}
	
	var letters = /^[A-Za-z]+$/; 
	
	if(!city.value.match(letters))
	{  
		alert('City can only have alphabet characters');  
		city.focus();  
		return false;  
	} 
	
	if(contact.value.length==0)
	{
		alert("Enter your phone number");
		contact.focus();
		return false;
	}
	
	var num1 = /^[0][0-9]{9,12}$/;
	var num2 = /^[789][0-9]{9}$/;
	
	if(!((contact.value.match(num1))||(contact.value.match(num2))))
	{  
		alert('Invalid Contact Number');  
		contact.focus();  
		return false;  
	} 
	
	if(feedb.value=="")
	{
		alert('Please enter feedback for us!');  
		feedb.focus();  
		return false;
		}
}
	




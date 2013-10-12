function signup_page()
	{
		var x=document.forms["signup"]["email"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  			{
  				alert("Not a valid e-mail address");
  				return false;
  			}		
		
		var x=document.forms["signup"]["password"].value;
		if (x==null || x=="")
  			{
  				alert("Please Input Password");
  				return false;
  			}
		var x=document.forms["signup"]["name"].value;
		if (x==null || x=="")
  			{
  				alert("Please Input Your Name");
  				return false;
  			}
		var x=document.forms["signup"]["address"].value;
		if (x==null || x=="")
  			{
  				alert("Please Fill Your Address");
  				return false;
  			}
		var x=document.forms["signup"]["mobile"].value;
		if (x==null || x=="")
  			{
  				alert("You Forgot To Enter Your Mobile Number");
  				return false;
  			}

	}
function login_page()
	{	
		var uemail = document.login.email;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(uemail.value.match(mailformat))
			{
				document.login.password.focus();
				return true;
			}
		else
			{
			alert("You have entered an invalid email address!");
			uemail.focus();
			return false;
			}
	

}
	function passid_validation(mx,my)
		{
			var passid = document.login.password;
			var passid_len = passid.value.length;
			if (passid_len == 0 ||passid_len >= my || passid_len < mx)
				{
					alert("Password should not be empty / length be between "+mx+" to "+my);
					passid.focus();
					return false;
				}
					// Focus goes to next field i.e. Name.
					document.login.login.focus();
					return true;
		}
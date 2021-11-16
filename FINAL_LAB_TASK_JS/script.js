"use strict"

function nameValidation(){

	let name = document.getElementById('name').value;
	           function hasTwoWord(name)
                {
                    for (let i = 0; i < name.length; ++i) {
                        if (i != name.length - 1 && name[i] == " " && i != 0) {
                            if (name[name.length - 1] != ' ') {
                                return true;
                            }
                        }
                    }
                    return false;
                }

                function validName(name)
                {
                   let c = name.toLowerCase().charCodeAt(0);
                        
                        if (c < 97 || c > 122) {
                          return false; 
                        } else
                        { return true; } 
            }

        if (name == "")
        {
        	document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
        }
        else if(name.length<=4)
        {
            document.getElementById('d1').innerHTML = "<p style='color:red'> Name is too short</p>";
        }
        else if(!hasTwoWord(name))
        {
           document.getElementById('d1').innerHTML = "<p style='color:red'> Name must contain two words</p>";
        }
        else if(!validName(name))
        {
        	document.getElementById('d1').innerHTML = "<p style='color:red'> Name can not start with number</p>";
        }


        else
        {
        alert("Your Name is "+name);
        
		document.getElementById('name').value = "";
		document.getElementById('d1').innerHTML = "";
	    }
}

function emailValidation(){
	let email = document.getElementById('email').value;

	function validEmail(email)
                {
                    var at = email.indexOf("@");
				  var dot = email.lastIndexOf("\.");
				  return email.length > 0 &&
				    at > 0 &&
				    dot > at + 1 &&
				    dot < email.length &&
				    email[at + 1] !== "." &&
				    email.indexOf(" ") === -1 &&
				    email.indexOf("..") === -1;
            }

    if (email == "")
        {
        	document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
        }
    else if(!validEmail(email))
        {
           document.getElementById('d1').innerHTML = "<p style='color:red'> Invalid Email</p>";
        }

    else
        {
        alert(email);
		document.getElementById('email').value = "";
		document.getElementById('d1').innerHTML = "";
	    }

}

function genderValidation(){


	if(document.getElementById('male').checked == true)
	{
      alert("Your Gender is Male");
      document.getElementById('male').checked = false;
	  document.getElementById('d1').innerHTML = "";

	}
	else if(document.getElementById('female').checked == true)
	{
      alert("Your Gender is Female");
      document.getElementById('female').checked = false;
	  document.getElementById('d1').innerHTML = "";

	}
	else if(document.getElementById('other').checked == true)
	{
      alert("Your Gender is Other");
      document.getElementById('other').checked = false;
	  document.getElementById('d1').innerHTML = "";
	}
	else 
	{
      document.getElementById('d1').innerHTML = "<p style='color:red'> Select One</p>";
	}
}

function dobValidation(){
	let day = document.getElementById('day').value;
	let month = document.getElementById('month').value;
	let year = document.getElementById('year').value;

    if (day == "" || month == "" || year == "" || day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2016) {
        document.getElementById('d1').innerHTML = "<p style='color:red'> Invalid Date </p>";;
            return;
        }
	else {
	alert("DOB "+day+"/"+month+"/"+year);
	document.getElementById('day').value = "";
	document.getElementById('month').value = "";
	document.getElementById('year').value = "";
	document.getElementById('d1').innerHTML = "";
    }

}

function degreeValidation(){
     
     
     if (document.getElementById('ssc').checked == true || document.getElementById('hsc').checked == true || document.getElementById('bsc').checked == true)  
     {
     	alert("Successfully Submitted");
     	document.getElementById('ssc').checked = false;
	    document.getElementById('hsc').checked = false;
	    document.getElementById('bsc').checked = false;
	    document.getElementById('d1').innerHTML = ""
     }
     else{
     	document.getElementById('d1').innerHTML = "<p style='color:red'> Select Atleast One</p>";
     }

}

function bgValidation(){

    let e = document.getElementById("bloodGroup");
    let strUser = e.options[e.selectedIndex].value;

    let strUser1 = e.options[e.selectedIndex].text;
    if(strUser==0)
    {
        document.getElementById('d1').innerHTML = "<p style='color:red'> Select Atleast One</p>";
    }
    else
    {
    	alert("Your blood group is " + strUser1);
    }
}

function ppValidation(){

	let file = document.getElementById("file");
	let num = document.getElementById("num").value;

	function validNum(num){
		let t = "";
        for(i=0;i<num.length;i++){
           t = num.charCodeAt(i);
			if(t >= 48 && t <= 57)
			{return false;}
		    else{return true;}
			}
        }

    if (num =="") {
    	document.getElementById('d1').innerHTML = "<p style='color:red'>Enter ID</p>";
    }
    else if (!validNum) {
        document.getElementById('d1').innerHTML = "<p style='color:red'>Invalid Number</p>";
    }
	else if (file.files.length == 0) 
	{
		alert("Upload a Picture..!");
	}
	else
	{
		alert("ID: "+num+" Picture Uploaded Successfully");
	}

}


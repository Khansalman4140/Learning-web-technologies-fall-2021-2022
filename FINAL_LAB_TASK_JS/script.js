"use strict"



function f2(){

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
                    for (let i = 0; i < name.length; ++i) {
                        let c = name.toLowerCase(i);
                        if (c < 'a' || c > 'z' || c == ' ') {
                          return true; 
                        } else{ return false; } 
                }
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
        /*else if(!validName(name))
        {
        	document.getElementById('d1').innerHTML = "<p style='color:red'> Name can not contain numbers</p>";
        }*/


        else
        {
        alert(name);
        
		document.getElementById('name').value = "";
		document.getElementById('d1').innerHTML = "";
	    }




	
}
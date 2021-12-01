
$('#submit').click(function(){
    let name = $('#name').val();
    let email = $('#email').val();
    
     

    if (name == "") {
    $('name_msg').val("ERROR!");
    alert("Name Can't Be Empty !");
    }

    else if (email == ""){
    	 $('email_msg').val("ERROR!");
    	 alert("Email Can't Be Empty !");
    }

    else if($('#male').val().checked && $('#female').val().checked && $('#other').val().checked== false){
    	alert("Gender Can't Be Empty !");
    }

  
})
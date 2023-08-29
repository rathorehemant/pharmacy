$('#submit').click(function(){
	event.preventDefault();

	$('#fn').html('');
	$('#ln').html('');
	$('#em').html('');
	$('#co').html('');
	$('#sl').html('');
	$('#me').html('');
	$('#error').html('');
	$('#success').html('');
	
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var letters = /^[A-Za-z]+$/;
var fname = $('#fname').val();
var lname = $('#lname').val();
var email = $('#email').val();
var contact = $('#contact').val();
var select1 = $('#select1').val();
var message = $('#message').val();
if(fname == '' ){
	$('#fn').html('PLEASE ENTER NAME');
}else if (!fname.match(letters)){
	$("#fn").html('Only Alphabets Are Allowed');
}if(lname == ''){
	$('#ln').html('PLEASE ENTER LAST NAME ');
}else if (!lname.match(letters)){
	$("#ln").html('Only Alphabets Are Allowed');
}if(email == '' ){
	$('#em').html('PLEASE ENTER VALID EMAIL_ID');
}else if (reg.test(email) == false){
	$("#em").html('PLEASE ENTER VALID EMAIL TYPE');
}if(contact  == '' ){
	$('#co').html('PLEASE ENTER YOUR CONTACT NO ');
}else if ((contact.length.val>1) || (contact.length<10)){
	$('#co').html('PLEASE ENTER YOUR VALID CONTACT NO');
}if(message == '' ){
	$('#me').html('PLEASE ENTER YOUR MESSAGE');
	$('#me1').hide();
}else{
	$.ajax({
		url:'contact_us.php',
		method:'post',
		data:'fname='+fname+
		'&lname='+lname+
		'&lname='+lname+
		'&email='+email+
		'&contact='+contact+
		'&select1='+select1+
		'&message='+message,
		success:function(result){
			if(result == 'y'){
			$('#success').html('THANKS FOR CONTACT US WE WILL REVERT TO YOU SOON....');
		}else{
			$('#error').html('SORRY SOMETHING WENT WRONG...');
		}
		}
	});
}
$('#form_contact')[0].reset();
	

});








$('#pw').click(function(){
	event.preventDefault();
	$('#op').html('');
	$('#np').html('');
	$('#rp').html('');
	$('#error').html('');
	$('#success').html('');
	var re1 = /[a-z]/;
     var re2 = /[A-Z]/;
      var re3=  /[0-9]/;
	var old_pass = $('#old_pass').val();
	var new_pass = $('#new_pass').val();
	var ret_pass = $('#ret_pass').val();
	if(old_pass == '' ){
		$('#op').html('PLEASE ENTER OLD PASSWORD');
	}if(new_pass == ''){
		$('#np').html('PLEASE ENTER NEW PASSWORD');
	}else if(!re1.test(new_pass)){
      $("#np").html('PASSWORD MUST CONTAIN AT LEAST ONE LOWERCASE LETTER ');
	}else if(!re2.test(new_pass)){
     $("#np").html('PASSWORD MUST CONTAIN AT LEAST ONE UPPERCASE LETTER ');
	}else if(!re3.test(new_pass)){
	  $("#np").html('PASSWORD MUST CONTAIN AT LEAST ONE NUMBER ');
	}else if((new_pass.length.val>1)|| (new_pass.length<6)){
		 $("#np").html('PASSWORD MUST CONTAIN AT LEAST 6 CHARACTER ');
	}if(ret_pass == '' ){
		$('#rp').html('PLEASE TYPE YOUR PASSWORD AGAIN');
	}else if(ret_pass !=new_pass){
	$('#rp').html('NEW PASSWORD AND RETYPE PASSWORD DOES NOT MATCH');
	}else{
		$.ajax({
			url:'change.php',
			method:'post',
			data:'old_pass='+old_pass+
			'&new_pass='+new_pass+
			'&ret_pass='+ret_pass,
			success:function(result){
				if(result == 'y'){
					$('#success').html('PASSWORD UPDATED SUCCESSFULLY');
				}if(result == 'n'){
					$('#np').html('YOUR NEW PASSWORD DOES NOT MATCH WITH OLD PASSWORD PLEASE TRY AGAIN');
				}if(result =='no'){
					$('#op').html('YOUR PASSWORD IS WRONG PLEASE TRY AGAIN..');
				}
			}
		});
	}
	$('#form_password')[0].reset();
	
});
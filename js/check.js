function billing(){
	$("#first").html('');
	$("#last").html('');
	$("#add").html('');
	$("#appartment").html('');
	$("#stat").html('');
	$("#Postal").html('');
	$("#email").html('');
	$("#contact").html('');
	$("#hello").html('');
	
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var letters = /^[A-Za-z]+$/;
var fname = $("#fname").val();
var lname = $("#lname").val();
var address = $("#address").val();
var app = $("#app").val();
var state = $("#state").val();
var postal_zip = $("#postal_zip").val();
var email_address = $("#email_address").val();
var phone = $("#phone").val();
var notes = $("#notes").val(); 
if(fname == '' ){
	$("#first").html('Please Enter Name');
	   	 return false;
}else if (!fname.match(letters)){
	$("#first").html('Only Alphabets Are Allowed');
	return false;
}if(lname == ''){
	$("#last").html('Please Enter Your Last Name');
		   	 return false;
}else if (!lname.match(letters)){
	$("#last").html('Only Alphabets Are Allowed');
	return false;
}if(address == '' ){
$("#add").html('Please Enter Your Full Address');
return false;
}if(app == '' ){
	$("#appartment").html('Please Provide Appartment no,Room No etc..');
	return false;
}if(state == ''){
	$("#stat").html('Please Provide Your State');
		return false;
}
if(postal_zip == ''){
	$("#Postal").html('Please Provide Your Valid Postal Code');
	return false;
}if(email_address == ''){
	$("#email").html('Please Enter Your Valid Email Id');
	return false;
}else if (reg.test(email_address) == false){
	$("#email").html('Please Provide Valid Email Type ');
	return false;
}if(phone == '' ){
		$("#contact").html('Please Enter Your Contact No');
		return false;
}else if ((phone.length.val>1) || (phone.length<10)){
	$("#contact").html('Please Enter Your Valid Contact No');
	return false;
}
else{
	$.ajax({
		url: 'book.php',
		method : 'post',
		data : 'fname='+fname+
			'&lname='+lname+
			'&address='+address+
			'&app='+app+
			'&state='+state+
			'&postal_zip='+postal_zip+
			'&email_address='+email_address+
			'&phone='+phone+
			'&notes='+notes,
			success:function(result){
			     if(result == 'y'){
				window.location.href='confirm.php';
			}else{
				 $("#hello").html('something went wrong...');
			}
			}
	});



	}
}

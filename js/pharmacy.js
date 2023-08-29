function order(){
	$("#userfirst").html('');
	$("#userlast").html('');
	$("#useremail").html('');
	$("#usercontact").html('');
	$("#usercountry").html('');
	$("#userstate").html('');
	$("#usercity").html('');
	$("#useradd").html('');
	$("#userzi").html('');
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var name = $("#name").val();
var lname = $("#lname").val();
var email = $("#email").val();
var contact = $("#contact").val();
var country = $("#country").val();
var state = $("#state").val();
var city = $("#city").val();
var address = $("#address").val();
var postal_zip = $("#postal_zip").val();


			
			
if( name == ""  ){
   $("#userfirst").html('please enter fname');
       
}else if(lname  == ""){
     $("#userlast").html('please enter lname');
     
}else if( email  == ""){
      $("#useremail").html('please enter email');
	  
}else if(reg.test(email) == false){	
      $("#useremail").html('please enter valid email');	
        
}else if( contact  == ""){
      $("#usercontact").html('please enter contact');
       
} else if(  country  == ""){
   $("#usercountry").html('please enter country');
     
}else if( state  == ""){
     $("#userstate").html('please enter state');
      
}else   if( city  == ""){
      $("#usercity").html('please enter city');
	  
} else if( address  == ""){
      $("#useradd").html('please enter address');
      
} else  if( postal_zip  == ""){
   $("#userzi").html('please enter postal_zip');
   
}
else{
	jQuery.ajax({
			url:'order_medicine.php',
			type:'post',
			data:'name='+name+
			'&email='+email+
			'&contact='+contact+
			'&lname='+lname+
			'&country='+country+
			'&state='+state+
			'&city='+city+
			'&address='+address+
			'&postal_zip='+postal_zip,
						

			success:function(result){
				if(result == 'y'){
					
					window.location.href='upload_presciption.php';

				}
			else{
				   $("#cerror").html('something went wrong...');

			}
			}			
		});
}
}




function PRESCRIPTION(){
	$("#user").html('');
	$("#cerror").html('');
	var file_name=$('.txtFile').val();
		var index_dot=file_name.lastIndexOf(".")+1;
		var ext=file_name.substr(index_dot);
		if(file_name=='') {
        $("#user").html('please enter file..');

		}
		else if(!(ext=='png' || ext=='jpg' || ext=='jpeg')) {
			        $("#cerror").html('Please enter "png" "jpg"and "jpeg" file only.');

		}
		else {
			//formdata object to send file upload data
			var formData = new FormData();
			formData.append('fileupload',$( '.txtFile' )[0].files[0], file_name);
			
			 type: 'POST',
				$.ajax({
				url: 'ufile.php',
				 data: formData,
				 processData: false,
				 contentType: false,
				 type: 'POST',
				 success: function(data){
					 if(data){
						 alert(data);
					//window.location.href='thankyou.php';
					 }
					 else{
                    $("#cerror").html('something went wrong...');
					 }
				 }
			});
		}
		$('#frmUpdload')[0].reset();
		return false;
	
	
	}
	
	
	
	
	
	

	
	
$(document).ready(function(){
		 $(".addItem").click(function(e){
			 e.preventDefault();
		var $form =$(this).closest(".form-submit");
		var id = $form.find(".id").val();
		var pimage = $form.find(".pimage").val();
		var pname = $form.find(".pname").val();
		var pprice = $form.find(".pprice").val();
		var puser = $form.find(".puser").val();

			   $.ajax({
		   url : 'action.php',
		   method : 'post',
		   data:{id:id,pimage:pimage,pname:pname,pprice:pprice,puser:puser},
		   success:function(response){
			   $("#message").html(response);
			   load_cart();
		   }
		   
	   });
		 });
	 });
		
		load_cart();
		function load_cart(){
			 $.ajax({
				  url : 'action.php',
		           method : 'get',
				    data:{cartItem:"cart_item"},
                    success:function(response){
						$(".number").html(response);
						}
				 });
		}




















function register(){
	$("#hint").html('');
	$("#first").html('');
	$("#userpassword").html('');
	$("#Confirmpassword").html('');
	$("#uEmail").html('');
	$("#userContect").html('');
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
re1 = /[a-z]/;
re2 = /[A-Z]/;
re3=  /[0-9]/;

var Name = $("#Name").val();
var Password = $("#Password").val();
var cnf_Password = $("#cnf_Password").val();
var Email = $("#Email").val();
var Contect = $("#Contect").val();

		
if( Name == ""  ){
   $("#first").html('please enter name');
   	  return false;

}if(Password  == ""){
	$("#userpassword").html(' Password cannot be blank ');
		  return false;

}else if(Password  == Name ){
     $("#userpassword").html(' Password must be different from Username! ');
	  return false;
}else if(!re1.test(Password)){
     $("#userpassword").html('password must contain at least one lowercase letter ');
	  return false;
}else if(!re2.test(Password)){
    $("#userpassword").html('password must contain at least one uppercase letter ');
	 return false;
}else if(!re3.test(Password)){
    $("#userpassword").html('password must contain at least one number ');	
	 return false;
	   
}if(cnf_Password  ==""){
      $("#Confirmpassword").html('please enter cnf_Password');	
	  	 return false;

}else if(cnf_Password != Password){
	$("#Confirmpassword").html('Password and cnf_Password does not match');
		 return false;

}if( Email  == ""){
      $("#uEmail").html('please enter Email');
	  	 return false;

}else if(reg.test(Email) == false){   
$("#uEmail").html('please enter valid Email');
	 return false;

} if(  Contect  == ""){
   $("#userContect").html('please enter Contect');
   	 return false;

}if((Contect.length.val>1) || (Contect.length<10)){     
$("#userContect").html('please enter valid Contect');
	 return false;
} 
    
else{
	jQuery.ajax({
			url:'register.php',
			type:'post',
			data:'Name='+Name+
			'&Password='+Password+
			'&cnf_Password='+cnf_Password+
			'&Email='+Email+
			'&Contect='+Contect,
			success:function(result){
				if(result == 'y'){
			 $("#submitd").html('thankyou');
			}else{
				$("#submit").html('Wrong');
			}
			}
		});
}
}






function login(){
	$("#loginEmail").html('');
	$("#loginPass").html('');
var loginmail = $("#loginmail").val();
var loginPassword = $("#loginPassword").val();
if( loginmail == ""  ){
   $("#loginEmail").html('please enter Email');
   	  return false;
}
if( loginPassword == ""  ){
   $("#loginPass").html('please enter Password');
   	  return false;
}else{
		jQuery.ajax({
			url:'login.php',
			type:'post',
			data:'loginmail='+loginmail+
			'&loginPassword='+loginPassword,
			success:function(result){
				if(result == 'yes'){
					window.location.href='index.php';

			}else{
				$("#loginfail").html('invalid credtials');
			}
			}
		});

}
}
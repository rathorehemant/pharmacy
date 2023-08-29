$(document).ready(function() {

	$(".number").hide();
    

    xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
                if(content != "0")
                {
				$(".number").show();
             	   
             	  }
             	   else
             	   {	
				   $(".number").hide();
             	   content = "Welcom " + content + "!";
             	   $("#user").text(content);
                   
				   
             	   
             	                	   }
            }
        }
        
        
        });
       
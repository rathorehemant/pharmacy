$(document).ready(function(){
	      $(".itemQty").on('change', function(){
			var $el= $(this).closest('tr');
			var pid = $el.find(".pid").val();
			var pprice = $el.find(".pprice").val();
			var qty = $el.find(".itemQty").val();
			location.reload(true);
			$.ajax({
			url : 'action.php',
			method : 'post',
			cache : false,
			data : 'qty='+qty+
				'&pprice='+pprice+
				'&pid='+pid,
			
			success: function(result){
				
			}
			});
	    });
		});
		

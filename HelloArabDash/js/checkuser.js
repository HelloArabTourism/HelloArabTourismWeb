<script type="text/javascript">
	$(document).ready(function() {
		$('#emailLoading').hide();
		$('#email').keyup(function(){
		  $('#emailLoading').show();
	      $.post("check.php", {
	        username: $('#email').val()
	      }, function(response){
	        $('#emailResult').fadeOut();
	        setTimeout("finishAjax('emailResult', '"+escape(response)+"')", 400);
	      });
	    	return false;
		});
	});
 
	function finishAjax(id, response) {
	  $('#emailLoading').hide();
	  $('#'+id).html(unescape(response));
	  $('#'+id).fadeIn();
	} //finishAjax
</script>
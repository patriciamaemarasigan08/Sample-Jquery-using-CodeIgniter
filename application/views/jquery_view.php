<?php include("themes/templates/header.php") ?>
<script type="text/javascript">
	$(function(){
		$("#textbox").on("blur",function(){
			
		});

		
	});
	function getData(){
		var search = $("#textbox").val();
		$.post(base_url + "jquery_123/getSearch", {search:search}, function(o){
			$("#wrapper").html(o);
		});
	}
</script>

	<h3> Sample </h3>
	<br>
	<input type = "text" id = "textbox"> 
	<input type = "submit" id = "button" onclick="javascript: getData();">
	
	<div id="wrapper"></div>
	
</body>

</html>
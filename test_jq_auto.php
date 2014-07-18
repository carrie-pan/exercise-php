<html>
	<title> Test </title>
	<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		
		
		$.ajax({
			type : "POST",
			url : "/content.php",
			success : function(msg)
			{
				var data = JSON.parse(msg);
				//console.log(data);
				$.each(data,function(e){
					// console.log(data[e]);
					$('dl').append('<dd id="'+data[e]+'">'+data[e]+'</dd>');
				});
			}
		})
	});
	$(document).ajaxSuccess(function( event, xhr, settings ) {
	  
		$("dd").hover(function(){
			$(this).css("cursor", "pointer");
		});
		
		$("dl dd").each(function(){
			// alert("test");
			console.log($(this));
			
			$(this).on('click',function(){
				$(this).css("color","red"); 
				alert($(this).text());
			});
			
		});
	});
	</script>
	</head>
	
	<body>
		<span>Click the word - Use dd & dl</span>
		<dl>
		</dl>
	</body>
</html>
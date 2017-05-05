<html>
	<head>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	</head>
	<body>
		<form id="my_form">
       Name:<input type='text' name='name'>
       E-mail:<input type='text' name='email'>
       Gender:<select name='gender'>
       <option value='male'>male</option>
       <option value='female'>female</option>
       </select>
       Message:<textarea name='about'></textarea>
       <input type="button" value="Send" onclick="sendForm()"/>
 </form>
		<script>
		 function sendForm(){
    $.ajax({
    type: "POST",
    url: "sma1.php",
    data: jQuery("#my_form").serialize(),
    cache: false,
    success:  function(data){
       alert(data);     }
  });

}
		</script>
	</body>
</html>
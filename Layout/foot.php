

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
	
	//Get the button:
	mybutton = document.getElementById("myBtn");
	//when the user scrolls down 20px from the top of the document, show the button
	window.onscroll= function() {scrollFunction()};
	function scrollFunction(){
		if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
			mybutton.style.display="block";
		}
		else{
			mybutton.style.display="none";
		}
	}
	function topfunction(){
		document.body.scrollTop = 0; //For safari
		document.documentElement.scrollTop = 0; //For Chrome, Firefox, IE and Opera
	} 
</script>

</body>
</html>
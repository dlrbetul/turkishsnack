$(document).ready(function() {
	
$(".addToSepetBtn").click(function(){
	
	var url= "http://localhost/ekip1_vize/aylikutu.php";
	var data={
		p:"addToSepet",
	}
	$.post(url,data,function(response){
		alert(response);
		
	});
});
	
	});

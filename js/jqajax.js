
$(document).ready(function(){
	

               //ajax request for insert data

$("#myform").on("submit",function(e){
	e.preventDefault();
	console.log("saved button clicked");
	
	// let id = $("#id").val();
	// let nam = $("#nameid").val();
	// let mail = $("#emailid").val();
	// let phone =$("#phoneid").val();
	// let address =$("#addressid").val();
	// let pass = $("#passwordid").val();
	// let cpass = $("#cpasswordid").val();
	// let dob = $("#dobid").val();
	// let age = $("#ageid").val();
	// let height = $("#heightid").val();
	// let weight = $("#weightid").val();
	// let gender = $("#genderid").val();
	// let deg = $("#designationid").val();
	// let bio = $("#bioid").val();
	
	// //console.log(nam);
	// //console.log(mail);
	// //console.log(bio);
	
	// mydata = {id:id, name:nam, email:mail, phoneno:phone, address:address, password:pass, cpassword:cpass,dateofbirth:dob, age:age, height:height, weight:weight, gender:gender, designation:deg, bio:bio};
	// // console.log(mydata);
	var form = new FormData(this);
	// console.log(form);
	$.ajax({
		url:"register.php",
		method: "POST",
		data: form,
		contentType:false,
        cache:false,
        processData:false,
		success: function(data){
		console.log(data);
		msg = "<div class='alert alert-dark text-danger mt-4 text-center'>"+data+ "</div>";
		$("#msg").html(msg);
		// $("#myform")[0].reset();
		 
	},
	});
});


           

 
});
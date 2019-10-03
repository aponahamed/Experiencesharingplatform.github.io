function JSValidation (){
	var full_name = document.getElementById('Fname').value;
	var username = document.getElementById('UName').value;
	var Pass_length = document.getElementById('Pass').value.length;
	var emailID = document.getElementById('Email').value;
	var Gender = document.getElementById('Gender').value;
	var Job = document.getElementById('Job').value;
	var Educational = document.getElementById('Educational').value;
	var Present_Add = document.getElementById('Present_Add').value;
	var Pre_Position = document.getElementById('Pre_Position').value;
	var Present_Work = document.getElementById('Present_Work').value;
	var Position = document.getElementById('Position').value;
	var Religion = document.getElementById('Religion').value;
	var Help = document.getElementById('Help').value;
	var fileToUpload = document.getElementById('fileToUpload').value;
	var Description = document.getElementById('Description').value.length;
	
	var myRegEx  = /[^a-z\d]/i;
	var isValid = !(myRegEx.test(username));
	
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");

	var validate = 0;

	if(full_name == ""){
		validate =1;
		alert('Full Name Required!');
		document.getElementById('Fname').focus();
	}else if(username == ""){
		validate = 1;
		alert('Username Required!');
		document.getElementById('UName').focus();
	}else if(!isValid || (Pass_length <8 || Pass_length >20)){
		validate =1;
		alert("password min (8-20)is required.");
		document.getElementById('username').focus();
	}else if(atpos < 1 || ( dotpos - atpos < 2 )) {
		validate =1;
		alert("Please Enter valid Email Address.");
		document.getElementById('Email').focus();
	}else if (Gender == "Please Choose") {
		validate =1;
		alert("Please Select State.");
	}else if (Job == "Please Choose") {
		validate =1;
		alert("Please Select State.");
	}else if(Educational == ""){
		validate = 1;
		alert('Educational Background Is Required!');
		document.getElementById('Educational').focus();
	}else if(Present_Add == ""){
		validate = 1;
		alert('Present Address Is Required!');
		document.getElementById('Present_Add').focus();
	}else if(Pre_Position == ""){
		validate = 1;
		alert('Pre_Position Is Required!');
		document.getElementById('Pre_Position').focus();
	}else if(Present_Work == ""){
		validate = 1;
		alert('Present_Work Is Required!');
		document.getElementById('Present_Work').focus();
	}else if(Position == ""){
		validate = 1;
		alert('Position Is Required!');
		document.getElementById('Position').focus();
	}else if (Religion == "Please Choose") {
		validate =1;
		alert("Please Select State.");
	}else if (Help == "Please Choose") {
		validate =1;
		alert("Please Select State.");
	}else if (fileToUpload == "Please Choose") {
		validate =1;
		alert("Please Select State.");
	}else if(!isValid || (Description <1 || Description >1000)){
		validate =1;
		alert("password min (1-1000)is required.");
		document.getElementById('Description').focus();
	}
 

	
	if(validate == 0 ){
		alert("All Validation Success");
		return true;
	} else {
		return false;
	}
}
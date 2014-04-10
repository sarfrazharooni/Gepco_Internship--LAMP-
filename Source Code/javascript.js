// dispaly the current system date on text box
function set_date() {
	var now = new Date();
	var date = now.getDate();
	var month = now.getMonth()+1;
	var year = now.getFullYear();
	var yyyymmdd = year + "-" + month + "-" + date;
	document.myForm.date.value = yyyymmdd;
}

function logout() {
    window.location = "api/doLogout.php";
}

function goYear(id, year) {
	$.ajax({
		url: "api/getYearPayroll.php",
		data: {
			id: id,
			year: year
		},
		type: "POST",
		dataType: "json",
		success: function(msg){
			for (i = 0; i < msg.data.length; i++) {
				var count = msg.data[i].count == "1" ? "" : msg.data[i].count;
				$("#month" + msg.data[i].month).append($('<div class="row titleRow"><button type="button" class="btn btn-info col-md-offset-4">Download <span class="badge">' + count + '</span></button></div>'));
			}
		},
		error: function(xhr) {
      		alert("Ajax request 發生錯誤");
    	}
	});
}

function getYear() {
	return document.getElementById("yearSelector").value;
}

function getThisYear() {
	var today = new Date();
	return today.getFullYear();
}

function getMaxYear() {
	var today = new Date();
	return today.getFullYear() + 1;
}

function onLoad(id) {
	document.getElementById("yearSelector").setAttribute("value", getThisYear());
	document.getElementById("yearSelector").setAttribute("max", getMaxYear());
	goYear(id, getThisYear());
}

function resetDownload() {
	
}
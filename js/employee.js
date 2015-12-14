var nowYear;

function logout() {
    window.location = "api/doLogout.php";
}

function goYear(id, year) {
	if(year == nowYear) {
		return;
	}

	resetDownload();

	$.ajax({
		url: "api/getYearPayroll.php",
		data: {
			id: id,
			year: year
		},
		type: "POST",
		dataType: "json",
		success: function(msg){
			for (var i = 0; i < msg.data.length; i++) {
				var count = msg.data[i].count == "1" ? "" : msg.data[i].count;
				$("#month" + msg.data[i].month).append($('<div id="download'+ msg.data[i].month +'" class="row titleRow"><button type="button" class="btn btn-info col-md-offset-4" onclick=clickDownload("' + id + '","' + msg.data[i].month + '")>Download <span class="badge">' + count + '</span></button></div>'));
			}
		},
		error: function(xhr) {
			alert("Ajax request 發生錯誤");
		}
	});

	nowYear = getYear();
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
	for (var i = 1; i <= 12; i++) {
		$("#download"+i).remove();
	};
}

function clickDownload(id, month) {
	alert("!!!!");
	$.ajax({
		url: "api/getDownloadDetail.php",
		data: {
			id: id,
			year: nowYear,
			month: month

		},
		type: "POST",
		dataType: "json",
		success: function(msg){
			if(msg.data.length == 1) {
				window.open(msg.data[0].path);
			}
		},
		error: function(xhr) {
			alert("Ajax request 發生錯誤");
		}
	});
}
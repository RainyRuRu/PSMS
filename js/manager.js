nowTab = "upload"
fileCount = 0;

function load(){
	yearRange();
	setMonthOption();

	$('#myModal').on('show.bs.modal', function (event) {

		var button = $(event.relatedTarget);
		var number = button.data('number');

		$("#searchBtn").attr('onclick','chooseEmployee('+number+')');
	});
}


function changeTab(targetTab){
	if (targetTab == nowTab){
		return;
	}

	var nowTabId = "#"+targetTab+"Tab";
	var pastTabId = "#"+nowTab+"Tab";

	$(nowTabId).addClass("active");
	$(pastTabId).removeClass("active");

	
	var nowDiv = "#"+targetTab+"Div";
	var pastDiv = "#"+nowTab+"Div";

	$(nowDiv).show();
	$(pastDiv).hide();

	nowTab = targetTab;
}


function yearRange(){

	var d = new Date();
	nowYear = d.getFullYear();
	minYear = nowYear-20;
	maxYear = nowYear+1;

	for (var i = maxYear ; i > minYear ; i--) {
		$('#yearSelect')
         	.append($("<option></option>")
         	.attr("year",i)
         	.text(i)); 

        if (i == nowYear){
        	console.log("here");
        	$('#yearSelect').children("option").eq(1).attr("selected","selected");
        }
	}
}

function setMonthOption(){

	var d = new Date();
	nowMonth = d.getMonth();

	$('#monthSelect').children("option").eq(nowMonth).attr("selected","selected");

}

function chooseFile(){

	var files = $('input[type=file]')[0].files;
	var count = files.length;

	for (var i = 0 ; i < count ; i++) {
		addFileField(files[i].name);
	}
}

function addFileField(fileName){
	$(".uploadImg").hide();
	$("#fileTable").show();

	fileCount++;
	fileFieldMaker(fileName, fileCount);
}

function fileFieldMaker(fileName, number){
	$('#fileTable').append(
		'<tr>'+
			'<td class="col-md-1">'+
				'<img src="icon_excel.png" width="50px"/>'+
			'</td>'+
			'<td class="col-md-6" style="padding-top:20px">'+fileName+'</td>'+
			'<td class="col-md-3" style="padding-top:20px">'+
				'<input id="employee'+number+'" type="text" class="form-control" value="" disabled>'+
			'</td>'+
				'<td class="col-md-1" style="padding-top:20px">'+
				'<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" data-number="'+number+'">'+
					'選擇員工'+
				'</button>'+
			'</td>'+
			'<td class="col-md-1" style="padding-top:20px;font-size:20px" onclick="removeFile(event)">'+
				'<span class="fa fa-trash-o" aria-hidden="true" ></span>'+
			'</td>'+
		'</tr>');
}

function searchUser(){
	$.ajax({
    	url: 'api/searchEmployee.php',
    	type: 'POST',
    	data: {
      		id: $('input[name$="search_id"]').val(),
      		name: $('input[name$="name"]').val(),
   	 	},
   	 	dataType:'json',
	    success: function(response) {
	    	resetResultTable();
	    	if (response.result == true) {
	    		if (response.data.length > 0){
	    			showSearchResult(response.data);
	    		} else {
	    			showNoResult();
	    		}
	    	}
    	}
	 });
}

function showSearchResult(data){
	for (var i = 0 ; i < data.length ; i++){
		console.log(data[i].id+"/"+ data[i].name)
		searchResultField(data[i].id, data[i].name);
	}
}

function searchResultField(id, name){
	$("#searchTableBody").append(
		'<tr>'+
		'<td>'+
		'<input type="radio" name="select" value="'+id+" "+name+'">'+
		'</td>'+
		'<td>'+id+'</td>'+
		'<td>'+name+'</td>'+
		'</tr>');
}

function resetResultTable(){
	$("#searchTableBody").empty();
}

function chooseEmployee(number){
	var id = $("input[name='select']:checked").val();
	$("#employee"+number).attr('value',id);	
	$('#myModal').modal('hide');
}

function stopEvent(evt) {
	evt.stopPropagation();
	evt.preventDefault();
}

function over(e){
	stopEvent(e);
	$("#fileHere").hide();
	$("#dragImg").show();
}

function drop(e){
	stopEvent(e);

	var files = e.dataTransfer.files;

	$(".uploadImg").hide();
	$("#fileTable").show();

	for (var i = 0 ; i < files.length ; i++) {
		addFileField(files[i].name);
	}

}

function uploadFiles() {
	$("#fileTable").empty();
	$(".uploadImg").show();
	$("#fileHere").show();
	$("#dragImg").hide();

	alert("上傳成功");
}

function removeFile(e) {

	var btn = $(e.target);
	var tr = btn.parent('tr');
	tr.remove();

}
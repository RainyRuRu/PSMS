nowTab = "upload"

function load(){
	yearRange();
	setMonthOption();
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



function stopEvent(evt) {
	evt.stopPropagation();
	evt.preventDefault();
}

function over(e){
	stopEvent(e);
	$("#dragImg").show();
	$("#fileHere").hide();
}

function leave(e){
	stopEvent(e);
	$("#dragImg").hide();
	$("#fileHere").show();
}


count = 0
function showdata(){
		var httprequest = new XMLHttpRequest();
		httprequest.open('GET','http://localhost:4242/ja/odata.json');
		httprequest.onload = function(){
		var jdata = JSON.parse(httprequest.responseText);
		display_data(jdata,count);
		if(count==2)
			count = 0;
		count += 1;
	};
	httprequest.send();
};
function display_data(data,tmp){
	string = "";
	string = string + "Name is "+data[tmp].name+" and ID is "+data[tmp].id+".<br />";
	document.getElementById("show_data").innerHTML ="<label id="+data[tmp].name+">"+string+"</label><br />";
	string = "";
}
function getTableData(){

	var rows = document.getElementsByName("M&A")[0].rows;
	var dict = [];

	for (var i =1; i<rows.length;i++) {

 	   var rw = rows[i];
 	   var cl =  rw.cells[0];
 	   if( cl != undefined ){

 	   		var roll = rw.cells[0].innerHTML,
            subject = rw.cells[1].innerHTML,
 	   			  marks = rw.cells[2].childNodes[0].value,
 	   			  attend = rw.cells[3].childNodes[0].value;
 	   		var data ={
    					"roll":roll,
              "subject":subject,
      					"data":{
         					"marks":marks,
         					"attend":attend
      					}
   					}
   			dict.push(data);

 	   		//console.log("roll :"+roll+ "subject :"+subject+ "marks :"+marks+ "attend : "+attend);

 	   }
	}

	console.log(dict);
	sendDataToServer(dict);



// var last = rows[rows.length - 1];
// var cell = last.cells[0];
// var value = cell.innerHTML
}


function sendDataToServer(data){
	xhr = new XMLHttpRequest();
    var url = "intructorStudentData.php";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.onreadystatechange = function () { 
        if (xhr.readyState == 4 && xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);
            console.log(json);
        }
    }
    var data = JSON.stringify(data);
    xhr.send(data);
}
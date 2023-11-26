class Slides
{
	constructor()
	{

	}	
}

var directory = "public/JSON/";
var xmlHttp = new XMLHttpRequest();
xmlHttp.open('GET', directory, false); // false for synchronous request
xmlHttp.send(null);
var ret = xmlHttp.responseText;
var fileList = ret.split('\n');

//document.body.innerHTML = fileList;

for (i = 0; i < fileList.length; i++) {
    var fileinfo = fileList[i].split('href="');

    console.log( fileinfo[0].split('">'));

    if (fileinfo[0] == '201:') {

        document.write(fileinfo[1] + "<br>");
        //document.write('<img src=\"' + directory + fileinfo[1] + '\"/>');
    }
}

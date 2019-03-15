var links = document.getElementsByClassName('links');
var linkContent = [
	document.getElementsByClassName('text-box')[0], 
	document.getElementsByClassName('text-box')[1],
	document.getElementsByClassName('text-box')[2],
	document.getElementsByClassName('text-box')[3],
	document.getElementsByClassName('text-box')[4],
];
for(var i = 0; i < linkContent.length; i++) {
	if(i == 0) {
		linkContent[i].style.display = 'block';
	}
	else {
		linkContent[i].style.display = 'none';
	}
}
for(var i = 0; i < links.length; i++) {
	links[i].onclick = function() {
		//this.getAttribute('linkId'); - 2
		for(var j = 0; j < linkContent.length; j++) {
			if(j == this.getAttribute('linkId')) {
				linkContent[j].style.display = 'block';
			}
			else {
				linkContent[j].style.display = 'none';
			}
		}
	}
}
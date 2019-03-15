var btnShw = document.getElementById("show-polls");
var container = document.getElementById("polls");
btnShw.style.cursor = 'pointer';
container.style.display = 'none';
var sShowHide = false;
btnShw.onclick = function() {
	if(sShowHide) {
		container.style.display = 'none';
		btnShw.innerHTML = 'Show Polls &#8609;';
		sShowHide = false;
	}
	else {
		container.style.display = 'block';
		sShowHide = true;
		btnShw.innerHTML = 'Hide Polls &#x219F;'; 
	}
}
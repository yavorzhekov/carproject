var quest = document.getElementsByClassName('question');
var answ = document.getElementsByClassName('answer');
for (var i=0; i < answ.length; i++){
  answ[i].style.display="none";
}
for(var i = 0; i < quest.length; i++) {
    quest[i].onclick=function(){
    	if(this.nextElementSibling.style.display == 'none') {
    		this.nextElementSibling.style.display = 'block';
    	}
    	else {
    		this.nextElementSibling.style.display = 'none';
    	}
    }    
}
var mainPic=document.getElementsByClassName("mainpic")[0];
var smallPics=document.getElementsByClassName("small-pics");
for (var i=0; i< smallPics.length; i++){
		smallPics[i].onclick=function(){
			mainPic.src=this.src;
		}
	}
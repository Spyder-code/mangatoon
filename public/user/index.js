




// var flip = document.getElementsByClassName("cs-flip-card-inner");
// for (i=0; i<flip.length; i++) {
// 	flip[i].addEventListener("click", function() {
// 		this.style.transform = "rotateY(180deg)";
// 	})
// }





var flipFront = document.getElementsByClassName("cs-flip-card-front");
for (i=0; i<flipFront.length; i++) {
	flipFront[i].addEventListener("click", function() {
		var target = this.getAttribute("data-target");
		document.getElementById(target).style.transform = "rotateY(180deg)";
	})
}
var flipBack = document.getElementsByClassName("cs-flip-card-back");
for (i=0; i<flipBack.length; i++) {
	flipBack[i].addEventListener("click", function() {
		var target = this.getAttribute("data-target");
		document.getElementById(target).style.transform = "rotateY(0deg)";
	})
}























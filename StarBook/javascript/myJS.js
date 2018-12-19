// $(document).ready(alert('dfdffdfdfd'))

 /* khong sua code nay
var slider = document.getElementById("myRange");
var output = document.getElementById("giaks");

slider.oninput = function gia() {
output.innerHTML = slider.value;
  output.innerHTML = this.value;
}
*/

$(document).ready(function(){
	var slider = document.getElementById("myRange");
	var output = document.getElementById("giaks");

	slider.oninput = function gia() {
	output.innerHTML = slider.value;
    output.innerHTML = this.value;
	}
});


"use strict"


/*let block = document.querySelector('.text');

function changeText() {
  this.textContent = 'My text';
}
block.addEventListener("keyup", changeText);
function changeColor() {
   document.getElementById("text").style.fontSize = "50pt";
};
*/
function bolt(){
	document.execCommand('bold', false, '');
};

function italic(){
   document.execCommand('italic', false, '');
};

function underline(){
   document.execCommand('underline', false, '');
};

$('body').on('input', '.toolbar-color', function(){
	var val = $(this).val();
	document.execCommand('styleWithCSS', false, true);
	document.execCommand('foreColor', false, val);
	document.execCommand('styleWithCSS', false, false);
});



changeColor = () => {
	var color = document.getElementById("color").value;
	document.getElementById("one").style.backgroundColor = color;
}
var changeFontStyle = (font) => { 
	document.getElementById("text").style.fontFamily = font.value; 
	} 

	var onsize = (font) => { 
	document.getElementById("text").style.fontSize = font.value; 
	} 

changeFontItalic = () => {
		var text = document.getElementById("text");
		var i = document.getElementById("font_italic").checked;
		text.style.fontStyle = (i ? "italic" : "normal");
	}
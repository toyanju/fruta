const selectElement =function(element){
	return document.querySelector(element);
};
let menu= selectElement('.menu');
let body= selectElement('body');

menu.addEventListener('click',function(){
	body.classList.toggle('open');
});
$(document).ready(function(){

	  var header = $('nav'),
			      btn    = $('button.toggle-nav');

	  btn.on('click', function(){
		    header.toggleClass('active');
	  });

});
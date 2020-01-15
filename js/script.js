//mencari elemen class page scroll
$(".page-scroll").click(function(event){

	//ambil elemen link yg ada tanda #
	if (this.hash!=="") {

		//matikan link
		event.preventDefault();

		//ambil nilai ID dari link
		var hash = this.hash;

		//animasi scroll
		$("html, body").animate({
			scrollTop: $(hash).offset().top
		    }, 1000, "swing", function() {
		    	window.location.hash=hash;
		});
	}

});
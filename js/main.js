$('#carousel1').html($('.active > .carousel-caption').html());
    $('.carousel').on('slid.bs.carousel', function() {
        if ($('#slide-two').hasClass('active')) {
            $('#text-one').addClass('hidden');
            $('#text-two').removeClass('hidden');
            $('#text-three').addClass('hidden');
            $('#text-four').addClass('hidden');
        } else if ($('#slide-three').hasClass('active')) {
            $('#text-one').addClass('hidden');
            $('#text-two').addClass('hidden');
            $('#text-three').removeClass('hidden');
            $('#text-four').addClass('hidden');
        } else if ($('#slide-four').hasClass('active')) {
            $('#text-one').addClass('hidden');
            $('#text-two').addClass('hidden');
            $('#text-three').addClass('hidden');
            $('#text-four').removeClass('hidden');
        } else {
            $('#text-one').removeClass('hidden');
            $('#text-two').addClass('hidden');
            $('#text-three').addClass('hidden');
            $('#text-four').addClass('hidden');
        }
});    

$(document).ready(function(){
	$("#carousel1").carousel({
		interval : false
	});
});

function onSubmit(token) {
    document.getElementsByClassName("fp-form").submit();
}

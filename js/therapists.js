$("#lsearch").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("#search-box").submit();
    }
});

function getSelectValue(val)
{
    $.ajax({
        type: 'post',
        url: 'fetch_data.php',
        data: {
            get_option:val,
        },
        success: function (response) {
            document.getElementById("boxes").innerHTML=response; 
        }
    });
}

$(".hiddenphone").hide();//hide the initial phone number

$(".showphone").on("click", function (event) {
    event.stopPropagation();
    // if .hiddenphone class for this template instance is hidden
    if ($(this).find('.hiddenphone').is(':hidden')) {
        // change text
        $(this).find('.hiddenphone').show();
        $(this).find('.clickshow').hide();
        // Meteor.call('incrementShowNumberStats', $(this).attr("data-id"));
        // // send email notification
        // const therapistPreviewid = $(this).attr("data-id");
        // Meteor.call('practiceNumberNotification', therapistPreviewid);
    }
}); 
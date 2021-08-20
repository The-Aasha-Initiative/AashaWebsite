$("#lsearch").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("#search-box").submit();
    }
});

function getSelectDesignation(val1)
{
    $.ajax({
        type: 'post',
        url: 'fetch_data.php',
        data: {
            get_option1:val1,
        },
        success: function (response) {
            document.getElementById("boxes").innerHTML=response; 
        }
    });
}
function getSelectIdentifiesas(val2)
{
    $.ajax({
        type: 'post',
        url: 'fetch_data.php',
        data: {
            get_option2:val2,
        },
        success: function (response) {
            document.getElementById("boxes").innerHTML=response; 
        }
    });
}
function getSelectClientGroup(val3)
{
    $.ajax({
        type: 'post',
        url: 'fetch_data.php',
        data: {
            get_option3:val3,
        },
        success: function (response) {
            document.getElementById("boxes").innerHTML=response; 
        }
    });
}
function getSelectIssuesTreated(val4)
{
    $.ajax({
        type: 'post',
        url: 'fetch_data.php',
        data: {
            get_option4:val4,
        },
        success: function (response) {
            document.getElementById("boxes").innerHTML=response; 
        }
    });
}
function getSelectLanguages(val5)
{
    $.ajax({
        type: 'post',
        url: 'fetch_data.php',
        data: {
            get_option5:val5,
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
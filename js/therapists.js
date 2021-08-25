$("#lsearch").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("#search-box").submit();
    }
});

function getSelectedValue()
{   
    var val1 = document.getElementById("profession").value;
    var val2 = document.getElementById("idas").value;
    var val3 = document.getElementById("clgr").value;
    var val4 = document.getElementById("istr").value;
    var val5 = document.getElementById("lan").value;

    $.ajax({
        type: 'post',
        url: 'fetch_data.php',

        data: {
            get_option1:val1,
            get_option2:val2,
            get_option3:val3,
            get_option4:val4,
            get_option5:val5,
        },
        success: function (response) {
            document.getElementById("boxes").innerHTML=response; 
        }
    });
}

// function getSelectDesignation(val1,val2,val3,val4,val5)
// {
//     $.ajax({
//         type: 'post',
//         url: 'fetch_data.php',
//         data: {
//             get_option1:val1,
//             get_option2:val2,
//             get_option3:val3,
//             get_option4:val4,
//             get_option5:val5,
//         },
//         success: function (response) {
//             document.getElementById("boxes").innerHTML=response; 
//         }
//     });
// }
// function getSelectIdentifiesas(val1,val2,val3,val4,val5)
// {
//     $.ajax({
//         type: 'post',
//         url: 'fetch_data.php',
//         data: {
//             get_option2:val2,
//         },
//         success: function (response) {
//             document.getElementById("boxes").innerHTML=response; 
//         }
//     });
// }
// function getSelectClientGroup(val1,val2,val3,val4,val5)
// {
//     $.ajax({
//         type: 'post',
//         url: 'fetch_data.php',
//         data: {
//             get_option3:val3,
//         },
//         success: function (response) {
//             document.getElementById("boxes").innerHTML=response; 
//         }
//     });
// }
// function getSelectIssuesTreated(val1,val2,val3,val4,val5)
// {
//     $.ajax({
//         type: 'post',
//         url: 'fetch_data.php',
//         data: {
//             get_option4:val4,
//         },
//         success: function (response) {
//             document.getElementById("boxes").innerHTML=response; 
//         }
//     });
// }
// function getSelectLanguages(val1,val2,val3,val4,val5)
// {
//     $.ajax({
//         type: 'post',
//         url: 'fetch_data.php',
//         data: {
//             get_option5:val5,
//         },
//         success: function (response) {
//             document.getElementById("boxes").innerHTML=response; 
//         }
//     });

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
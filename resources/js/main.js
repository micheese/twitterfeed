var i = 0;

function get_tweets(){
    $.ajax({
        type: "GET",
        url: 'twuserlookup.php',
        datatype: 'json'
    }).done(function(data) {
        display_tweet(data);
    });
}

function display_tweet(data){
    $('#new-tweets').empty();
    if(i <= data.length){
        if(i == data.length){
            i = 0;
            get_tweets();
        } else {
            image = ' <img src=" '  + data[i].picture_url + ' " height="70" width="70"> ';
            text  = '<p class="text">' + data[i].text +'</p>';
            $('#new-tweets').append(image);
            $('#new-tweets').append(text);
            i++;
            setTimeout(function() {
                display_tweet(data);
            }, 10000)
        }
    }
}

$(document).ready(function(){
    get_tweets();
});




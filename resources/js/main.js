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
            li    = '<p data-out-effect="fadeOut" >' + data[i].text +'</p>';
            $('#new-tweets').append(image);
            $('#new-tweets').append(li);
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




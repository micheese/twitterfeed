/**
 * Created by michael on 2015-01-17.
 */
/*$(function () {
    $('.tlt').textillate({ loop: true });
})*/

$(document).ready(function(){
    var attemp_count = 0;

    var auto_refresh = setInterval(function()
    {
        $.ajax({
            url: 'twuserlookup.php'
        }).done(function(data)
        {
            for (index = 0; index < data.length; ++index) {
                $('#mydiv').append(data[index]);
            }
        });
        if(attemp_count > 775)
        {
            clearInterval(auto_refresh);
        }
    }, 6000);
});
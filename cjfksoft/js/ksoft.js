
$(document).ready(function(){
    
    // If citylist is changed then retrieve all the towns from the DB
    $("#citylist").change(function(){
        ajax_getTownCities();
    });
});

function ajax_getTownCities() {
    $.post( 
        base_url + 'welcome/gettowncities',
        {
            "id" : $("#citylist").val(),
            "ajax": true
        },
        function(result) {
            var data = jQuery.parseJSON(result);
            $("#townlist").empty();
            $('#townlist')
                .append($('<option>', {
                    value: ''
                })
                        .text("Choisir quartier"));
            $.each(data, function(key, value) {
                $('#townlist')
                        .append($('<option>', {
                            value: key
                        })
                                .text(value));
            });
        }
    );
}
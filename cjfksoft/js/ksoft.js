
$(document).ready(function(){
//    getCountLikes();
    $("#ilike").click(function(){
        setLikeCountLikes();
    });
});

function setLikeCountLikes() {
    
    $.post( 
        base_url + 'index.php/welcome/setlikecountlikes',
        {
            "item_id" : $("#items_id").val(),
            "user_ip" : $("#user_ip").val(),
            "user_id" : $("#user_id").val()
        },
        function(result) {
            var data = jQuery.parseJSON(result);
            $("#countLikes").empty();
            $("#countLikes").html(data);
        }
    );
}

function getCountLikes() {
    $.post(
        base_url + 'index.php/welcome/getcountlikes/',
        {
            "item_id" : $("#item_id")
        },
    function(result) {
        var data = jQuery.parseJSON(result);
        alert(data);
//        $("#countLikes").append("", data);
    });
}
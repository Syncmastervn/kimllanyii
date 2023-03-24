$(document).ready(function(){
    var modal_content = ($(".modal-body").html() == "NoMessage") ? true : false;
    if(!modal_content)
    {
        $("#modal-button").click();
    }
});
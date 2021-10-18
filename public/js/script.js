var clickableButton = $(".clickable");
var hiddenTable = $("#list-data");

$(".clickable").on("click", function(e){
    if(hiddenTable.css("display") == "none"){
        hiddenTable.css("display", "block");
    }
    else{
        hiddenTable.css("display", "none");
    }
})

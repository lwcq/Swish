var id, arg;
function showPassHelp(id, arg) {
    if(arg == 1) {
        $("div#"+id).fadeIn();
    }
    if(arg == 0) {
        $("div#"+id).fadeOut();
    }
}
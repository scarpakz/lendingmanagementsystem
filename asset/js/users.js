// CLIENT START
function showButtons(){
    jQuery(".history-btn").hide()
    jQuery(".close").show()
    jQuery(".btn-green").show();
    jQuery(".btn-blue").show();
}
function hideButtons(){
    jQuery(".history-btn").show()
    jQuery(".close").hide()
    jQuery(".btn-green").hide();
    jQuery(".btn-blue").hide();
    jQuery(".client-form").hide();
    jQuery(".collector-form").hide();
}
function showClientForm(){
    jQuery(".client-form").show();
    jQuery(".collector-form").hide();
}
function selectedTerm(){
    jQuery("#input-group-calendar").show(200);
}

// COLLECTOR START
function showCollectorForm(){
    jQuery(".collector-form").show();
    jQuery(".client-form").hide();
}
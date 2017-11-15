/**
 * Created by MSI on 08/11/2017.
 */
// fonction pour afficher/cacher les details
$(document).ready(function(){
    $('#new').hide();
    $('#plus').click(function(){
        $('#new').slideToggle('slow');
    });
});

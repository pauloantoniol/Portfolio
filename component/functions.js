//########################################################
//########################################################
           //FUN합ES UTILIZADAS NAS TELAS
//########################################################
//########################################################


//########################################################
//VERIFICA SE EST� VAZIO
//########################################################
function empty(mixed_var) {
    var undef, key, i, len;
    var emptyValues = [undef, null, 'null', ''];

    for (i = 0, len = emptyValues.length; i < len; i++) {
        if (mixed_var === emptyValues[i]) {
            return true;
        }
    }

    if (typeof mixed_var === 'object') {
        for (key in mixed_var) {
            // TODO: should we check for own properties only?
            //if (mixed_var.hasOwnProperty(key)) {
                return false;
            //}
        }
        return true;
    }

    return false;
}



//########################################################
//########################################################
           //FIM FUN합ES UTILIZADAS NAS TELAS
//########################################################
//########################################################














//########################################################
//########################################################
                //FUN합ES PAGE TRABALHO
//########################################################
//########################################################

$(document).ready(function(){
    $(".grid-wrap .grid figure").on("click", function(){
        var zelda = $(this).attr('trabalho');
        setTimeout(function(){window.history.pushState('', '', "/trabalhos/"+zelda+"/");},600);
    });
    
    if(!empty($("#link_trabalho").val())){
        $(".grid-wrap .grid figure[trabalho="+$("#link_trabalho").val()+"]").click();
    }
});


$('a').each(function() {
   var a = new RegExp('/' + window.location.host + '/');
   if(!a.test(this.href)) {
       $(this).click(function(event) {
           event.preventDefault();
           event.stopPropagation();
           window.open(this.href, '_blank');
       });
   }
});

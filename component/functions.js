function mudalink(zelda){
    setTimeout(function(){window.history.pushState('', '', "trabalhos/"+zelda);},600);
}

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

$(".content a[href^='/trabalhos']").attr("target","_blank");

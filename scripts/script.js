$('body').css({
        "opacity": "100",
        "transition": "1s"
        });  

/******************************/
// début boucle effet blur + text grs PERSONNAGE
$('.theBlockPersonnages').each(function(){
        $(this).on({
                mouseenter: function(){
                        $(this).find('h5').css({
                                "font-size": "30px",
                                "transition": "0.25s"
                        });
                        $(this).find('img').css({
                                "filter": "blur(3px)",
                                "transition": "0.25s"
                        });
                }, 
                mouseleave: function(){
                        $(this).find('h5').css({
                                "font-size": "25px",
                                "transition": "0.25s"
                        });
                        $(this).find('img').css({
                                "filter": "none",
                                "transition": "0.25s"
                        });
                }

        });
});
// fin boucle effet blur + text grs PERSONNAGE
/******************************/

/******************************/
// début boucle effet blur + text grs PERSONNAGE
$('.categories').each(function(){
        $(this).on({
                mouseenter: function(){
                        $(this).find('h5').css({
                                "font-size": "40px",
                                "transition": "0.25s"
                        });
                        $(this).find('img').css({
                                "filter": "blur(3px)",
                                "transition": "0.25s"
                        });
                }, 
                mouseleave: function(){
                        $(this).find('h5').css({
                                "font-size": "30px",
                                "transition": "0.25s"
                        });
                        $(this).find('img').css({
                                "filter": "none",
                                "transition": "0.25s"
                        });
                }

        });
});
// fin boucle effet blur + text grs PERSONNAGE
/******************************/

// fonction ouverute/fermeture modal
$("img").click(function(){
        $('#modal').css({
                "transition": "0.5s",
                "display": "unset"
                
        })
});

$("#fermer").click(function(){
        $('#modal').css({
                "transition": "0.5s",
                "display": "none"
        })
});

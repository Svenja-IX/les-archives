/******************************/
//smooth web loading
$('body').css({
        "opacity": "100",
        "transition": "1s"
        });  
//end smooth web loading
/******************************/


/******************************/
// début boucle effet blur + text grs PERSONNAGE
$('.theBlockInto').each(function(){
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
// début boucle effet blur + text grs INDEX
$('.categories').each(function(){
        $(this).on({
                mouseenter: function(){
                        $(this).find('h5').css({
                                "font-size": "45px",
                                "transition": "0.25s"
                        });
                        $(this).find('img').css({
                                "filter": "blur(3px)",
                                "transition": "0.25s"
                        });
                }, 
                mouseleave: function(){
                        $(this).find('h5').css({
                                "font-size": "35px",
                                "transition": "0.25s"
                        });
                        $(this).find('img').css({
                                "filter": "none",
                                "transition": "0.25s"
                        });
                }

        });
});
// fin boucle effet blur + text grs INDEX
/******************************/



/******************************/
// fonction ouverute/fermeture modal
$("img").click(function(){
        $('#modal').css({
                "transition": "0.5s",
                "display": "unset"
                
        })
});
$("#fermerAddPerso").click(function(){
        $('#modal').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

$("#inscription-btn").click(function(){
        $('#modalInscription').css({
                "transition": "0.5s",
                "display": "unset"
                
        })
});
$("#fermerInscription").click(function(){
        $('#modalInscription').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

$("#connexion-btn").click(function(){
        $('#modalConnexion').css({
                "transition": "0.5s",
                "display": "unset"
                
        })
});
$("#fermerConnexion").click(function(){
        $('#modalConnexion').css({
                "transition": "0.5s",
                "display": "none"
        })
});

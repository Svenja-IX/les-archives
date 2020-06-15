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

/******************************/
// fonction ouverute/fermeture modal suppression arme
$(".bloc-management").first().click(function(){
        $('#modal-sup-arme').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#fermer").first().click(function(){
        $('#modal-sup-arme').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal ajout arme
$(".bloc-management").last().click(function(){
        $('#modal-add-arme').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#modal-add-arme #fermer").last().click(function(){
        $('#modal-add-arme').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

/******************************/
// fonction ouverute/fermeture modal suppression personnage
$(".bloc-management").first().click(function(){
        $('#modal-sup-perso').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#fermer").first().click(function(){
        $('#modal-sup-perso').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal ajout personnage
$(".bloc-management").last().click(function(){
        $('#modal-add-perso').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#modal-add-perso #fermer").last().click(function(){
        $('#modal-add-perso').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal suppression organisation
$(".bloc-management").first().click(function(){
        $('#modal-sup-orga').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#fermer").first().click(function(){
        $('#modal-sup-orga').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal ajout organisation
$(".bloc-management").last().click(function(){
        $('#modal-add-orga').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#modal-add-orga #fermer").last().click(function(){
        $('#modal-add-orga').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal suppression planete
$(".bloc-management").first().click(function(){
        $('#modal-sup-planete').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#fermer").first().click(function(){
        $('#modal-sup-planete').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal ajout planete
$(".bloc-management").last().click(function(){
        $('#modal-add-planete').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#modal-add-planete #fermer").last().click(function(){
        $('#modal-add-planete').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal suppression vaisseau
$(".bloc-management").first().click(function(){
        $('#modal-sup-vaisseau').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#fermer").first().click(function(){
        $('#modal-sup-vaisseau').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------

// fonction ouverute/fermeture modal ajout planete
$(".bloc-management").last().click(function(){
        $('#modal-add-vaisseau').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#modal-add-vaisseau #fermer").last().click(function(){
        $('#modal-add-vaisseau').css({
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

// fonction ouverute/fermeture modal update perso
$("#perso-update-btn").click(function(){
        $('#modal-update-perso').css({
                "transition": "0.5s",
                "display": "unset"
        })
});
$("#fermer").first().click(function(){
        $('#modal-update-perso').css({
                "transition": "0.5s",
                "display": "none"
        })
});

//------------------------------------
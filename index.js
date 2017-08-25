document.addEventListener("contextmenu", function(e)
{
    e.preventDefault();
}, false);


var imagenActual = 0;

var listaImagenes = [];

$(document).ready(function()
{
    listaImagenes = $('body').data('options');

    $('#nextImageBtn').click(siguienteImagen);
    
    siguienteImagen();
});

function siguienteImagen()
{
    var imagenFile =  listaImagenes[imagenActual];
    
    $('#loadingAnimation').show();
    $('body').css('background-image', 'url(./' + imagenFile )
    .waitForImages(function()
    {
        var ocultar = function()
        {
            $('#loadingAnimation').hide();
        };
        setTimeout(ocultar, 300);
    });
        
    $('#numeroImagen').text("(" + (imagenActual + 1)  + " de " + listaImagenes.length + ")");
    
    
    if(imagenActual < listaImagenes.length - 1)
    {
        imagenActual ++;
    }
    else
    {
        imagenActual = 0;
    }
    
    $('#nextImageBtn').focus();
}

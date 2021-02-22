$(document).ready(function(){
    //Al cargar el formulario se ocultan los campos
    $(".haceCuantoTiempo").hide();
    $(".haceCuantoTiempoBautizo").hide();
    $(".cualMinisterio").hide();
    $(".diaOtroMinisterio").hide();
    $(".cualCelula").hide();
    $(".nombreLider").hide();
    $(".nombreAnfitrion").hide();
    $(".conyugue").hide();

    //Muestra el campo del nombre del conyugue si el valor es Casad@
    $("#estadoCivil").click(function(){
        var e = document.getElementById("estadoCivil");
        var text=e.options[e.selectedIndex].text;
        console.log(text);
        if (text == "Casad@"){
            $(".conyugue").show();
        }else{
            $(".conyugue").hide();
        }
    });

    //Muestra los campos de acuerdo al valor del radiobutton
    $("#cristoSi").click(function(){
        var cristo = $(this).attr("valor");
        if (cristo == "si"){
            $(".haceCuantoTiempo").show();
        }
    });

    $("#cristoNo").click(function(){
        var cristo = $(this).attr("valor");
        if (cristo == "no"){
            $(".haceCuantoTiempo").hide();
        }
    });

    $("#bautizadoSi").click(function(){
        var bautizado = $(this).attr("valor");
        if (bautizado == "si"){
            $(".haceCuantoTiempoBautizo").show();
        }
    });

    $("#bautizadoNo").click(function(){
        var bautizado = $(this).attr("valor");
        if (bautizado == "no"){
            $(".haceCuantoTiempoBautizo").hide();
        }
    });

    $("#ministerioSi").click(function(){
        var ministerio = $(this).attr("valor");
        if (ministerio == "si"){
            $(".cualMinisterio").show();
            $(".diaOtroMinisterio").show();
        }
    });

    $("#ministerioNo").click(function(){
        var ministerio = $(this).attr("valor");
        if (ministerio == "no"){
            $(".cualMinisterio").hide();
            $(".diaOtroMinisterio").hide();
        }
    });

    $("#celulaSi").click(function(){
        var celula = $(this).attr("valor");
        if (celula == "si"){
            $(".cualCelula").show();
            $(".nombreLider").show();
            $(".nombreAnfitrion").show();
        }
    });

    $("#celulaNo").click(function(){
        var celula = $(this).attr("valor");
        if (celula == "no"){
            $(".cualCelula").hide();
            $(".nombreLider").hide();
            $(".nombreAnfitrion").hide();
        }
    });
});
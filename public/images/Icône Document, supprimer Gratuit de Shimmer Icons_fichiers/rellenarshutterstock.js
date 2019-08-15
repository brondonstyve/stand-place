
if(estamos=="search"){
	
	var pag=pag*2;
	var pag1=pag-1;
	var pag2=pag;
	var screenWidth=$(window).width();
	
	/*$("#shutterstock1").load(encodeURI("rellenarshutterstock.php?filtro="+filtro+"&pag="+pag1+"&idioma="+idioma+"&screenWidth="+screenWidth+"&estamos="+estamos+"&maxWidth="+screen.width+"&shutterstock_titulo="+shutterstock_titulo+"&shutterstock_descuento="+shutterstock_descuento+"&unafila=true"));*/

/*	$("#shutterstock4").load(encodeURI("rellenarshutterstock.php?filtro="+filtro+"&pag="+pag3+"&idioma="+idioma+"&screenWidth="+screenWidth+"&estamos="+estamos+"&maxWidth="+screen.width+"&shutterstock_titulo="+shutterstock_titulo+"&unafila=true"));*/
/*	$("#shutterstock7").load(encodeURI("rellenarshutterstock.php?filtro="+filtro+"&pag="+pag2+"&idioma="+idioma+"&screenWidth="+screenWidth+"&estamos="+estamos+"&maxWidth="+screen.width+"&shutterstock_titulo="+shutterstock_titulo+"&unafila=true"));*/
if(screenWidth>900){
                $("#contenedorBusquedasRelacionadas").load(encodeURI("rellenarbusquedasrelacionadas.php?filtro="+filtro+"&idioma="+idioma+"&iconos_despues="+iconos_despues+"&iconos_antes="+iconos_antes+"&busqueda="+busqueda+"&prefijo="+prefijo+"&busquedas_relacionadas="+busquedas_relacionadas));
        }
}
if(estamos=="iconpage"){
	var screenWidth=$(window).width();
	/*$("#shutterstock1").load(encodeURI("rellenarshutterstock.php?filtro="+filtro+"&pag=1&idioma="+idioma+"&screenWidth="+screenWidth+"&estamos="+estamos+"&maxWidth="+screen.width+"&shutterstock_titulo="+shutterstock_titulo+"&shutterstock_descuento="+shutterstock_descuento+"&unafila=true"));*/

/*$("#shutterstock2").load(encodeURI("rellenarshutterstock.php?filtro="+filtro+"&pag=2&idioma="+idioma+"&screenWidth="+screenWidth+"&estamos="+estamos+"&maxWidth="+screen.width+"&shutterstock_titulo="+shutterstock_titulo+"&unafila=true"));*/

}
                                        


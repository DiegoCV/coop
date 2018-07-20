<!DOCTYPE html>
<?php
include_once 'Recibo.php';
$recibo = new Recibo(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
?>
<html lang="es">
    <head>
        <link rel="stylesheet" href="recibo.css">
    </head>
    <body>
        <div id="botonera">
            <button onClick="javascript:window.print();">Imprimir</button>
        </div>

        <div id="page1">           
            <table border="1">
			 <caption>Título de la tabla</caption>
                <thead>
                    <tr>						
                        <th colspan="3">
                            COOPVIGSAN CTA PERIODO: DEL:<?php echo $recibo->getFechaInicial(); ?> AL:<?php echo $recibo->getFechaFinal(); ?> 1? OPERATIVO CUCUTA
                            CODIGO <?php echo $recibo->getCodigo() . ' '; echo $recibo->getNombre(); ?> C.C. <?php echo $recibo->getCedula() ?> PAGINA:1
                        </th>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="33%" colspan="2">DEVENGADOS</td>
                        <td>DEDUCCIONES</td>
                        <td>DEDUCCIONES</td>
                    </tr>
                    <tr>
                        <td width="33%" rowspan="3">							
								SUBSIDIO DE TRANSPORTE <?php echo $recibo->getSubsidio();?>
								COMPENSACION ORDINARIA <?php echo $recibo->getCompensacionO();?>
								COMPENSACION EXTRAORDINARIA <?php echo $recibo->getCompensacionE();?>						
						</td>

                        <td width="33%">
                            PENSION <?php echo $recibo->getPension();?>
                            APORTES <?php echo $recibo->getAportes();?>
                            FONDOS DE CAPACITACION <?php echo $recibo->getFondo();?>
                        </td>
                        <td>
                            SALUD <?php echo $recibo->getSalud();?>
                            JARDINES LA ESPERANZA <?php echo $recibo->getCementerio();?>
                        </td>
                    </tr>
					
					<tr>					
						<td colspan="3">
						152
						125
						365
						</td>
					</tr>
                    <tr>
                        <th>
                            TOTAL A PAGAR
                        </th>
                        <th colspan="2">
                            FIRMA
                        </th>
                    </tr>
                </tbody>
            </table>
			<!--
<th width="208" height="85">
							<img src="logo.png" width="208" height="85" alt="logo"/>
						</th>-->
        </div>         
    </body>
</html>
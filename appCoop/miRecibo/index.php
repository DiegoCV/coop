<!DOCTYPE html>
<?php 
include_once 'Recibo.php';
$recibo = new Recibo("2017/02/02","2022/87/52",12345,"DIEGO ALIRIO CARRASCAL VILLAMIZAR","1234567899",'123.123.20', '123.123.20','123.123.20', '123.123.20','123.123.20', '123.123.20','123.123.20','123.123'); 
?>
<html lang="es">
    <head>
        <link rel="stylesheet" href="recibo.css">
    </head>
	<style>
		table {
			border-collapse: collapse;
			 font: bold 90% monospace;
			
		}
		td {
			border: none;
		}
	</style>
    <body>
        <div id="botonera">
            <button onClick="javascript:window.print();">Imprimir</button>
        </div>

        <div id="page1">           
            <table border="1">
                <thead>
                    <tr>						
                        <th colspan="6">
                            COOPVIGSAN CTA PERIODO: DEL:<?php echo $recibo->getFechaInicial(); ?> AL:<?php echo $recibo->getFechaFinal(); ?> 1? OPERATIVO CUCUTA
                        </th>                    
                    </tr>
					<tr>						
                        <th colspan="6">
                            CODIGO <?php echo $recibo->getCodigo() . ' '; echo $recibo->getNombre(); ?> C.C. <?php echo $recibo->getCedula() ?> PAGINA:1
                        </th>                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="33%" colspan="2">&nbsp;DEVENGADOS</td>
                        <td width="33%" colspan="2">&nbsp;DEDUCCIONES</td>
                        <td width="33%" colspan="2">&nbsp;DEDUCCIONES</td>
                    </tr>
					<tr>
						<td colspan = "6">
							&nbsp;
						</td>
					</tr>
                    <tr>
                        <td>							
							&nbsp;SUBSIDIO DE TRANSPO					
						</td>
						<td>
							<?php echo $recibo->getSubsidio();?>
						</td>

                        <td>
                            &nbsp;PENSION
                        </td>
						<td>
							<?php echo $recibo->getPension();?>
						</td>
                        <td>
                            &nbsp;SALUD 
                        </td>
						<td>
							<?php echo $recibo->getSalud();?>
						</td>
                    </tr>
					<tr>
                        <td width="33%">							
							&nbsp;COMPENSACION ORDINA					
						</td>
						<td>
							<?php echo $recibo->getCompensacionO();?>
						</td>

                        <td width="33%">
                            &nbsp;APORTES 
                        </td>
						<td>
							<?php echo $recibo->getAportes();?>
						</td>
                        <td rowspan="2">
                            &nbsp;JARDINES ESPERANZA
                        </td>
						<td rowspan="2"> 
							<?php echo $recibo->getCementerio();?>
						</td>
                    </tr>
					<tr>
                        <td width="33%">							
							&nbsp;COMPENSACION EXTRAO						
						</td>
						<td>
							<?php echo $recibo->getCompensacionE();?>
						</td>

                        <td width="33%">
                            &nbsp;FONDO CAPACITACION 
                        </td>
						<td>
							<?php echo $recibo->getFondo();?>
						</td>
                    </tr>
					<tr>
						<td colspan = "6">
							&nbsp;
						</td>
					</tr>
					<tr>	
						<td>
							&nbsp;
						</td>
						<td>
							'1.123.123.20'
						</td>
						<td>
							&nbsp;
						</td>
						<td>						
							'123.123.20'						
						</td>
						<td>
							&nbsp;
						</td>
						<td>
							'123.123.20'
						</td>
					</tr>
					<tr>
						<td colspan = "6">
							&nbsp;
						</td>
					</tr>
                    <tr>
                        <td>
                            TOTAL A PAGAR 
                        </td>
						<td>
							'123.123.20'
						</td>
                        <td>
                            &nbsp; &nbsp; &nbsp;FIRMA
                        </td>
						 <td colspan="3">
                            ________________
                        </td>
                    </tr>
                </tbody>
            </table>		
        </div>         
    </body>
</html>
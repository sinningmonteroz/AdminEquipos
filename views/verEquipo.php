<?php
require('vendor\setasign\fpdf\fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetTitle('Acta de entrega');
$pdf->SetAuthor('Wurth Colombia');
$pdf->SetCreator('Ronaldo Sinning');
$pdf->Cell(0, 10, 'Acta de entrega', 0, 1);
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(0, 7, utf8_decode("Entre los suscritos, de una parte, la sociedad WÜRTH COLOMBIA S.A.S representada por MAURICIO JOU GENARD en su calidad de Representante Legal de esta sociedad y de la otra parte la señor(a) " 
    . $equipo['persona'] . " TRABAJADOR(A) de esta compañía, identificado(a) con cédula " . $equipo['documento_persona'] .", dejamos constancia de que el TRABAJADOR ha recibido de parte de esta empresa un(a) " 
    . $equipo['TipoEquipo'] . " marca " . $equipo['Marca'] . ", serial " . $equipo['Serial'] . ", modelo " . $equipo['Modelo'] 
    . " , color IRON GREY, de 10.5 pulgadas de pantalla, memoria RAM de  3 GB, memoria interna de 32 GB, cámara frontal, cámara posterior y junto con los siguientes accesorios: Cable de datos, cargador y manual de uso y forro Targus Black; todo lo cual se encuentra en perfecto estado de funcionamiento y apariencia, para el cabal desempeño de sus funciones en el cargo de EJECUTIVO DE VENTAS, dispositivo que para su conectividad requiere tener acceso a una red Wifi."), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("Así mismo pactamos lo siguiente:"), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("1. El trabajador se obliga a mantener el equipo anteriormente descrito en perfectas condiciones de uso y apariencia, y a limitar su uso al desarrollo de sus labores como TRABAJADOR de la compañía."), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("2. Queda claro que la entrega de este dispositivo Tablet y el pago del plan de voz y datos que actualmente tienen en ningún caso constituirán salario ni factor del mismo para ningún efecto, por cuanto EL EMPLEADOR realiza esta entrega y asume este costo única y exclusivamente con el fin de facilitarle al TRABAJADOR el cabal desempeño de sus funciones y por así pactarse de manera expresa, el cual se suministrará solo mientras el cargo que el TRABAJADOR ocupe dentro de la compañía requiera del uso de dicho auxilio, y de acuerdo con las posibilidades económicas de esta."), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("3. De otro lado, el TRABAJADOR autoriza mediante la suscripción del presente documento a la compañía para efectuar las deducciones respectivas de los salarios ordinarios y extraordinarios, vacaciones, bonificaciones, indemnizaciones, prestaciones sociales que le correspondan a partir de la fecha y/o la liquidación final de su contrato y de cualquier otra suma que perciba, en caso de pérdida, reposición por hurto o cualquier avería, daño o ruptura del equipo Tablet de que se trata, de acuerdo con lo estipulado en el presente documento."), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("4. Igualmente pactan las partes que en el evento de que el equipo presente fallas el trabajador deberá entregarlo a EL EMPLEADOR con el fin de obtener un informe técnico por parte del fabricante o distribuidor. Si las fallas se presentan antes del vencimiento de la garantía (12 meses) se solicitará su reposición, si se determina que hubo mal uso del equipo, el valor de compra será cancelado por el TRABAJADOR."), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("5. Se deja expresa constancia que el equipo que le es entregado al TRABAJADOR es de propiedad exclusiva del EMPLEADOR, por lo que su uso debe limitarse a actividades laborales, por lo que el TRABAJADOR estará obligado a retornarlo al EMPLEADOR, una vez finalice el contrato de trabajo, por cualquier causa. Así mismo, las partes dejan constancia que el dispositivo cuenta con un GPS para el rastreo y localización, tanto del dispositivo como de su portador, por lo cual EL TRABAJADOR autoriza a que la compañía haga seguimiento del equipo durante la jornada laboral o inclusive fuera de está, en caso de pérdida, extravío o hurto, sin que ello pueda considerarse como una intromisión a la intimidad del trabajador."), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("6. Finalmente, el TRABAJADOR autoriza a la Compañía para realizar la revisión en cualquier momento de los archivos y programas instalados en la Tablet y se podrá pactar como justa causa de terminación del contrato de trabajo el mal uso o destinación diferente de los equipos que se suministren, la pérdida, daño u omisión al cuidado mínimo, salvo el deterioro normal."), 0);
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("Para constancia se firma en Bogotá D.C. a los 12 días del mes de enero del 2024."), 0);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->MultiCell(0, 7, utf8_decode("EMPLEADOR                                                            	            TRABAJADOR"), 0);
$pdf->MultiCell(0, 7, utf8_decode("N° Cedula ____________________                            	                N° Cedula ___________________"), 0);
$pdf->Ln();
$pdf->Output();
?>

<html>
<head>
    <title>Reyes Group Franquicia</title>
</head>
<body>
    <div style='width: 100%;' align='center'>
        <table width='700' height='300' align='center' bgcolor='#ffffff' cellpadding='0' cellspacing='0' style='border:1px solid #f6f6f6;'>
            <tbody>
                <tr>
                    <td align='left' bgcolor='#ffffff' style='text-align:center;'>
                        <table width='700' height='300' bgcolor='#000' cellpadding='0' cellspacing='0'>
                            <tbody>
                                <tr height='100' style='font-family:sans-serif, Arial, Helvetica;text-align:center;font-size:x-large'> 
                                    <td bgcolor='#f2f2f2' color='#000' colspan='3'>Contacto Franquicia REYES</td>
                                </tr>
                                <tr height='400'>
                                    <td bgcolor='#fff' style='border-left:1px solid #f2f2f2;border-right:1px solid #f2f2f2;'>
                                        <table style='font-family:sans-serif, Arial, Helvetica'>
                                            <tbody>
                                                <tr>
                                                    <td width='10'></td>
                                                    <td style='text-align:left'>
                                                        <p>&nbsp;</p>
                                                        <p>INFORMACIÓN DE CONTACTO:</p>
                                                        
                                                        <p><b>Nombre:</b> {{ Input::get('nombre') }} </p>
                                                        <p><b>Apellidos:</b> {{ Input::get('apellidos') }} </p>
                                                        <p><b>Email:</b>  {{ Input::get('email') }} </p>
                                                        <p><b>Tel. fijo:</b>  {{ Input::get('tel') }} </p>
                                                        <p><b>Celular:</b>  {{ Input::get('cel') }} </p>
                                                        
                                                        <p>&nbsp;</p>
                                                        <p>INFORMACIÓN DE FRANQUICIA:</p>

                                                        <p><b>Ciudad donde se desea abrir la franquicia:</b>  {{ Input::get('ciudad') }} </p>
                                                        <p><b>Cuenta con local o terreno?</b>  {{ (Input::get('local'))?:'N/A' }} </p>
                                                        <p><b>Ubicación del local o terreno:</b>  {{ (Input::get('ubicacion_local'))?:'N/A' }} </p>
                                                        <p><b>Interés por el modelo de negocio?</b>  {{ (Input::get('porque_interes'))?:'N/A' }} </p>
                                                        <p><b>Pertenece o ha pertenecido a una franquicia?</b>  {{ (Input::get('pertenece_franquicia'))?:'N/A' }} </p>
                                                        <p><b>Actividad económica personal:</b>  {{ (Input::get('actividad_economica'))?:'N/A' }} </p>
                                                        <p><b>Cuenta con algún negocio propio?</b>  {{ (Input::get('negocio_propio'))?:'N/A' }} </p>
                                                        <p><b>Cuál?</b>  {{ (Input::get('cual_negocio'))?:'N/A' }} </p>
                                                        <p><b>Quién operará la franquicia?</b>  {{ (Input::get('quien_opera'))?:'N/A' }} </p>
                                                        <p><b>El capital a invertir es de origen:</b>  {{ (Input::get('origen_inversion'))?:'N/A' }} </p>
                                                        <p><b>¿Que cantidad considera invertir?</b>  {{ (Input::get('cantidad_inversion'))?:'N/A' }} </p>
                                                        <p><b>¿Esta convencido del compromiso que representa abrir una franquicia?</b>  {{ (Input::get('compromiso_franquicia'))?:'N/A' }} </p>
                                                        <p><b>¿Por qué?</b>  {{ (Input::get('porque_compromiso'))?:'N/A' }} </p>
                                                        <p>&nbsp;</p>
                                                        <p><a style='color:#3a6f8f;text-decoration:none;' href='http://www.reyescantina.com' target='_blank'><span style='text-transform:uppercase;'></span><br>Reyes Cantina</a></p>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td width='10'></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr bgcolor='#f2f2f2'>
                                    <td colspan='3'>
                                        <p>&nbsp;</p>
                                        <p style='font-family:Arial, Helvetica, sans-serif, Trebuchet MS;font-size:x-small;color:#000;'>
                                            AVISO DE CONFIDENCIALIDAD: Este mensaje es confidencial y/o puede contener informaci&oacute;n privilegiada.
                                            Si usted no es el destinatario o no es alguna persona autorizada por &eacute;ste para recibir el mensaje,
                                            usted no deber&aacute; utilizar, copiar, revelar o tomar ninguna acci&oacute;n basada en este mensaje o
                                            cualquier otra informaci&oacute;n incluida en &eacute;l. Si recibe este mensaje por error, por favor
                                            notif&iacute;quelo de inmediato al remitente y b&oacute;rrelo de su computadora.<br>
                                        </p>
                                        <p>&nbsp;</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
include_once '../controladores/ControladorEstructura.php';
?>
    <!DOCTYPE HTML>
    <html>
    <?php echo ControladorEstructura::getHeader(); ?>

    <body>
        <!--MENU NAVEGACION -->
        <?php echo ControladorEstructura::getNavbar(); ?>
        <!--MENU NAVEGACION -->

        <div class="container" class='col-md-11 col-md-offset-1'>
            <div class="single">
                <h2>Publicar oferta de trabajo</h2>
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable">Publicar como</label>
                            <div class="col-md-9">
                                <select path="tipoCuenta" name="experiencia" class="form-control input-sm">
                                    <option value="">Empresa</option>
                                    <option value="">Independiente</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control19
                                   -lable" for="firstName">Puesto</label>
                            <div class="col-md-9">
                                <input type="text" path="firstName" name="titulo" class="form-control input-sm" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable">Experiencia</label>
                            <div class="col-md-9">
                                <select path="tipoCuenta" name="experiencia" class="form-control input-sm">
                                    <option value="">Seleccionar una opción </option>
                                    <option value="">Ninguna</option>
                                    <option value="">1 a 3 años</option>
                                    <option value="">Más de 3 años</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable">Escolaridad</label>
                            <div class="col-md-9">
                                <select path="tipoCuenta" id="escolaridad" class="form-control input-sm">
                                    <option value="">Seleccionar una opción </option>
                                    <option value="">Bachillerato</option>
                                    <option value="">Profesional tecnico</option>
                                    <option value="">Licenciatura</option>
                                    <option value="">Posgrado</option>
                                    <option value="">Maestria</option>
                                    <option value="">Doctorado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable">Turno</label>
                            <div class="col-md-9">
                                <select path="tipoCuenta" name="tiempo" class="form-control input-sm">
                                    <option value="">Seleccionar una opción </option>
                                    <option value="">Tiempo completo</option>
                                    <option value="">Medio tiempo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable">Horario</label>
                            <div class="col-md-9">
                            <p class="col-md-3 col-sm-6 text-center">Entrada</p>
                                <select name="entrada" class="col-md-3 col-sm-12">
                                    <option>12:00</option>
                                    <option>1:00</option>
                                    <option>2:00</option>
                                    <option>3:00</option>
                                    <option>4:00</option>
                                    <option>5:00</option>
                                    <option>6:00</option>
                                    <option>7:00</option>
                                    <option>8:00</option>
                                    <option>9:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>

                                </select>

                                <p class="col-md-3 col-sm-6 text-center">Salida</p>
                                <select name="salida" class="col-md-3 col-sm-12">
                                    <option>12:00</option>
                                    <option>1:00</option>
                                    <option>2:00</option>
                                    <option>3:00</option>
                                    <option>4:00</option>
                                    <option>5:00</option>
                                    <option>6:00</option>
                                    <option>7:00</option>
                                    <option>8:00</option>
                                    <option>9:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable" for="firstName">Funciones a desempeñar</label>
                            <div class="col-md-9">
                                
                                <textarea type="text"  name="funciones" class="form-control "></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable">Conocimientos requeridos</label>
                           <div class="col-md-9">
                                
                                <textarea type="text"  name="conocimientos" class="form-control "></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="col-md-3 control-lable">Observaciones</label>
                            <div class="col-md-9">
                                 <textarea type="text"  name="observaciones" class="form-control "></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="m_1">Prestaciones de ley</h5>
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Seguro social
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Fondo para el retiro
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Prima vacacional
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Pago por horas extras
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Bono de productividad
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Aguinaldo
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Bono de puntualidad
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Fondo para vivienda
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h5 class="m_1">Dias laborables </h5>
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Domingo
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Lunes
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Martes
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Miercoles
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Jueves
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Viernes
                                            </td>
                                        </tr>
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                Sábado
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <h5 class="m_1">Documentación requerida </h5>
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr class="unread checked">
                                    <td class="hidden-xs">
                                        <input type="checkbox" class="checkbox">
                                    </td>
                                    <td class="hidden-xs">
                                        Curriculum vitae
                                    </td>
                                </tr>
                                <tr class="unread checked">
                                    <td class="hidden-xs">
                                        <input type="checkbox" class="checkbox">
                                    </td>
                                    <td class="hidden-xs">
                                        Título
                                    </td>
                                </tr>
                                <tr class="unread checked">
                                    <td class="hidden-xs">
                                        <input type="checkbox" class="checkbox">
                                    </td>
                                    <td class="hidden-xs">
                                        Solicitud de empleo
                                    </td>
                                </tr>
                                <tr class="unread checked">
                                    <td class="hidden-xs">
                                        <input type="checkbox" class="checkbox">
                                    </td>
                                    <td class="hidden-xs">
                                        Comprobante de domicilio
                                    </td>
                                </tr>
                                <tr class="unread checked">
                                    <td class="hidden-xs">
                                        <input type="checkbox" class="checkbox">
                                    </td>
                                    <td class="hidden-xs">
                                        Carta de recomendación
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="m_1">Marcar como oferta exclusiva</h5>
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr class="unread checked">
                                    <td class="hidden-xs">
                                        <input type="checkbox" class="checkbox">
                                    </td>
                                    <td class="hidden-xs">
                                        Aceptar
                                    </td>
                                </tr>                                                                                                                               
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" name="publicarOferta" value="PUBLICAR" class="btn btn-primary btn-sm">
                    </div>
                </div>
                    </div>
                </div>                
            </div>
        </div>
        <?php echo ControladorEstructura::getFooter(); ?>
    </body>

    </html>
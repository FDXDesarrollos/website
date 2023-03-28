<?php

function fecha() {
    $mes = date("n");
    setlocale(LC_TIME, "spanish");
    $mesawo = strftime("%B", mktime(0, 0, 0, $mes, 1, 2000));

    return $mesawo. " " . date("Y");
}

$fecha = fecha();

$html = <<<EOF
    <table border="0">
        <tr>
            <td style="background-color:#283878; text-align: center;" height="30px">
                <span style="font-size:22px; color:#fff;">Programador Web y Desktop</span>
            </td>
        </tr>
        <tr>
            <td style="background-color:#FA4D3D; text-align: center;" width="180px" height="25px">
                <span style="font-size:14px; font: arial bold; color:#fff;">$fecha</span>
            </td>
            <td style="background-color:#5665A2; text-align: center;" width="493px" height="25px">
                <span class="centrado" style="font-size:16px; font: arial bold; color:#fff;">Federico Ju&aacute;rez Velasco</span>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div id="photo">
                    <img src="../img/me.jpg" width="140" height="165" alt="Federico Ju&aacute;rez Velasco" />
                </div>
            </td>
            <td>
                <table border="0" style="font-size:12px;">
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><b>Profesi&oacute;n: </b> &nbsp;Lic. en Inform&aacute;tica</td>
                        <td><b>E-mail: </b> &nbsp;fdxprogrammer@gmail.com</td>
                    </tr>
                    <tr>
                        <td><b>Tel.: </b> &nbsp;(55)5434-0487</td>
                        <td><b>WebSite:</b>&nbsp;fdxdesarrollo5.000webhostapp.com</td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                        <td colspan="2"><p><b>Extracto: </b> &nbsp;Soy un desarrollador en tecnologías Web Back-end con Java, PHP/MySQL y 
                                              Front-end con JavaScript, HTML5 & CSS3, cuento con m&aacute;s de 7 a&ntilde;os de experiencia, trabajo y 
                                              resido en la zona conurbada oriente de la CDMX. Me apasiona el desarrollo de software, pues me gusta 
                                              poder ofrecer nuevas perspectivas, impulsar mejoras y automatizar procesos adecuadamente.</p>

                            <!-- <p>Tengo intenciones de laborar en una organización reconocida para
                                aportar más valor a la misma mediante mi experiencia, conocimiento y al mismo tiempo mejorar mis habilidades de desarrollo.</p> -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
    <h3 style="color: #0B0B61; text-align:center; font-size:12px;">FORMACIÓN ACADÉMICA</h3>
    <br />
        
    <table>
        <tr>
            <td><b>Superior: </b> &nbsp;Universidad Insurgentes, Plantel Norte</td>
        </tr>
        <tr>
            <td><b>Carrera: </b> &nbsp;Licenciatura en Informática Administrativa</td>
        </tr>
        <tr>
            <td><b>Años cursados: </b> &nbsp;3</td>
        </tr>
        <tr>
            <td><b>Documento Recibido: </b> &nbsp;T&iacute;tulo y C&eacute;dula Profesional</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><b>Medio Superior: </b> &nbsp;CONALEP Plantel Netzahualcóyotl III</td>
        </tr>
        <tr>
            <td><b>Carrera: </b> &nbsp;Profesional Técnico en Informática</td>
        </tr>
        <tr>
            <td><b>Años Cursados: </b> &nbsp;3</td>
        </tr>
        <tr>
            <td><b>Documento Recibido: </b> &nbsp;T&iacute;tulo y C&eacute;dula Profesional</td>
        </tr>
    </table>

    <br />
    <h3 style="color: #0B0B61; text-align:center; font-size:12px;">CURSOS</h3>
    <br />
        
    <table>
        <tr>
            <td>
                <ul>
                    <li>(2021 Udemy) Spring Boot 2 & Spring MVC-Desarrollo web profesional</li>
                    <li>(2021 Udemy) Spring Boot 2: Creando webapp de cero a experto</li>
                    <li>(2020 Udemy) Desarrollo de Videojuegos 2D con C++</li>
                    <li>(2015 MediaTech) Desarrollo de Aplicaciones Web con PHP y MySQL</li>
                </ul>
            </td>
        </tr>
    </table>
        
    <br />
    <h3 style=" color: #0B0B61; text-align:center; font-size:12px;">HABILIDADES Y CONOCIMIENTO</h3>
    <br />
    
   <table>
        <tr>
            <td><b>Lenguajes: </b> &nbsp;Java, PHP, Python, .Net, C/C++, JavaScript, HTML5 y CSS3.</td>
        </tr>
        <tr>
            <td><b>Framewoks: </b> &nbsp;Spring Boot, Codelgniter 3, Bootstrap y jQuery.</td>
        </tr>
        <tr>
            <td><b>Bases de Datos: </b> &nbsp;MySQL, SQLServer y Access.</td>
        </tr>
        <tr>
            <td><b>IDE's: </b> &nbsp;Spring Tool Suite, NetBeans, CodeBlocks  y Visual Studio 2010.</td>
        </tr>
        <tr>
            <td><b>Sistemas Operativos: </b> &nbsp;Ubuntu Linux 20.04 LTS, Fedora Linux 35, Windows 7 y 8.</td>
        </tr>
        <tr>
            <td><b>Ofimática: </b> &nbsp;LibreOffice Community y Microsoft Office 2007.</td>
        </tr>        
        <tr>
            <td><b>Soporte: </b> &nbsp;Mantenimiento preventivo, correctivo e instalación y mantenimiento de redes LAN.</td>
        </tr>
    </table>
    
    <br />
    <h3 style=" color: #0B0B61; text-align:center; font-size:12px;">EXPERIENCIA LABORAL</h3>
    <br />
    
   <table>
        <tr><td><b>Inicio: </b> &nbsp;junio 2007 - Actual</td></tr>
        <tr>
            <td><b>Organización: </b> &nbsp;Policía Bancaria e Industrial</td>
        </tr>
        <!-- <tr>
            <td><b>Dirección: </b> &nbsp;Poniente 128 No 177 Col. Nueva Vallejo Del.: Gustavo A. Madero Tel. (55)8948-0786</td>
        </tr>-->
        <tr>
            <td><b>Puesto: </b> &nbsp;Desarrollador de Aplicaciones</td>
        </tr>
         <tr>
            <td><b>Actividades: </b> &nbsp;Toma de requerimientos, análisis, diseño, programación y mantenimiento de aplicaciones informáticas de gestión para las diferentes áreas administrativas de la corporación.
            
            <p>Teniendo como patrón de diseño el MVC(Modelo Vista Controlador), utilizando herramientas como: Java 1.8, PHP 7.3, MySQL 5, JavaScript (Framework jQuery), HTML5 y CSS3.</p>
            
            <p>Migración de aplicaciones legacy VB6 a una plataforma Web con las tecnologías antes mencionadas así como diferentes funciones administrativas.</p>
            </td>
        </tr>
    </table>
EOF;

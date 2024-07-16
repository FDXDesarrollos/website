<?php

function fecha() {
    $mes = date("n");
    setlocale(LC_TIME, "spanish");
    $mesawo = strftime("%B", mktime(0, 0, 0, $mes, 1, 2000));

    return $mesawo. " " . date("Y");
}

$fecha = fecha();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>&lt;code&gt;fdxdesarrollos&lt;/code&gt;</title>
	</head>
	<body style="background-color: #0f3254; font-family: sans-serif, monospace, Verdana;">
		<div id="wrapper" style="width: 800px; height: 800px; margin: 0 auto 0 auto; background-color: #FFF;">
			<div id="header" style="width: 800px; height: 200px; background-color: #b4bdc6;">
				<img src="../img/me.jpg" alt="Federico Juarez" style="border-radius:50%; width:170px; height:170px; margin: 15px 0px 0px 45px;"> <!-- transform: scaleX(-1) -->
				<div style="float: right; width: 580px; height: 150px;">
					<div style="margin: 20px 0px 0px 20px; width: 540px;">
						<h1 style="color:#084B8A;">FEDERICO JU&Aacute;REZ VELASCO</h1>
						<h2 style="color:#084B8A;">DESARROLLADOR WEB Y DESKTOP</h2>
						<h3 style="color:#12540f; text-align: right;"><?=$fecha?></h3>
					</div>
				</div>
			</div>

			<div id="sidebar" style="width: 250px; margin: 0 auto 0 auto; padding-left: 10px; padding-right: 10px; background-color: #e8eaec; float: left;">
				<h3 style="color:#084B8A; text-align: center;">Contacto</h3>
				<img src="../img/icons/phone.png" style="width: 20px; height: 20px;" />&nbsp;&nbsp;&nbsp;55 5434 0487
				<br>
				<img src="../img/icons/mail.png" style="width: 20px; height: 15px;" />&nbsp;&nbsp;&nbsp;
					<a href="mailto:fdxdesarrollos@gmail.com" style="font-size: 12px; text-decoration: none;">
						fdxdesarrollos@gmail.com
					</a>
				<br>
				<img src="../img/icons/world.png" style="width: 20px; height: 20px;" />&nbsp;&nbsp;&nbsp;
				<a href="https://fdxdesarrollo5.000webhostapp.com/" style="font-size: 11px; text-decoration: none;">
					fdxdesarrollo5.000webhostapp.com
				</a>
				<br>
				<hr>
				<h3 style="color:#084B8A; text-align: center;">
					<img src="../img/icons/user.png" style="width: 20px; height: 20px;" />
					Sobre Mí
				</h3>
				<p style="text-align: justify; padding-right: 10px; font-size: 14px;">
                    Soy desarrollador en tecnologías Web. Me apasiona el desarrollo de software, pues me gusta poder ofrecer nuevas perspectivas, impulsar mejoras y automatizar procesos adecuadamente.
                    <br><br>
                    Me gustaria ser parte de un equipo que me permita exponer las competencias requeridas, desempeñar mis habilidades y poner en practica mis conocimientos y experiencia, convirtiendome asi en un elemento que aporte a la organización lo necesario para el cumplimiento de sus objetivos.
				</p>
				<hr>
				<h3 style="color:#084B8A; text-align: center;">
					<img src="../img/icons/shapes.png" style="width: 20px; height: 20px;" />
					Aptitudes
				</h3>
				<p>
					<ul>
						<li>Autodidacta</li>
						<li>Responsable</li>
						<li>Organizado</li>
						<li>Honesto</li>
					</ul>
				</p>
				<hr>
				<h3 style="color:#084B8A; text-align: center;">
					<img src="../img/icons/languaje.png" style="width: 20px; height: 20px;" />
					Idiomas
				</h3>
				<p>
					<ul>
						<li>Español nativo</li>
						<li>Inglés Técnico</li>
					</ul>
				</p>
				<br>
			</div>

			<div id="content" style="width: 790px; margin: 0 auto 0 auto; padding-left: 10px; background-color: #fff;">
				<h3 style="color:#084B8A; text-align: center;">
					<img src="../img/icons/graduation.png" style="width: 25px; height: 20px;" />
					FORMACIÓN ACADÉMICA
				</h3>
				<p style="font-size: 14px;">
					<strong>Universidad Insurgentes, Plantel Norte</strong>&nbsp;
					<span style="font-style: italic;">(agosto 2011 - julio 2014)</span><br>
					Licenciatura en Informática Administrativa<br>
					<strong>Documento Recibido</strong>: Título y Cédula Profesional
				</p>
				<p style="font-size: 14px;">
					<strong>CONALEP, Plantel Nezahualcóyotl III</strong>&nbsp;
					<span style="font-style: italic;">(agosto 1998 - julio 2001)</span><br>
					Profesional Técnico en Informática<br>
					<strong>Documento Recibido</strong>: Título y Cédula Profesional
				</p>
				
				<h3 style="color:#084B8A; text-align: center;">
					<img src="../img/icons/award.png" style="width: 20px; height: 20px;" />
					CURSOS
				</h3>
				<p style="font-size: 14px;">
				    <strong>> </strong>(2023 Udemy) Spring Boot y Angular: Creando aplicaciones full stack<br>
					<strong>> </strong>(2022 Udemy) Angular & Spring Boot: Creando web app full stack<br>
					<strong>> </strong>(2021 Udemy) Spring Boot 2 & Spring MVC Desarrollo Web<br>
					<strong>> </strong>(2015 MediaTech) Desarrollo de Aplicaciones Web con PHP y MySQL
				</p>

				<h3 style="color:#084B8A; text-align: center; ">
					<img src="../img/icons/tools.png" style="width: 20px; height: 20px;" />
					HABILIDADES
				</h3>
				<p style="font-size: 14px;">
					<strong>Lenguajes</strong>: Java, PHP, Python, C#, VB.Net, C/C++, JavaScript, HTML 5 y CSS 3.<br>
					<strong>Framewoks</strong>: Spring Boot, Angular, Codelgniter 3, Bootstrap y jQuery.<br>
					<strong>Bases de Datos</strong>: MySQL (Views, Procedures, Triggers), SQLServer y Access.<br>
					<strong>Sistemas Operativos</strong>: Ubuntu Linux, Fedora Linux, Windows.<br>
					<strong>Ofimática</strong>: LibreOffice Community y Microsoft Office.<br>
				</p>

				<h3 style="color:#084B8A; text-align: center; ">
					<img src="../img/icons/user-gear.png" style="width: 25px; height: 20px;" />
					EXPERIENCIA LABORAL
				</h3>
				<p style="font-size: 14px;">
					<strong>Inicio</strong>: junio 2007 - Actual<br>
					<strong>Organización</strong>: Policía Bancaria e Industrial<br>
					<strong>Puesto</strong>: Desarrollador de Aplicaciones<br>
					<strong>Actividades</strong>: Toma de requerimientos, análisis, diseño, programación y mantenimiento de aplicaciones informáticas de gestión en las diferentes áreas administrativas de la corporación.
				</p>
				<p style="font-size: 14px;">
					Desarrollo, implementación, mantenimiento y seguimiento de proyectos como: Sistemas Web, Bases de Datos, Servidores y Maquinas Virtuales.
				</p>
				<p style="font-size: 14px;">
					Migración de aplicaciones desktop desarrolladas en VB6 a una plataforma Web con las tecnologías antes mencionadas así como diferentes funciones administrativas.
				</p>
				<p style="font-size: 14px;">
					Diseño, implementación y administración de soluciones para el respaldo de aplicaciones y bases de datos.
				</p>
				<br>
			</div>

			<div id="footer" style="width: 800px; height: 80px; background-color: #b4bdc6; float: left; margin-bottom: 20px;">
				<br>
				<table width="100%">
					<tr style="text-align: center;">
						<td>
							<a href="https://github.com/FDXDesarrollos" title="GitHub">
								<img src="../img/icons/github.png" style="width: 30px; height: 30px;" />
							</a>
						</td>
						<td>
							<a href="https://www.facebook.com/frederick.juarezvelasco" title="Facebook">
								<img src="../img/icons/facebook.png" style="width: 30px; height: 30px;" />
							</a>
						</td>
						<td>
							<a href="https://mx.linkedin.com/in/federico-ju%C3%A1rez-833313b6" title="Linkedin">
								<img src="../img/icons/linkedin.png" style="width: 30px; height: 30px;" />
							</a>
						</td>
					</tr>
				</table>
			</div>
 		</div>
	</body>
</html>

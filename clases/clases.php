

<?php
class funcion {

public function menu(){
 echo "<div id='menu'>";
 echo "<div id='button'>";
 echo "<ul>";
 echo "<li><a href='index.php'>Inicio</a></li>";
 echo "<li ><a href='index.php?index=2'>Futbol</a>";
		echo "<ul>";
			echo "<li><a href='index.php?index=2'>Futbol Profesional</a></li>";
			echo "<li><a href='index.php?index=6'>Juveniles</a></li>";
			echo "<li><a href='index.php?index=infantil-sede'>Infantil - sede</a></li>";
		echo "</ul>";
echo "</li>";		
echo "<li><a href='index.php?index=3'>Otros Deportes</a>";
	echo "<ul>";
		echo "<li><a href='index.php?index=3'>Hockey femenino</a></li>";
		echo "<li><a href='index.php?index=basquet'>Basquet</a></li>";
		echo "<li><a href='index.php?index=5'>Tenis</a></li>";
		echo "<li><a href='index.php?index=7'>Karate</a></li>";
		echo "<li><a href='index.php?index=8'>Chaiu do kwan</a></li>";
		echo "<li><a href='index.php?index=12'>Gimnasio</a></li>";
		echo "<li><a href='index.php?index=patin-artistico'>Patin Art&iacute;stico</a></li>";
		echo "</li>";
	echo "</ul>";
echo "</li>";
/*echo "<li><a href='index.php?index=9'>Secretaria de deporte</a></li>";*/
echo "<li><a href='index.php?index=10'>Merendero</a></li>";
echo "<li><a href='index.php?index=11'>Instituci&oacute;n</a></li>";
 echo"</ul></div></div>"; 
}

public function cuerpo(){
echo "<div class='cuerpo'>";
	$this->right();
	$this->center();
echo "</div>";
}

public function pie(){
echo "<div id='piepagina'><br>";
echo "<center>Sitio Oficial de la Secretaria de deportes del Club Almirante Brown</center><br>";
echo "<center>&copy; 2013 Jes&uacute;s Tissera</center>";
echo "</div>";
echo "</body>";
echo "</html>";
}

public function right(){
echo "<div id='right'>";
echo "<div class='imagen_letras'><H1>FECHA N°15</H1></div>";
echo "<div class='encuentro'><img src='img/versus.jpg'></div>";
echo "<div class='imagen_letras'>";
echo "<B>Dia:</B>Domingo 3<br><b>Horario:</b>19 hs<br><b>Arbitro:</b>Mariano Gonzalez<br><b>Estadio:</b>Presbítero Bartolomé Grella<br><b>Proxima Fecha:</b>Brown Adrogue<br>";
echo "</div>";
echo "<div class='novedad'><img src='img/8.jpg'></div><br>";
echo "<div class='imagen_letras'><b>Felicitaciones a Luis Arias por su debut en primera divisi&oacute;n.</b><br>Almirante sigue promocionando jugadores a la primera categor&iacute;a.<br> Luis se suma a una larga lista compuesta por jugadores como Ortiz, Ibars, Gimenez, Precedo,Guitierrez, entre otros.</div>";
echo "<div class='propagandas'><a href='http://www.aukans.com/'><img src='img/sponsors/1.jpg'></a></div><br>";
echo "<div class='propagandas'><img src='img/sponsors/2.jpg' ></div>";
echo "<div class='propagandas'><img src='img/sponsors/3.jpg'></div>";
echo "<div class='propagandas'><img src='img/sponsors/4.jpg'></div>";
echo "<div class='propagandas'><a href='http://www.distabile.com.ar/'><img src='img/sponsors/5.jpg'></a></div>";
echo "<div class='propagandas'><img src='img/sponsors/6.jpg'></div>";
echo "<div class='propagandas'><a href='http://www.masterfilt.com/'><img src='img/sponsors/7.jpg'></a></div>";
echo "<div class='propagandas'><img src='img/sponsors/8.jpg'></div>";
echo "<div class='propagandas'><img src='img/sponsors/9.jpg'></div>";
echo "<div class='propagandas'><a href='http://www.alestel.com.ar/'><img src='img/sponsors/10.jpg'></a></div>";
echo "<div class='propagandas'><img src='img/sponsors/11.jpg'></div>";
echo "<div class='propagandas'><img src='img/sponsors/12.jpg'></div>";
echo "<br><br></div>";
}

public function center(){

if(!isset($_GET['index'])){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Informaci&oacute;n General</div></div>";
echo "<div class='caja'><div class='caja_lista1'><img src='img/box/lista1.jpg'></div></div>";
echo "<div class='caja'><div class='caja_foto'><img src='img/box/instituto.jpg' ></div><div class='caja_titulo'><div class='caja_titulo_letras'>Futbol Profesional</div></div><div class='caja_letras'>Algunas imagenes del encuentro entre Almirante y Instituto de Cordoba.<br><a href='index.php?index=box7'>Leer m&aacute;s</a></div></div>";
echo "<div class='caja'><div class='caja_foto'><img src='img/box/tenis.jpg' ></div><div class='caja_titulo'><div class='caja_titulo_letras'>Tenis (Copa)</div></div><div class='caja_letras'>Organizaci&oacute;n: Metro Tournament Professional<br> Sede:  Club Almirante Brown<br> Direcci&oacute;n: J. I. Rucci Y Segui - Isidro Casanova Bs As<br> Fecha: Del 17 al 22 de noviembre de 2013<br> Director del Torneo: Prof. Marcelo Meneo<br><br><a href='index.php?index=copaAlmirantenis'>Leer m&aacute;s</a></div></div>";
echo "<div class='caja'><div class='caja_foto'><img src='img/box/inde.jpg' ></div><div class='caja_titulo'><div class='caja_titulo_letras'>Futbol Profesional</div></div><div class='caja_letras'>Historicos 3 puntos quedaron en el Fragata Presidente Sarmiento. Almirante derrotó por 1 a 0 a Independiente en su primer visita al estadio.<br><a href='index.php?index=box1'>Leer m&aacute;s</a></div></div>";
echo "<div class='caja'><div class='caja_foto'><img src='img/box/infantil.jpg' ></div><div class='caja_titulo'><div class='caja_titulo_letras'>Futbol Infantil</div></div><div class='caja_letras'>Posici&oacute;n de los chicos del nivel Inicial en la Zona 5 y de los chicos del nivel Competitivo en la Zona C.<br><a href='index.php?index=box8'>Leer m&aacute;s</a></div></div>";
echo "<div class='caja'><div class='caja_foto'><img src='img/box/sanmartin.jpg' ></div><div class='caja_titulo'><div class='caja_titulo_letras'>Futbol Profesional</div></div><div class='caja_letras'>Algunas imagenes del encuentro que se disputo ante San Martin de San Juan, En el Estadio Fragata Presidente Sarmiento.<br><a href='index.php?index=box6'>Leer m&aacute;s</a></div></div>";
echo "<div class='caja'><div class='caja_foto'><img src='img/box/chulo.jpg' ></div><div class='caja_titulo'><div class='caja_titulo_letras'>Futbol Profesional</div></div><div class='caja_letras'>Tras la renuncia de la dupla Tobio - Ojeda, luego la derrota frente al lobo jujeño, Hector el Chulo Rivoira es el elegido para ayudar a almirante en esta... <br><a href='index.php?index=box5'>Leer m&aacute;s</a></div></div>";
echo "<div class='caja'><div class='caja_foto'><img src='img/box/merendero.jpg' ></div><div class='caja_titulo'><div class='caja_titulo_letras'>Merendero</div></div><div class='caja_letras'>El dia 4 de Septiembre se disputaron una serie de partidos amistosos frente club municipal de concepcion de Tucuman.<br><a href='index.php?index=box2'>Leer m&aacute;s</a></div></div>";

echo "<br>";/*Espacio entre la ultima Caja y el pie de p�gina*/
echo"</div>";
}else{
$index = $_GET['index'];

if($index=='2'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Futbol Profesional</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/plantel.jpg'  width='545px' height='400px' ></div>";
echo "<div class='caja_info_letras'>";
echo "<b>Plantel Profesional</b><br><br>";
echo "<b>Cuerpo Tecnico:</b><br><b>DT:</b> H&eacute;ctor Oscar Rivoira<br><br>";
echo "<b>Arqueros:</b><br>Ezequiel Dami&aacute;n Cacace, Mauro Dobler, Lucas Ezequiel Vicent&iacute;n<br><br>";
echo "<b>Defensores:</b><br>Luis Alberto Arias, Gustavo Ben&iacute;tez, H&eacute;ctor Federico Carballo, Osvaldo Iv&aacute;n Centurion, ";
echo "&Aacute;ngel Ezequiel Garr&eacute;, Mat&iacute;as G&oacute;mez, Sebasti&aacute;n Ariel Ibars, Brian Machuca, Oscar N&uacute;ñez, Emanuel Olivera, ";
echo "Hern&aacute;n Ortiz, Eric Tovo, Walter Zunino<br><br>";
echo "<b>Mediocampistas:</b><br>Rodrigo Aillap&aacute;n, Germ&aacute;n Basualdo, Alexis Canelo, Jonathan Casasola, Gast&oacute;n Gim&eacute;nez";
echo"Francisco Grahl, Mauro Marrone, Gerardo Menseguez, Sergio Meza S&aacute;nchez, H&eacute;ctor Olmedo, Victor Ormazabal, Federico Presedo, Jonathan S&aacute;nchez<br><br>";
echo "<b>Delanteros:</b><br>Diego Ceballos, Leonardo Fag&uacute;ndez Fern&aacute;ndez, Cristian Guti&eacute;rrez, Diego Nadaya, Luciano Olgu&iacute;n, Sergio P&eacute;rez<br><br>";
echo "</div>";
echo "<div class='caja_info_letras'><b>Tabla de posiciones:</b></div>";
echo "<div class='caja_info_imagen'><img src='img/fixture.jpg' width='545px' height='400px' /></div><br>";
echo "<div class='caja_info_letras'>";
echo "Fixture de Almirante Brown (Primer Rueda):<br><br>";
echo "<table id='tabla'>";
echo "<tr id='color_tr'><td>Fecha</td><td width='100px'>Rival</td><td width='10px'>Resultado</td><td>Fecha</td><td width='100px'>Rival</td><td width='50px'>Resultado</td></tr>";
echo "<tr><td>1ra</td><td>Alte-Banfield</td><td>1 - 1</td>       <td>12da</td><td>Alte-Independiente</td><td>1 - 0</td></tr>";
echo "<tr><td>2da</td><td>V.San Carlos-Alte</td><td>1 - 2</td>     <td>13ra</td><td>Def. y Justicia-Alte</td><td>0 - 1</td></tr>";
echo "<tr><td>3ra</td><td>Alte-Sarmiento</td><td>2 - 4</td>        <td>14ta</td><td>Alte-Instituto</td><td>1 - 1</td></tr>";
echo "<tr><td>4ta</td><td>Talleres C.-Alte</td><td>0 - 1</td>      <td>15ta</td><td>Patronato-Alte</td><td></td></tr>";
echo "<tr><td>5ta</td><td>Alte-Union</td><td>0 - 1</td>            <td>16ta</td><td>Alte-Brown Adrogue</td><td></td></tr>";
echo "<tr><td>6ta</td><td>Alte-Douglas Haig</td><td>0 - 0</td>     <td>17ta</td><td>Boca Unidos-Alte</td><td></td></tr>";
echo "<tr><td>7ma</td><td>C. Del Norte-Alte</td><td>2 - 0</td>     <td>18va</td><td>Alte-Aldosivi</td><td></td></tr>";
echo "<tr><td>8va</td><td>Alte-Sp. Belgrano</td><td>0 - 1</td>     <td>19na</td><td>Atletico T.-Alte</td><td></td></tr>";
echo "<tr><td>9na</td><td>C.A.G. y Esgrima-Alte</td><td>3 - 0</td> <td>20mo</td><td>Alte-Indep. Mendoza</td><td></td></tr>";
echo "<tr><td>10ma</td><td>Alte-S.M de San Juan</td><td>0 - 0</td> <td>21ra</td><td>Huracan-Alte</td><td></td></tr>";
echo "<tr><td >11ra</td><td>Ferro-Alte</td><td>0 - 1</td> 		  <td></td><td>-</td><td>-</td></tr>";
echo "</table>";

echo "</div></div><br>";
echo "</div>";
}
if($index=='3'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Hockey Femenino</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/hockey/12.jpg' ></div>";
echo "<div class='caja_info_letras'>";
echo "<h1>Hockey Almirante Brown</h1><br>";
echo "Si queres jugar al Hockey, acercate a la ciudad deportiva ubicada en <br>";
echo "la calle Jose Ignacio Rucci y esquina Segu&iacute. A partir de 5 años en adelante<br>";
echo "te esperamos de martes a viernes en los horarios de 18 a 21 hs, ";
echo "y sino te podes comunicar al 4669-3434.<br><br>";
echo "<h1>Este 2013 Hockey Almirante Brown se medira en dos frentes:</h1><br>";
echo "para el nivel escuelita participara de la liga megahockey con chicas de entre 5 a 20 años"; 
echo " y jugara en la LAHS s.r.l con las chicas mas avanzadas.<br>Te esperamos!!!<BR><BR>";
echo "<h1>Horarios y Dias:</h1><br>";
echo "<b>Mami Hockey Almirante Brown:</b><br>Miercoles y Viernes de 17 a 18 hs.<br><br><b>Categoria Escuelita (1ra, 5ta, 6ta, 7ma):</b><br>Lunes, Miercoles y Viernes de 18 a 20 hs.<br><br>";
echo "<b>Liga (1ra y 5ta):</b><br> Martes, Miercoles, Jueves y Viernes de 19 a 21 hs.<br><br><b>Liga (6ta y 7ma):</b><br>Martes, Miercoles y Jueves de 19 a 21 hs<br> Viernes de 18 a 21 hs.<br><br>";
echo "<b>Liga y Escuelita (9na escuela menores):</b><br>Martes, Jueves y Viernes de 18 a 19:30 hs.<br><br>";
echo "<a href='index.php?index=galeria-hockey'>Galeria de Fotos</a>";
echo "</div></div><br>";
echo "</div>";
}

if($index=='basquet'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Basquet</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_letras'>
El Basquet es uno de los deportes mas jovenes que se implementaron en el club, con apenas 7 meses de vida.<br><br>
<b>Informaci&oacute;n</b><br><br>
Si queres formar parte del equipo tenes que ser socio del club y ser mayor de 18 años.<br>
Tambi&eacute;n se debe abonar una cuota mensual.<br><br>
Los d&iacute;as de entrenamiento son:<br>
Lunes, Miercoles y Viernes a las 21:00 hs.<br><br>
Estan en tratativas la idea de implementar este deporte para las mujeres y para los mas chicos.<br>
Mientras tanto contamos con una sola categor&iacute;a.<br><br>
El equipo participa en dos ligas:<br>
La Liga 3 de febrero categor&iacute;a C.<br>
Liga de Merlo<br><br>
Este deporte se dicta en la Sede Social del Club Almirante Brown  ubicada en la calle  Entre Ríos 3255 (San Justo), Entre Perú y Mendoza.
</div>";
echo "</div>";
echo "<br>";
echo "</div>";
 }


if($index=='5'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Tenis</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/tenis/tenis.jpg' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'>Informate sobre el torneo de tenis que se esta organizando en el club en esta secci&oacute;n:<br><a href='index.php?index=copaAlmirantenis'>Copa Almirante Brown</a><br><br></div>";
echo "<div class='caja_info_letras'><b>En nuestras instalaciones contamos con:</b><br><br>";
echo "5 canchas profesionales de tenis(aprobadas por la AAT para competencias)<br>3 de ellas con ilumincaci&oacute;n artificial<br>";
echo "Predio independiente de la ciudad deportiva que cuenta con quincho,vestidor,etc.<br>Centro de entrenamiento, para equipos federados en la AAT.<br><br>";
echo "Contamos ademas con una escuela de tenis infantil, una escuela de iniciaci&oacute;n de adultos, entrenamiento para adultos, clases grupales y particulares de tenis.<br><br>";
echo "<b>Valor de cuotas:</b><br><br>Mayores: $220<br>Menores, hasta 14 años incluido: $180<br>";
echo "Cualquier duda comunicarse al:<br> 4669-1693<br> o por email:<br> juanjo@almirantenis.com.ar<br><br>";
echo "<b>Escuela de tenis</b><br>El cliente puede optar por:<br><br>Clases particulares<br>Clases grupales<br>Entrenamientos.<br><br>";
echo "<b>Informaci&oacute;n:</b><br>Los horarios de dichas clases se deben arreglar con anticipaci&oacute;n con los profesores. <br>";
echo "Es necesario que el cliente sea socio del Club Almirante Brown, ya que esta es una actividad que pertenece al club y no se maneja de manera privada.<br>";
echo "El no socio solo puede asistir a clase con invitado de un socio.<br><br>";
echo "<b>Profesores:</b><br>Miguel Moreno<br>Julian Leone<br>Adriana Rivas<br><br>";
echo "<a href='index.php?index=galeria-tenis'>Galeria de fotos</a><br><br>";
echo "Seguinos en facebook:<br><a  href='https://www.facebook.com/groups/almirantenis/'><img  src='img/facebook.png'> Almirantenis</a>";
echo "</div>";
echo "<br>";
echo "</div></div>"; 
}

if($index=='6'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Juveniles</div></div>";
echo "<div class='caja_info' ><div class='caja_info_letras'>";
echo "Si queres jugar al Futbol, acercate a la ciudad deportiva ubicada en la calle Jose Ignacio Rucci y esquina Seguí, Isidro Casanova, o en la Sede ubicada en San Justo en la ";
echo "calle Entre R&iacute;os al 3255, entre Per&uacute; y Mendoza.";
echo "</div></div>";
echo "<div class='caja_info' ><a href='index.php?index=galeria-juveniles'>Galeria de fotos</a></div><br>";
echo "<div id='titulo'><div class='titulo_letras'>Resultados de la ultima jornada</div></div>";
echo "<div class='caja_juveniles'><div class='caja_titulo'><div class='caja_titulo_letras'>Novena</div></div><div class='caja_letras'>Rival:<br>Resultado:<br>Goles:<br><br></div></div>";
/**/
echo "<div class='caja_juveniles'><div class='caja_titulo'><div class='caja_titulo_letras'>Octava</div></div><div class='caja_letras'>Rival:<br>Resultado:<br>Goles:<br><br></div></div>";
/**/
echo "<div class='caja_juveniles'><div class='caja_titulo'><div class='caja_titulo_letras'>Septima</div></div><div class='caja_letras'>Rival:<br>Resultado:<br>Goles:<br><br></div></div>";
/**/
echo "<div class='caja_juveniles'><div class='caja_titulo'><div class='caja_titulo_letras'>Sexta</div></div><div class='caja_letras'>Rival:<br>Resultado:<br>Goles:<br><br></div></div>";
/**/
echo "<div class='caja_juveniles'><div class='caja_titulo'><div class='caja_titulo_letras'>Quinta</div></div><div class='caja_letras'>Rival:<br>Resultado:<br>Goles:<br><br></div></div>";
/**/
echo "<div class='caja_juveniles'><div class='caja_titulo'><div class='caja_titulo_letras'>Cuarta</div></div><div class='caja_letras'>Rival:<br>Resultado:<br>Goles:<br><br></div></div>";
/**/
echo "<br>";
echo "</div>";
 }
if($index=='7'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Karate</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/karate/1.png' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'>";
echo "Las clases de karate se dan en el gimnasio de la ciudad deportiva, los dias:<br>Martes y Jueves de 19 a 20:30 hs.<br><br> ";
echo "Para tomar clases de Karate se debe ser socio del Club o del gimnasio, y ademas pagar la cuota de la actividad, que tiene un valor de  $50.<br><br>";
echo "Profesor: Brian Cucuzza<br><br>";
echo "Otra de las actividades que enseña el profesor Brian Cucuzza en el gimnasio es <b>Defensa Personal</b> en el horario de 20:30 a 21:30 hs, en los mismos dias de Karate.<br><br>";
echo "<a href='index.php?index=galeria-karate'>Galeria de Fotos</a><br><br>";
echo "</div>";

echo "<div class='caja_info_letras'>";
echo "<i><b>Motobu Ryu Karate Dojo Ken Kyu Kai Y El Crecimiento</b></i><br><br>";
echo "<i>Un Sensei dijo cierta vez: \"La repetición de un movimiento o t&eacute;cnica es lo que permite su perfecci&oacute;n y crecer como alumnos.\"<br><br> ";
echo "Motobu Ryu Karate Dojo Ken Kyu Kai se traduce como agrupaci&oacute;n para el estudio profundo en el lugar donde se enseña el camino infinito del Karate ";
echo "de la escuela de Motobu. Todos sabemos que lograr la perfecci&oacute;n total en el Karate es imposible, pero el reconocer su camino infinito nos permitir&aacute; ";
echo "mejorar d&iacute;a a d&iacute;a como instructores, alumnos y personas.</i><br><br>";
echo "<i><b>Educaci&oacute;n:</b> en el plano formativo trabajamos desde el comienzo del entrenamiento ya que nuestro criterio es crecer en el Dojo para crecer en la vida.";
echo "Ya que un instructor podr&aacute; ser muy bueno t&eacute;cnicamente, pero si no tiene una buena gu&iacute;a no sabr&aacute; c&oacute;mo transmitir sus conocimientos, y los instructores ";
echo "deben capacitarse cada vez m&aacute;s porque los alumnos y la sociedad lo exigen</i>.<br><br>";
echo "<i><b>Defensa Personal:</b> cuando se abre una canilla el agua cae en forma constante sin intermitencia. De la misma forma debe accionar la defensa personal. ";
echo "En nuestra escuela no usamos la letra \"Y\" en la defensa, o sea que ante una agresión no bloqueo \"Y\" contraataco, sino que bloqueo contraatacando para no ";
echo "dar la fracción de tiempo que posibilite la reacci&oacute;n del agresor. Enseñamos distintas formas de defensa personal,  dotando a los alumnos de un amplio";
echo " espectro, y a medida que van avanzando deben ir desarrollando variantes de una misma defensa, lo que les permitir&aacute; teer una reacci&oacute;n fluida en el";
echo " momento de emplearla, ya que en el combate real las situaciones nunca son iguales.</i><br><br> ";
echo "<i><b>Deportivo:</b> en este aspecto la preparaci&oacute;n de los alumnos es";
echo " constante, tanto en lo f&iacute;sico como en lo an&iacute;mico, logrando as&iacute; adaptar el sistema a la capacidad individual de cada alumno, as&iacute; &eacute;l dar&aacute; lo mejor de s&iacute;";
echo " en cada competencia.<br><br> Todo lo antedicho no tendr&iacute;a sentido si tanto los alumnos como los instructores de Motobu Ryu Karate Dojo Ken Kyu Kai no";
echo " trabaj&aacute;ramos con respeto, humildad y dedicaci&oacute;n que son las bases de todo crecimiento.</i><br><br>";
echo "<i><b>Sensei Pablo Luis Villamor<br> Shi Han Motobu Ryu Karate Dojo Ken Kyu Kai</b></i>";

echo "</div></div>";
echo "<br>";
echo "</div>";
 }

if($index=='8'){
echo "<div class='center'>";
echo "<br>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Chaiu Do Kwan</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/gimnasio/chaiu.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_letras'>Esta discplina se dicta los dias:<br>Lunes de 19 a 20hs<br>Miercoles y Viernes de 19 a 21:30 hs<br><br>";
echo "Para tomar clases de Chaiu Do Kwan se debe ser socio del Club o del gimnasio, y ademas pagar la cuota de la actividad.<br><br>";
echo "Se les informa que las primeras clases son gratis.<br><br>";
echo "Profesor: Daniel Santamaria<br><br><a href='index.php?index=galeria-chaiu'>Galeria de Fotos</a>";
echo "</div></div>";
echo "<br>";
echo "</div>";
 }
if($index=='9'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Secretaria de Deporte</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'></div>";
echo "<div class='caja_info_letras'>asd<br>asd</div>";
echo "</div>";
echo "<br>";
echo "</div>";
 }

if($index=='10'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Merendero</div></div>";
echo"<div class='caja_info' >";
/*echo "<div class='caja_info_letras'></div><br>";*/
echo "<div class='caja_info_imagen'><img src='img/merendero/m1.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/m2.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero1.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero2.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero3.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero4.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero5.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero7.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero8.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero10.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/merendero/merendero11.jpg' width='545px' height='400px'></div><br>";
echo "</div>";
echo "<br>";
echo "</div>";

 }
 
 if($index=='11'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Instituci&oacute;n</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/sede/sede.png' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'><b>Sede Social</b><br>";
echo "Direcci&oacute;n: Entre R&iacute;os 3255, San Justo, Entre Per&uacute; y Mendoza (Partido de La Matanza)<br>";
echo "Tel&eacute;fono: 4484-2915<br>";
echo "Horarios de atenci&oacute;n: Lunes a Viernes de 11:00 a 20:00 hs<br>";
echo "La sede social cuenta con un buffet y contamos con una cancha de futbol 5 en donde ademas de practicar papi futbol, se practica patin artistico.<br>";
/*echo "<a href='index.php?index=galeria-sede'>Galeria de fotos</a>";*/
echo "<br><br></div></div>";
/**/
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/estadio/1.jpg' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'><b>Estadio Fragata Presidente Sarmiento</b><br>";
echo "Direcci&oacute;n: calle Jose Ignacio Rucci, esquina M&aacute;rmol, Isidro Casanova.<br>";
echo "<a href='index.php?index=galeria-estadio'>Galeria de fotos</a>";
echo "<br><br></div></div>";

/**/
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/ciudad/poli.jpg' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'><div class='caja_info_letras_margenes'><b>Ciudad Deportiva Luis Mendoza</b><br>";
echo "Direcci&oacute;n: calle Jose Ignacio Rucci, esquina Segu&iacute;<br>";
echo "Tel&eacute;fono: 4669-3434<br>";
echo "La ciudad deportiva Luis Mendoza cuenta con un espacio para que la familia aurinegra relize distintas actividades, con un Buffet, Quinchos (para realizar eventos publicos y privados), Parrillas, ademas de canchas de futbol, canchas de tenis, hockey femenino,";
echo " pileta, contamos ademas con un gimnasio y con estacionamiento.<br><br>";
echo "<a href='index.php?index=galeria-ciudad'>Galeria de fotos</a>";
echo "</div></div></div>";
echo "<br>";
echo "</div>";
 }

if($index=='12'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Gimnasio</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/gimnasio/1.jpg' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'>";
echo "Dias y Horarios para utilizar el Gimnasio<br> Lunes: 8 a 20<br>Martes a Viernes: 9 a 22hs<br>Sabado: 8 a 13 hs<br><br>";
echo "Para poder utilzar las instalaciones del gimnasio se debe ser socio del Club Almirante Brown, o esta la alternativa de ser socio solo del gimnasio.<br><br>";
echo "Profesores:<br>Jorge Chaparro<br>Marcelo Zurita<br><br>";
echo "<a href='index.php?index=galeria-gimnasio'>Galeria de fotos</a>";
echo "</div></div>";
echo "<br>";
echo "</div>";
 }
 
if($index=='infantil-sede'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Futbol Infantil (Sede)</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/sede/futbol-infantil/infantil.png' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'>";
echo "<b>Requisitos para anotarse en el futbol infantil de nuestra instituci&oacute;n</b><br><br>";
echo "Hacerse socio del Club Almirante Brown<br>Luego se debe abonar una cuota anual de $150.00 y una cuota mensual de $120.00.<br><br>";
echo "<b>Informaci&oacute;n</b><br>Les comentamos que existen dos niveles con respecto a la categoria de los chicos:<br><br>";
echo "<b>Nivel Inicial:</b><br>Lunes y Miercoles en los horarios de 18:00 hs a 21:00 hs.<br>Este horario se divide en tres grupos:<br> ";
echo "De 18:00 hs a 19:00 hs entrenan las categorias 2008, 2007, 2006 y 2005.<br>";
echo "De 19:00 hs a 20:00 hs entrenan las categorias 2004 y 2003.<br>";
echo "De 20:00 hs a 21:00 hs entrenan las categorias 2000, 2001 y 2002.<br><br>";
echo "<b>Nivel Competitivo:</b><br>Entrenan los dias Martes y Viernes en distintos horarios seg&uacute;n el d&iacute;a.<br>";
echo "<b>Los Martes:</b><br>De 19:00 hs a 19:50 hs entrenan las categorias 2005 y 2006.<br>De 19:50 hs a 20:40 hs entrenan las categorias  2004 y 2003. <br>De 20:40 hs a 21:30 hs entrenan las categorias 2000, 2001 y 2002.<br><br>";
echo "<b>Los Viernes:</b><br>De 18:00 hs a 19:00 hs entrenan las categorias 2005 y 2006.<br> De 19:00 hs a 20:00 hs entrenan las categorias 2004 y 2003.<br> De 20:00 hs a 21:00 hs entrenan las categorias 2000, 2001 y 2002.<br><br> ";
echo "<b>Ambos niveles compiten en la Liga Fefi</b><br>Nivel Inicial juegan Sabado matutino en la Zona 5.<br>Nivel Competitivo juegan Sabados vespertino en la Zona C.<br><br>";
echo "<b>Equipo Profesional</b><br><b>Profesor y coordinador general:</b>Carlos Fidalgo.<br><b>Profesores colaboradores:</b> Roberto Jometon y Leonardo Spina.<br>";
echo "<b>Administraci&oacute;n:</b> Maria Varamo.<br><b>Profesor:</b> Lucas Fidalgo.<br><br>";
echo "Este deporte se dicta en la Sede Social del Club Almirante Brown  ubicada en la calle  Entre Ríos 3255 (San Justo), Entre Perú y Mendoza.";
echo "</div></div>";
echo "<br>";
echo "</div>";
 }
 
if($index=='patin-artistico'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Pat&iacute;n Art&iacute;stico</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_letras'>";
echo "

Para anotarse en patin artistico deben ser socios del club y ademas deben pagar una cuota de la actividad.<br><br>
Categorias, d&iacute;as y horarios:<br><br>
<b>Nivel inicial:</b><br> Martes y Jueves 18:00 hs a 19:00 hs<br>
<b>Profesora:</b> Carla Maradei.<br><br>

<b>Nivel avanzado:</b><br> Lunes, Martes y Viernes 15:00 hs a 18:00 hs.<br>
Y los dias Jueves 16:00 hs a 21:00 hs<br>
<b>Profesor:</b> Alejandro Raga<br><br>

Este deporte se dicta en la Sede Social del Club Almirante Brown ubicada en la calle Entre Ríos 3255 (San Justo), Entre Perú y Mendoza.

";
echo "</div></div>";
echo "<br>";
echo "</div>";
 }
 
/*cajas de información ubicadas en la Home...*/ 
if($index=='box1'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Futbol Profesional</div></div>";
echo"<div class='caja_info' >";
echo"<div class='center_galeria' >";
echo "<img id='galeria_fotos' src='img/indep/1.png' ><br>";
echo "<span id='galeria_textos'></span><br>";
echo "<div id='mover'><a  href='javascript:mover_imagenes(-1);'> anterior </a> | <a href='javascript:mover_imagenes(1);'> siguiente </a><br></div>";
echo "</div>";
echo "<div class='caja_info_letras'>";
echo "Historicos 3 puntos quedaron en el Fragata Presidente Sarmiento. Almirante derrot&oacute; por 1 a 0 a Independiente en su primer visita al estadio. ";
echo "De esta forma Almirante sigue con la remontada consechando un empate (vs S.M. de San Juan) y dos victorias consecutivas (vs Ferro e Independiente).";
echo"Aca te dejamos para que veas unas im&aacute;genes de la previa del partido, las tribunas, y del final emocionante en una tarde historica que quedara en ";
echo "el recuerdo de muchos.";
echo "</div>";
echo "</div></div>";
 
 }

if($index=='box2'){

echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Merendero</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/merendero/1.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_letras'>";
echo "<h1>Partido amistoso</h1><br>El dia 4 de Septiembre, el Club Almirante Brown recibi&oacute; al <b>Club Municipal de concepci&oacute;n de Tucuman</b> para disputar una serie de partidos amistosos.<br>";
echo "Alguna imagenes de los chicos, luego de los partidos, comiendo algo en el merendero para recargar energias.<br><br>";
echo "<b>Acargo de la delegaci&oacute;n:</b><br>Pedro Bulacio<br>Hugo Gaitan<br>Roberto Andrada<br>";
/*echo "<a href='index.php'>Volver</a>";*/
echo "</div>";
echo "<div class='caja_info_imagen'><img src='img/merendero/2.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/merendero/3.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/merendero/4.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/merendero/5.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/merendero/6.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/merendero/7.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/merendero/9.jpg' width='545px' height='350px'></div>";
echo "</div><br>";
echo "<br>";
echo "</div>";
 
 }

 if($index=='box3'){

echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Obras</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/obras/2.jpg'  width='545px' height='350px' ></div>";
echo "<div class='caja_info_letras'>";
echo "Comenzaron los trabajos para construir una cancha de futbol para los chicos de las inferiores y ya se esta terminando la que va a ser la garita y la nueva ";
echo "barrera de entrada a la ciudad deportiva.<br>";
/*echo "<a href='index.php'>Volver</a>";*/

echo "</div>";
echo "<div class='caja_info_letras'>La garita y la barrera casi terminadas.</div>";
echo "<div class='caja_info_imagen'><img src='img/obras/1.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_letras'>El espacio seleccionado para construir la nueva cancha para los chicos.</div>";
echo "<div class='caja_info_imagen'><img src='img/obras/2.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/obras/3.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/obras/4.jpg' width='545px' height='350px'></div>";
echo "<div class='caja_info_imagen'><img src='img/obras/5.jpg' width='545px' height='350px'></div>";
echo "</div><br>";
echo "<br>";
echo "</div>";
}

 

 if($index=='box5'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Futbol Profesional</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/chulo.jpg' width='545px' height='400px'></div>";
echo "<div class='caja_info_letras'><b>El Chulo Rivoira es el nuevo DT </b><br><br>";
echo "Tras la renuncia de la dupla Tobio - Ojeda, luego la derrota frente al lobo jujeño, Hector el Chulo Rivoira es el elegido para ayudar a almirante en esta ";
echo "mala racha. Tras una serie de renuniones con los dirigentes se pusieron de acuerdo y ya dirigio su primer practica. De esta manera el Chulo comienza su ";
echo "segunda etapa como entrenador de Almirante Brown, luego de haberlo dirigido en la temporada 1994/95.<br><br>";
echo "<b>Trayectoria:</b><br>Ituzaing&oacute; (1992-94)<br>Nueva Chicago (1995-96)<br>Chacarita Juniors (1997-00/2005-07/2011)<br>Quilmes (2000-01)<br>Liga de Quito (Ecuador- 2002)<br>Instituto de Cordoba (2002-04/2007)<br>Ferro Carril Oeste (2005)<br>";
echo "Atl&eacute;tico Tucum&aacute;n (2008-09)<br>Hurac&aacute;n (2009-2010/2012)<br>Rosario Central (2010-2011)<br>Club Olimpo (2011-12)<br>Almirante Brown (1994-95/2013)";
echo "</div></div><br>";
echo "<br>";
echo "</div>";
}

 if($index=='box6'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Futbol Profesional</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_letras'>Algunas imagenes del encuentro que se disputo ante San Martin de San Juan, En el Estadio Fragata Presidente Sarmiento.";
echo "Partido en el cual los protagonistas no se sacaron ventaja e igualaron en cero.";
echo "</div>";
echo "&";
for($c=1;$c<=6;$c++){
echo "<div class='caja_info_imagen'><img src='img/san_martin/".$c.".jpg' ></div>";
}
echo "<div class='caja_info_letras'>Asi recibimos a los dirigentes del equipo visitante.</div>";
for($d=7;$d<=9;$d++){
echo "<div class='caja_info_imagen'><img src='img/san_martin/".$d.".jpg' ></div>";
}
echo "</div><br><br>";
echo "</div>";
}

if($index=='box7'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Venta de Entradas</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_letras'>";
echo "Algunas imagenes del empate entre Almirante e Instituto de Cordoba. ";
echo "</div>";
for ($c=1;$c<=15;$c++){
echo "<div class='caja_info_imagen'><img src='img/instituto/".$c.".jpg' width='545px' height='400px'></div>";
}

echo "</div><br>";
echo "<br>";
echo "</div>";
}

if($index=='box8'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Futbol Infantil</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_letras'>";
echo "Luego de la &uacute;ltima jornada de futbol infantil compartimos con ustedes como quedaron en la tabla de posiciones los chicos de nivel inicial en la Zona C ";
echo "y los chicos de Nivel Competitivo en la Zona C.<br></div>";
echo "<div class='caja_info_letras'>Posicion en la tabla de los chicos del Nivel Inicial en la Zona 5.</div>";
echo "<div class='caja_infantil'><img src='img/zona5/1y2.jpg'></div>";
echo "<div class='caja_infantil'><img src='img/zona5/3y4.jpg'></div>";
echo "<div class='caja_infantil'><img src='img/zona5/5y6.jpg'></div>";
echo "<div class='caja_info_letras'>Posicion en la tabla de los chicos del Nivel Competitivo en la Zona C.</div>";
echo "<div class='caja_infantil'><img src='img/zonac/1y2.jpg'></div>";
echo "<div class='caja_infantil'><img src='img/zonac/3y4.jpg'></div>";
echo "<div class='caja_infantil'><img src='img/zonac/5y6.jpg'></div>";
echo "<div class='caja_infantil'><img src='img/zonac/7y8.jpg'></div>";

echo "</div><br>";
echo "<br>";
echo "</div>";
}

if($index=='copaAlmirantenis'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Tenis</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'><img src='img/tenis/tenis.jpg'></div>";
echo "<div class='caja_info_letras'>";
echo "<b>CIRCUITO PROFESIONALDE TENIS</b><br><br><b>Etapa 5 Copa Almirante Brown</b><br><br> ";
echo "<b>Organizaci&oacute;n:</b> Metro Tournament Professional<br><b>Sede:</b> Club Almirante Brown<br><b>Direcci&oacute;n:</b> J. I. Rucci y Segui - Isidro Casanova Bs As<br>
<b>Fecha:</b> Del 17 al 22 de noviembre de 2013<br><b>Director del torneo:</b> Prof. Marcelo Meneo<br><b>Arbitro del torneo:</b> Prof. Hernan Tropeano<br>
<b>Participantes:</b> Todos los jugadores mayores de 14 años<br><br> 
<b>Formato de la competencia</b><br><br> <b>Singles:</b> se jugara bajo el sistema de simple Eliminaci&oacute;n, Partidos al mejor de tres set todos con tie breack.<br><br>
<b>Dobles:</b> se jugara bajo el sistema de simple eliminación, partidos al mejor de tres sets sin ventajas,3 er set match tiebreack a 10.<br><br>
El control de los partidos se llevara a cabo por <b>La organizaci&oacute;n</b>. Se aplicara W.O a los 15 minutos de espera Reglamentaria.<br><br>
No se consideraran permisos y/o postergaciones por ninguna circunstancia.
Todo jugador tiene la obligación de averiguar el día y hora de sus partidos.<br><br>
<b>PLAZO</b><br> 
<b>Final de inscripciones:</b><br> Las inscripciones de singles están abiertas desde la publicación de la convocatoria hasta el sabado 16 de Noviembre de 2013 hasta 18:00 hs.
Firma de dobles domingo 17 de noviembre hasta 16 hs.<br><br>
<b>Inicio de partidos</b> <br>
Singles 17 de agosto en horario diurno.<br>
Dobles 18 de noviembre a continuación de singles<br><br>
<b>Sorteo:</b><br> El sorteo de singles se realizará el día sabado 16 de noviembre de 2013 19:00 hs.<br>
Sorteo de dobles domingo 17 de noviembre 19 hs.<br><br>
<b>Costo de participaci&oacute;n:</b> La inscripción tiene un costo de $230.<br>
<b>Canchas:</b> Se jugaran en 5 canchas.<br>
<b>Pelotas:</b> A designar por la organizaci&oacute;n.<br>
<b>Premios</b><br>
Singles $4000 a repartir desde cuartos de final.<br>
Dobles $ 2000 a repartir desde semifinal.<br><br>

<b>Reglamentaci&oacute;n:</b> Se aplicará las reglas de la ITF. Cualquier punto no considerado en esta convocatoria será resuelto por el arbitro del torneo<br><br>
Visita el sitio oficial de tenis del club Almirante Brown <a href='www.almirantenis.com.ar'>Almirantenis.com.ar</a><br><br>
O Seguinos en facebook:<br><a  href='https://www.facebook.com/groups/almirantenis/'><img  src='img/facebook.png'> Almirantenis</a><br><br>

";
echo "</div>";
echo "</div></div><br>";
echo "<br>";
}

/*Galerias*/
if($index=='galeria-juveniles'){
 echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Juveniles</div></div>";
echo"<div class='caja_info' >";
echo "<br>";
echo "<div class='caja_info_letras'><b>Categoria 2002</b><br><br>Directores T&eacute;cnicos:<br>Abel Ferreira<br>Gustavo Fernandez<br></div>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/1.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_letras'><b>Categoria 2001</b><br><br>Directores T&eacute;cnicos:<br>Abel Ferreira<br>Jos&eacute; Bianco<br></div>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/2.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_letras'><b>Octava</b><br><br>Preparadores F&iacute;sicos:<br>Gustavo Tadioli<br>Esteban Bonomo<br></div>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/3.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_letras'><b>Octava: Equipo Completo</b><br><br>";
echo "Patricio Picon, 
Franco Ortiz, 
Tomas Santana,
Rodrigo Medina, 
Pablo Medina, 
Agustin Maldonado,
Nahuel Gonzalez, 
Matias Gerlach,
Santiago Vera,
Adrian Avalos,
Sebastian Paez, 
Mauro Avila, 
Rodrigo Perez, 
Agustin Correa, 
Bruno Lopez, 
Gaston Villalva, 
Diego Fernandez, 
Nicolas Silvera, 
Ignacio Pelizzali,
Leandro Guerrero, 
Julian Gonzalez, 
Nicolas Brisuelas, 
Damian Frezeti, 
Luis Jerez, 
Nahuel Martinez, 
";
echo "</div>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/4.jpg' width='545px' height='350px'></div><br>";
echo "<div class='caja_info_letras'><b>Novena</b><br>En la previa antes de un amistoso con Atlanta.</div>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/5.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/6.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/7.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_letras'><b>98 metro B y Liga</b><br></div>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/8.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/9.jpg' width='545px' height='400px'></div><br>";
echo "<div class='caja_info_letras'><b>Categoria 2005</b></div>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/10.jpg' width='545px' height='400px'></div><br><br><br>";
echo "<div class='caja_info_imagen'><img src='img/juveniles/11.jpg' width='545px' height='400px'></div><br>";
echo "</div><br>";
echo "<br>";

echo "</div>";
 }
 
 if($index=='galeria-sede'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Sede Social</div></div>";
echo"<div class='caja_info' >";
echo "<div class='caja_info_imagen'></div>";
echo "</div>";
echo "<br>";
echo "</div>";
 }

 if($index=='galeria-estadio'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Estadio Fragata Presidente Sarmiento</div></div>";
echo"<div class='caja_info' >";
for ($c=1;$c<=7;$c++){
echo "<div class='caja_info_imagen'><img src='img/estadio/".$c.".jpg' ></div>";
}
echo "</div>";
echo "<br>";
echo "</div>";
 }

 if($index=='galeria-ciudad'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Ciudad Deportiva Luis Mendoza</div></div>";
echo"<div class='caja_info' >";
for ($c=1;$c<=13;$c++){
echo "<div class='caja_info_imagen'><img src='img/ciudad/poli".$c.".jpg' ></div><br>";
}
echo "<div class='caja_info_letras'>Confiteria: El Gran Marinero</div>";

for ($e=1;$e<=8;$e++){
echo "<div class='caja_info_imagen'><img src='img/ciudad/buffet".$e.".jpg' width='545px' height='400px'></div><br>";
}
echo "<div class='caja_info_letras'>La pensi&oacute;n</div>";
for ($f=1;$f<=5;$f++){
echo "<div class='caja_info_imagen'><img src='img/ciudad/pension".$f.".jpg' width='545px' height='400px'></div><br>";
}
echo "</div><br></div>";
 }
 
if($index=='galeria-tenis'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Tenis</div></div>";
echo"<div class='caja_info' >";
for ($c=1;$c<=5;$c++){
echo "<div class='caja_info_imagen'><img src='img/tenis/".$c.".jpg' ></div>";
}
echo "</div><br></div>";
 }
 
 if($index=='galeria-gimnasio'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Gimnasio	</div></div>";
echo"<div class='caja_info' >";
for ($c=1;$c<=7;$c++){
echo "<div class='caja_info_imagen'><img src='img/gimnasio/".$c.".jpg' width='545px' height='400px'></div>";
}
echo "</div><br></div>";
 }
 
if($index=='galeria-chaiu'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Chaiu Do Kwan</div></div>";
echo"<div class='caja_info' >";
for ($c=1;$c<=4;$c++){
echo "<div class='caja_info_imagen'><img src='img/chaiu/".$c.".jpg' width='545px' height='350px'></div>";
}
echo "<br></div></div>";
 }
 
 if($index=='galeria-hockey'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Hockey Femenino</div></div>";
echo"<div class='caja_info' >";
for ($c=1;$c<=10;$c++){
echo "<div class='caja_info_imagen'><img src='img/hockey/".$c.".jpg' width='545px' height='400px'></div>";
}
echo "<div class='caja_info_letras'><b>El mural echo por las chicas de Hockey.</b></div>";
for ($c=11;$c<=13;$c++){
echo "<div class='caja_info_imagen'><img src='img/hockey/".$c.".jpg' width='545px' height='400px'></div>";
}
echo "<br></div></div>";
 }
 
if($index=='galeria-karate'){
echo "<div class='center'>";
echo "<br>";
echo "<div id='titulo'><div class='titulo_letras'>Karate</div></div>";
echo"<div class='caja_info' >";
for ($c=1;$c<=6;$c++){
echo "<div class='caja_info_imagen'><img src='img/karate/".$c.".png' width='545px' height='400px'></div>";
}
echo "<br></div></div>";
 }

}
}
}
?>
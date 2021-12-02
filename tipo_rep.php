<?php include('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>TIPO DE REPARACIONES</h1>
			</div>
			<div class="articulo">
				<article>
					<p>En este taller electrico realizamos multiples servicios tanto en casas
					viviendas y automoviles</p><br><br>
					<h1>*Diagnostico</h1>
				    <p>se realiza un analisis en los fallos del producto a reparar y se le notfica 
						al cliente del problema, los fallos y el equipo que sera necesario
						utilizar...........................................$50
					</p><br/>
					<h1>*Afinaciones</h1>
					<p>Inspección del sistema eléctrico de su automóvil. Batería, sistema de carga
				     y encendido. Diagnóstico electrónico. Circuito de luces y 
					 señalizacion..............................................$100</p>
					<br/>
					<h1>*Modificaciones</h1>
					<p>Después de realizar el análisis al vehículo, si el cliente lo desea se 
					realizarán cambios y mejoras en el sistema eléctrico del automóvil, ya sea switch, 
					batería, sistema de arranque etc.....................................................
					.....................................................................$300-$500</p>
					<br/>
					<h1>*Medidas preventivas</h1>
					<p>Basado en el análisis, los errores encontrados y las piesas que puedan resultar 
					dañadas en un futuro, se aplica sobre el circuito eléctrico una modificación que 
					ayudará a que sea más duradero y difícil de dañar e incluso aumentar su potencial 
					eléctrico........................................................................
					...................................................$500</p>
					<br>
					<h1>*Recableado</h1>
					<p>Si vas a instalar algún elemento nuevo, como una nueva cocina eléctrica, un horno, 
					o algún aparato que requiera una única línea de cable desde el cuadro puedes 
					contactarnos....................................................................
					................................................$800</p>
					<br>
					<h1>*Cuadro eléctrico</h1>
					<p>Si cuentas con con un cuadro eléctrico del viejo modelo de antes del 2002, entonces
					con nosotros podrás obtener un mejorr modelo y una instalación de este...$500 mas la instalacion</p>
					<br>
					<h1>*Terminales y enchufes</h1>
					<p>Siendo las terminales y los enchufes las partes de la red eléctrica que más sufren y 
					se deterioron, es necesario darles mantenimiento constante, cosa que nosotros hacemos de 
					manera eficiente con el mejor equipo y personal capacitado....................
					.......................$700</p>
					<br>
					<h1>*Subida de tensión</h1>
					<p>¿Ibas a calentar un plato en el microondas y de repente se ha ido la luz? La causa 
					puede ser que el ICP (Interruptor de Control de Potencia) haya saltado, lo que significa 
					que se ha excedido el umbral de potencia contratada por enganchar varios aparatos electrónicos
					 a la vez, es decir, ha habido un aumento de la tensión en la luz......................
					 .......................$800</p>
					 <br>
					 <h1>*Cortocircuito</h1>
					<p>Este tipo de problemas sucede cuando dos conductores de electricidad de distinta polaridad
					se juntan haciendo contacto entre sí. Esta unión provoca un aumento de tensión en la 
					electricidad que acaba quemando el aislante del cableado, haciendo que la red eléctrica
					cortocircuite.................................................................
					.......................................................$600</p>
					<br>
					<h1>*Diferencial</h1>
					El diferencial eléctrico es imprescindible en cualquier instalación y funciona 
					automáticamente, es decir, se desconectará de forma automática si detecta cualquier 
					desviación o defecto en la instalació.....................................................
					.......................................................................$400 </p>
					<br>
					<h1>*Problemas con los cables de distribución</h1>
					Otra de las averías más comunes es el envejecimiento o deterioro de los cables de red 
					que transportan la electricidad desde el punto de generación hasta los puntos de consumo, 
					transformando la energía en luz, calor u otras formas...................................
					....................$700</p>
					<br><br>
					<form action="welcome.php" method="post">
						-Nombre: <input type="text" name="name"><br><br>
				        -E-mail: <input type="text" name="email"><br><br>
				        -Telefono: <input type="number" name="fon"><br><br>
					<p>-Reparaciones de </p><br>
					    Automovil<input type = "radio" name = "genero" value = "hombre"> ||
					    vivienda<input type = "radio" name = "genero" value = "hombre"><br><br>
			        </form>
				    <form>
					<p>*Escribe en el siguiente recuadro el motivo por el que decidiste 
						contactarnos.
					</p>
					<textarea name="comment" rows=10 cols=80></textarea><br><br>
					<input type="submit">
				</form>
				</article>
			</div>
            <?php include('sidebar.php');?>
		</div>
	</section>
    <?php include('footer.php');?>
</body>
</html>
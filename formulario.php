<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>REGISTRO DE USUARIO</title>
<link rel="stylesheet" type="text/css" href=".//estilos.css" media="screen" />
</head>

<body>
<h2>Registro</h2>

<form id="formulario" method="post" action=" ">
<fieldset>
<p>
	Usuario
<input type="text" name="usuario"/>
</p>
<p>
	Nombre
<input type="text" name="nombre" />
</p>
<p>
	Apellidos
<input type="text" name="apellidos"/>
</p>
<p>
	Contraseña
<input type="password" name="contraseña"/>
</p>
<p>
<label for="dia">Fecha de nacimiento</label>
</p>
<p>
<select id="dia" name="dia">
<optgroup label="Dia">
<option value="01" selected="selected">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</optgroup>
</select>
-
<select id="mes" name="mes">
<optgroup label="Mes">
<option value="01" selected="selected">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</optgroup>
</select>
-
<select id="año" name="año">
<optgroup label="Año">
<option value=">1900" selected="selected">>1900</option>
<option value=">1905">>1905</option>
<option value=">1910">>1910</option>
<option value=">1915">>1915</option>
<option value=">1920">>1920</option>
<option value=">1925">>1925</option>
<option value=">1930">>1930</option>
<option value=">1935">>1935</option>
<option value=">1940">>1940</option>
<option value=">1945">>1945</option>
<option value=">1950">>1950</option>
<option value=">1955">>1955</option>
<option value=">1960">>1960</option>
<option value=">1965">>1965</option>
<option value=">1970">>1970</option>
<option value=">1975">>1975</option>
<option value=">1980">>1980</option>
<option value=">1985">>1985</option>
<option value=">1990">>1990</option>
<option value=">1995">>1995</option>
<option value=">1998">>1998</option>
</optgroup>
</select>
</p>







<p>
<label for="email">Correo electronico</label> <br/>
<select id="email" name="email">
<option value="" selected="selected">- selecciona -</option>
<option value="gmail">Gmail</option>
<option value="yahoo">Yahoo</option>
<option value="hotmail">Hotmail</option>
<option value="otro">Otro</option>
</select>
</p>
<p>
Sexo
</p>
<p>
<input type="radio" name="sexo" value="masculino" /> Masculino
<input type="radio" name="sexo" value="femenino" /> Femenino
</p>
<p>
<label for="descripcion">Descripcion personal</label> <br/>
<textarea id="descripcion" name="descripcion" cols="40" rows="5"></textarea>
</p>

</fieldset>



<fieldset>
<p>Añadir imagen de perfil</p>
<p>
<input type="file" name="Añadir imagen de perfil" />
</p>
<p>
<input name="terminos" type="checkbox" value="acepto"/>Acepto los terminos y condiciones de la licencia
</p>
</fieldset>
<p>
<input type="reset" name="borrar" value="Limpiar formulario" />
<input type="submit" value="Enviar" />
</p>
</form>

<p><a href=".//creepypastasweb.html">Volver a la pagina principal</a></p>
</body>
</html>

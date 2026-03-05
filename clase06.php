<?php
// segundo parcial

// Manejo de formularios en php

// Dos metodos para enviarlos desde un formulario HTML a un script PHP: GET y POST
// GET: los datos se envian a traves de la URL, lo que significa que son visibles para el usuario. Es adecuado para enviar datos no sensibles o cuando se desea compartir la URL con los datos incluidos. Sin embargo, tiene limitaciones en cuanto a la cantidad de datos que se pueden enviar y no es seguro para enviar información confidencial.
// Metodo GET: El metodo get envia los datos a traves de la URL, por ejemplo: http://ejemplo.com/script.php?nombre=Juan&edad=30. En este caso, los datos se pueden acceder en el script PHP utilizando la variable superglobal $_GET, por ejemplo: $_GET['nombre'] y $_GET['edad'].
// Ventajas del metodo GET:
// Es fácil de usar y entender, ya que los datos se muestran en la URL.
// Es adecuado para enviar datos no sensibles o cuando se desea compartir la URL con los datos incluidos.
// Desventajas del metodo GET:
// No es seguro para enviar información confidencial, ya que los datos se muestran en la URL y pueden ser vistos por terceros.
// Tiene limitaciones en cuanto a la cantidad de datos que se pueden enviar, ya que la URL tiene un límite de caracteres (generalmente alrededor de 2000 caracteres).
// Caracteristicas del metodo GET:
// Los datos se envian a traves de la URL, lo que significa que son visibles para el usuario.
// Los datos son visibles en la barra de direcciones del navegador, lo que puede ser útil para compartir enlaces o para realizar búsquedas, pero no es seguro para enviar información confidencial.
// ¿Cuando usarlo?
// El metodo get para:
// Realizar busquedas o consultas que no involucren datos sensibles.
// Compartir enlaces con datos incluidos, como resultados de busquedas o filtros aplicados.
// POST: los datos se envian a traves del cuerpo de la solicitud HTTP, lo que significa que no son visibles para el usuario. Es adecuado para enviar datos sensibles o cuando se desea enviar una gran cantidad de datos. Es más seguro que el metodo GET, ya que los datos no se muestran en la URL y no quedan registrados en los historiales del navegador o en los registros del servidor.
// Metodo POST: El metodo post envia los datos a traves del cuerpo de la solicitud HTTP, lo que significa que no son visibles para el usuario. En este caso, los datos se pueden acceder en el script PHP utilizando la variable superglobal $_POST, por ejemplo: $_POST['nombre'] y $_POST['edad'].
// Ventajas del metodo POST:
// Es más seguro que el metodo GET, ya que los datos no se muestran en la URL y no quedan registrados en los historiales del navegador o en los registros del servidor.
// Es adecuado para enviar datos sensibles o cuando se desea enviar una gran cantidad de datos, ya que no tiene limitaciones en cuanto a la cantidad de datos que se pueden enviar.
// Desventajas del metodo POST:
// No es tan fácil de usar y entender como el metodo GET, ya que los datos no se muestran en la URL.
// No es adecuado para compartir enlaces con datos incluidos, ya que los datos no se muestran en la URL.
// Caracteristicas del metodo POST:
// Los datos se envian a traves del cuerpo de la solicitud HTTP, lo que significa que no son visibles para el usuario.
// Los datos no son visibles en la barra de direcciones del navegador, lo que hace que sea más seguro para enviar información confidencial, pero no es adecuado para compartir enlaces con datos incluidos.
// ¿Cuando usarlo?
// El metodo post para:
// Enviar datos sensibles como contraseñas, información personal o datos financieros.
// Enviar grandes cantidades de datos que no se pueden enviar con el metodo GET.
// Realizar acciones que modifican el estado del servidor, como crear, actualizar o eliminar recursos, ya que el metodo POST es adecuado para este tipo de operaciones en la comunicación entre el cliente y el servidor.
// NOTA: una solicitud HTTP es una solicitud que un cliente (como un navegador web) hace a un servidor para obtener recursos o realizar acciones. Las solicitudes HTTP pueden ser de diferentes tipos, como GET, POST, PUT, DELETE, entre otros, y cada tipo tiene un propósito específico en la comunicación entre el cliente y el servidor.

// Ejemplo del uso de GET y POST en un formulario HTML:
// Ejemplo 1: Realiza un programa que reciba el nombre y la edad de una persona a traves de un formulario HTML utilizando el metodo GET y muestre un mensaje de bienvenida con el nombre y la edad ingresados.
// Archvios que vamos a utilizar:
// Ejemplo.html: Este archvio contendra el nombr y la edad de una persona a traves de un formulario HTML utilizando el metodo GET.
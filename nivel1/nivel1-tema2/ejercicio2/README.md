# Ejercicio: Inyección de Dependencias en PHP

En este programa se simula  a una persona que se prepara para salir de casa llevando consigo distintos objetos ,como las llaves, la cartera, el smartphone y las llaves del coche.
utilizando el patrón de inyección de dependencias he creado diferentes clases asi:
Llave: representa la llave de casa.
LlaveCoche: representa la llave del coche.
Smartphone: representa el teléfono móvil de la persona.
Cartera: representa la cartera.
Persona: recibe los objetos anteriores mediante inyección de dependencias en su constructor.

Cada clase tiene un método __toString() que permite representar sus datos como texto.

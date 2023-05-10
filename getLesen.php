<?php
echo 'post-Variable';
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo 'get-Variable';
echo '<pre>';
print_r($_GET);
echo '</pre>';
// die get-Variable wird auch in der Url mitübergeben:
// al Anhang zum Pfad: ? Variablenname = Wert (ohne Leerzeichen)
// wie werden weitere Variablen per get weitergegeben?
// weitere Variablen werden mit Ampersand (&) angebunden
// das können wir auch bei <a href="..." benutzen
//
// Außerhalb der form:
// Erstelle einen Knopf, der auf getLesen.php linkt und der folgende Variablen mit Werten übergibt:
// Var: vorname mit Wert Tom und Var: nachname mit Wert toll

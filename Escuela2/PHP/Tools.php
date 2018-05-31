<?php
function Conecta(){
    return pg_connect("host=localhost port=5433 dbname=ControlPagosAlumnos user=postgres password=1234");
}
?>
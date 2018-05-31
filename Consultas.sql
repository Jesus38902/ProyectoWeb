
--obtener el ultimo registro de una tabla
select * from pago_alumno order by id_pagoa desc limit 1;

--obtener el valor mayor de una tabla
select id_pagoa from pago_alumno order by matricula desc limit 1;

--Borra los datos de pago_alumno
delete  from pago_alumno;

--obtener listados los valores de una tabla por id_pagoa
select * from pago_alumno  where mes = 'Abril' order by id_pagoa;

SELECT *  FROM alumno order by matricula;

--CREAMOS UNA INTERSECCION DE LA TABLA ALUMNO Y PAGO_ALUMNO
select matricula from alumno except select matricula from pago_alumno;

--OBTENER LOS PAGOS REALIZADOS POR ALUMNO
select PA.id_pagoa, RB.id_baucher, BP.fecha, BP.importe,PA.mes
from pago_alumno as PA join registro_baucher as RB on PA.id_pagoa=RB.id_regbau join baucher_pago as BP on BP.id_baucher=RB.id_baucher
where PA.matricula = '14011124';

--OBTENER LOS NO PAGOS REALIZADOS POR ALUMNO
select id_pagoa, id_periodo, mes from pago_alumno 
where id_estpago='02' and matricula = '14011124';


--OBTENER LOS ALUMNOS QUE NO HAN PAGADO POR MES
select A.matricula,id_lic, A.nombre, A.apepat, A.apemat,PA.id_pagoa, PA.id_periodo, PA.mes
from pago_alumno as PA join alumno as A on PA.matricula=A.matricula 
where PA.id_estpago='02' order by A.matricula;

--OBTENER LOS ALUMNOS QUE HAN PAGADO

select A.matricula,id_lic, A.nombre, A.apepat, A.apemat,PA.id_pagoa, PA.id_periodo, PA.mes,BP.fecha
from baucher_pago as BP join registro_baucher as RB on BP.id_baucher= RB.id_baucher
join pago_alumno as PA on PA.id_pagoa=RB.id_regbau join alumno as A on A.matricula=PA.matricula
where PA.id_estpago='01' order by A.matricula;
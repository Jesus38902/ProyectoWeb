------------------------------**INSERTA EN LA TABLA LICENCIATURA**------------------------------------------------------
insert into licenciatura values ('IELE','Ingenieria Electrica');
insert into licenciatura values ('IELC','Ingenieria Electronica');
insert into licenciatura values ('IGEM','Ingenieria Gestion Empresarial');
insert into licenciatura values ('IIND','Ingenieria Industrial');
insert into licenciatura values ('IINF','Ingenieria Informatica');
insert into licenciatura values ('IMEC','Ingenieria Mecanica');
insert into licenciatura values ('IQUI','Ingenieria Quimica');
insert into licenciatura values ('ISIC','Ingenieria Sistemas Computacionales');
-------------------------------**INSERTA EN LA TABLA PERIODO**-----------------------------------------------------
insert into periodo values('01','1 ENE-JUN');
insert into periodo values('02','2 AGO-DIC');
-------------------------------**INSERTA EN LA TABLA ESTADO PAGO**----------------------------------------------------
insert into estado_pago values ('01','Pagado');
insert into estado_pago values ('02','No Pagado');
-------------------------------**INSERTA EN LA TABLA ALUMNO**---------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------
insert into alumno values ('14011160','DIANA KAREN','CORONA','RUJILLO','2711053396','Calle 6 de Mayo','94945','MUJER','IGEM');
insert into alumno values ('12011380','LUCERO','PALACIOS','MORGADO','2721053395','Av. Insurgentes','94946','MUJER','IGEM');
insert into alumno values ('14011239','DANIEL ABNER','VELAZQUEZ','MUNGUIA','2751903396','Calle de la Campana','94946','HOMBRE','IGEM');
----------------------------------------------------------------------------------------------------------------------------------------
insert into alumno values ('13010384','SERGIO URIEL','HERNANDEZ','NAVA','2711113396','Calle Francisco Mejia','94945','HOMBRE','IIND');
insert into alumno values ('15010335','JESUS VLADIMIR','CABALLERO','BAEZ','2221114396','Av. Cortinez Ruiz','94955','HOMBRE','IIND');
insert into alumno values ('13010052','MARIA DOLORES','ILLESCAS','VICTORIA','2451234534','Domicilio Conocido','94885','MUJER','IIND');
------------------------------------------------------------------------------------
insert into alumno values ('14011355','JESUS RAFAEL','VALLEJO','MENDEZ','2771234534','Domicilio Conocido','94805','HOMBRE','IQUI');
insert into alumno values ('15010660','CAROLINA','SANCHEZ','LARA','2071234534','Domicilio Conocido','94897','MUJER','IQUI');
insert into alumno values ('14011331','VIANEY','ROSAS','CALDERON','2799234534','Domicilio Conocido','94877','MUJER','IQUI');
------------------------------------------------------------------------------------
insert into alumno values ('14010631','JOSE LUIS','QUIJANO','FLORES','2541234534','Domicilio Conocido','94805','HOMBRE','IELE');
insert into alumno values ('15010759','ERICK','ROMERO','MARCIAL','2771234534','Domicilio Conocido','94805','HOMBRE','IELE');
insert into alumno values ('14010632','OMAR','VIDAL','RODRIGUEZ','2548834534','Domicilio Conocido','94805','HOMBRE','IELE');
------------------------------------------------------------------------------------
insert into alumno values ('15010850','ERICK ORLANDO','MURILLO','LUNA','2548878534','Domicilio Conocido','99905','HOMBRE','IELC');
insert into alumno values ('14010677','JOSUE GABRIEL','ASGADO','MORALES','2998878534','Domicilio Conocido','99989','HOMBRE','IELC');
insert into alumno values ('13010827','RENE','CERVANTES','ASCENCION','2548867534','Domicilio Conocido','99665','HOMBRE','IELC');
------------------------------------------------------------------------------------
insert into alumno values ('15010956','JOSE DAVID','GARCIA','AGUILAR','2888818534','Domicilio Conocido','99965','HOMBRE','IMEC');
insert into alumno values ('15011050','RODRIGO','REYES','DIAZ','2876518534','Domicilio Conocido','99465','HOMBRE','IMEC');
insert into alumno values ('14010886','GUSTAVO','VILLAGOMEZ','PACHECO','2885618534','Domicilio Conocido','90965','HOMBRE','IMEC');
------------------------------------------------------------------------------------
insert into alumno values ('14011124','GABRIEL','SANCHEZ','GARCIA','2712088378','Av. Miguel Hidalgo','94956','HOMBRE','ISIC');
insert into alumno values ('14011100','MARIA ANTONIA','GONZALEZ','HUERTA','2782098378','Domicilio Conocido','94906','MUJER','ISIC');
insert into alumno values ('14011073','ADRIAN','ALVAREZ','CONTRERAS','2652088318','Domicilio Conocido','94906','HOMBRE','ISIC');
------------------------------------------------------------------------------------
insert into alumno values ('15010282','NAYELI','ESPINOZA','MARTINEZ','2777088318','Domicilio Conocido','94996','MUJER','IINF');
insert into alumno values ('14010264','ANTONIO','PONCE','SANTIAGO','2867088318','Domicilio Conocido','94796','HOMBRE','IINF');
insert into alumno values ('14010257','RAUL','OAXACA','MORAN','2777321318','Domicilio Conocido','98996','HOMBRE','IINF');

-------------------------------**INSERTA EN LA TABLA USUARIO LAS CONTRASEÑAS DE LOS ALUMNOS POR DEFECTO**------------------------------
insert into usuario values ('14011160','14011160','ALUMNO');
insert into usuario values ('12011380','12011380','ALUMNO');
insert into usuario values ('14011239','14011239','ALUMNO');
----------------------------------------------------------------------------------------------------------------------------------------
insert into usuario values ('13010384','13010384','ALUMNO');
insert into usuario values ('15010335','15010335','ALUMNO');
insert into usuario values ('13010052','13010052','ALUMNO');
------------------------------------------------------------------------------------
insert into usuario values ('14011355','14011355','ALUMNO');
insert into usuario values ('15010660','15010660','ALUMNO');
insert into usuario values ('14011331','14011331','ALUMNO');
------------------------------------------------------------------------------------
insert into usuario values ('14010631','14010631','ALUMNO');
insert into usuario values ('15010759','15010759','ALUMNO');
insert into usuario values ('14010632','14010632','ALUMNO');
------------------------------------------------------------------------------------
insert into usuario values ('15010850','15010850','ALUMNO');
insert into usuario values ('14010677','14010677','ALUMNO');
insert into usuario values ('13010827','13010827','ALUMNO');
------------------------------------------------------------------------------------
insert into usuario values ('15010956','15010956','ALUMNO');
insert into usuario values ('15011050','15011050','ALUMNO');
insert into usuario values ('14010886','14010886','ALUMNO');
------------------------------------------------------------------------------------
insert into usuario values ('14011124','14011124','ALUMNO');
insert into usuario values ('14011100','14011100','ALUMNO');
insert into usuario values ('14011073','14011073','ALUMNO');
------------------------------------------------------------------------------------
insert into usuario values ('15010282','15010282','ALUMNO');
insert into usuario values ('14010264','14010264','ALUMNO');
insert into usuario values ('14010257','14010257','ALUMNO');
-------------------------------------------------------------------------------------
insert into usuario values ('ADMIN001','12345678','ADMINISTRADOR');

-------------------------------**INSERTA EN LA TABLA PAGO_ALUMNO**------------------------------
--------------------------MES DE ENERO-----------------------------------------
insert into pago_alumno values ('000000','14011160','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000001','12011380','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000002','14011239','01','02','2017-01-01','Enero');
-----------------------------------------------------------------------------------
insert into pago_alumno values ('000003','13010384','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000004','15010335','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000005','13010052','01','02','2017-01-01','Enero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000006','14011355','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000007','15010660','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000008','14011331','01','02','2017-01-01','Enero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000009','14010631','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000010','15010759','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000011','14010632','01','02','2017-01-01','Enero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000012','15010850','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000013','14010677','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000014','13010827','01','02','2017-01-01','Enero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000015','15010956','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000016','15011050','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000017','14010886','01','02','2017-01-01','Enero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000018','14011124','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000019','14011100','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000020','14011073','01','02','2017-01-01','Enero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000021','15010282','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000022','14010264','01','02','2017-01-01','Enero');
insert into pago_alumno values ('000023','14010257','01','02','2017-01-01','Enero');

--------------------------MES DE FEBRERO-----------------------------------------
insert into pago_alumno values ('000024','14011160','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000025','12011380','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000026','14011239','01','02','2017-02-01','Febrero');
-----------------------------------------------------------------------------------
insert into pago_alumno values ('000027','13010384','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000028','15010335','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000029','13010052','01','02','2017-02-01','Febrero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000030','14011355','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000031','15010660','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000032','14011331','01','02','2017-02-01','Febrero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000033','14010631','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000034','15010759','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000035','14010632','01','02','2017-02-01','Febrero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000036','15010850','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000037','14010677','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000038','13010827','01','02','2017-02-01','Febrero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000039','15010956','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000040','15011050','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000041','14010886','01','02','2017-02-01','Febrero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000042','14011124','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000043','14011100','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000044','14011073','01','02','2017-02-01','Febrero');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000045','15010282','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000046','14010264','01','02','2017-02-01','Febrero');
insert into pago_alumno values ('000047','14010257','01','02','2017-02-01','Febrero');

--------------------------MES DE MARZO-----------------------------------------
insert into pago_alumno values ('000048','14011160','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000049','12011380','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000050','14011239','01','02','2017-03-01','Marzo');
-----------------------------------------------------------------------------------
insert into pago_alumno values ('000051','13010384','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000052','15010335','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000053','13010052','01','02','2017-03-01','Marzo');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000054','14011355','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000055','15010660','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000056','14011331','01','02','2017-03-01','Marzo');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000057','14010631','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000058','15010759','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000059','14010632','01','02','2017-03-01','Marzo');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000060','15010850','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000061','14010677','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000062','13010827','01','02','2017-03-01','Marzo');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000063','15010956','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000064','15011050','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000065','14010886','01','02','2017-03-01','Marzo');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000066','14011124','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000067','14011100','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000068','14011073','01','02','2017-03-01','Marzo');
------------------------------------------------------------------------------------
insert into pago_alumno values ('000069','15010282','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000070','14010264','01','02','2017-03-01','Marzo');
insert into pago_alumno values ('000071','14010257','01','02','2017-03-01','Marzo');

-------------------------------**INSERTA EN LA TABLA BAUCHER_PAGO (SON LOS RECIBOS GENERADOS EN EL BANCO)**------------------------------
--------------------------MES DE ENERO-----------------------------------------
insert into baucher_pago values ('00000','BANAMEX',1000,'2017-01-02');
insert into baucher_pago values ('00001','BANAMEX',1000,'2017-01-02');
insert into baucher_pago values ('00002','BANAMEX',1000,'2017-01-02');
insert into baucher_pago values ('00003','BANAMEX',1000,'2017-01-02');
insert into baucher_pago values ('00004','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00005','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00006','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00007','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00008','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00009','SANTANDER',1000,'2017-01-02');
insert into baucher_pago values ('00010','SANTANDER',1000,'2017-01-02');
insert into baucher_pago values ('00011','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00012','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00013','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00014','SANTANDER',1000,'2017-01-02');
insert into baucher_pago values ('00015','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00016','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00017','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00018','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00019','BANCOMER',1000,'2017-01-02');
insert into baucher_pago values ('00020','BANCOMER',1000,'2017-01-02');
insert into baucher_pago values ('00021','BANCOMER',1000,'2017-01-02');
insert into baucher_pago values ('00022','HSBC',1000,'2017-01-02');
insert into baucher_pago values ('00023','BANCOMER',1000,'2017-01-02');
--------------------------MES DE FEBRERO-----------------------------------------
insert into baucher_pago values ('00024','BANAMEX',1000,'2017-02-02');
insert into baucher_pago values ('00025','BANAMEX',1000,'2017-02-02');
insert into baucher_pago values ('00026','BANAMEX',1000,'2017-02-02');
insert into baucher_pago values ('00027','BANAMEX',1000,'2017-02-02');
insert into baucher_pago values ('00028','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00029','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00030','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00031','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00032','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00033','SANTANDER',1000,'2017-02-02');
insert into baucher_pago values ('00034','SANTANDER',1000,'2017-02-02');
insert into baucher_pago values ('00035','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00036','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00037','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00038','SANTANDER',1000,'2017-02-02');
insert into baucher_pago values ('00039','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00040','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00041','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00042','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00043','BANCOMER',1000,'2017-02-02');
insert into baucher_pago values ('00044','BANCOMER',1000,'2017-02-02');
insert into baucher_pago values ('00045','BANCOMER',1000,'2017-02-02');
insert into baucher_pago values ('00046','HSBC',1000,'2017-02-02');
insert into baucher_pago values ('00047','BANCOMER',1000,'2017-02-02');


----------**INSERTA EN LA TABLA REGISTRO_BAUCHER (SON LOS RECIBOS REGISRADOS POR ALUMNO QUE FUERON GENERADOS EN EL BANCO)**----------------
--------------------------MES DE ENERO-----------------------------------------
insert into registro_baucher values ('000000','00000');
update pago_alumno set id_estpago = '01' where id_pagoa='000000';
insert into registro_baucher values ('000001','00001');
update pago_alumno set id_estpago = '01' where id_pagoa='000001';
insert into registro_baucher values ('000002','00002');
update pago_alumno set id_estpago = '01' where id_pagoa='000002';
insert into registro_baucher values ('000003','00003');
update pago_alumno set id_estpago = '01' where id_pagoa='000003';
insert into registro_baucher values ('000004','00004');
update pago_alumno set id_estpago = '01' where id_pagoa='000004';
insert into registro_baucher values ('000005','00005');
update pago_alumno set id_estpago = '01' where id_pagoa='000005';
insert into registro_baucher values ('000006','00006');
update pago_alumno set id_estpago = '01' where id_pagoa='000006';
insert into registro_baucher values ('000007','00007');
update pago_alumno set id_estpago = '01' where id_pagoa='000007';
insert into registro_baucher values ('000008','00008');
update pago_alumno set id_estpago = '01' where id_pagoa='000008';
insert into registro_baucher values ('000009','00009');
update pago_alumno set id_estpago = '01' where id_pagoa='000009';
insert into registro_baucher values ('000010','00010');
update pago_alumno set id_estpago = '01' where id_pagoa='000010';
insert into registro_baucher values ('000011','00011');
update pago_alumno set id_estpago = '01' where id_pagoa='000011';
insert into registro_baucher values ('000012','00012');
update pago_alumno set id_estpago = '01' where id_pagoa='000012';
insert into registro_baucher values ('000013','00013');
update pago_alumno set id_estpago = '01' where id_pagoa='000013';
insert into registro_baucher values ('000014','00014');
update pago_alumno set id_estpago = '01' where id_pagoa='000014';
insert into registro_baucher values ('000015','00015');
update pago_alumno set id_estpago = '01' where id_pagoa='000015';
insert into registro_baucher values ('000016','00016');
update pago_alumno set id_estpago = '01' where id_pagoa='000016';
insert into registro_baucher values ('000017','00017');
update pago_alumno set id_estpago = '01' where id_pagoa='000017';
insert into registro_baucher values ('000018','00018');
update pago_alumno set id_estpago = '01' where id_pagoa='000018';
insert into registro_baucher values ('000019','00019');
update pago_alumno set id_estpago = '01' where id_pagoa='000019';
insert into registro_baucher values ('000020','00020');
update pago_alumno set id_estpago = '01' where id_pagoa='000020';
insert into registro_baucher values ('000021','00021');
update pago_alumno set id_estpago = '01' where id_pagoa='000021';
insert into registro_baucher values ('000022','00022');
update pago_alumno set id_estpago = '01' where id_pagoa='000022';
insert into registro_baucher values ('000023','00023');
update pago_alumno set id_estpago = '01' where id_pagoa='000023';
--------------------------MES DE FEBRERO-----------------------------------------
insert into registro_baucher values ('000024','00024');
update pago_alumno set id_estpago = '01' where id_pagoa='000024';
insert into registro_baucher values ('000025','00025');
update pago_alumno set id_estpago = '01' where id_pagoa='000025';
insert into registro_baucher values ('000026','00026');
update pago_alumno set id_estpago = '01' where id_pagoa='000026';
insert into registro_baucher values ('000027','00027');
update pago_alumno set id_estpago = '01' where id_pagoa='000027';
insert into registro_baucher values ('000028','00028');
update pago_alumno set id_estpago = '01' where id_pagoa='000028';
insert into registro_baucher values ('000029','00029');
update pago_alumno set id_estpago = '01' where id_pagoa='000029';
insert into registro_baucher values ('000030','00030');
update pago_alumno set id_estpago = '01' where id_pagoa='000030';
insert into registro_baucher values ('000031','00031');
update pago_alumno set id_estpago = '01' where id_pagoa='000031';
insert into registro_baucher values ('000032','00032');
update pago_alumno set id_estpago = '01' where id_pagoa='000032';
insert into registro_baucher values ('000033','00033');
update pago_alumno set id_estpago = '01' where id_pagoa='000033';
insert into registro_baucher values ('000034','00034');
update pago_alumno set id_estpago = '01' where id_pagoa='000034';
insert into registro_baucher values ('000035','00035');
update pago_alumno set id_estpago = '01' where id_pagoa='000035';
insert into registro_baucher values ('000036','00036');
update pago_alumno set id_estpago = '01' where id_pagoa='000036';
insert into registro_baucher values ('000037','00037');
update pago_alumno set id_estpago = '01' where id_pagoa='000037';
insert into registro_baucher values ('000038','00038');
update pago_alumno set id_estpago = '01' where id_pagoa='000038';
insert into registro_baucher values ('000039','00039');
update pago_alumno set id_estpago = '01' where id_pagoa='000039';
insert into registro_baucher values ('000040','00040');
update pago_alumno set id_estpago = '01' where id_pagoa='000040';
insert into registro_baucher values ('000041','00041');
update pago_alumno set id_estpago = '01' where id_pagoa='000041';
insert into registro_baucher values ('000042','00042');
update pago_alumno set id_estpago = '01' where id_pagoa='000042';
insert into registro_baucher values ('000043','00043');
update pago_alumno set id_estpago = '01' where id_pagoa='000043';
insert into registro_baucher values ('000044','00044');
update pago_alumno set id_estpago = '01' where id_pagoa='000044';
insert into registro_baucher values ('000045','00045');
update pago_alumno set id_estpago = '01' where id_pagoa='000045';
insert into registro_baucher values ('000046','00046');
update pago_alumno set id_estpago = '01' where id_pagoa='000046';
insert into registro_baucher values ('000047','00047');
update pago_alumno set id_estpago = '01' where id_pagoa='000047';





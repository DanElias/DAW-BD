
CREATE TABLE evento(
	id_evento int NOT NULL AUTO_INCREMENT,
	nombre varchar(30),
	fecha date,
	lugar varchar(40),
	descripcion varchar(50),
	CONSTRAINT pk_evento PRIMARY KEY (id_evento)
)

INSERT INTO evento VALUES(0, 'Bazaar de Ropa', '2019/03/28', 'Mariana Sala', 'Venta de ropa');

SELECT id_evento, nombre, fecha, lugar, descripcion FROM evento

SELECT id_evento, nombre, fecha, lugar, descripcion FROM evento WHERE nombre LIKE '%".$nombre_evento."%'

SELECT id_evento, nombre, fecha, lugar, descripcion FROM evento WHERE fecha LIKE '%".$fecha_evento."%'

SELECT id_evento, nombre, fecha, lugar, descripcion FROM evento WHERE id_evento = '".$id_evento."'

INSERT INTO evento (id_evento,nombre,fecha,lugar,descripcion) 
VALUES (0,\"".$nombre_evento."\",\"".$fecha_evento."\",\"".$lugar_evento."\",\"". $descripcion_evento."\")

UPDATE evento 
SET id_evento=$id_evento, nombre='".$nombre_evento."', fecha='".$fecha_evento."', lugar='".$lugar_evento."', descripcion='".$descripcion_evento."'
WHERE id_evento=".$id_evento."
        
DELETE FROM evento WHERE id_evento ='".$id_evento."'

        

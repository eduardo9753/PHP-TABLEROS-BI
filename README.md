# TABLEROS BI PARA EL ANALISIS DE DATOS 
Aplicativo Web para la inspección y la toma de decisiones en funcion de tableros estadisticos 
------------

HERRAMIENTAS :
- Base de Datos: MySQL.
- Estilos: CSS3 y Bootstrap 4.
- Lenguaje : Lenguaje PHP.

## Arquitectura MVC
1. MODELO: representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.
2. VISTA: Información que se envía al cliente y los mecanismos interacción con éste.
3. CONTROLADOR: intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.

## Imagenes
Vita Administrador:
- 1
![admin01](https://user-images.githubusercontent.com/68178186/189771566-7f58668f-7420-442c-ba24-2551c9133e38.PNG)
- 2
![admin02](https://user-images.githubusercontent.com/68178186/189771574-b206cf1e-5adc-4162-aa74-77f24acbe1c2.PNG)
- 3
![admin03](https://user-images.githubusercontent.com/68178186/189771578-78bd61e6-5788-4587-94bf-aeedcbedd7ac.PNG)
- 4
![admin04](https://user-images.githubusercontent.com/68178186/189771587-d5960424-b657-44de-9f26-31191ba5cb7e.PNG)
- 5
![admin05](https://user-images.githubusercontent.com/68178186/189771591-75faf700-cc68-4ce5-8fe0-2b140da8c00f.PNG)
- 6
![admin06](https://user-images.githubusercontent.com/68178186/189771596-504f38b6-ef62-46dc-8e0c-ea3fd55f5fa7.PNG)


Vita Medico:
- 9
![usuario01](https://user-images.githubusercontent.com/68178186/189771600-b717df9c-8109-4bb5-8bb0-16aada4f85ad.PNG)
- 10
![usuario02](https://user-images.githubusercontent.com/68178186/189771605-77db2226-5231-446b-b96a-048020f9e4b6.PNG)


### SCRIPT DE LA BASE DE DATOS
```sql
CREATE DATABASE sis_portal DEFAULT CHARACTER SET UTF8;
SET default_storage_engine = INNODB;



USE sis_portal;



#-------------------------------------------------------------------------------------------------
#CREATE TABLE IF NOT EXISTS PERFIL
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS perfil(
  id_perfil             INT PRIMARY KEY AUTO_INCREMENT,
  nombre_perfil         VARCHAR(100) NOT NULL,
  fecha_registro_sys    TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------






#-------------------------------------------------------------------------------------------------
#CREATE TABLE IF NOT EXISTS USUARIO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS usuario(
  id_usuario            INT PRIMARY KEY AUTO_INCREMENT,
  nombre_usuario        VARCHAR(100) NOT NULL,
  contra_usuario        VARCHAR(100) NOT NULL,
  id_perfil             INT NULL,
  foto                  VARCHAR(100) NULL default 'image/foto.png',
  fecha_registro_sys    TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------







#-------------------------------------------------------------------------------------------------
#CREATE TABLE IF NOT EXISTS GRUPO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS grupo(
  id_grupo              INT PRIMARY KEY AUTO_INCREMENT,
  nombre_grupo          VARCHAR(100) NOT NULL,
  estado_grupo          CHAR(1) NULL, 
  fecha_registro_sys    TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------






#-------------------------------------------------------------------------------------------------
#CREATE TABLE IF NOT EXISTS USUARIO - GRUPO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS usuario_grupo(
  id                    INT PRIMARY KEY AUTO_INCREMENT,
  id_usuario            INT NULL,
  id_grupo              INT NULL, 
  fecha_registro_sys    TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------






#-------------------------------------------------------------------------------------------------
#CREATE TABLE IF NOT EXISTS TABLERO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS tablero(
  id_tablero            INT PRIMARY KEY AUTO_INCREMENT,
  nombre_tablero        VARCHAR(100) NOT NULL,
  url_tablero           TEXT NULL,
  estado_tablero        CHAR(1) NULL,  
  fecha_registro_sys    TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------






#-------------------------------------------------------------------------------------------------
#CREATE TABLE IF NOT EXISTS  GRUPO - TABLERO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS grupo_tablero(
  id                    INT PRIMARY KEY AUTO_INCREMENT,
  id_grupo              INT NULL,
  id_tablero            INT NULL, 
  fecha_registro_sys    TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------




#-------------------------------------------------------------------------------------------------
#FORANEAS TABLERO - GRUPO
#-------------------------------------------------------------------------------------------------
ALTER TABLE grupo_tablero ADD FOREIGN KEY(id_grupo) REFERENCES grupo(id_grupo);
ALTER TABLE grupo_tablero ADD FOREIGN KEY(id_tablero) REFERENCES tablero(id_tablero);
#-------------------------------------------------------------------------------------------------





#-------------------------------------------------------------------------------------------------
#FORANEAS usuario - GRUPO
#-------------------------------------------------------------------------------------------------
ALTER TABLE usuario_grupo ADD FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario);
ALTER TABLE usuario_grupo ADD FOREIGN KEY(id_grupo) REFERENCES grupo(id_grupo);
#-------------------------------------------------------------------------------------------------





#-------------------------------------------------------------------------------------------------
#FORANEAS USUARIO - PERFIL
#-------------------------------------------------------------------------------------------------
ALTER TABLE usuario ADD FOREIGN KEY(id_perfil) REFERENCES perfil(id_perfil);
#-------------------------------------------------------------------------------------------------

```

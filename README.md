## Mini turtorial para crear un sitio MVC

## Preparación de la base de dataos
Voy a crear siguiendo el tutorial de un tal Shoko en Youtube lo que sdería una itroducción a hacer un proyecto MVC
[Video](https://www.youtube.com/watch?v=JWi4_8_d-RM)

## Inicio
Creo una base de datos y pongo una tabla con tres campos 
```sql
CREATE TABLE `usuarios` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `password`, `nombre`) VALUES
('usuario1', '1234567890', 'usuario 1'),
('usuario2', '1234567890', 'usuario 2');

-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`username`);
COMMIT;
```
## Creación del modelo
En la carpeta `model` creo la clase llamada ``Conexion.php`` 

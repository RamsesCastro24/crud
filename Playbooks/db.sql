CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `Numero_Control` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Alta` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `alumnos` (`id`, `Numero_Control`, `Nombre`, `Fecha_Alta`) VALUES
(1, '18249900', 'Ramses Castro', '2022-09-07 21:32:01'),
(2, '18242344', 'Erick Alvarez', '2022-09-07 21:35:01');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
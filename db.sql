SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `Hraci` (
  `id` int NOT NULL,
  `Jmeno` varchar(200) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `dress` int NOT NULL,
  `bodu` int NOT NULL,
  `golu` int NOT NULL,
  `assistenci` int NOT NULL,
  `tresty` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `Hraci` (`id`, `Jmeno`, `dress`, `bodu`, `golu`, `assistenci`, `tresty`) VALUES
(1, 'Jirka', 12, 0, 0, 0, 0),
(2, 'Karel Marel', 19, 0, 0, 0, 0),
(4, 'Pavel', 10, 0, 0, 0, 0),
(5, 'Janek', 82, 0, 0, 0, 0);
CREATE TABLE `Zapas` (
  `id_hrace` int NOT NULL,
  `golu` int NOT NULL,
  `assistenci` int NOT NULL,
  `bodu` int NOT NULL,
  `id_zapasu` int NOT NULL,
  `id_time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
CREATE TABLE `Zapasi` (
  `id` int NOT NULL,
  `jmeno` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `Hraci`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Zapas`
  ADD UNIQUE KEY `id_hrace` (`id_hrace`),
  ADD UNIQUE KEY `id_zapasu` (`id_zapasu`),
  ADD UNIQUE KEY `id_hrace_2` (`id_hrace`,`id_zapasu`),
  ADD UNIQUE KEY `id_time` (`id_time`);
ALTER TABLE `Zapasi`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `Hraci`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `Zapasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;
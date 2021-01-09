SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transaction` (`sender`, `receiver`, `credits`) VALUES
('Alan Walker', 'DJ Snake', 123),
('Louis Tomilson', 'Harry Styles', 567),
('Liam Payne', 'Zayn Malik', 899),
('Dheenu Priya', 'Sangeeth Kumar', 569),
('Shawn Mendes', 'Dheenu Priya', 789),
('Camila Cabello', 'Louis Tomilson', 34);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `credits`) VALUES
(1, 'Alan Walker', 'walker@gmail.com', 4308),
(2, 'DJ Snake', 'snake@gmail.com', 6823),
(3, 'Louis Tomilson', 'tomilson@gmail.com', 8965),
(4, 'Harry Styles', 'styles@gmail.com', 78886),
(5, 'Liam Payne', 'payne@gmail.com', 7564),
(6, 'Zayn Malik', 'malik@gmail.com', 8211),
(7, 'Dheenu Priya', 'priya@gmail.com', 7301),
(8, 'Sangeeth Kumar', 'kumar@gmail.com', 10809),
(9, 'Shawn Mendes', 'mendes@gmail.com', 7578),
(10, 'Camila Cabello', 'cabello@gmail.com', 99329);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
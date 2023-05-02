CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
);

INSERT INTO `users` (`Nama`, `Alamat`, `Jabatan`) VALUES
('Josafat Anderson Yonain', 'Jl Keindahan Dunia 69', 'Founder'),
('Kevin Christian', 'Jl Imba 2', 'Co-Founder'),
('Josua Golden Umboh', 'Jl Sabing Ciling', 'CEO');
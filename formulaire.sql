CREATE TABLE `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `pseudo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` char(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
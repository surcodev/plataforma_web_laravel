INSERT INTO `settings` (`id`, `logo`, `favicon`, `banner`, `footer_address`, `footer_email`, `footer_phone`, `footer_facebook`, `footer_twitter`, `footer_linkedin`, `footer_instagram`, `footer_copyright`, `created_at`, `updated_at`) VALUES
(1, 'logo_1745742469.png', 'favicon_1745742706.png', 'banner_1745743308.jpg', '34 Antiger Lane, USA, 12937', 'info@bienes-raices-santa-clara-sac.com', '+51 979 785 497', '#', '#', '#', '#', 'Copyright 2025, bienes-raices-santa-clara-sac.com, Todos los derechos reservados.', NULL, '2025-04-27 02:49:01');

-- --------------------------------------------------------

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `password`, `token`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Smith Cooper', 'smith@gmail.com', 'user_1745146600.jpg', '$2y$12$s9r9RbigUAZiQk/4qTfmYOPjYv.odoIp3l9GURNd8XyBUew3h5aO.', '', '1', '2025-04-18 20:31:03', '2025-04-20 04:56:40'),
(3, 'David', 'david@gmail.com', 'user_1745556312.jpg', '$2y$12$s9r9RbigUAZiQk/4qTfmYOPjYv.odoIp3l9GURNd8XyBUew3h5aO.', '', '1', '2025-04-18 20:33:17', '2025-04-24 22:45:12'),
(4, 'John Green', 'john@gmail.com', NULL, '$2y$12$s9r9RbigUAZiQk/4qTfmYOPjYv.odoIp3l9GURNd8XyBUew3h5aO.', '', '1', '2025-04-20 04:29:00', '2025-04-20 04:29:19');

-- --------------------------------------------------------

-- INSERT INTO `admins` (`id`, `name`, `email`, `photo`, `password`, `token`, `created_at`, `updated_at`) VALUES
-- (1, 'Morshedul Arefin', 'admin@gmail.com', 'admin_1745033547.jpg', '$2y$12$zmOPg93IS5..NdhYAExppO4GQd3An3fM4kYBrvxwwRQq/1NTluKNy', '', '2025-04-18 07:07:42', '2025-04-19 18:50:33');

-- --------------------------------------------------------

INSERT INTO `agents` (`id`, `name`, `email`, `photo`, `password`, `company`, `designation`, `biography`, `phone`, `address`, `country`, `state`, `city`, `zip`, `website`, `facebook`, `twitter`, `linkedin`, `instagram`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kian Douglas', 'agent@gmail.com', 'agent_1745249872.jpg', '$2y$12$WyPzklOf1lh5FXfY2c5jzOpgz5zfLEocyFDKyleECdFBy4dIfG9s.', 'Silverwoods', 'Billing and posting clerk', 'Lorem ipsum dolor sit amet, ex eum suscipiantur comprehensam, euismod gubergren adolescens an sit. In graecis propriae appareat vis, ne sea veritus periculis laboramus, et ius cibo soluta consequat. In duo qualisque urbanitas deterruisset, cum ne elaboraret scribentur. Eum cetero singulis appellantur no. Mea ad sonet senserit, an his primis eripuit.\r\n\r\nPri ex dico mutat molestie, ius ne aliquam persecuti, his an adolescens neglegentur. Mazim cotidieque mel id. Ut mediocrem deseruisse vix, vocent laboramus cum ea. Autem semper intellegebat no vel.', '(03) 5381 2166', '48 Commercial Street,', 'Australia', 'Vic', 'Kyneton', '3444', 'https://www.pcstylist.com.au', '#', '#', '#', '#', '', '1', '2025-04-21 05:06:03', '2025-04-26 00:40:16'),
(2, 'Ricky Fern', 'ricky@gmail.com', 'agent_1745559762.jpg', '$2y$12$RSBtFjK1JeYnNA4xhdhFR.oKh9nTABaJGzeFkMgYL6PqmAxiyOBSK', 'National Auto Parts', 'Real Estate Agent', 'Lorem ipsum dolor sit amet, ex eum suscipiantur comprehensam, euismod gubergren adolescens an sit. In graecis propriae appareat vis, ne sea veritus periculis laboramus, et ius cibo soluta consequat. In duo qualisque urbanitas deterruisset, cum ne elaboraret scribentur. Eum cetero singulis appellantur no. Mea ad sonet senserit, an his primis eripuit.\r\n\r\nPri ex dico mutat molestie, ius ne aliquam persecuti, his an adolescens neglegentur. Mazim cotidieque mel id. Ut mediocrem deseruisse vix, vocent laboramus cum ea. Autem semper intellegebat no vel.', '603-440-6537', '3298 Grasselli Street', 'USA', 'NH', 'Merrimack', '03054', 'https://wesleyblog.com', '#', '#', '#', '#', NULL, '1', '2025-04-24 23:42:42', '2025-04-24 23:42:42'),
(4, 'Terry Chin', 'terry@gmail.com', 'agent_1745645476.jpg', '$2y$12$XdVWnuXaa552zdq6jX3o8ON6/P7/UeHHFTFkJhn/Ziq.QSZ/VUXIa', 'World Radio', 'Remote Estate Specialist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2025-04-25 23:31:16', '2025-04-25 23:31:16'),
(5, 'Kevin Beltran', 'kevin@gmail.com', 'agent_1745646356.jpg', '$2y$12$2OR004sCbLcrqUg6XJiesOPt8c4sRJRAR9qB6pqfOyY7F0UyzQKF.', 'Fresh Start', 'Department Head', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2025-04-25 23:45:57', '2025-04-25 23:45:57');

-- --------------------------------------------------------

INSERT INTO `amenities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wifi gratis', '2025-04-22 23:15:53', '2025-04-22 23:15:53'),
(2, 'Piscina', '2025-04-22 23:15:59', '2025-04-22 23:15:59'),
(3, 'Desayuno', '2025-04-22 23:16:04', '2025-04-22 23:16:04'),
(4, 'Aparcamiento de coches', '2025-04-22 23:16:13', '2025-04-22 23:16:13'),
(5, 'Aire nacondicionado', '2025-04-22 23:16:19', '2025-04-22 23:16:19'),
(6, 'Gimnasio', '2025-04-22 23:16:29', '2025-04-22 23:16:29'),
(10, 'Chimenea', '2025-04-26 11:57:31', '2025-04-26 11:57:35');

-- --------------------------------------------------------

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '¿Cómo comprar una propiedad?', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '2025-04-26 18:55:14', '2025-04-26 18:55:14'),
(2, '¿Qué hace un agente de bienes raíces?', 'Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.', '2025-04-26 18:55:35', '2025-04-26 18:55:35'),
(3, '¿Qué es una hipoteca?', 'Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.', '2025-04-26 18:55:58', '2025-04-26 18:55:58'),
(4, '¿Qué es una inspección de vivienda?', 'Pertinacia interesset neglegentur an usu, everti legendos maluisset pri no. Quem assueverit vel ut, est cu quod delicata vituperatoribus, melius argumentum nam eu. Cibo duis inani et vix, duo choro abhorreant ea, eripuit deleniti fabellas sed ne. Qui omnes conceptam rationibus an, veri postea splendide in sit, vel legimus liberavisse ea. Et postea aeterno vis, ex definitionem conclusionemque pri, ei mea aeque eirmod. Laoreet inciderint no quo.', '2025-04-26 18:56:14', '2025-04-26 18:56:14'),
(5, '¿Qué es el impuesto sobre la propiedad y cómo se puede calcular?', 'Nam essent latine patrioque ne, pro id utinam essent constituam, ex vel mazim adipiscing definiebas. In nec eirmod eripuit, sed ut idque persequeris repudiandae. Sit wisi cotidieque ut, usu eu populo putent aperiri. Te brute alienum recusabo mea.', '2025-04-26 18:56:34', '2025-04-26 18:56:34');

-- --------------------------------------------------------

INSERT INTO `locations` (`id`, `name`, `slug`, `photo`, `total_properties`, `created_at`, `updated_at`) VALUES
(1, 'Boston', 'boston', 'location_1745660703.jpg', 0, '2025-04-22 06:10:58', '2025-04-26 03:45:03'),
(2, 'California', 'california', 'location_1745323883.jpg', 0, '2025-04-22 06:11:23', '2025-04-22 06:11:23'),
(3, 'Chicago', 'chicago', 'location_1745323949.jpg', 0, '2025-04-22 06:12:29', '2025-04-22 06:12:29'),
(4, 'Dallas', 'dallas', 'location_1745323966.jpg', 0, '2025-04-22 06:12:46', '2025-04-22 06:12:46'),
(5, 'Denver', 'denver', 'location_1745323978.jpg', 0, '2025-04-22 06:12:58', '2025-04-22 06:12:58'),
(6, 'New York', 'newyork', 'location_1745323993.jpg', 0, '2025-04-22 06:13:13', '2025-04-22 06:13:13'),
(7, 'San Diago', 'sandiago', 'location_1745324006.jpg', 0, '2025-04-22 06:13:26', '2025-04-22 06:13:26'),
(8, 'Washington', 'washington', 'location_1745324017.jpg', 0, '2025-04-22 06:13:37', '2025-04-22 06:13:37');

-- INSERT INTO `locations` (`id`, `name`, `slug`, `photo`, `total_properties`, `created_at`, `updated_at`) VALUES
-- (1, 'Amazonas', 'amazonas', 'location_1.jpg', 0, NOW(), NOW()),
-- (2, 'Áncash', 'ancash', 'location_2.jpg', 0, NOW(), NOW()),
-- (3, 'Apurímac', 'apurimac', 'location_3.jpg', 0, NOW(), NOW()),
-- (4, 'Arequipa', 'arequipa', 'location_4.jpg', 0, NOW(), NOW()),
-- (5, 'Ayacucho', 'ayacucho', 'location_5.jpg', 0, NOW(), NOW()),
-- (6, 'Cajamarca', 'cajamarca', 'location_6.jpg', 0, NOW(), NOW()),
-- (7, 'Callao', 'callao', 'location_7.jpg', 0, NOW(), NOW()),
-- (8, 'Cusco', 'cusco', 'location_8.jpg', 0, NOW(), NOW()),
-- (9, 'Huancavelica', 'huancavelica', 'location_9.jpg', 0, NOW(), NOW()),
-- (10, 'Huánuco', 'huanuco', 'location_10.jpg', 0, NOW(), NOW()),
-- (11, 'Ica', 'ica', 'location_11.jpg', 0, NOW(), NOW()),
-- (12, 'Junín', 'junin', 'location_12.jpg', 0, NOW(), NOW()),
-- (13, 'La Libertad', 'la-libertad', 'location_13.jpg', 0, NOW(), NOW()),
-- (14, 'Lambayeque', 'lambayeque', 'location_14.jpg', 0, NOW(), NOW()),
-- (15, 'Lima', 'lima', 'location_15.jpg', 0, NOW(), NOW()),
-- (16, 'Loreto', 'loreto', 'location_16.jpg', 0, NOW(), NOW()),
-- (17, 'Madre de Dios', 'madre-de-dios', 'location_17.jpg', 0, NOW(), NOW()),
-- (18, 'Moquegua', 'moquegua', 'location_18.jpg', 0, NOW(), NOW()),
-- (19, 'Pasco', 'pasco', 'location_19.jpg', 0, NOW(), NOW()),
-- (20, 'Piura', 'piura', 'location_20.jpg', 0, NOW(), NOW()),
-- (21, 'Puno', 'puno', 'location_21.jpg', 0, NOW(), NOW()),
-- (22, 'San Martín', 'san-martin', 'location_22.jpg', 0, NOW(), NOW()),
-- (23, 'Tacna', 'tacna', 'location_23.jpg', 0, NOW(), NOW()),
-- (24, 'Tumbes', 'tumbes', 'location_24.jpg', 0, NOW(), NOW()),
-- (25, 'Ucayali', 'ucayali', 'location_25.jpg', 0, NOW(), NOW());


-- --------------------------------------------------------

INSERT INTO `messages` (`id`, `user_id`, `agent_id`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'I want to talk to you', 'Hello, I want to talk to you about one subject. So please give me a time when you are available. Thanks!', '2025-04-26 13:30:17', '2025-04-26 13:30:17'),
(4, 2, 1, 'I want to create a new website like this', 'I want to create real estate website with advanced features.', '2025-04-26 14:42:32', '2025-04-26 14:42:32');

-- --------------------------------------------------------

INSERT INTO `message_replies` (`id`, `message_id`, `user_id`, `agent_id`, `sender`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'Customer', 'Are you there? Please give me a response. I am waiting for you.', '2025-04-26 14:04:31', '2025-04-26 14:04:31'),
(2, 1, 2, 1, 'Agent', 'Ok. Give me some times.', '2025-04-26 14:04:31', '2025-04-26 14:04:31'),
(6, 1, 2, 1, 'Agent', 'Is this ok?', '2025-04-26 14:35:39', '2025-04-26 14:35:39'),
(7, 4, 2, 1, 'Agent', 'Ok, you can ask me.', '2025-04-26 14:43:18', '2025-04-26 14:43:18'),
(8, 4, 2, 1, 'Customer', 'I have a sample website lile: http://www.abcrealestate.com', '2025-04-26 14:43:56', '2025-04-26 14:43:56');

-- --------------------------------------------------------

INSERT INTO `orders` (`id`, `agent_id`, `package_id`, `invoice_no`, `transaction_id`, `payment_method`, `paid_amount`, `purchase_date`, `expire_date`, `status`, `currently_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'INV-1-1745432026', '0EU42667TS6353708', 'PayPal', '9', '2025-04-23', '2025-05-08', 'Completed', 0, '2025-04-23 06:12:55', '2025-04-23 12:24:16'),
(2, 1, 3, 'INV-1-1745432127', '02P885743D025641A', 'PayPal', '49', '2025-04-23', '2025-06-22', 'Completed', 0, '2025-04-23 06:14:02', '2025-04-23 12:24:16'),
(7, 1, 1, 'INV-1-1745432201', 'cs_test_a1oMEOqZKsN8cMhnhwaDJH5dffPeTRtRYGzQjKGipdDrdDwabvGxIrGIJ7', 'Stripe', '9', '2025-04-23', '2025-05-08', 'Completed', 0, '2025-04-23 12:16:41', '2025-04-23 12:24:16'),
(8, 1, 1, 'INV-1-1745432556', 'cs_test_a1Q28OyXjDNqga5S5TGXSD2GuseyNKs0M0ibHRhD7caiFwRUMZhlHAjPyD', 'Stripe', '9', '2025-04-23', '2025-05-08', 'Completed', 0, '2025-04-23 12:22:36', '2025-04-23 12:24:16'),
(9, 1, 1, 'INV-1-1745432656', 'cs_test_a1G2I34wmcjYQpG3cQogzuzc7R8GLuPSqJj8FA6sBwiQGVNJt70UqGpYZm', 'Stripe', '9', '2025-04-23', '2025-05-08', 'Completed', 1, '2025-04-23 12:24:16', '2025-04-23 12:24:16'),
(10, 2, 2, 'INV-2-1745586823', 'cs_test_a1m5ApTREmiKCMAwUMbQ6UtjRsStnRgytNV6mV5b4j5tVQ7Hznj8d0cLoA', 'Stripe', '19', '2025-04-25', '2025-05-25', 'Completed', 1, '2025-04-25 07:13:43', '2025-04-25 07:13:43');

-- --------------------------------------------------------

INSERT INTO `packages` (`id`, `name`, `price`, `allowed_days`, `allowed_properties`, `allowed_featured_properties`, `allowed_photos`, `allowed_videos`, `created_at`, `updated_at`) VALUES
(1, 'Básico', 9, 15, 5, 2, 5, 5, '2025-04-22 01:02:18', '2025-04-26 10:21:18'),
(2, 'Estándar', 19, 30, 15, 5, 10, 10, '2025-04-22 01:03:28', '2025-04-26 04:28:07'),
(3, 'Premium', 49, 60, -1, 15, -1, -1, '2025-04-22 01:04:09', '2025-04-22 01:04:09');

-- --------------------------------------------------------

INSERT INTO `pages` (`id`, `terms_content`, `privacy_content`, `created_at`, `updated_at`) VALUES
(1, '<h1>Heading 1</h1>\r\n<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.</p>\r\n<h2>Heading 2</h2>\r\n<p>Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.</p>\r\n<h3>Heading 3</h3>\r\n<p>Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>\r\n<h4>Heading 4</h4>\r\n<p>Pertinacia interesset neglegentur an usu, everti legendos maluisset pri no. Quem assueverit vel ut, est cu quod delicata vituperatoribus, melius argumentum nam eu. Cibo duis inani et vix, duo choro abhorreant ea, eripuit deleniti fabellas sed ne. Qui omnes conceptam rationibus an, veri postea splendide in sit, vel legimus liberavisse ea. Et postea aeterno vis, ex definitionem conclusionemque pri, ei mea aeque eirmod. Laoreet inciderint no quo.</p>\r\n<h5>Heading 5</h5>\r\n<p>Nam essent latine patrioque ne, pro id utinam essent constituam, ex vel mazim adipiscing definiebas. In nec eirmod eripuit, sed ut idque persequeris repudiandae. Sit wisi cotidieque ut, usu eu populo putent aperiri. Te brute alienum recusabo mea.</p>', '<h1>Heading 1</h1>\r\n<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.</p>\r\n<h2>Heading 2</h2>\r\n<p>Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.</p>\r\n<h3>Heading 3</h3>\r\n<p>Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>\r\n<h4>Heading 4</h4>\r\n<p>Pertinacia interesset neglegentur an usu, everti legendos maluisset pri no. Quem assueverit vel ut, est cu quod delicata vituperatoribus, melius argumentum nam eu. Cibo duis inani et vix, duo choro abhorreant ea, eripuit deleniti fabellas sed ne. Qui omnes conceptam rationibus an, veri postea splendide in sit, vel legimus liberavisse ea. Et postea aeterno vis, ex definitionem conclusionemque pri, ei mea aeque eirmod. Laoreet inciderint no quo.</p>\r\n<h5>Heading 5</h5>\r\n<p>Nam essent latine patrioque ne, pro id utinam essent constituam, ex vel mazim adipiscing definiebas. In nec eirmod eripuit, sed ut idque persequeris repudiandae. Sit wisi cotidieque ut, usu eu populo putent aperiri. Te brute alienum recusabo mea.</p>', NULL, '2025-04-27 01:07:53');

-- --------------------------------------------------------

INSERT INTO `posts` (`id`, `title`, `slug`, `short_description`, `description`, `photo`, `total_views`, `created_at`, `updated_at`) VALUES
(1, 'Maximizing Your Property Investment: Tips for Success', 'maximizing-your-property-investment', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745712928.jpg', 4, '2025-04-26 18:15:28', '2025-04-26 18:41:58'),
(2, 'The Insider\'s Guide to Finding Your Dream Home and Land', 'find-your-dream-home', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745712977.jpg', 2, '2025-04-26 18:16:17', '2025-04-26 18:42:05'),
(3, 'The Rise of the Sustainable Housing: Think Why It Matters', 'rise-of-sustainable-housing', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713013.jpg', 0, '2025-04-26 18:16:53', '2025-04-26 18:16:53'),
(4, 'The Top 10 Most Popular Real Estate Markets of the Year', 'top-most-popular-real-estate-markets', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713049.jpg', 0, '2025-04-26 18:17:29', '2025-04-26 18:17:29'),
(5, 'The Benefits of Working with a Good Real Estate Agent', 'benefits-of-working-with-good-agent', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713080.jpg', 11, '2025-04-26 18:18:00', '2025-04-26 18:41:40'),
(6, 'The Impact of Interest Rates on the Real Estate Market', 'impact-of-interest-rates-on-market', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '<p>Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.<br /><br />Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque eripuit disputationi an, pro eu aperiam similique neglegentur. Fabulas perfecto mei no. Vel sale solum ei, mel volumus deseruisse quaerendum ad.<br /><br />Eum simul appareat te. Vim ei aliquid vocibus. Nam ne possit consequat. Everti singulis per at, cu sea nonumy quidam. Dicit persequeris disputationi ad sea. An omnes diceret sapientem eos, cu mei dicant essent delectus.</p>', 'post_1745713110.jpg', 3, '2025-04-26 18:18:30', '2025-04-26 18:41:49');

-- --------------------------------------------------------

INSERT INTO `properties` (`id`, `agent_id`, `location_id`, `type_id`, `amenities`, `name`, `slug`, `description`, `price`, `featured_photo`, `purpose`, `bedroom`, `bathroom`, `size`, `floor`, `garage`, `balcony`, `address`, `built_year`, `map`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 5, '1,3,6,7', 'Sea Side Property', 'sea-side-property', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 56000, 'property_f_photo_1745634234.jpg', 'Sale', 4, 5, 3000, 4, 2, 5, '937 Jamajo Blvd, Orlando FL 32803', 1980, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.2542091435403!2d-97.90512175238419!3d38.06450160184029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1671347381733!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border: 0\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'No', 'Active', '2025-04-25 13:43:01', '2025-04-25 23:03:42'),
(7, 2, 4, 1, '4,5,7', 'Modern Villa', 'modern-villa', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 124000, 'property_f_photo_1745645709.jpg', 'Rent', 5, 8, 3000, 2, 1, 1, '2226 Michigan Avenue Waynesburg, PA 15370', 2020, NULL, 'Yes', 'Active', '2025-04-25 23:35:09', '2025-04-25 23:40:24'),
(8, 2, 1, 1, '2,3,6', 'Cabin in New York', 'cabin-new-york', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 99000, 'property_f_photo_1745645923.jpg', 'Sale', 4, 2, 5000, 2, 2, 6, '2349 Hinkle Lake Road Waltham, MA 02154', 2014, NULL, 'No', 'Active', '2025-04-25 23:38:43', '2025-04-26 01:14:03'),
(9, 1, 7, 1, '4,5,7', 'Nice Condo in Sand Diego', 'nice-condo-in-san-diego', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 78000, 'property_f_photo_1745646160.jpg', 'Sale', 4, 3, 2300, 2, 2, 1, '4744 Havanna Street Winston Salem, NC 27107', 2011, NULL, 'Yes', 'Active', '2025-04-25 23:42:40', '2025-04-25 23:44:30'),
(10, 1, 1, 5, '1,6', 'Villa in Boston', 'villa-in-boston', '<p>Lorem ipsum dolor sit amet, sea vero paulo instructior in. Eam ad vivendo consetetur, iriure prompta delenit usu id. Eum te nihil legere necessitatibus, dicit facilisis per cu. Te legimus vocibus civibus his, ex usu delenit fuisset, possim assentior persecuti in pro.<br /><br />Nec ut velit commune persequeris. Possim tractatos eu sea, ei duo paulo tempor deseruisse, nec ubique volutpat scriptorem in. Qui amet dolores vulputate an, sed cu nemore alienum deleniti. Cum periculis intellegam at, splendide temporibus referrentur eu mea, mel ea nonumy impetus. Malis animal deleniti ad est. Ne dico nemore legendos cum, eam omnis quaestio assentior cu. No mel albucius noluisse, vel urbanitas expetendis mnesarchum eu.</p>', 233999, 'property_f_photo_1745646253.jpg', 'Rent', 7, 4, 6000, 3, 4, 8, '2438 Caldwell Road Rochester, NY 14613', 2007, NULL, 'Yes', 'Active', '2025-04-25 23:44:13', '2025-04-26 01:07:50');

-- --------------------------------------------------------

INSERT INTO `property_photos` (`id`, `property_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'property_photo_1745635519.jpg', '2025-04-25 20:45:19', '2025-04-25 20:45:19'),
(2, 1, 'property_photo_1745635624.jpg', '2025-04-25 20:47:04', '2025-04-25 20:47:04'),
(3, 1, 'property_photo_1745635636.jpg', '2025-04-25 20:47:16', '2025-04-25 20:47:16'),
(13, 7, 'property_photo_1745645742.jpg', '2025-04-25 23:35:42', '2025-04-25 23:35:42'),
(14, 7, 'property_photo_1745645749.jpg', '2025-04-25 23:35:49', '2025-04-25 23:35:49'),
(15, 8, 'property_photo_1745645951.jpg', '2025-04-25 23:39:11', '2025-04-25 23:39:11'),
(16, 8, 'property_photo_1745645957.jpg', '2025-04-25 23:39:17', '2025-04-25 23:39:17');

-- --------------------------------------------------------

INSERT INTO `property_videos` (`id`, `property_id`, `video`, `created_at`, `updated_at`) VALUES
(1, 1, 'wuhz3WJfFsw', '2025-04-25 21:11:00', '2025-04-25 21:11:00'),
(2, 1, 't1jH2pFSRp8', '2025-04-25 21:11:33', '2025-04-25 21:11:33'),
(3, 1, 'pPl3ZZdTP3g', '2025-04-25 21:11:58', '2025-04-25 21:11:58'),
(7, 7, 'FX_aiXBJwY8', '2025-04-25 23:36:19', '2025-04-25 23:36:19'),
(8, 7, 'bmjde13aGeg', '2025-04-25 23:36:30', '2025-04-25 23:36:30');

-- --------------------------------------------------------

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OdAT2uXz6hvayXasRyRPqtHNDbD9T3zqnLeapims', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:137.0) Gecko/20100101 Firefox/137.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicmlnNG1aMWxSRUtiUHp1eVVqaWVzZzlSOFBxNlU3ZlZOcmUyeWRXTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjUyOiJsb2dpbl9hZ2VudF81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1745744052);

-- --------------------------------------------------------

INSERT INTO `subscribers` (`id`, `email`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1@gmail.com', '', 1, '2025-04-27 00:08:24', '2025-04-27 00:10:08'),
(3, 'test2@gmail.com', '', 1, '2025-04-27 00:12:43', '2025-04-27 00:13:13'),
(4, 'test3@gmail.com', 'a08bcd20f0b6e3fdd718f941c8cda75ee613544db1b9d551f7137d7343a54b3f', 1, '2025-04-27 00:13:01', '2025-04-27 00:28:13'),
(5, 'test4@gmail.com', NULL, 0, '2025-04-27 00:28:06', '2025-04-27 00:28:06');

-- --------------------------------------------------------

INSERT INTO `testimonials` (`id`, `name`, `designation`, `photo`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Robert Krol', 'CEO, AAA Company', 'testimonial_1745701177.jpg', 'Lorem ipsum dolor sit amet, autem ceteros ut quo. Ea sit melius percipit praesent, habeo novum est te. Labore dictas prodesset vim ei. Nisl vivendo fabellas an qui, quot illum an est, vide melius an has. Ut usu tollit atomorum. Est eu alienum omnesque. Vis ad consul epicurei.', '2025-04-26 14:59:37', '2025-04-26 14:59:37'),
(2, 'Sal Harvey', 'Director, BBB Company', 'testimonial_1745701233.jpg', 'Semper mentitum mediocrem no eos, id putent vituperata duo, at error assueverit interesset vix. Id mei audiam scripserit, pro ullum nostrum eu, ne sea zril graeci repudiandae. Ne affert euismod nonumes mei, sit ut ferri fabellas instructior. Et eam tibique detraxit, pri iisque.', '2025-04-26 15:00:33', '2025-04-26 15:00:33');

-- --------------------------------------------------------

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Departamento', '2025-04-22 07:42:34', '2025-04-22 07:42:34'),
(2, 'Terreno', '2025-04-22 07:42:45', '2025-04-22 07:42:45'),
(3, 'Villa', '2025-04-22 07:43:11', '2025-04-22 07:43:11');

-- --------------------------------------------------------

INSERT INTO `wishlists` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(2, 2, 10, '2025-04-26 12:54:04', '2025-04-26 12:54:04'),
(3, 2, 7, '2025-04-26 12:57:43', '2025-04-26 12:57:43'),
(4, 2, 9, '2025-04-26 12:57:47', '2025-04-26 12:57:47');

-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_user` int(4) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_ed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pic` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `articles` (`id`, `id_user`, `title`, `text`, `date_created`, `last_ed`, `pic`) VALUES
(53,    149,    'Velit quidem et.', 'Quam assumenda iste libero est consectetur molestiae non iure. Earum et animi neque veritatis. Itaque corrupti amet sunt molestiae est voluptatem voluptas.',  '2015-03-18 18:40:16',  '2015-03-18 18:40:16',  'fugiat.jpg'),
(54,    148,    'Eius mollitia.',   'Voluptatem at repudiandae corrupti non. Repudiandae eum distinctio voluptates delectus quo mollitia voluptatem. Aut veritatis dolorem dolorem nostrum ex vitae soluta.',   '2015-03-18 18:40:16',  '2015-03-18 18:40:16',  'eum.jpg'),
(55,    151,    'Cupiditate laudantium.',   'Sit aut ipsum nobis et et est eius dolorum. Et unde sed magni. Et et aliquam est distinctio.', '2015-03-18 18:40:16',  '2015-03-18 18:40:16',  'dignissimos.jpg'),
(56,    150,    'Fugit voluptas itaque.',   'Voluptatem dolores quia enim consequatur. Consequatur velit voluptatem dolor illum. Laudantium ad voluptas eum incidunt saepe.',   '2015-03-18 18:40:17',  '2015-03-18 18:40:17',  'dolorum.jpg'),
(57,    153,    'Id et molestias.', 'Eum omnis et harum ratione. Molestiae magni a et laborum error. Modi recusandae qui et maxime. Blanditiis expedita debitis iusto delectus nesciunt.',  '2015-03-18 18:40:17',  '2015-03-18 18:40:17',  'odio.jpg'),
(58,    152,    'Libero voluptas.', 'Aut iure ut vero officia eum perspiciatis ipsa. Explicabo laudantium incidunt nihil aperiam enim. At earum eveniet qui enim sunt est at.', '2015-03-18 18:40:17',  '2015-03-18 18:40:17',  'eligendi.jpg'),
(59,    155,    'Quidem quidem incidunt.',  'Modi sint voluptatum optio earum. At id aliquam beatae non ut vel voluptatem. Saepe provident quidem aut minima. Vel voluptas recusandae ratione temporibus voluptatum impedit aut.',  '2015-03-18 18:40:17',  '2015-03-18 18:40:17',  'qui.jpg'),
(60,    154,    'Numquam facere est.',  'Aut et tempore et ipsa sunt. Dolorem laboriosam aliquid sunt. Molestiae et laboriosam nulla.', '2015-03-18 18:40:17',  '2015-03-18 18:40:17',  'culpa.jpg');

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `id_article` int(4) DEFAULT NULL,
  `id_user` int(4) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_ed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `comments` (`Id`, `id_article`, `id_user`, `title`, `text`, `date_created`, `last_ed`) VALUES
(41,    53, 149,    'Ipsum ut.',    'Magnam laborum ullam ut et distinctio dolores. Repellat dolorem optio dicta vel qui. Saepe hic dolore voluptas aspernatur nesciunt vel doloribus. Rerum eaque repellat quis aliquid ducimus.', '2015-03-18 18:40:16',  '2015-03-18 18:40:16'),
(42,    53, 148,    'Ducimus consectetur.', 'Officiis qui dignissimos in corrupti non. Cupiditate ut atque mollitia adipisci. Labore dicta nam cum. Voluptatum incidunt voluptates laudantium ab voluptas sed dolorem.',    '2015-03-18 18:40:16',  '2015-03-18 18:40:16'),
(43,    54, 148,    'Explicabo reprehenderit.', 'Ut delectus incidunt et aut. Dolorum et hic optio quod reprehenderit distinctio occaecati totam. Id sit ipsum quis ut sit. Veniam itaque praesentium minima quaerat saepe.',   '2015-03-18 18:40:16',  '2015-03-18 18:40:16'),
(44,    54, 147,    'Suscipit optio placeat.',  'Sed ut dicta cum doloremque eos. Et ad soluta minima iste nihil modi nisi. Est sit est rerum et dolor quod sit dicta.',    '2015-03-18 18:40:16',  '2015-03-18 18:40:16'),
(45,    55, 151,    'Neque qui aliquid.',   'Modi aut sit repellendus. Id voluptatem et mollitia nobis commodi dolor. At qui ut rerum nisi omnis fugiat. Qui fugiat nobis id.', '2015-03-18 18:40:16',  '2015-03-18 18:40:16'),
(46,    55, 150,    'Amet ut.', 'Quia commodi tempora nam. Earum cum assumenda et tempora eos. Atque voluptatum aperiam incidunt minima.',  '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(47,    56, 150,    'Maiores harum maiores.',   'Ut amet sequi quibusdam soluta ab cumque dicta aut. Sed numquam dolore provident omnis. Magni iure dolor repudiandae et corporis.',    '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(48,    56, 149,    'Tenetur sequi.',   'Id non accusamus consequuntur. Repudiandae saepe sapiente omnis asperiores ab. Dignissimos natus vero omnis aut. Fugit expedita voluptatem laudantium assumenda officiis.',    '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(49,    57, 153,    'Aspernatur asperiores ut.',    'Nam consequatur dolorem soluta sapiente voluptas. Illum perspiciatis eaque illo. Non voluptatem quo repellendus explicabo quis.',  '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(50,    57, 152,    'Quia quia.',   'Voluptas culpa esse ut. Voluptatem ab molestias officia dignissimos porro voluptas voluptatem. Voluptas rem rem omnis ea aut est. Incidunt in rerum et molestias quasi quam quasi.',   '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(51,    58, 152,    'Ea odit.', 'In deserunt omnis fugit sint deserunt excepturi. Iusto explicabo aliquid quis quos provident. Ipsa eaque earum voluptatem est asperiores quasi enim dolores.', '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(52,    58, 151,    'Ex odit.', 'Deserunt minus odio eos aut fugit unde ipsa corrupti. Nobis eveniet vero aliquid esse atque hic. Eligendi optio porro adipisci officia eos ducimus.',  '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(53,    59, 155,    'Sit aliquid.', 'Illo aut fugiat deleniti laudantium aspernatur quia numquam. Voluptas aut culpa non commodi est. Ipsum dignissimos corporis delectus assumenda.',  '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(54,    59, 154,    'Repudiandae eum.', 'Eos ullam ipsa eos dolorum. Dignissimos et assumenda nostrum et soluta. Harum ex et quia inventore autem excepturi nobis. Quidem sit laboriosam velit sunt consequatur voluptatem.',   '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(55,    60, 154,    'Debitis quia.',    'Maiores velit nostrum id hic. Reiciendis quo voluptas assumenda temporibus rerum doloremque odit.\nEa sed amet officiis a. Ea et tempore molestiae excepturi in alias qui et.',    '2015-03-18 18:40:17',  '2015-03-18 18:40:17'),
(56,    60, 153,    'Et ut.',   'Voluptatem ipsum ad error tenetur et dolorum pariatur. Hic totam recusandae nemo qui. Enim praesentium repudiandae sint.', '2015-03-18 18:40:17',  '2015-03-18 18:40:17');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usrname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `psw` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`Id`, `name`, `email`, `usrname`, `psw`, `date_created`, `avatar`) VALUES
(147,   'Prof. Adelbert Kirlin',    'jPredovic@hotmail.com',    'Pauline65',    'dicta',    '2015-03-18 18:40:16',  ' quam.jpg'),
(148,   'Elsie Wunsch Sr.', 'Charlie24@Dooley.com', 'Schmidt.Lennie',   'labore',   '2015-03-18 18:40:16',  ' quam.jpg'),
(149,   'Terrance Kuhic',   'Sammie46@yahoo.com',   'Earlene.Lakin',    'rerum',    '2015-03-18 18:40:16',  ' velit.jpg'),
(150,   'Zane Bosco',   'Sipes.Ben@Crona.biz',  'VonRueden.Kathryne',   'aut',  '2015-03-18 18:40:16',  ' et.jpg'),
(151,   'Juanita Huels',    'iHarris@gmail.com',    'Breitenberg.Deon', 'rerum',    '2015-03-18 18:40:16',  ' ut.jpg'),
(152,   'Russell Reilly MD',    'Fatima58@Wiza.biz',    'Clair28',  'dolor',    '2015-03-18 18:40:17',  ' ducimus.jpg'),
(153,   'Gustave Rutherford',   'Abdul76@Adams.com',    'Jayden89', 'aut',  '2015-03-18 18:40:17',  ' nulla.jpg'),
(154,   'Mr. Kenny Breitenberg',    'Sally.Wolf@Fahey.info',    'Ryan.Barrows', 'voluptas', '2015-03-18 18:40:17',  ' cupiditate.jpg'),
(155,   'Ellie Bogisich',   'Alene95@Williamson.info',  'qSauer',   'temporibus',   '2015-03-18 18:40:17',  ' repellendus.jpg'),
(156,   'Aletha Mann',  'Arnold.Koss@hotmail.com',  'Jaclyn65', 'repellat', '2015-03-18 18:40:17',  ' maiores.jpg');

-- 2015-03-18 18:44:42

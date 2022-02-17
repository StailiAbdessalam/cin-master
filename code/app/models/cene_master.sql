SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_Post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `commentaires` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `catégorie` varchar(255) NOT NULL,
  `photo` longblob NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `titre` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE `user_` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `P_prophile` longblob NOT NULL,
  `Gmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
ALTER TABLE `commentaires`
ADD PRIMARY KEY (`id`),
  ADD KEY `commentaires_id_post` (`id_Post`),
  ADD KEY `commentaires_id_user` (`id_user`);
ALTER TABLE `post`
ADD PRIMARY KEY (`id`),
  ADD KEY `post_id_user` (`id_user`);
ALTER TABLE `user_`
ADD PRIMARY KEY (`id`);
ALTER TABLE `commentaires`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `user_`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 11;
ALTER TABLE `commentaires`
ADD CONSTRAINT `commentaires_id_post` FOREIGN KEY (`id_Post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaires_id_user` FOREIGN KEY (`id_user`) REFERENCES `user_` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `post`
ADD CONSTRAINT `post_id_user` FOREIGN KEY (`id_user`) REFERENCES `user_` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
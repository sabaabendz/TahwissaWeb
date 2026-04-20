-- Ajoute la colonne promotion sur la table evenement (MySQL / MariaDB).
-- Le champ `prix` reste le prix de base ; `promo_percent` est la réduction en % (NULL = pas de promo).

ALTER TABLE `evenement`
  ADD COLUMN `promo_percent` SMALLINT NULL DEFAULT NULL
  COMMENT 'Reduction en pourcentage 1-100, NULL si aucune promo'
  AFTER `prix`;

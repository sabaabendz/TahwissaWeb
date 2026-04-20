-- Coordonnées pour la carte OpenStreetMap (remplies via Nominatim à l’enregistrement / première visite).

ALTER TABLE `evenement`
  ADD COLUMN `latitude` DOUBLE NULL DEFAULT NULL AFTER `lieu`,
  ADD COLUMN `longitude` DOUBLE NULL DEFAULT NULL AFTER `latitude`,
  ADD COLUMN `location_display_name` VARCHAR(500) NULL DEFAULT NULL AFTER `longitude`;

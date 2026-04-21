-- Paiement Stripe pour les réservations d'événements

ALTER TABLE `reservation_evenement`
  ADD COLUMN `stripe_checkout_session_id` VARCHAR(255) NULL DEFAULT NULL AFTER `id_user`,
  ADD COLUMN `montant_total_tnd` DOUBLE NULL DEFAULT NULL AFTER `stripe_checkout_session_id`,
  ADD COLUMN `seats_held` TINYINT(1) NOT NULL DEFAULT 0 AFTER `montant_total_tnd`;

CREATE INDEX `idx_reservation_evenement_stripe_session` ON `reservation_evenement` (`stripe_checkout_session_id`);

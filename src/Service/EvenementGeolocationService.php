<?php

namespace App\Service;

use App\Entity\Evenement;

/**
 * Resolves event venue text to coordinates and stores them on the entity.
 */
final class EvenementGeolocationService
{
    public function __construct(
        private readonly NominatimGeocoder $nominatimGeocoder,
    ) {
    }

    /**
     * Updates latitude / longitude / display label from {@see Evenement::getLieu()}.
     * Clears coordinates when geocoding fails or lieu is empty.
     */
    public function resolveAndApply(Evenement $evenement): bool
    {
        $lieu = trim((string) $evenement->getLieu());
        if ($lieu === '') {
            $this->clearLocation($evenement);

            return false;
        }

        $queryBiased = $lieu . ', Tunisia';
        $result = $this->nominatimGeocoder->search($queryBiased, true);
        if (null === $result) {
            $result = $this->nominatimGeocoder->search($lieu, true);
        }
        if (null === $result) {
            $result = $this->nominatimGeocoder->search($lieu, false);
        }

        if (null === $result) {
            $this->clearLocation($evenement);

            return false;
        }

        $evenement->setLatitude($result['latitude']);
        $evenement->setLongitude($result['longitude']);
        $label = $result['display_name'];
        $evenement->setLocationDisplayName($label !== null ? mb_substr($label, 0, 500) : null);

        return true;
    }

    private function clearLocation(Evenement $evenement): void
    {
        $evenement->setLatitude(null);
        $evenement->setLongitude(null);
        $evenement->setLocationDisplayName(null);
    }
}

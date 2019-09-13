<?php
namespace Tickets;

class Factory implements FactoryInterface
{
    public static function createReserveObject(int $eventId) 
    {
        if ( $eventId%2 === 0 ) {
            return new \Tickets\Reserve($eventId, 'local');
        } else {
            return new \Tickets\ReserveApiPartner($eventId, 'partnerApi');
        }
    }
}
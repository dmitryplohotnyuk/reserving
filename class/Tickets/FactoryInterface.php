<?php
namespace Tickets;

interface FactoryInterface
{
    public static function createReserveObject(int $eventId);
}
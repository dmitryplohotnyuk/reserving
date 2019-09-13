<?php
namespace Tickets;

interface ReserveInterface
{
    public function reserving(): bool;
    public function order(string $prefix, int $ticketId): bool;
    public function notificate(): bool;
    public function numGenerator(): int;
}
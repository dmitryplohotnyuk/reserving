<?php
namespace Tickets;
class ReserveApiPartner extends Reserve implements ReserveInterface
{
    public function order(string $prefix, int $ticketId): bool
    {
        /* PARNER API CALL */
        sleep(1);
        $message = '[' . $prefix . '] reserving ticket #' . $ticketId;
        $message .= ' VIA PARTNER API CALL' . PHP_EOL;
        echo $message;
        ////////////////////
        $this->orderId = rand(5000, 10000);
        $message = '[' . $prefix . '] OrderId #' . $this->orderId . ' created' . PHP_EOL;
        echo $message;
        return true;
    }

    public function numGenerator(): int
    {
        return rand(80000, 90000);
    }
}
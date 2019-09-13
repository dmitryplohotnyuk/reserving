<?php
namespace Tickets;
class Reserve implements ReserveInterface
{
    private $eventId;
    private $ticketId;
    private $orderId;
    private $prefix;
  
    public function __CONSTRUCT(int $eventId, string $prefix)
    {
        $this->ticketId = $this->numGenerator();
        $this->eventId = $eventId;
        $this->prefix = $prefix;

        $message = '[' . $this->prefix . '] creating object for event #' . $this->eventId . PHP_EOL;
        echo $message;
    }

    public function reserving(): bool
    {
        $message = '[' . $this->prefix . '] reserving ticket #' . $this->ticketId . PHP_EOL;
        echo $message;
        $this->order($this->prefix, $this->ticketId);
        $this->notificate();
        return true;
    }

    public function order(string $prefix, int $ticketId): bool
    {
        $this->orderId = $this->numGenerator();
        $message = '[' . $prefix . '] OrderId #' . $this->orderId . ' created' . PHP_EOL;
        echo $message;
        return true;
    }

    public function notificate(): bool
    {
        $message = '[' . $this->prefix . '] Sending admin notification: ';
        $message .= 'Order #' . $this->orderId . 'created for event #' . $this->eventId . PHP_EOL;
        echo $message;
        return true;
    }

    public function numGenerator(): int
    {
        return rand(99, 3000);
    }
}
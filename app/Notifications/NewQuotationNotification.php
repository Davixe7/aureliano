<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;
use App\Models\Quotation;

class NewQuotationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $quotation;

    public function __construct(Quotation $quotation)
    {
        $this->quotation = $quotation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('Nueva Cotización Recibida')
        ->greeting('¡Hola!')
        ->line('Has recibido una nueva cotización.')
        ->line('Detalles: ')
        ->line("Cliente: {$this->quotation->user->name}")
        ->line("Producto: {$this->quotation->product_name}")
        ->line("Cantidad: {$this->quotation->quantity}")
        ->action('Ver Cotización', url("/admin/quotations/{$this->quotation->id}"))
        ->line('Gracias por usar nuestro sistema.');
    }

    public function toDatabase($notifiable)
    {
        return [
            'quotation_id' => $this->quotation->id,
            'user_name' => $this->quotation->user->name,
            'product_name' => $this->quotation->product_name,
            'quantity' => $this->quotation->quantity,
            'message' => 'Nueva cotización recibida.',
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

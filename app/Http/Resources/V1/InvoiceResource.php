<?php

namespace App\Http\Resources\V1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    private array $types = [
        'B' => 'Boleto',
        'C' => 'Cartão',
        'P' => 'Pix',
     ];

    public function toArray(Request $request): array
    {
        return [
            'user' => [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'fullname' => $this->firstName . ' ' . $this->lastName,
                'email' => $this->email,
        ],

        'type' => $this->types[$this->type],
        'value' => 'R$ ' . number_format($this->value, 2, ',', '.'),
        'paid' => $paid ? 'Pago' : 'Não pago',
        'payment_date' => $paid ? Carbon::parse($this->payment_date)->format('d/m/Y H:i') : null
   ];

    }
}

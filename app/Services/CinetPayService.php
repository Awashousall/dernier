<?php

namespace App\Services;

use GuzzleHttp\Client;

class CinetPayService
{
    protected $client;
    protected $apiKey = '190321107266781b02bd4a18.04091641';
    protected $siteId = '5874577';
    protected $secretKey = '165755459166781bf56fc703.65415616';

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api-checkout.cinetpay.com/v2/']);
    }

    public function initiatePayment($amount, $transactionId, $description, $customerName, $customerEmail)
    {
        $response = $this->client->post('payment', [
            'json' => [
                'amount' => $amount,
                'currency' => 'XOF',
                'apikey' => $this->apiKey,
                'site_id' => $this->siteId,
                'transaction_id' => $transactionId,
                'description' => $description,
                'customer_name' => $customerName,
                'customer_email' => $customerEmail,
                'channels' => 'ALL',
                'return_url' => route('payment.return'),
                'notify_url' => route('payment.notify'),
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}

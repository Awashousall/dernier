<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CinetPayService;
use App\Http\Controllers\Controller;

class TransactionsController extends Controller
{
    protected $cinetPayService;

    public function __construct(CinetPayService $cinetPayService)
    {
        $this->cinetPayService = $cinetPayService;
    }

    public function initiatePayment(Request $request)
    {
        $amount = 100;  // Montant en centimes
        $transactionId = uniqid();  // Générer un identifiant unique pour la transaction
        $description = "Paiement pour commande #12345";
        $customerName = "awa sall";
        $customerEmail = "awasall@esp.sn";

        $response = $this->cinetPayService->initiatePayment($amount, $transactionId, $description, $customerName, $customerEmail);

        // Gérer la réponse de CinetPay
        if (isset($response['status']) && $response['status'] == 'success') {
            return redirect($response['payment_url']);
        }

        return redirect()->back()->with('error', 'Erreur lors de l’initiation du paiement.');
    }
}

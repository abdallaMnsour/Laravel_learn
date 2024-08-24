<?php

namespace App\Http\Controllers;

use App\Services\FatoorahService;

class UserController extends Controller
{

    public $serve;

    public function __construct(FatoorahService $serve)
    {
        $this->serve = $serve;
    }

    public function __invoke()
    {
        $data = [
            'InvoiceValue' => 150,
            'CustomerName' => 'abdallamansour',
            'NotificationOption' => 'ALL',

            'MobileCountryCode' => '+20',
            'CustomerMobile' => '01019113472',
            'CustomerEmail' => 'a.mansour.code@gmail.com',
            'DisplayCurrencyIso' => 'EGP',
            'CallBackUrl' => env('CALL_BACK_URL'),
            'ErrorUrl' => env('ERROR_URL'),
        ];

        return $this->serve->createPayment('POST', 'v2/', $data);
    }
}

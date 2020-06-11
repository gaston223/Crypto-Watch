<?php

namespace App\Http\Livewire;

use App\Services\FetchCrypto;
use Livewire\Component;

class CryptoBoard extends Component
{

    public function render()
    {

        return view('livewire.crypto-board', [
            'btc' => FetchCrypto::fetchBtc()['EUR'],
            'eth' => FetchCrypto::fetchEth()['EUR'],
            'ltc' => FetchCrypto::fetchLtc()['EUR']
        ]);
    }

}

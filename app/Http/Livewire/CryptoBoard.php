<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PHPUnit\Util\Json;

class CryptoBoard extends Component
{
    public $btc;
    public $eth;
    public $ltc;

    public function mount()
    {
        $this->fetchCrypto();
    }

    public function render()
    {

        return view('livewire.crypto-board');
    }

    public function fetchCrypto(){
       $btc = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=EUR');
       $eth = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=EUR');
       $ltc = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=EUR');
       $this->btc = json_decode($btc, true);
       $this->eth = json_decode($eth, true);
       $this->ltc = json_decode($ltc, true);
    }
}

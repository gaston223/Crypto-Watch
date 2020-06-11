<?php


namespace App\Services;


class FetchCrypto
{
    public static function fetchBtc(): array
    {
        $btc = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=EUR&api_key=b2afd4cf4a20c7b848d10b54056ae4b1e7de657162cdd91dab51f0f7436ecdc0');
        return $btc = json_decode($btc, true);
    }

    public static function fetchEth(): array
    {
        $eth = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=EUR&api_key=b2afd4cf4a20c7b848d10b54056ae4b1e7de657162cdd91dab51f0f7436ecdc0');
        return $eth = json_decode($eth, true);
    }

    public static function fetchLtc(): array
    {
        $ltc = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=EUR&api_key=b2afd4cf4a20c7b848d10b54056ae4b1e7de657162cdd91dab51f0f7436ecdc0');
        return $ltc = json_decode($ltc, true);
    }
}

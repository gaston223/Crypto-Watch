<?php


namespace App\Services;


class FetchCrypto
{
    public static function fetchBtc(): array
    {
        $btc = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=EUR');
        return $btc = json_decode($btc, true);
    }

    public static function fetchEth(): array
    {
        $eth = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=EUR');
        return $eth = json_decode($eth, true);
    }

    public static function fetchLtc(): array
    {
        $ltc = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=EUR');
        return $ltc = json_decode($ltc, true);
    }
}

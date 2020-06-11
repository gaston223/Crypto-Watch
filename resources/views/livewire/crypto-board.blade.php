<div wire:poll.1s>
   <h2>Cours des Cryptomonnaies :</h2>

    <div class="row border border-dark rounded">
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5 rounded-left">
            <strong class="h1 font-weight-bold">
            </strong>
            <h3 >1 BTC =</h3>
            <h4>{{$btc}}
                €</h4>
        </div>
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5">
            <strong class="h1 font-weight-bold">
            </strong>
            <h3 >1 ETH  =</h3>
            <h4>{{$eth}}
                €</h4>
        </div>
        <div class="col-md-4 bg-white text-primary py-5 rounded-right rounded-bottom">
            <strong class="h1 font-weight-bold">
            </strong>
            <h3 >1 LTC = </h3>
            <h4>{{$ltc}}
                €</h4>
        </div>
    </div>

    <div style="font-style: italic" class="float-left mt-5 h6">* BTC = Bitcoin, ETH = Ethereum, LTC = Litecoin
    <p></p>
    </div>
</div>

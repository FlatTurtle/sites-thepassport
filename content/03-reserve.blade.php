<h1>Rent</h1>

<p style="text-align: center;">
<img src="https://img.flatturtle.com/resonance/assets/brokers.png" alt="Brokers" width="400" />
</p>

<div class="row">

@if (Request::segment(1) == 'cbre')

    <div class="col-xs-12">

        <p style="text-align: center;">
        <img src="https://img.flatturtle.com/resonance/logo/CBRE.png" alt="CBRE" height="40" /> <br />
        Bertrand LEDUC <br />
        <a href="http://www.cbre.com" target="_blank">CBRE Agency</a> <br />
        T: +33 (0)1 53 64 37 48 <br />
        P: +33 (0)6 08 18 40 17 <br />
        <a href="mailto:bertrand.leduc@cbre.com?subject=resonance">bertrand.leduc@cbre.com</a>
        </p>

    </div>

@elseif (Request::segment(1) == 'bnp')

    <div class="col-xs-12">

        <p style="text-align: center;">
        <img src="https://img.flatturtle.com/resonance/logo/BNP.png" alt="BNP Paribas" height="40" /> <br />
        Laurent HESTERS <br />
        <a href="http://www.realestate.bnpparibas.com/" target="_blank">BNP Paribas Real Estate</a> <br />
        T: +33 (0)1 47 59 24 69 <br />
        P: +33 (0)6 14 08 76 50 <br />
        <a href="mailto:laurent.hesters@bnpparibas.com?subject=resonance">laurent.hesters@bnpparibas.com</a>
        </p>

    </div>

@else

	<div class="col-xs-6">

        <p style="text-align: right;">
        <img src="https://img.flatturtle.com/resonance/logo/CBRE.png" alt="CBRE" height="40" /> <br />
        Bertrand LEDUC <br />
        <a href="http://www.cbre.com" target="_blank">CBRE Agency</a> <br />
        T: +33 (0)1 53 64 37 48 <br />
        P: +33 (0)6 08 18 40 17 <br />
        <a href="mailto:bertrand.leduc@cbre.com?subject=resonance">bertrand.leduc@cbre.com</a>
        </p>

	</div>
	<div class="col-xs-6">

        <p style="text-align: left;">
        <img src="https://img.flatturtle.com/resonance/logo/BNP.png" alt="BNP Paribas" height="40" /> <br />
        Laurent HESTERS <br />
        <a href="http://www.realestate.bnpparibas.com/" target="_blank">BNP Paribas Real Estate</a> <br />
        T: +33 (0)1 47 59 24 69 <br />
        P: +33 (0)6 14 08 76 50 <br />
        <a href="mailto:laurent.hesters@bnpparibas.com?subject=resonance">laurent.hesters@bnpparibas.com</a>
        </p>

	</div>

@endif

</div>

<p style="text-align: center;">Une réalisation <a href="http://www.codic.eu/" target="_blank">CODIC France</a>.<br />
<img src="https://img.flatturtle.com/resonance/logo/codic.png" alt="Codic France" width="150" />
</p>

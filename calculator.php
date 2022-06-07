<?php defined( 'ABSPATH' ) || exit;

/**
 *		SIMPLE INTEREST CALCULATOR
 */

add_shortcode( 'layv_calculator_en', 'layv_calculatorFunEn' );


function layv_calculatorFunEn() {

$cal	=	'<div id="prime_calculatorWrap" class="prel">';
$cal	.=	'<div id="prime_calculator">';
$cal	.=	'<div id="calcBox">';
$cal	.=	'<div id="calcHdr"><p>LAYV ® CBD Dosage Calculator</p></div>';
$cal	.=	'<div id="calcSubTtl"><p>Enter below to calculate the amount of CBD</p></div>';
$cal	.=	'<div id="calc_inputWrap">';
$cal	.=	'<div id="calc_inputs">';
$cal	.=	'<div class="flex">';
$cal	.=	'<div class="calc_inps duration">';
$cal	.=	'<label class="calc_ammountHdr" for="calc_ammount">Quantity</label>';
$cal	.=	'<input type="number" id="calc_ammount" value="1" tabindex="1" min="1" max="50" />';
$cal	.=	'</div>';
$cal	.=	'<div class="calc_inps time">';
$cal	.=	'<label for="calc_dos"></label>';
$cal	.=	'<select class="input2" id="calc_dos">';
$cal	.=	'<option value="drops">Drops of LAYV CBD Oil</option>';
$cal	.=	'<option value="full">Full droppers of LAYV CBD Oil</option>';
$cal	.=	'</select>';
$cal	.=	'</div>';
$cal	.=	'</div>';
$cal	.=	'<div class="calc_inps dropd">';
$cal	.=	'<label  for="prod"></label>';
$cal	.=	'<select class="input2" id="prod">';
$cal	.=	'<option value="fs_3">LAYV 3% Full Spectrum CBD Oil</option>';
$cal	.=	'<option value="fs_5">LAYV 5% Full Spectrum CBD Oil</option>';
$cal	.=	'<option value="bs_15">LAYV 15% Broad Spectrum CBD Oil</option>';
$cal	.=	'<option value="bs_20">LAYV 20% Broad Spectrum CBD Oil</option>';
$cal	.=	'</select>';
$cal	.=	'</div>';
$cal	.=	'<div id="calc_screen">';
$cal	.=	'<p id="ttlhd">Total:</p>';
$cal	.=	'<input id="resultTotal" class="inputRes" name="resultTotal" class="results" readonly>';
$cal	.=	'<p class="afterRes">mg CBD</p>';
$cal	.=	'</div>';
$cal	.=	'<div id="calcgetResult">';
$cal	.=	'<p class="calcgetResult button btn">CALCULATE!</>';
$cal	.=	'</div>';
$cal	.=	'</div>';
$cal	.=	'</div>';
$cal	.=	'</div><!-- #calcBox -->';
$cal	.=	'</div><!-- #prime_calculator -->';
$cal	.=	'</div>';

return $cal;

}
add_shortcode( 'layv_calculator_nl', 'layv_calculatorFunNl' );

function layv_calculatorFunNl() {

    $cal	=	'<div id="prime_calculatorWrap" class="prel">';
    $cal	.=	'<div id="prime_calculator">';
    $cal	.=	'<div id="calcBox">';
    $cal	.=	'<div id="calcHdr"><p>LAYV ® Dosering Calculator</p></div>';
    $cal	.=	'<div id="calcSubTtl"><p>Vul de gegevens in om de hoeveelheid CBD te berekenen</p></div>';
    $cal	.=	'<div id="calc_inputWrap">';
    $cal	.=	'<div id="calc_inputs">';
    $cal	.=	'<div class="flex">';
    $cal	.=	'<div class="calc_inps duration">';
    $cal	.=	'<label class="calc_ammountHdr" for="calc_ammount">Hoeveelheid</label>';
    $cal	.=	'<input type="number" id="calc_ammount" value="1" tabindex="1" min="1" max="50" />';
    $cal	.=	'</div>';
    $cal	.=	'<div class="calc_inps time">';
    $cal	.=	'<label for="calc_dos"></label>';
    $cal	.=	'<select class="input2" id="calc_dos">';
    $cal	.=	'<option value="drops">Druppels LAYV ® CBD </option>';
    $cal	.=	'<option value="full">Volle pipet LAYV CBD Olie</option>';
    $cal	.=	'</select>';
    $cal	.=	'</div>';
    $cal	.=	'</div>';
    $cal	.=	'<div class="calc_inps dropd">';
    $cal	.=	'<label  for="prod"></label>';
    $cal	.=	'<select class="input2" id="prod">';
    $cal	.=	'<option value="fs_3">LAYV 3% Full Spectrum CBD Olie</option>';
    $cal	.=	'<option value="fs_5">LAYV 5% Full Spectrum CBD Olie</option>';
    $cal	.=	'<option value="bs_15">LAYV 15% Broad Spectrum CBD Olie</option>';
    $cal	.=	'<option value="bs_20">LAYV 20% Broad Spectrum CBD Olie</option>';
    $cal	.=	'</select>';
    $cal	.=	'</div>';
    $cal	.=	'<div id="calc_screen">';
    $cal	.=	'<p id="ttlhd">Totaal:</p>';
    $cal	.=	'<input id="resultTotal" class="inputRes" name="resultTotal" class="results" readonly>';
    $cal	.=	'<p class="afterRes">mg CBD</p>';
    $cal	.=	'</div>';
    $cal	.=	'<div id="calcgetResult">';
    $cal	.=	'<button class="calcgetResult button btn">REKEN UIT!!</button>';
    $cal	.=	'</div>';
    $cal	.=	'</div>';
    $cal	.=	'</div>';
    $cal	.=	'</div><!-- #calcBox -->';
    $cal	.=	'</div><!-- #prime_calculator -->';
    $cal	.=	'</div>';

    return $cal;

}

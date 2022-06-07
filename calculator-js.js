/**
 *	CALCULATOR JS
 */

( function($) {

$( '.calcgetResult' ).on( 'click', prime_calcInterest );

$( '#calcHdr' ).click( function() {
	$( '#prime_calculator' ).toggleClass( 'calc_on' );
	$( '#calc_screen' ).removeClass( 'prime_on' );
} );

$( '#prime_calculator' ).on( 'keyup keypress', function( ev ) {
	if ( ev.which === 13 ) {
		ev.preventDefault();
		prime_calcInterest();
		return false;
	}
} );

var suffix = "<p>mg CBD</p>";


function prime_calcInterest() {

let	amt 	=	$( '#calc_ammount' ).val(),
	typeDos =	$( '#calc_dos' ).val(),
	mg 		= 	$( '#prod' ).val(),
	intAmt	=	$( '#interestAmt' ),
	intTotl	=	$( '#resultTotal' );



// Calculating:

if(mg == 'fs_3' && typeDos == 'drops' ){
	totalIntAmount = amt * 1.5;
}else if( mg == 'fs_3' && typeDos == 'full' ){
	totalIntAmount = amt * 20;
}else if( mg == 'fs_5' && typeDos == 'drops' ){
	totalIntAmount = amt * 2.5;
}else if( mg == 'fs_5' && typeDos == 'full' ){
	totalIntAmount = amt * (100/3);
}else if( mg == 'bs_15' && typeDos == 'drops' ){
	totalIntAmount = amt * 7.5;
}else if( mg == 'bs_15' && typeDos == 'full' ){
	totalIntAmount = amt * (1500/15);
}else if( mg == 'bs_20' && typeDos == 'drops' ){
	totalIntAmount = amt * 10;
}else if( mg == 'bs_20' && typeDos == 'full' ){
	totalIntAmount = amt * (2000/15);
}

	$( '#calc_screen' ).addClass( 'prime_on' );
	intTotl.val( totalIntAmount.toLocaleString() );

}




$( '#prime_calculator' ).ready( function() {
	$( "#calc_ammount" ).val( parseInt( $( "#calc_ammount" ).val() ) );
}


);

} )(jQuery);

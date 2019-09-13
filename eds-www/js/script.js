var lvLang = {
    errorTitle: 'Formas nosإ«tؤ«إ،ana neizdevؤپs!',
    requiredFields: 'Jإ«s neesat atbildؤ“jis uz visiem obligؤپtajiem laukiem',
    badTime: 'Jإ«s neesat norؤپdؤ«jis pareizu laiku',
    badEmail: 'Jإ«s neesat norؤپdؤ«jis pareizu e-pasta adresi',
    badTelephone: 'Jإ«s neesat norؤپdؤ«jis pareizu tؤپlruإ†a numuru',
    badSecurityAnswer: 'Jإ«s neesat snieguإ،i pareizu atbildi uz droإ،ؤ«bas jautؤپjumu',
    badDate: 'Jإ«s neesat norؤپdؤ«jis pareizu datumu',
    lengthBadStart: 'Simbolu skaitam jؤپbإ«t starp ',
    lengthBadEnd: ' rakstzؤ«mes',
    lengthTooLongStart: 'Simbolu skaits ir lielؤپks par ',
    lengthTooShortStart: 'Simbolu skaits ir mazؤپks nekؤپ ',
    notConfirmed: 'Input values could not be confirmed',
    badDomain: 'Incorrect domain value',
    badUrl: 'The input value is not a correct URL',
    badCustomVal: 'The input value is incorrect',
    andSpaces: ' and spaces ',
    badInt: 'The input value was not a correct number',
    badSecurityNumber: 'Your social security number was incorrect',
    badUKVatAnswer: 'Incorrect UK VAT Number',
    badStrength: 'The password isn\'t strong enough',
    badNumberOfSelectedOptionsStart: 'You have to choose at least ',
    badNumberOfSelectedOptionsEnd: ' answers',
    badAlphaNumeric: 'Ieejas vؤ“rtؤ«ba var saturؤ“t tikai burtciparu rakstzؤ«mes ',
    badAlphaNumericExtra: ' un ',
    wrongFileSize: 'The file you are trying to upload is too large (max %s)',
    wrongFileType: 'Only files of type %s is allowed',
    groupCheckedRangeStart: 'Please choose between ',
    groupCheckedTooFewStart: 'Please choose at least ',
    groupCheckedTooManyStart: 'Please choose a maximum of ',
    groupCheckedEnd: ' item(s)',
    badCreditCard: 'The credit card number is not correct',
    badCVV: 'The CVV number was not correct',
    wrongFileDim : 'Incorrect image dimensions,',
    imageTooTall : 'the image can not be taller than',
    imageTooWide : 'the image can not be wider than',
    imageTooSmall : 'the image was too small',
    min : 'min',
    max : 'max',
    imageRatioNotAccepted : 'Image ratio is not accepted'
};

$(document).ready(function(){
	
	//Pārbaudām vai ekrāns ir Top vai paritināts uz leju
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.btn-toTop').fadeIn(1000); // Parādām pogu
			$('#navi-bar').removeClass( "bg-white" ); // noņemam bg krāsas klasi
			$( "#navi-bar" ).addClass( "bg-white" ); // ielikam jaunu bg krāsas klasi
		} else {
			$('.btn-toTop').fadeOut(1000); // Slēpjam pogu
			$('#navi-bar').removeClass( "bg-white" );
			$( "#navi-bar" ).addClass( "bg-white" ); // ielikam atpakaļ bg krāsas klasi
		}
	});
	
	//Klikšķis uz pogas aizritina ekrānu uz sākumu
	$('.btn-toTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;



	});
	
});

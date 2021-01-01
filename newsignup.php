<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Al3xis</title>
        
        <!-- The stylesheet -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<style>
		/*-------------------------
	Simple reset
--------------------------*/


*{
	margin:0;
	padding:0;
}


/*-------------------------
	General Styles
--------------------------*/





body{
	font:14px/1.3 'Segoe UI', 'Arial', sans-serif;
}

a, a:visited {
	outline:none;
	color:#1c4f64;
}

a:hover{
	text-decoration:none;
}

section, footer, header{
	display: block;
}


/*----------------------------
	The Header
-----------------------------*/


h1{
	font:bold 36px Cambria, "Hoefler Text",serif;
	margin-bottom:50px;
	color:black;
	text-shadow:1px 1px 0 rgba(255,255,255,0.4);
}


/*----------------------------
	The Form
-----------------------------*/


#main{
	width:440px;
	margin:80px auto 120px;
	position:relative;
	text-align:center;
}

#main form{
	width:440px;
	height:450px;

	padding-top: 50px;
}

#main form .row{
	position:relative;
}

#main form .row.error:after,
#main form .row.success:after{
	content:'';
	
	position:absolute;
	right: 60px;
    top: 8px;
	width:32px;
	height:32px;
	
}

#main form .row.error:after{
	background-position: 0 -79px;
}

#main form input[type=text],
#main form input[type=password]{

	border:1px solid black;
	
	font:14px 'Segoe UI','Arial',sans-serif;
	color:#888;
	
	outline:none;
	
    height: 48px;
    margin: 0 auto 22px;
    padding: 0 10px 0 50px;
    width: 278px;
}

#main form input[disabled]{
	opacity: 0.5;
}

#main form .email input{
	background-position:0 0;
}

#main form .email input:focus{
	background-position:0 -48px;
}

#main form .pass input{
	background-position:0 -96px;
}

#main form .pass input:focus{
	background-position:0 -144px;
}


/*----------------------------
	The Submit Button
-----------------------------*/


#main form input[type=submit]{
	
	border: 1px solid #004C9B;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 1px rgba(0, 0, 0, 0.3);
    color: #D3EBFF;
    cursor: pointer;
    display: block;
    font: bold 24px Cambria,"Hoefler Text",serif;
    margin: 230px auto 0;
    padding: 10px;
    text-shadow: 0 -1px 0 #444444;
    width: 410px;
    
	background-color:#0496DA;
	
	background-image: linear-gradient(top, #0496DA 0%, #0067CD 100%);
	background-image: -o-linear-gradient(top, #0496DA 0%, #0067CD 100%);
	background-image: -moz-linear-gradient(top, #0496DA 0%, #0067CD 100%);
	background-image: -webkit-linear-gradient(top, #0496DA 0%, #0067CD 100%);
	background-image: -ms-linear-gradient(top, #0496DA 0%, #0067CD 100%);
}

#main form input[type=submit]:hover{
	
	background-color:#0383d3;
	
	background-image: linear-gradient(top, #0383d3 0%, #004c9b 100%);
	background-image: -o-linear-gradient(top, #0383d3 0%, #004c9b 100%);
	background-image: -moz-linear-gradient(top, #0383d3 0%, #004c9b 100%);
	background-image: -webkit-linear-gradient(top, #0383d3 0%, #004c9b 100%);
	background-image: -ms-linear-gradient(top, #0383d3 0%, #004c9b 100%);
}

#main form input[type=submit]:active{
	
	background-color:#026fcb;
	
	background-image: linear-gradient(top, #026fcb 0%, #004c9b 100%);
	background-image: -o-linear-gradient(top, #026fcb 0%, #004c9b 100%);
	background-image: -moz-linear-gradient(top, #026fcb 0%, #004c9b 100%);
	background-image: -webkit-linear-gradient(top, #026fcb 0%, #004c9b 100%);
	background-image: -ms-linear-gradient(top, #026fcb 0%, #004c9b 100%);
}


/*----------------------------
	The Arrow
-----------------------------*/


#main form .arrow{
    background: url("http://i33.tinypic.com/14txydw.jpg") no-repeat -10px 0;
    height: 120px;
    left: 214px;
    position: absolute;
    top: 392px;
    width: 11px;
    
   	/* Defining a smooth CSS3 animation for turning the arrow */
    
    -moz-transition:0.3s;
    -webkit-transition:0.3s;
    -o-transition:0.3s;
    -ms-transition:0.3s;
    transition:0.3s;
    
    /* Putting the arrow in its initial position */
    
	-moz-transform: rotate(-134deg);
	-webkit-transform: rotate(-134deg);
	-o-transform: rotate(-134deg);
	-ms-transform: rotate(-134deg);
	transform: rotate(-134deg);
}

#main form .arrowCap{
	background: url("http://i33.tinypic.com/14txydw.jpg") no-repeat -43px 0;
	height: 20px;
	left: 208px;
	position: absolute;
	top: 443px;
	width: 20px;
	z-index: 10;
}

#main form .meterText{
	color: #575757;
	font-size: 10px;
	left: 189px;
	line-height: 1.1;
	position: absolute;
	top: 485px;
	width: 60px;
}


/*----------------------------
	The Footer
-----------------------------*/


footer{
	font:14px/1.3 'Segoe UI',Arial, sans-serif;
	background-color: #111111;
	bottom: 0;
	box-shadow: 0 -1px 2px rgba(0,0,0,0.4);
	height: 45px;
	left: 0;
	position: fixed;
	width: 100%;
	z-index: 100000;
}

footer h2{
	color: #EEEEEE;
	font-size: 14px;
	font-weight: normal;
	left: 50%;
	margin-left: -400px;
	padding: 13px 0 0;
	position: absolute;
	width: 540px;
}

footer h2 i{
	font-style:normal;
	color:#888;
}

footer a.al3xis,a.al3xis:visited{
	color: #999999;
	font-size: 12px;
	left: 50%;
	margin: 16px 0 0 110px;
	position: absolute;
	text-decoration: none;
	top: 0;
}

footer a i{
	color:#ccc;
	font-style: normal;
}

footer a i b{
	color:#c92020;
	font-weight: normal;
}

		</style>
    </head>
    
    <body>

        <div id="main">
        	
        	<h1>Sign up, it's FREE!</h1>
        	
        	<form class="" method="post" action="">
        		
        		<div class="row email">
	    			Email <input type="text" id="email" name="email" placeholder="Email" />
        		</div>
        		
        		<div class="row pass">
        			Password <input type="password" id="password1" name="password1" placeholder="Password" />
        		</div>
        		
        		<div class="row pass">
        			Confirm Password <input type="password" id="password2" name="password2" placeholder="Password (repeat)" disabled="true" />
        		</div>
        		
        		<!-- The rotating arrow -->
        		<div class="arrowCap"></div>
        		<div class="arrow"></div>
        		
        		<p class="meterText">Password Meter</p>
        		
        		<input type="submit" value="Register" />
        		
        	</form>
        </div>
        
        <footer>
	        
            <a class="al3xis"> a form with password meter and pass validation </a>
        </footer>
        
        <!-- JavaScript includes - jQuery, the complexify plugin and our own script.js -->
		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
$(function(){
	
	var pass1 = $('#password1'),
		pass2 = $('#password2'),
		email = $('#email'),
		form = $('#main form'),
		arrow = $('#main .arrow');

	// Empty the fields on load
	$('#main .row input').val('');

	// Handle form submissions
	form.on('submit',function(e){
		
		// Is everything entered correctly?
		if($('#main .row.success').length == $('#main .row').length){
			
			// Yes!
			alert("Thank you for trying out this demo!");
			e.preventDefault(); // Remove this to allow actual submission
			
		}
		else{
			
			// No. Prevent form submission
			e.preventDefault();
			
		}
	});
	
	// Validate the email field
	email.on('blur',function(){
		
		// Very simple validation
		if (!/^\S+@\S+\.\S+$/.test(email.val())){
			email.parent().addClass('error').removeClass('success');
		}
		else{
			email.parent().removeClass('error').addClass('success');
		}
		
	});

	// Use the complexify plugin on the first password field
	pass1.complexify({minimumChars:6, strengthScaleFactor:0.7}, function(valid, complexity){
		
		if(valid){
			pass2.removeAttr('disabled');
			
			pass1.parent()
					.removeClass('error')
					.addClass('success');
		}
		else{
			pass2.attr('disabled','true');
			
			pass1.parent()
					.removeClass('success')
					.addClass('error');
		}
		
		var calculated = (complexity/100)*268 - 134;
		var prop = 'rotate('+(calculated)+'deg)';
		
		// Rotate the arrow
		arrow.css({
			'-moz-transform':prop,
			'-webkit-transform':prop,
			'-o-transform':prop,
			'-ms-transform':prop,
			'transform':prop
		});
	});
	
	// Validate the second password field
	pass2.on('keydown input',function(){
		
		// Make sure its value equals the first's
		if(pass2.val() == pass1.val()){
			
			pass2.parent()
					.removeClass('error')
					.addClass('success');
		}
		else{
			pass2.parent()
					.removeClass('success')
					.addClass('error');
		} 
	});
	
});
//jquery complexify.js script
/*
	http://github.com/danpalmer/jquery.complexify.js

	This code is distributed under the WTFPL v2:
*/
(function ($) {

	$.fn.extend({
		complexify: function(options, callback) {

			var MIN_COMPLEXITY = 49; // 12 chars with Upper, Lower and Number
			var MAX_COMPLEXITY = 120; //  25 chars, all charsets
			var CHARSETS = [
				// Commonly Used
				////////////////////
				[0x0030, 0x0039], // Numbers
				[0x0041, 0x005A], // Uppercase
				[0x0061, 0x007A], // Lowercase
				[0x0021, 0x002F], // Punctuation
				[0x003A, 0x0040], // Punctuation
				[0x005B, 0x0060], // Punctuation
				[0x007B, 0x007E], // Punctuation
				// Everything Else
				////////////////////
				[0x0080, 0x00FF], // Latin-1 Supplement
				[0x0100, 0x017F], // Latin Extended-A
				[0x0180, 0x024F], // Latin Extended-B
				[0x0250, 0x02AF], // IPA Extensions
				[0x02B0, 0x02FF], // Spacing Modifier Letters
				[0x0300, 0x036F], // Combining Diacritical Marks
				[0x0370, 0x03FF], // Greek
				[0x0400, 0x04FF], // Cyrillic
				[0x0530, 0x058F], // Armenian
				[0x0590, 0x05FF], // Hebrew
				[0x0600, 0x06FF], // Arabic
				[0x0700, 0x074F], // Syriac
				[0x0780, 0x07BF], // Thaana
				[0x0900, 0x097F], // Devanagari
				[0x0980, 0x09FF], // Bengali
				[0x0A00, 0x0A7F], // Gurmukhi
				[0x0A80, 0x0AFF], // Gujarati
				[0x0B00, 0x0B7F], // Oriya
				[0x0B80, 0x0BFF], // Tamil
				[0x0C00, 0x0C7F], // Telugu
				[0x0C80, 0x0CFF], // Kannada
				[0x0D00, 0x0D7F], // Malayalam
				[0x0D80, 0x0DFF], // Sinhala
				[0x0E00, 0x0E7F], // Thai
				[0x0E80, 0x0EFF], // Lao
				[0x0F00, 0x0FFF], // Tibetan
				[0x1000, 0x109F], // Myanmar
				[0x10A0, 0x10FF], // Georgian
				[0x1100, 0x11FF], // Hangul Jamo
				[0x1200, 0x137F], // Ethiopic
				[0x13A0, 0x13FF], // Cherokee
				[0x1400, 0x167F], // Unified Canadian Aboriginal Syllabics
				[0x1680, 0x169F], // Ogham
				[0x16A0, 0x16FF], // Runic
				[0x1780, 0x17FF], // Khmer
				[0x1800, 0x18AF], // Mongolian
				[0x1E00, 0x1EFF], // Latin Extended Additional
				[0x1F00, 0x1FFF], // Greek Extended
				[0x2000, 0x206F], // General Punctuation
				[0x2070, 0x209F], // Superscripts and Subscripts
				[0x20A0, 0x20CF], // Currency Symbols
				[0x20D0, 0x20FF], // Combining Marks for Symbols
				[0x2100, 0x214F], // Letterlike Symbols
				[0x2150, 0x218F], // Number Forms
				[0x2190, 0x21FF], // Arrows
				[0x2200, 0x22FF], // Mathematical Operators
				[0x2300, 0x23FF], // Miscellaneous Technical
				[0x2400, 0x243F], // Control Pictures
				[0x2440, 0x245F], // Optical Character Recognition
				[0x2460, 0x24FF], // Enclosed Alphanumerics
				[0x2500, 0x257F], // Box Drawing
				[0x2580, 0x259F], // Block Elements
				[0x25A0, 0x25FF], // Geometric Shapes
				[0x2600, 0x26FF], // Miscellaneous Symbols
				[0x2700, 0x27BF], // Dingbats
				[0x2800, 0x28FF], // Braille Patterns
				[0x2E80, 0x2EFF], // CJK Radicals Supplement
				[0x2F00, 0x2FDF], // Kangxi Radicals
				[0x2FF0, 0x2FFF], // Ideographic Description Characters
				[0x3000, 0x303F], // CJK Symbols and Punctuation
				[0x3040, 0x309F], // Hiragana
				[0x30A0, 0x30FF], // Katakana
				[0x3100, 0x312F], // Bopomofo
				[0x3130, 0x318F], // Hangul Compatibility Jamo
				[0x3190, 0x319F], // Kanbun
				[0x31A0, 0x31BF], // Bopomofo Extended
				[0x3200, 0x32FF], // Enclosed CJK Letters and Months
				[0x3300, 0x33FF], // CJK Compatibility
				[0x3400, 0x4DB5], // CJK Unified Ideographs Extension A
				[0x4E00, 0x9FFF], // CJK Unified Ideographs
				[0xA000, 0xA48F], // Yi Syllables
				[0xA490, 0xA4CF], // Yi Radicals
				[0xAC00, 0xD7A3], // Hangul Syllables
				[0xD800, 0xDB7F], // High Surrogates
				[0xDB80, 0xDBFF], // High Private Use Surrogates
				[0xDC00, 0xDFFF], // Low Surrogates
				[0xE000, 0xF8FF], // Private Use
				[0xF900, 0xFAFF], // CJK Compatibility Ideographs
				[0xFB00, 0xFB4F], // Alphabetic Presentation Forms
				[0xFB50, 0xFDFF], // Arabic Presentation Forms-A
				[0xFE20, 0xFE2F], // Combining Half Marks
				[0xFE30, 0xFE4F], // CJK Compatibility Forms
				[0xFE50, 0xFE6F], // Small Form Variants
				[0xFE70, 0xFEFE], // Arabic Presentation Forms-B
				[0xFEFF, 0xFEFF], // Specials
				[0xFF00, 0xFFEF], // Halfwidth and Fullwidth Forms
				[0xFFF0, 0xFFFD]  // Specials
			];

			var defaults = {
				minimumChars: 8,
				strengthScaleFactor: 1
			};
			if($.isFunction(options) && !callback) {
				callback = options;
				options = {};
			}
			options = $.extend(defaults, options);

			function additionalComplexityForCharset(str, charset) {
				for (var i = str.length - 1; i >= 0; i--) {
					if (charset[0] <= str.charCodeAt(i) && str.charCodeAt(i) <= charset[1]) {
						return charset[1] - charset[0] + 1;
					};
				}; return 0;
			};

			return this.each(function () {
				$(this).keyup(function () {
					var password = $(this).val();
					var complexity = 0, valid = false;
				
					for (var i = CHARSETS.length - 1; i >= 0; i--) {
						complexity += additionalComplexityForCharset(password, CHARSETS[i]);
					}
					
					// Use natural log to produce linear scale
					complexity = Math.log(Math.pow(complexity, password.length)) * (1/options.strengthScaleFactor);

					valid = (complexity > MIN_COMPLEXITY && password.length >= options.minimumChars);

					// Scale to percentage, so it can be used for a progress bar
					complexity = (complexity / MAX_COMPLEXITY) * 100;
					complexity = (complexity > 100) ? 100 : complexity;

					callback.call(this, valid, complexity);
				});
			});
			
		}
	});

})(jQuery);
</script>
		     
    </body>
</html>
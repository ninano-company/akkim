<?php
	$id = $_GET['ver'];

    $sql = "
    SELECT
      *
	  FROM manageAR
	  WHERE id = {$id}
	";
	$default = '';
	$consistant = '';
	$result = mysqli_query( $conn, $sql );
	while ( $row = mysqli_fetch_array($result) ) {
		
		for($i=0; $i<$row[3]; $i++){
			$rows = preg_replace("/\r\n|\r|\n/", '<br/>', $row[$i*11+6]);
			$consistant .= "
				setTimeout( function(){
					if(".$row[11*$i+4]." == 1){
						$('#Use{$i}').trigger('click');
						$('textarea[name=BannerSentence{$i}]').val('".$rows."');
						$('select[name=bannerFonts{$i}]').val(".$row[$i*11+7].");
						$('input[name=bannerFontSize{$i}]').val(".$row[$i*11+8].");
						$('input[name=bannerfontcolor{$i}]').val('".$row[$i*11+9]."');
						console.log('hello{$row[4]}');
					}
					else{
						$('#dontUse{$i}').trigger('click');
					}
					if(".$row[11*$i+5]." == 1){
						$('#Usebutton{$i}').trigger('click');
						$('input[name=buttonSentence{$i}]').val('".$row[$i*11+10]."');
						$('select[name=buttonFonts{$i}]').val(".$row[$i*11+11].");
						$('input[name=buttonFontSize{$i}]').val(".$row[$i*11+12].");
						$('input[name=buttonfontcolor{$i}]').val('".$row[$i*11+13]."');
						$('input[name=buttoncolor{$i}]').val('".$row[$i*11+14]."');
					}
					else{
						$('#dontUsebutton{$i}').trigger('click');
					}
					var fontcolor1 = $(this).find('.BannerSentence').find('.fontcolor').val();
					var fontcolor2 = $(this).find('.BannerButton > span:eq(3)').find('.fontcolor').val();
					var fontcolor3 = $(this).find('.BannerButton > span:eq(4)').find('.fontcolor').val();
					console.log(fontcolor2);
					$(this).find('.BannerSentence').find('input[type=color]').val(fontcolor1);
					$(this).find('.BannerButton > span:eq(3)').find('input[type=color]').val(fontcolor2);
					$(this).find('.BannerButton > span:eq(4)').find('input[type=color]').val(fontcolor3);
					$('.slimg0').css('backgroundImage','url(".$row[92].")');
					$('.slimg1').css('backgroundImage','url(".$row[93].")');
					$('.slimg2').css('backgroundImage','url(".$row[94].")');
					$('.slimg3').css('backgroundImage','url(".$row[95].")');
					$('.slimg4').css('backgroundImage','url(".$row[96].")');
				}, 1000);
			";
		};

		$rows = preg_replace("/\r\n|\r|\n/", '<br/>', $row[107]);
		$default .= "
			$('input[name=logoSizeWidth]').val(".$row[1].");
			$('input[name=logoSizeHeight]').val(".$row[2].");
			$('input[name=slideNum]').val(".$row[3].");
			$('.logoframe span').css('backgroundImage','url(".$row[91].")');
			$('input[name=infoURL]').val('https://ninanobiz.com/akkim/ardev/ar.php?ver=".$row[0]."')
			$('input[name=anneName]').val('".$row[101]."');
			$('input[name=infocustomer]').val('".$row[102]."');
			$('select[name=region]').val(".$row[103].");
			$('input[name=infoPosition]').val('".$row[104]."');
			$('input[name=infomanager]').val('".$row[105]."');
			$('input[name=infomake]').val('".$row[106]."');
			$('textarea[name=infoextra]').val('".$rows."');
		".$consistant;

			
				// if(".$row[4]." == 1){
				// 	document.getElementById('Use0').click();
				// 	// console.log(checker);
				// 	// alert();
				// }
				// else{
				// 	// $('input[name=useText0]').removeAttr('checked','checked')
				// 	// $('input[name=useText0].textoff').attr('checked','checked')
				// }
			
			
			// if(".$row[5]." == 0){
			// 	$('.slide:eq(0) .BannerButton').css('display','grid');
			// 	$('input[name=usebutton0].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=usebutton0].textoff').attr('checked','checked')
			// }
			
			// $('input[name=BannerSentence0]').val('".$row[6]."');
			// $('input[name=bannerFonts0]').val(".$row[7].");
			// $('input[name=bannerFontSize0]').val(".$row[8].");
			// $('input[name=bannerfontcolor0]').val('".$row[9]."');
			// $('input[name=buttonSentence0]').val('".$row[10]."');
			// $('input[name=buttonFonts0]').val(".$row[11].");
			// $('input[name=buttonFontSize0]').val(".$row[12].");
			// $('input[name=buttonfontcolor0]').val('".$row[13]."');
            // $('input[name=buttoncolor0]').val('".$row[14]."');
			
			
            // if(".$row[15]." == 0){
			// 	$('.slide:eq(1) .BannerSentence').css('display','grid');
			// 	$('input[name=useText1].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=useText1].textoff').attr('checked','checked')
				
			// }
			// if(".$row[16]." == 0){
			// 	$('.slide:eq(1) .BannerButton').css('display','grid');
			// 	$('input[name=usebutton1].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=usebutton1].textoff').attr('checked','checked')
			// }
			// $('input[name=BannerSentence1]').val('".$row[17]."');
			// $('input[name=bannerFonts1]').val(".$row[18].");
			// $('input[name=bannerFontSize1]').val(".$row[19].");
			// $('input[name=bannerfontcolor1]').val('".$row[20]."');
			// $('input[name=buttonSentence1]').val('".$row[21]."');
			// $('input[name=buttonFonts1]').val(".$row[22].");
			// $('input[name=buttonFontSize1]').val(".$row[23].");
			// $('input[name=buttonfontcolor1]').val('".$row[24]."');
            // $('input[name=buttoncolor1]').val('".$row[25]."');
            
            // if(".$row[26]." == 0){
			// 	$('.slide:eq(2) .BannerSentence').css('display','grid');
			// 	$('input[name=useText2].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=useText2].textoff').attr('checked','checked')
				
			// }
			// if(".$row[27]." == 0){
			// 	$('.slide:eq(2) .BannerButton').css('display','grid');
			// 	$('input[name=usebutton2].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=usebutton2].textoff').attr('checked','checked')
			// }
			// $('input[name=BannerSentence2]').val('".$row[28]."');
			// $('input[name=bannerFonts2]').val(".$row[29].");
			// $('input[name=bannerFontSize2]').val(".$row[30].");
			// $('input[name=bannerfontcolor2]').val('".$row[31]."');
			// $('input[name=buttonSentence2]').val('".$row[32]."');
			// $('input[name=buttonFonts2]').val(".$row[33].");
			// $('input[name=buttonFontSize2]').val(".$row[34].");
			// $('input[name=buttonfontcolor2]').val('".$row[35]."');
            // $('input[name=buttoncolor2]').val('".$row[36]."');
			
			// if(".$row[37]." == 0){
			// 	$('.slide:eq(3) .BannerSentence').css('display','grid');
			// 	$('input[name=useText3].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=useText3].textoff').attr('checked','checked')
				
			// }
			// if(".$row[38]." == 0){
			// 	$('.slide:eq(3) .BannerButton').css('display','grid');
			// 	$('input[name=usebutton3].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=usebutton3].textoff').attr('checked','checked')
			// }
			// $('input[name=BannerSentence3]').val('".$row[39]."');
			// $('input[name=bannerFonts3]').val(".$row[40].");
			// $('input[name=bannerFontSize3]').val(".$row[41].");
			// $('input[name=bannerfontcolor3]').val('".$row[42]."');
			// $('input[name=buttonSentence3]').val('".$row[43]."');
			// $('input[name=buttonFonts3]').val(".$row[44].");
			// $('input[name=buttonFontSize3]').val(".$row[45].");
			// $('input[name=buttonfontcolor3]').val('".$row[46]."');
            // $('input[name=buttoncolor3]').val('".$row[47]."');
			
			// if(".$row[48]." == 0){
			// 	$('.slide:eq(4) .BannerSentence').css('display','grid');
			// 	$('input[name=useText4].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=useText2].textoff').attr('checked','checked')
				
			// }
			// if(".$row[49]." == 0){
			// 	$('.slide:eq(4) .BannerButton').css('display','grid');
			// 	$('input[name=usebutton4].texton').attr('checked','checked')
			// }
			// else{
			// 	$('input[name=usebutton4].textoff').attr('checked','checked')
			// }
			// $('input[name=BannerSentence4]').val('".$row[50]."');
			// $('input[name=bannerFonts4]').val(".$row[51].");
			// $('input[name=bannerFontSize4]').val(".$row[52].");
			// $('input[name=bannerfontcolor4]').val('".$row[53]."');
			// $('input[name=buttonSentence4]').val('".$row[54]."');
			// $('input[name=buttonFonts4]').val(".$row[55].");
			// $('input[name=buttonFontSize4]').val(".$row[56].");
			// $('input[name=buttonfontcolor4]').val('".$row[57]."');
			// $('input[name=buttoncolor4]').val('".$row[58]."');
			// ";
		for($i=1; $i<5; $i++){
			$rows = preg_replace("/\r\n|\r|\n/", '<br/>', $row[$i*8 + 55]);
			$default .= "
		        $('input[name=Icon{$i}Subject]').val('".$row[$i*8 + 51]."');
		        $('select[name=Icon{$i}Fonts]').val(".$row[$i*8 + 52].");
		        $('input[name=Icon{$i}FontSize]').val(".$row[$i*8 + 53].");
		        $('input[name=Icon{$i}fontcolor]').val('".$row[$i*8 + 54]."');
		        $('textarea[name=icon{$i}Paragh]').val('".$rows."');
		        $('select[name=Icon{$i}PFonts]').val(".$row[$i*8 + 56].");
		        $('input[name=Icon{$i}PFontSize]').val(".$row[$i*8 + 57].");
				$('input[name=Icon{$i}Pfontcolor]').val('".$row[$i*8 + 58]."');
				
				var fontcolor1 = $('.Icon{$i} .iconSubject span:eq(3)').find('.fontcolor').val();
				var fontcolor2 = $('.Icon{$i} .iconParagh span:eq(3)').find('.fontcolor').val();
				$('.Icon{$i} .iconSubject span:eq(3)').find('input[type=color]').val(fontcolor1)
				$('.Icon{$i} .iconParagh span:eq(3)').find('input[type=color]').val(fontcolor2)
				$('.Icon{$i} .iconframe').css('backgroundImage','url(".$row[$i+96].")');
			";
		};
		
		
	}
	
?>
<script>
	console.log('HelloWorld');
	<?=$default?>;

</script>
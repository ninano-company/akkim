<?php
	function AddCommasFirst( $value ) {
		if ( $value >= 1000000 ) {
			$valuesCommas = substr_replace( $value, ',', -6, 0 );
			$valuesCommas = substr_replace( $valuesCommas, ',', -3, 0 );
		} elseif ( $value >= 1000 ) {
			$valuesCommas = substr_replace( $value, ',', -3, 0);
		} else {
			$valuesCommas = $value;
		}
		return $valuesCommas;
	}

	function checkData( $data, $result ) {
		if ( $data == '' ) {
			$data = $result;
			return $data;
		} else {
			return $data;
		}
	}

	function tableInput( $id, $type, $value, $etc ){
		$form = '
			<input type="'. $type .'" id="'. $id .'" name="'. $id .'" value="'. $value .'" '. $etc .'>
		';
		return $form;
	}
	function tableInputModal( $id, $type, $value, $etc, $modal, $onclick ){
		$form = '
			<button type="button" class="modalInputButton" onclick="'. $onclick .'" data-toggle="modal" data-target="#'. $modal .'"><input type="'. $type .'" id="'. $id .'" name="'. $id .'" value="'. $value .'" '. $etc .'></button>
		';
		return $form;
	}

	function tableInputModal2( $id, $type, $value, $etc, $modal, $onclick, $icon ){
		$form = '
			<div class="modalDiv">
	      <input type="'. $type .'" class="index" id="'. $id .'" name="'. $id .'" value="'. $value .'" '. $etc .'>
	      <button type="button" class="button" onclick="'. $onclick .'" data-toggle="modal" data-target="#'. $modal .'" ><i class="glyphicon glyphicon-'. $icon .'"></i></button>
	    </div>
		';
		return $form;
	}

	function formInput( $id, $name, $value, $required) {
		$form = '
			<div class="inputLabel textCenter inline">
				<label for="'. $id .'">'. $name .'</label>
			</div>
			<input class="inputText input m-b-sm" type="text" id="'. $id .'" name="'. $id .'" value="'. $value .'" '. $required .'>
		';
		return $form;
	}

	function formDivBox( $name, $value ) {
		$form = '
			<div class="inputLabel textCenter inline">
				<label>'. $name .'</label>
			</div>
			<div class="inputText divBox m-b-sm inline">
			'. $value .'
			</div>
		';
		return $form;
	}

	function files( $href, $name ) {
		$value = '<a href="'. $href .'" download>'. $name .'</a><br>';
		return $value;
	}

	function formInputFile( $id, $name, $value, $etc) {
		$form = '
			<div class="inputLabel textCenter inline">
				<label for="'. $id .'">'. $name .'</label>
			</div>
			<input class="inputFile input m-b-sm inline" type="file" id="'. $id .'" name="'. $id .'" value="'. $value .'" '. $etc .'>
		';
		return $form;
	}

	function formInputHalf( $id, $name, $value, $required) {
		$form = '
			<div class="inputLabel textCenter inline">
				<label for="'. $id .'">'. $name .'</label>
			</div>
			<input class="inputTextHalf input m-b-sm" type="text" id="'. $id .'" name="'. $id .'" value="'. $value .'" '. $required .'>
		';
		return $form;
	}

	function formInputHalfOnclick( $id, $name, $value, $modal, $required, $color) {
		$form = '
			<div class="inputLabel textCenter inline">
				<label for="'. $id .'">'. $name .'</label>
			</div>
			<input class="inputTextHalfOnclick input m-b-sm" type="text" id="'. $id .'" name="'. $id .'" value="'. $value .'" '. $required .' disabled>
			<button type="button" class="inputTextHalfOnclickButton btn '. $color .' m-b-sm" data-toggle="modal" data-target="#'. $modal .'"><i class="glyphicon glyphicon-user"></i></button>
		';
		return $form;
	}

	function formHidden( $id, $value ) {
		$form = '
			<input type="hidden" id="'. $id .'" name="'. $id .'" value="'. $value .'">
		';
		return $form;
	}

	function formInputFunction( $id, $name, $value, $onkeypress, $onkeyup, $required) {
		$form = '
			<div class="inputLabel textCenter inline">
				<label for="'. $id .'">'. $name .'</label>
			</div>
			<input class="inputText input m-b-sm" type="text" id="'. $id .'" name="'. $id .'" onkeypress="'. $onkeypress .'" onkeyup="'. $onkeyup .'" value="'. $value .'" '. $required .'>
		';
		return $form;
	}

	function formTextarea ( $id, $name, $value ) {
		$form = '
			<div class="inputLabel textCenter inline m-t-sm">
				<label for="'. $id .'">'. $name .'</label>
			</div>
			<textarea class="inputTextarea textarea m-b-sm" id="'. $id .'" name="'. $id .'" rows="10" >'. $value .'</textarea>
		';
		return $form;

	}

	function formOption( $value, $name ){
    $form = '';
    $form .= '<option value="'.$value.'">'.$name.'</option>';
    return $form;
  }

  function formOptions( $value, $name ){
    $form = '';
    $form .= '<option value="'.$value.'" selected>'.$name.'</option>';
    return $form;
  }

  function formRadio( $color, $label, $placeholder, $name, $value ){
    $form = '';
    $form .= '<div class="radio-'.$color.' m-b-md inlineBlock">';
    $form .= '<input type="radio" id="'.$label.'" name="'.$name.'" value="'.$value.'">';
    $form .= '<label class="mw-md btn btn-outline btn-'.$color.'" for="'.$label.'">'.$placeholder.'</label>';
    $form .= '</div>';
    return $form;
  }

  function formCheckBox( $color, $label, $placeholder, $name, $value ){
    $form = '';
    $form .= '<div class="checkbox-'.$color.' m-b-md m-r-sm inlineBlock">';
    $form .= '<input type="checkbox" id="'.$label.'" name="'.$name.'" value="'.$value.'">';
    $form .= '<label class="mw-md btn btn-outline btn-'.$color.'" for="'.$label.'">'.$placeholder.'</label>';
    $form .= '</div>';
    return $form;
  }

	function formCheckBoxSize( $color, $label, $placeholder, $name, $value, $Size, $checked ){
    $form = '';
    $form .= '<div class="checkbox-'.$color.' m-h-xs m-l-sm inlineBlock">';
    $form .= '<input type="checkbox" id="'.$label.'" style="padding:8px 6px;" name="'.$name.'" value="'.$value.'" '.$checked.'>';
    $form .= '<label class="mw-'. $Size .' btn btn-outline btn-'.$color.' text-center" for="'.$label.'" style="padding:8px 6px!important;">'.$placeholder.'</label>';
    $form .= '</div>';
    return $form;
  }

	function chartCheckboxRowHeader( $header ){
		$form = '';
		$form .= '<div class="col-xl-offset-1 col-xl-10 col-xs-12">';
		$form .= '<label class="col-md-offset-1 m-b-sm" style="font-weight:bold;"> '. $header .'</label>';
		$form .= '<div class="col-md-offset-1 col-md-10">';
		$form .= '<div class="row">';
		return $form;
	}

	function chartCheckboxRowFooter (){
		return '</div></div></div>';
	}
?>

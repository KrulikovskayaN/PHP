<?php

function html_img1($file, $width = null, $height = null, $alt = null) {
	 if (isset($GLOBALS['image'])) {
	 	$file = $GLOBALS['image'] . $file;
	  }
	  	$html = '<img src="' . $file . '"';
	  if (isset($width)) {
	  	$html .= ' width="' . $width . '"';
	  }	  
	  if (isset($height)) {
	  	$html .= ' height="' . $height . '"';
	  } 
	  if (isset($alt)) {
	  	$html .= ' alt="' . $alt . '"';
	  } 
	  $html .= '/>';
	  return $html;
}


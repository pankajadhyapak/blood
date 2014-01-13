<?php 
function set_active($path,$class="mactive"){
	return Request::is($path) ? $class : '';
}


function page_slug(){
	return Request::path();
}
<?php 
function set_active($path,$class="mactive"){
	return Request::is($path) ? $class : '';
}


function page_slug(){
	return Request::path();
}

function msg_count($id){
   return  $count = Donor::find($id)->inbox()->where('status','=','0')->count();
}

function messageAuth($mid){
    $c = Message::find($mid)->donor;
    if($c->id == Auth::user()->id){
        return true;
    }else{
        return false;
    }

}
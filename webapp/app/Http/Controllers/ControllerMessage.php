<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ControllerMessage extends Controller
{
	public function getIndex(){
		$texts= Message::all();
		return view ('text.message',['messages'=>$texts]);
	}
	public function AjoutText(){
		return View('text.comment');
	}
	
	public function Commentaireajouter(Request $request) {
		$texts = new Message;
		$texts->name = $request->name;
		$texts->text = $request->text;
		
		$texts->save();
		
		return redirect('/text/message');
	}
	public function DeleteMessage($id) {
		$deleteMessage =Message::find($id);
		$deleteMessage->delete();
		$deleteMessage= Message::all();
		return view ('text.message',['messages'=>$deleteMessage]);
		
	}
	public function Chiffrer($id){
	 //the text to be encrypted
		$data=Message::find($id);
		$text=$data->text;
		$str = strtoupper($text);
		echo $str."<br>";
    //letters of alphabet array
		$alphabet=array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 
			'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',' ');
 //array_flip — Remplace les clés par les valeurs, et les valeurs par les clés
		$flip=array_flip($alphabet);
		$mod = count( $alphabet );

   //Convertit une chaîne de caractères en tableau
		$str=str_split($str);
		$n=count($str);
		$convert='';
		for ($i=0; $i<$n; $i++){
			//strtoupper — Renvoie une chaîne en majuscules
			$n = strtoupper( $n );

        //encryption
			$str[$i];
			echo $emplacement= $flip[$str[$i]];
			$convert.=$alphabet[($emplacement+3) % $mod];
		}

		$convert;
	}
}

<?php

namespace yogeshsuhagiya\CHelloComposer;

class CHelloComposer
{
	public function sayHello($greet = "Hello World")
	{
		return $greet;
	}
	
	public function sayBye( $byeMessage = 'Bye' ) {
		return $byeMessage;
	}
}
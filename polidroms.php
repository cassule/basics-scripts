<?php

	/*
		author: Josué Francisco
		description: if function polidromss return true, the string $word is a polidrom

		Palindromes-> Are words or phrases that can be read from left to right or from right to left. We can say that the palindrome, compared to the common phrase, is like a round-trip ticket. "Ana," for example, is a palindromic name. see more in https://www.soportugues.com.br/secoes/palindromos/
	*/

    class Polidrom
	{
		public static function polodromss($word){
			
			$word = strtolower($word);
			
			if($word == strrev($word))
				return true;
			else
				return false;
		}
    }

    $word = "Damsmad";
    echo Polidrom::polodromss($word);
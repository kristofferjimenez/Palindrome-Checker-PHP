<?php
/*
*	Palindrome checker without using strrev()
*	By : Kristoffer Jimenez
*
*/

//The word to be checked
$amIAPalindrome = 'racecar';

function palindromeChecker($words) {

	//Split the words into an array
	$splitResult = str_split($words);	


	$reverseLetter = array();	
	//Reverse the array/words
	//Loop through the array starting from the last
	for ($i = count($splitResult) - 1; $i >= 0; $i--) { 	
		$reverseLetter[] = $splitResult[$i];
	}

	//Combine the resversed letters
	$reverseResult = implode('', $reverseLetter);	

	//Check if the reverse word is the the same with the given words
	//Use strcasecmp() for non case sensitve comparison
	if (strcasecmp($reverseResult, $words) == 0) {		
		return 'is a palindrome';
	}else{
		return 'is not a palindrome';
	}

}

//Store the result in a variable
$result = palindromeChecker($amIAPalindrome);	

//Display the result
echo $amIAPalindrome . ' ' . $result;	
<?php
/*
* Name : Simple Spam Otp
* File : version.php
* Author : Mr.Thunder
* Github : https://github.com/sandy25062019
* WhatsApp : +6289662144951
* Date : 26-01-2020
* Version : 1.0
*/

function CekUp() {
	$ch = curl_init("https://raw.githubusercontent.com/dz-id/SimpleSpamOtp/master/version.txt");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$cek = preg_replace("/\s+/", "", curl_exec($ch));
	if ($cek == "1.1") {
		echo "Updating SimpleSpamOtp...\n";
		system("cd ..;rm -rf SimpleSpamOtp");
		system("cd ..;git clone https://github.com/dz-id/SimpleSpamOtp");
	}
} CekUp();?>
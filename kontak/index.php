<?php
// pesan keluar
$responses = [];
// Periksa apakah formulir telah dikirimkan
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	// Verifikasi alamat email
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// Pastikan bidang formulir tidak kosong
	if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$responses[] = 'Please complete all fields!';
	} 
	// Jika tidak ada kesalahan
	if (!$responses) {
		// Kirim mailnya kemana? itu harus alamat email anda
		$to      = 'contact@example.com';
		// Kirim email dari alamat email yang mana
		$from = 'noreply@example.com';
		// subjek email
		$subject = $_POST['subject'];
		// pesan email
		$message = $_POST['msg'];
		// Mail headers
		$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		// coba kirim pesan
		if (mail($to, $subject, $message, $headers)) {
			// Success
			$responses[] = 'Message sent!';		
		} else {
			// Fail
			$responses[] = 'Message could not be sent! Please check your mail server settings!';
		}
	}
}

//https://codeshack.io/how-to-create-contact-page-php/
?>
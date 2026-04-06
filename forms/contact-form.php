<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../contact.php');
    exit;
}

$input = [
    'name' => trim($_POST['name'] ?? ''),
    'email' => trim($_POST['email'] ?? ''),
    'phone' => trim($_POST['phone'] ?? ''),
    'service' => trim($_POST['service'] ?? ''),
    'message' => trim($_POST['message'] ?? ''),
    'website' => trim($_POST['website'] ?? '')
];

$errors = [];

if ($input['website'] !== '') {
    $errors[] = 'Spam protection check failed.';
}

if ($input['name'] === '' || mb_strlen($input['name']) < 2) {
    $errors[] = 'Please enter your full name.';
}

if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($input['service'] === '') {
    $errors[] = 'Please choose a service.';
}

if ($input['message'] === '' || mb_strlen($input['message']) < 20) {
    $errors[] = 'Please provide at least 20 characters in your message.';
}

if ($input['phone'] !== '' && !preg_match('/^[0-9\-\+\s\(\)]{7,30}$/', $input['phone'])) {
    $errors[] = 'Please enter a valid phone or WhatsApp number.';
}

$clean = [
    'name' => mb_substr(strip_tags($input['name']), 0, 100),
    'email' => mb_substr(filter_var($input['email'], FILTER_SANITIZE_EMAIL), 0, 120),
    'phone' => mb_substr(strip_tags($input['phone']), 0, 30),
    'service' => mb_substr(strip_tags($input['service']), 0, 80),
    'message' => mb_substr(strip_tags($input['message']), 0, 2000)
];

$_SESSION['form_data'] = $clean;

if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    header('Location: ../contact.php');
    exit;
}

$to = 'sales@antfarm.co.zw';
$subject = 'New Contact Enquiry - Antfarm Tech Solutions';

$body = "You have received a new website enquiry:\n\n";
$body .= "Name: {$clean['name']}\n";
$body .= "Email: {$clean['email']}\n";
$body .= "Phone: " . ($clean['phone'] ?: 'Not provided') . "\n";
$body .= "Service: {$clean['service']}\n\n";
$body .= "Message:\n{$clean['message']}\n";

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: Antfarm Website <no-reply@antfarm.co.zw>',
    'Reply-To: ' . $clean['email']
];

$sent = mail($to, $subject, $body, implode("\r\n", $headers));

if ($sent) {
    $_SESSION['form_success'] = 'Thanks for contacting Antfarm Tech Solutions. We will reply shortly.';
    unset($_SESSION['form_data']);
} else {
    $_SESSION['form_errors'] = ['Your message could not be sent right now. Please call or WhatsApp us on +263 713 409 369.'];
}

header('Location: ../contact.php');
exit;

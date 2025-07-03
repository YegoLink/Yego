<?php
header('Content-Type: application/json');

// Read JSON input
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['message']) || empty(trim($data['message']))) {
    echo json_encode(['reply' => 'Please send a message.']);
    exit;
}

$userMessage = trim($data['message']);

// Your OpenAI API key — replace with your real key, no newline at end
$apiKey = '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';

// Prepare the request payload for ChatGPT API
$postData = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'system', 'content' => 'You are a helpful assistant specialized in Computer Essentials, Word, and Online Skills.'],
        ['role' => 'user', 'content' => $userMessage],
    ],
    'max_tokens' => 500,
    'temperature' => 0.7,
];

// Initialize cURL
$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

// Execute the request
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($response === false) {
    $error = curl_error($ch);
    curl_close($ch);
    echo json_encode(['reply' => "cURL error: $error"]);
    exit;
}

curl_close($ch);

// Debug log (optional)
//file_put_contents('chatbot_debug.log', "HTTP code: $httpcode\nResponse: $response\n", FILE_APPEND);

if ($httpcode !== 200) {
    echo json_encode(['reply' => "Error: Unable to get response from AI. HTTP code: $httpcode"]);
    exit;
}

$responseData = json_decode($response, true);

if (isset($responseData['choices'][0]['message']['content'])) {
    $reply = trim($responseData['choices'][0]['message']['content']);
    echo json_encode(['reply' => $reply]);
} else {
    echo json_encode(['reply' => 'Sorry, no reply from AI.']);
}

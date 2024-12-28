<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // Ensure the 'code' key exists
    if (isset($data['code'])) {
        $code = $data['code'];

        // Create the 'code' folder if it doesn't exist
        $directory = 'code';
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        // Generate a unique filename for the code
        $filename = $directory . '/code_' . time() . '.c';

        // Save the code to the file
        if (file_put_contents($filename, $code)) {
            echo "Code saved successfully to $filename";
        } else {
            echo "Failed to save code.";
        }
    } else {
        echo "No code received.";
    }
} else {
    echo "Invalid request method.";
}
?>

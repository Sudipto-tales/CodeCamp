<?php
// Function to compile and run the C code
function compileAndRunCCode($code) {
    // Create a unique filename for the C file and executable
    $filename = 'temp_' . uniqid() . '.c';
    $outputExe = 'temp_' . uniqid(); // Output executable file name

    // Write the C code to the .c file
    file_put_contents($filename, $code);

    // Command to compile the C code using GCC
    $compileCommand = "gcc $filename -o $outputExe 2>&1"; // Capture errors as well
    $compileOutput = shell_exec($compileCommand);

    // Check if there was a compilation error
    if ($compileOutput) {
        // If there's an error during compilation, return the error message
        return "Compilation Error: " . $compileOutput;
    }

    // Command to run the compiled C program
    $runCommand = "./$outputExe 2>&1"; // Capture errors from execution
    $executionOutput = shell_exec($runCommand);

    // Remove the temporary C file and executable after execution
    unlink($filename);
    unlink($outputExe);

    // Return the output of the executed program
    return $executionOutput ? $executionOutput : "Program executed successfully with no output.";
}

// Receive the C code from a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST body (the code sent from the frontend)
    $jsonData = file_get_contents("php://input");
    $data = json_decode($jsonData, true);

    if (isset($data['code'])) {
        // Get the C code
        $code = $data['code'];

        // Call the function to compile and run the code
        $output = compileAndRunCCode($code);

        // Return the output as a JSON response
        echo json_encode(["output" => $output]);
    } else {
        echo json_encode(["error" => "No C code provided."]);
    }
} else {
    echo json_encode(["error" => "Invalid request method."]);
}
?>

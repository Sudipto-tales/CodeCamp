<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Competition Textpad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.10/codemirror.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .question {
            margin-bottom: 20px;
            padding: 15px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
        }

        #editor {
            height: 400px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: #007bff;
            color: white;
        }

        button:hover {
            background: #0056b3;
        }

        button:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .output {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Coding Competition</h1>

        <div class="question">
            <strong>Problem:</strong> Write a function to check if a given string is a palindrome. 
            A palindrome is a word that reads the same backward as forward.
        </div>

        <textarea id="editor">// Write your C code here...</textarea>

        <div class="buttons">
            <button id="clearBtn">Clear</button>
            <button id="runBtn">Run</button>
            <button id="submitBtn">Submit</button>
        </div>

        <!-- Output area -->
        <div id="output" class="output" style="display:none;"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.10/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.10/mode/javascript/javascript.min.js"></script>

    <script>
        const editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
            mode: "javascript",
            lineNumbers: true,
            theme: "default",
        });

        const clearBtn = document.getElementById('clearBtn');
        const runBtn = document.getElementById('runBtn');
        const submitBtn = document.getElementById('submitBtn');
        const outputDiv = document.getElementById('output'); // Output area

        // Clear the editor content
        clearBtn.addEventListener('click', () => {
            editor.setValue('');
            outputDiv.style.display = 'none'; // Hide output
        });

        // Handle running the code (this will execute JavaScript for now, not C code)
        runBtn.addEventListener('click', () => {
            try {
                const userCode = editor.getValue();
                console.clear();
                eval(userCode);  // WARNING: eval() should be avoided for C code execution
            } catch (error) {
                console.error('Error in your code:', error);
            }
        });

        // Submit the C code to the backend
        submitBtn.addEventListener('click', async () => {
            const userCode = editor.getValue(); // Get the C code from the editor
            const response = await fetch('compile.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ code: userCode })  // Send the code as JSON
            });

            const result = await response.json();  // Receive the result in JSON format

            // Display the result in the output div
            outputDiv.style.display = 'block';  // Show the output area
            outputDiv.textContent = result.output || result.error || 'An error occurred';
        });
    </script>
</body>
</html>

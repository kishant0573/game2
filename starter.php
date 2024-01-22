<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with 6 Inputs</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #inputContainer {
            display: flex;
            gap: 10px;
        }

        input {
            margin-top: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        input:hover {
            transform: scale(1.05);
        }

        h1 {
            margin-top: 20px;
            font-size: 32px;
            color: orange;
            text-align: center;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            border-radius: 10px 12px;
            background-color: rgb(67, 67, 178);
            color: white;
        }
    </style>
</head>
<body>

    <h1>Starter</h1>
    <div id="inputContainer">
        <input type="text" id="input1" placeholder="Input 1">
        <input type="text" id="input2" placeholder="Input 2">
        <input type="text" id="input3" placeholder="Input 3">
        <input type="text" id="input4" placeholder="Input 4">
        <input type="text" id="input5" placeholder="Input 5">
        <input type="text" id="input6" placeholder="Input 6">
    </div>
    <button id="submitButton">Submit</button>

    <script>
        const submitButton = document.getElementById('submitButton');

        submitButton.addEventListener('click', function () {
            // Collect input values from all input fields
            const input1 = document.getElementById('input1').value;
            const input2 = document.getElementById('input2').value;
            const input3 = document.getElementById('input3').value;
            const input4 = document.getElementById('input4').value;
            const input5 = document.getElementById('input5').value;
            const input6 = document.getElementById('input6').value;

            // Send input values to your_php_file.php
            fetch('game2.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    input1: input1,
                    input2: input2,
                    input3: input3,
                    input4: input4,
                    input5: input5,
                    input6: input6,
                }),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Server response:', data);
                // You can handle the server response as needed
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>

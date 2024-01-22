<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .main {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .data {
            background-color: #ff8c00;
            width: 13rem;
            height: 150px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #e67e22; /* Box border */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .data:hover {
            transform: translateY(-5px); /* Add lift effect on hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #fff;
            font-size: 1.5rem;
        }

        .button {
            margin-top: 30px;
            text-align: center;
        }
       
        option{
            padding: 10px 20px;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="submit.php" method="post">
        <div class="main">
            <div class="data">
                <input type="date" id="date1" name="date1" placeholder="Select a date" oninput="formatDate()">
            </div>

            <div class="data">
                <input type="time" id="time" name="time" oninput="formatTime()">
            </div>

            <div class="data">
                <select name="date3">
                <option value="day1">Day</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
            </div>

            <div class="data">
                <input type="text" name="date4" id="date3" placeholder="Prize_1" oninput="validateIntegerInput(this)">
            </div>

            <div class="data">
                <input type="text" name="date5" id="date4" placeholder="Prize_2" oninput="validateIntegerInput(this)">
            </div>

            <div class="data">
                <input type="text" name="date6" id="date5" placeholder="Prize_3" oninput="validateIntegerInput(this)">
            </div>
        </div>

        <div class="button">
            <button type="submit">Submit</button>
        </div>
    </form>

    <script>
        function formatTime() {
            var selectedTime = document.getElementById('time').value;
            console.log('Selected Time:', selectedTime);
        }

        function validateIntegerInput(input) {
            const integerFormat = /^\d+$/;
            const enteredValue = input.value.trim();
            if (!integerFormat.test(enteredValue)) {
                input.setCustomValidity("Please enter a valid integer value");
                input.reportValidity();
            } else {
                input.setCustomValidity("");
            }
        }

        function formatDate() {
            const dateInput = document.getElementById("date1");
            const selectedDate = new Date(dateInput.value);
            const formattedDate = selectedDate.toISOString().split("T")[0];
            dateInput.value = formattedDate;
        }
    </script>

</body>
</html>

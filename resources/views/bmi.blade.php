<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        body {
            font-family: Arial, serif;
            margin: 40px;
        }

        .container {
            max-width: 400px;
            margin: auto;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            font-size: 16px;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>BMI Calculator</h2>

    <form method="POST" action="{{ route('bmi.calculate') }}">
        @csrf
        <label>Weight (kg):</label>
        <input type="number" name="weight" step="0.1" required>

        <label>Height (cm):</label>
        <input type="number" name="height" step="0.1" required>

        <button type="submit">Calculate</button>
    </form>

    @isset($bmi)
        <div class="result">
            Your BMI: {{ $bmi }} <br>
            Category: {{ $category }}
        </div>
    @endisset
</div>
</body>
</html>

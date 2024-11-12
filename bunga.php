<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Keuangan</title>
    <link rel="stylesheet" href="styles.css">
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #e9ecef;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.calculator {
    margin: 20px 0;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #007bff;
}

input {
    width: calc(100% - 22px);
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ced4da;
    border-radius: 4px;
    transition: border-color 0.3s;
}

input:focus {
    border-color: #007bff;
    outline: none;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

p {
    margin-top: 10px;
    font-weight: bold;
    color: #333;
    background-color: #e9ecef;
    padding: 10px;
    border-radius: 4px;
}
</style>

</head>
<body>
    <div class="container">
        <h1>Kalkulator Keuangan</h1>

        <div class="calculator">
            <h2>Bunga Tunggal</h2>
            <input type="number" id="principal1" placeholder="Pokok (P)">
            <input type="number" id="rate1" placeholder="Suku Bunga (%)">
            <input type="number" id="time1" placeholder="Waktu (tahun)">
            <button onclick="calculateSimpleInterest()">Hitung</button>
            <p id="simpleInterestResult"></p>
        </div>

        <div class="calculator">
            <h2>Bunga Majemuk</h2>
            <input type="number" id="principal2" placeholder="Pokok (P)">
            <input type="number" id="rate2" placeholder="Suku Bunga (%)">
            <input type="number" id="time2" placeholder="Waktu (tahun)">
            <button onclick="calculateCompoundInterest()">Hitung</button>
            <p id="compoundInterestResult"></p>
        </div>

        <div class="calculator">
            <h2>Anuitas</h2>
            <input type="number" id="payment" placeholder="Pembayaran (PMT)">
            <input type="number" id="rate3" placeholder="Suku Bunga (%)">
            <input type="number" id="time3" placeholder="Waktu (tahun)">
            <button onclick="calculateAnnuity()">Hitung</button>
            <p id="annuityResult"></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

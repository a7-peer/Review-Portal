<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Cryptocurrency Prices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #ffcc00;
            margin-bottom: 30px;
        }

        .crypto-container {
            display: flex;
            justify-content: space-around;
            width: 80%;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 50px;
        }

        .crypto-card {
            background-color: #333;
            border-radius: 15px;
            padding: 20px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .crypto-card:hover {
            transform: scale(1.05);
        }

        .crypto-name {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #ffcc00;
        }

        .crypto-price {
            font-size: 1.2em;
            margin: 10px 0;
            color: #fff;
        }

        .crypto-symbol {
            font-size: 1em;
            color: #ccc;
        }

        .loading {
            color: #ffcc00;
            font-size: 1.5em;
        }
    </style>
</head>
<body>

<h1>Real-Time Cryptocurrency Prices</h1>
<div id="loading" class="loading">Loading data...</div>
<div id="crypto-container" class="crypto-container"></div>

<script>
    const cryptoContainer = document.getElementById('crypto-container');
    const loadingElement = document.getElementById('loading');

    const fetchCryptoData = async () => {
        try {
            // Fetch cryptocurrency data from CoinGecko API
            const response = await fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=bitcoin,ethereum,litecoin');
            const data = await response.json();

            // Hide the loading text once data is fetched
            loadingElement.style.display = 'none';

            // Clear existing data
            cryptoContainer.innerHTML = '';

            // Create a card for each cryptocurrency
            data.forEach(crypto => {
                const card = document.createElement('div');
                card.classList.add('crypto-card');

                card.innerHTML = `
            <div class="crypto-name">${crypto.name}</div>
            <div class="crypto-symbol">${crypto.symbol.toUpperCase()}</div>
            <div class="crypto-price">$${crypto.current_price.toFixed(2)}</div>
          `;

                cryptoContainer.appendChild(card);
            });
        } catch (error) {
            loadingElement.textContent = 'Failed to load data.';
            console.error('Error fetching data:', error);
        }
    };

    // Fetch the data every 30 seconds
    setInterval(fetchCryptoData, 30000);
    fetchCryptoData(); // Initial data fetch
</script>

</body>
</html>

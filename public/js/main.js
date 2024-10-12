let totalDiamonds = 0;
let totalPay = 0;
let proceedButton = document.getElementById('proceed-button');

// Add event listener to all cards
document.querySelectorAll('.card[data-value]').forEach(card => {
    card.addEventListener('click', function() {
        // Remove selected class from all cards
        document.querySelectorAll('.card').forEach(card => {
            card.classList.remove('selected');
        });

        // Add selected class to the clicked card
        this.classList.add('selected');

        // Get the diamond value and price from the clicked card
        totalDiamonds = parseInt(this.getAttribute('data-value'));
        totalPay = parseFloat(this.getAttribute('data-price'));

        // Update the total diamonds and total pay
        document.getElementById('total-diamonds').textContent = totalDiamonds;
        document.getElementById('total-pay').textContent = totalPay.toFixed(2);

        // Update the hidden price input field with the selected price
        document.getElementById('price-input').value = totalPay;  // This line updates the hidden input

        // Store the selected price in the session using fetch API
        fetch('/store-price', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ price: totalPay })
        }).then(response => {
            if (response.ok) {
                // Add active class to the proceed button on success
                proceedButton.classList.add('active');
            }
        });
    });
});

// Add event listener for the 'proceed-button'
document.getElementById('proceed-button').addEventListener('click', function() {
    this.classList.add('active');  // Add active class when clicked
});

var counterElement = document.getElementById('counter');

        function increase() {
            var currentValue = parseInt(counterElement.textContent);
            counterElement.textContent = currentValue + 1;
        }

        function decrease() {
            var currentValue = x;
            if (currentValue > 1) {
                counterElement.textContent = currentValue - 1;
            }
        }
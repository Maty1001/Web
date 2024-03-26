function appendToDisplay(value) {
    document.getElementById('display').value += value;
  }
  
  function clearDisplay() {
    document.getElementById('display').value = '';
  }
  
  function calculate() {
    try {
        let displayValue = document.getElementById('display').value;
        // Nahrazení "Math.sqrt(" za "Math.sqrt("
        displayValue = displayValue.replace(/Math.sqrt\(/g, 'Math.sqrt(');
        // Nahrazení "/100" za "/100"
        displayValue = displayValue.replace(/\/100/g, '/100');
        // Přidání závorky na konec odmocniny
        if (displayValue.includes('Math.sqrt(')) {
            displayValue += ')';
        }
        let result = eval(displayValue);
        document.getElementById('display').value = result;
    } catch (error) {
        document.getElementById('display').value = 'Error';
    }
  }
  
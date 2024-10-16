document.addEventListener('DOMContentLoaded', function() {
    let vehiculoSelect = document.querySelector('select[name="vehiculo"]');
    let lugaresInput = document.querySelector('input[name="lugares"]');
  
    vehiculoSelect.addEventListener('change', function() {
      let selectedOption = vehiculoSelect.options[vehiculoSelect.selectedIndex];
      let asientos = selectedOption.text.split(' - ')[1].split(' ')[0];
      lugaresInput.value = asientos;
    });
  });
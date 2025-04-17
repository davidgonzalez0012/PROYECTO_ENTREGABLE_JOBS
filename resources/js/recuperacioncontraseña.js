// Script para el formulario de registro que ya habías añadido...

// Script para el formulario de recuperación de contraseña
document.getElementById('formRecuperar').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Enviar formulario mediante AJAX
    fetch(this.action, {
      method: 'POST',
      body: new FormData(this),
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Cierra el modal
        bootstrap.Modal.getInstance(document.getElementById('recuperarModal')).hide();
        
        // Muestra una alerta de éxito
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-success alert-dismissible fade show';
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = `
          ${data.message}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        
        document.querySelector('.card-body').prepend(alertDiv);
        this.reset();
      } else {
        // Muestra errores si hay alguno
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-danger alert-dismissible fade show';
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = `
          ${data.message}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        
        document.querySelector('#recuperarModal .modal-body').prepend(alertDiv);
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  });
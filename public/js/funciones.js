
    function modal(action,method,titulo,data,btnEnviar ) {
        $('#mostrar form').attr({action:action, method:method});
        if (method!='POST') {$('#mostrar input[name=_token]').remove()}
        $('#mostrar .modal-title').html(titulo);
        $('#mostrar .modal-body').html(data);
        $('#mostrar #btn-enviar').val(btnEnviar);
    }
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
      let myModalEl = document.getElementById('mostrar')
            myModalEl.addEventListener('hidden.bs.modal', function (event) {
                location.reload();
            })


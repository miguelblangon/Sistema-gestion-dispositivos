<!-- Modal -->
<div class="modal" tabindex="-1" id="mostrar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="bg-stone-700 hover:bg-stone-900 text-white font-bold py-2 px-3 rounded" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <form action="" method="" class="needs-validation" novalidate>
        @csrf
        <div class="modal-body"></div>
        <div class="modal-footer">
            <button type="button" class="bg-stone-500 hover:bg-stone-700 text-white font-bold py-2 px-3 rounded" data-bs-dismiss="modal">Cerrar</button>
            <input type="submit"  class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-3 rounded" id="btn-enviar" value="">
        </div>
</form>
    </div>
    </div>
  </div>

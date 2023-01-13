@isset($historial)
<div  @if(count($historial)>0) style="height: 310px; border: 1px solid #ddd; overflow-y: scroll;" @endif >
    @foreach ($historial as $histo)
    <div class="card mt-2">
        <div class="card-body">
          <h5 class="card-title fw-bolder text-capitalize d-flex justify-content-evenly"><span>{{ $histo->created_at->format('d-m-Y') }}</span> <span>{{ $histo->procedimiento }}</span>  <span>{{ $histo->pieza }}</span></h5>
          <p class="card-text lh-lg"> {{ $histo->descripcion}}</p>
        </div>
      </div>
    @endforeach
</div>
@endisset

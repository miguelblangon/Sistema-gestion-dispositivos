      <div class="bg-white w-full mx-auto border border-gray-200" x-data="{selected:1}">
              <ul class="shadow-box">
                    <li class="relative border-b border-gray-200" x-data="{selected:null}">
                        <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                            <div class="text-center text-capitalize fs-4 fw-bolder">{{ $nombre }}</div>
                        </button>
                        <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            <div class="p-6">
                                <form action="{{ $action }}" method="get">
                                    <div class="row g-3">
                                        @for ($i = 0; $i < $max; $i++)
                                            @if ($tipo[$i]=='text')
                                                <div class="{{ $colInput }}">
                                                    <input type="text" class="form-control" name="{{ $name[$i] }}" placeholder="{{ $nomPara[$i] }}" aria-label="{{ $nomPara[$i] }}">
                                                </div>
                                            @endif
                                            @if ($tipo[$i]=='select')
                                                <div class="{{ $colInput }}">
                                                    <select class="form-select" name="{{ $name[$i] }}" aria-label="{{ $nomPara[$i] }}">
                                                        <option value="" selected>{{ $nomPara[$i] }}</option>
                                                        @isset($selectIfo)
                                                            @foreach ($selectIfo as $select )
                                                            <option value="{{ $select->{$selectId} }}">{{ $select->{$selectNombre}  }}</option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                </div>
                                            @endif
                                             @if($tipo[$i]=='date')
                                                <div class="{{ $colInput }}">
                                                    <input class="form-control" type="date" name="{{ $name[$i] }}" placeholder="{{ $nomPara[$i] }}" />
                                                </div>
                                             @endif





                                        @endfor
                                        <div class="{{ $colbutton }}">
                                            <button type="submit" class="{{ $btnClas }}" name="{{ $btnName }}">{{ $boton }} </button>
                                          </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
          </div>


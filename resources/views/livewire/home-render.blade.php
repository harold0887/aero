<div class="mt-5">




    <div class="form-row">
        <div class="form-group col-3">
            <label>Plantilla</label>
            <select class="form-control" wire:model="messageSelect">
                <option value="" disabled selected>Selecciona...</option>
                @foreach($mensajes as $item)
                <option value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>
            @error('messageSelect')
            <small class=" text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="form-group col-md-2">
            <label>Genero</label>
            <select class="form-control" wire:model="genero">
                <option value="" disabled selected>Selecciona...</option>
                <option value="01">Male</option>
                <option value="02">Female</option>
            </select>
            @error('genero')
            <small class=" text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="form-group col-md-2">
            <label>Apellido</label>
            <input type="text" class="form-control" wire:model="lastName">
            @error('lastName')
            <small class=" text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="form-group col-2">
            <label>Despedida</label>
            <select class="form-control" wire:model="salidaSelect">
                <option value="" disabled selected>Selecciona...</option>
                @foreach($salidas as $item)
                <option value="{{$item->id}}">{{$item->salida}}</option>
                @endforeach
            </select>
            @error('salidaSelect')
            <small class=" text-danger"> {{ $message }} </small>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary" wire:click="submit" wire:loading.attr="disabled" wire:target="submit">
        Crear plantilla
    </button>
    <button id="btn-copy" class="btn btn-warning" wire:click="clear" wire:loading.attr="disabled" wire:target="clear">
        Borrar plantilla
    </button>








    <div class="row">


        @if(isset($message) && $message !=null)
        <div class="col-8 mt-5 border rounded py-2 bg-white ">
            @if($genero=='01')
            <p>Estimado Sr. {{$lastName}},</p>
            @elseif($genero=='02')
            <p>Estimada Srta. {{$lastName}},</p>
            @endif


            <br>


            <p>{!!$message->message!!}</p>

            <br>

            @if($genero=='01')
            <p>Sr. {{$lastName}}, {{$salida->salida}} </p>
            @elseif($genero=='02')
            <p>Srta. {{$lastName}}, {{$salida->salida}} </p>
            @endif
            <br>
            Cordialmente,
        </div>

        @endif












    </div>


</div>
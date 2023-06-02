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
            <p>Buen día, {{$message->name}}</p>


            <br>


            <p>{!!$message->message!!}</p>

            <br>

          
        </div>

        @endif












    </div>


</div>
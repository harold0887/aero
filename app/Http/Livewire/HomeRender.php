<?php

namespace App\Http\Livewire;

use App\Salida;
use App\Message;
use Livewire\Component;

class HomeRender extends Component
{
    public $message, $entrada, $messageSelect = '', $salida, $salidaSelect, $genero = '', $lastName;
    protected $rules = [
        'messageSelect' => 'required',
        'genero' => 'required',
        'lastName' => 'required',
        'salidaSelect' => 'required',

        // 'socialNetwork' => 'required|string',
        // 'fop' => 'required',
        // 'payment' => 'required|image',
        // 'name' => 'required|string'
    ];
    protected $messages = [
        'messageSelect.required' => 'Selecciona una opcion valida.',
        'genero.required' => 'Selecciona una opcion valida.',
        'lastName.required' => 'El campo apellido es obligatorio.',
        'salidaSelect.required' => 'Selecciona una opcion valida.',



    ];

    public function mount(){
        $this->salidaSelect=1;
    }



    public function render()
    {
        $mensajes = Message::orderBy('title', 'asc')->get();
        $salidas = Salida::orderBy('salida', 'asc')->get();
        $this->salida = Salida::findOrFail($this->salidaSelect);



        return view('livewire.home-render', compact('mensajes','salidas'));
    }

    public function submit()
    {


        $this->validate();
        $this->message = Message::findOrFail($this->messageSelect);
        
    }
}

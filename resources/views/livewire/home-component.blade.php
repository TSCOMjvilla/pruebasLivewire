<div>
    hola mundo desde laravel Livewire
    <h1> {{$message}}</h1>
    <h2>{{$funciona}}</h2>

    <input type="text" wire:model.live.defer="message"/>
    <button class="btn btn-success">Enviar </button>
</div>

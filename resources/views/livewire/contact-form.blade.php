<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="name" placeholder="Nombre">
        <input type="email" wire:model="email" placeholder="Correo">
        <textarea wire:model="message" placeholder="Mensaje"></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>

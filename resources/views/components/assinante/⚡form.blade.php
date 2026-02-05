<?php

use Livewire\Component;
use App\Models\Assinante;

new class extends Component
{
    public $form = [
        'nome'     => '',
        'whatsapp' => '',
        'email'    => '',
        'instagram'=> '',
    ];

    public bool $sucesso = false;

    public function submit()
    {

        $this->validate([
            'form.nome' => ['required'],
            'form.whatsapp' => ['required', 'unique:assinantes,whatsapp'],
            'form.email' => ['required', 'email', 'unique:assinantes,email'],
            'form.instagram' => ['nullable'],

        ]);

        $this->sucesso = true;

        Assinante::create($this->form);

        $this->reset('form');

    }
};
?>

<form class="space-y-4 text-left" wire:submit="submit">

    <div wire:cloak class="p-4 bg-verde-oliva text-white rounded-sm" wire:show="sucesso">Mensagem enviada com sucesso!</div>

    <x-text-input label="Nome Completo" wire:model="form.nome"  />

    <x-text-input label="E-mail" wire:model="form.email" type="email" />

    <x-text-input label="Whatsapp" wire:model="form.whatsapp" x-mask="(99) 99999-9999"  type="tel" />

    <x-text-input label="Instagram" wire:model="form.instagram" />


    <button type="submit" class="w-full bg-verde-oliva text-bege py-5 font-bold uppercase tracking-widest hover:bg-terracota transition shadow-lg">
        Enviar Cadastro Seguro
    </button>
    <p class="text-[10px] text-center text-gray-400 mt-4">Em conformidade com a LGPD.</p>

</form>

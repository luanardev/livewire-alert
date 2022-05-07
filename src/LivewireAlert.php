<?php

namespace Luanardev\LivewireAlert;
use Livewire\Component;

class LivewireAlert extends Component
{
    
    public function alert($message, $type='success')
    {
        session()->flash($type, $message);
    }

    public function toastr($message, $type='success')
    {
        $this->dispatchBrowserEvent('livewire-toastr', [
            'type' => $type, 
            'message' => $message
        ]);
    }

}
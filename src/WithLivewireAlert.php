<?php

namespace Luanardev\LivewireAlert;
use Luanardev\LivewireAlert\LivewireAlert;

trait WithLivewireAlert
{
    
    public function toastr($message, $type="success")
    {
        $this->dispatchBrowserEvent('livewire-toastr', [
            'type' => $type,
            'message' => $message
        ]);
        return $this;
    }

    public function alert($message, $type="success")
    {
        session()->put($type, $message);
        return $this;
    }

    public function toastrSuccess($message)
    {
        return $this->toastr($message, 'success');
    }

    public function toastrInfo($message)
    {
        return $this->toastr($message, 'info');
    }

    public function toastrWarning($message)
    {
        return $this->toastr($message, 'warning');
    }
    
    public function toastrError($message)
    {
        return $this->toastr($message, 'error');
    }
    
    public function alertSuccess($message)
    {
        return $this->alert($message, 'success');
    }

    public function alertInfo($message)
    {
        return $this->alert($message, 'info');
    }

    public function alertWarning($message)
    {
        return $this->alert($message, 'warning');
    }
    
    public function alertError($message)
    {
        return $this->alert($message, 'error');
    }

}
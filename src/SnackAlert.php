<?php

namespace Pranav\SnackAlert;

class SnackAlert extends SnackAlertAssets
{
    public $title, $message, $signal;

    public $snack_alerts = [];


    /**
     * Set Title and Message
     *
     * @param  string  $title
     * @param  string  $message
     * @param  string  $signal type: success, warning, info, error
     * @return SnackAlert
     */

    public function setAlert(string $title, string $message, string $signal)
    {
        $this->snack_alerts[] = [
            'id'      => rand(1111,9999),
            'title'   => $title,
            'message' => $message,
            'signal'  => $signal
        ];

        return $this;
    }


    public function getMessages()
    {
        return $this->snack_alerts;
    }


    /**
     * Show alert
     * @param  \Livewire\Component $context
     * @return void
     */
    public function show(\Livewire\Component $context)
    {
        $context->dispatchBrowserEvent('notifyUsers', $this->snack_alerts);
    }

}

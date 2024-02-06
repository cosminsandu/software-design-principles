<?php
class Lamp {
    //TRUE = on, FALSE = Off
    protected bool $currentState = FALSE;

    public function turnOn() {
        $this->currentState = TRUE;
    }

    public function turnOff() {
        $this->currentState = FALSE;
    }

    public function getState() {
        return $this->currentState;
    }

    public function getStateString(): string {
        if ($this->currentState) {
            return 'On';
        } else {
            return 'Off';
        }
    }
}

class Button {
    protected Lamp $lamp;

    public function __construct(Lamp $l) {
        $this->lamp = $l;
    }

    public function On() {
        $this->lamp->turnOn();
    }

    public function Off() {
        $this->lamp->turnOff();
    }
}

$l = new Lamp();
$b = new Button($l);
echo $l->getStateString(); //Off

$b->On();
echo $l->getStateString(); //On

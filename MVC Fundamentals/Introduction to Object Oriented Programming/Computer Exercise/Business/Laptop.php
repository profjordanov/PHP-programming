<?php
namespace Computer\Business; 
class Laptop extends Computer implements iKeyboard, iTouchPad, iMouse {
    private $leftClick = false;
    private $rightClick = false;
    public function changeStatus() {
    }
    public function move($currentX, $currentY, $offsetX, $offsetY) {
        $newSetX = $currentX + $offsetX;
        $newSetY = $currentY + $offsetY;
        return [$newSetX, $newSetY];
    }
    public function moveFinger($currentX, $currentY, $offsetX, $offsetY) {
        $newSetX = $currentX + $offsetX;
        $newSetY = $currentY + $offsetY;
        return [$newSetX, $newSetY];
    }
    public function click($leftClick, $rightClick) {
        if ($leftClick === true) {
            $this->leftClick = true;
        } else if ($rightClick === true) {
            $this->rightClick = true;
        }
    }
}
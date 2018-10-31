<?php
namespace Computer\Business; 
class DesktopComputer extends Computer implements iMouse, iKeyboard {
    private $leftClick = false;
    private $rightClick = false;
    public function pressKey($pressKey) {
    }
    public function changeStatus() {
    }
    public function move($currentX, $currentY, $offsetX, $offsetY) {
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
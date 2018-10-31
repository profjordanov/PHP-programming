<?php
namespace Computer\Business; 
class MobilePhone extends Mobile implements iTouchScreen {
    private $leftClick = false;
    public function moveFinger($currentX, $currentY, $offsetX, $offsetY) {
        $newSetX = $currentX + $offsetX;
        $newSetY = $currentY + $offsetY;
        return [$newSetX, $newSetY];
    }
    public function clickFinger($click) {
        if ($click === true) {
            $this->leftClick = true;
        }
    }
}
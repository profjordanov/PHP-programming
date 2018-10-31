<?php
namespace Computer\Business; 
class Notebook extends Mobile implements iTouchScreen, iKeyboard, iMouse {
    private $leftClick = false;
    private $rightClick = false;
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
    public function pressKey($keyValue) {
        if ($keyValue == 'Backspace' && $this->writtenText != '') {
            $newText = '';
            for ($i = 0; $i < mb_strlen($this->writtenText) - 1; $i++) {
                $newText .= $this->writtenText[$i];
            }
            $this->writtenText = $newText;
        } else {
            $this->writeText($keyValue);
        }
    }
    public function writeText($text) {
        $this->writtenText .= $text;
    }
}
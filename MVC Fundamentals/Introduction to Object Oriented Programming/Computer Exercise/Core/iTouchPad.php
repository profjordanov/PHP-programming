<?php
namespace Computer\Core;
interface iTouchPad {
    public function moveFinger($currentX, $currentY, $offsetX, $offsetY);
    public function click($leftClick, $rightClick);
}
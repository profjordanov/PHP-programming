<?php
namespace Computer\Core;
interface iTouchScreen {
    public function moveFinger($currentX, $currentY, $offsetX, $offsetY);
    public function clickFinger($click);
    public function writeText($text);
}
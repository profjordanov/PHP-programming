<?php
namespace Computer\Core;
interface iKeyboard {
    public function pressKey($keyValue);
    public function changeStatus();
}
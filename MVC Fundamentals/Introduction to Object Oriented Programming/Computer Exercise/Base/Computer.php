<?php
namespace Computer\Base;
abstract class Computer {
    protected $processor;
    protected $ram;
    protected $writtenText;
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
    /**
     * @return mixed
     */
    public function getWrittenText(){
        return $this->writtenText;
    }
}
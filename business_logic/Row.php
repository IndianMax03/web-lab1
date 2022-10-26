<?php
class Row {

    private $x, $y, $r, $hit, $scriptTime, $curTime;

    public function __construct($x, $y, $r, $hit) {
        $this -> x = $x;
        $this -> y = $y;
        $this -> r = $r;
        $this -> hit = $hit;
    }

    public function setTime($scriptTime, $curTime) {
        $this -> scriptTime = $scriptTime;
        $this -> curTime = $curTime;
    }

    public function getArray() {
        return [$this -> x, $this -> y, $this -> r, $this -> hit, $this -> scriptTime, $this -> curTime];
    }

    /**
     * @return float
     */
    public function getX() {
        return $this -> x;
    }

    /**
     * @return float
     */
    public function getY() {
        return $this -> y;
    }

    /**
     * @return float
     */
    public function getR() {
        return $this -> r;
    }

    /**
     * @return boolean
     */
    public function getHit() {
        return $this -> hit;
    }

    /**
     * @return int
     */
    public function getScriptTime() {
        return $this -> scriptTime;
    }

    /**
     * @return string
     */
    public function getCurTime() {
        return date("H:i:s", $this -> curTime);
    }
}


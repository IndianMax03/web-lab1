<?php

class Row
{


    private float $x;
    private string $y;
    private int $r;
    private bool $hit;
    private int $scriptTime;
    private string $curTime;

    private static array $xLimits = [-2, -1.5, -1, -0.5, 0, 0.5, 1, 1.5, 2];

    private static array $yLimits = [
        "min" => -5,
        "max" => 3
    ];

    private static array $rLimits = [1, 2, 3, 4, 5];

    public function __construct($x, $y, $r)
    {
        $this->x = $x;
        $this->y = $this->parseY($y);
        $this->r = $r;
        $this->hit = $this->funcXYR();
    }

    private function funcXYR(): bool
    {
        $x = $this->x;
        $y = (float)$this->y;
        $r = $this->r;
        if ($x >= 0) { //  right side
            if ($y >= 0) { //  up
                return $x <= $r / 2 && $y <= $r;
            } else { //  down
                return false;
            }
        } else { //  left side
            if ($y >= 0) { //  up
                return $x ** 2 + $y ** 2 <= $r ** 2;
            } else { //  down
                return $y >= -$x - $r / 2;
            }
        }
    }

    private function parseY($y): string
    {
        $y = rtrim(str_ireplace(",", ".", $y), "0");
        $symbolsAfterDot = strlen(substr($y, strpos($y, "."), null)) - 1;
        if (abs((float)$y - (int)$y) > 0) {
            return number_format($y, $symbolsAfterDot, ".");
        } else {
            return (float)$y + 0;
        }
    }

    public function setTime($scriptTime, $curTime): void
    {
        $this->scriptTime = $scriptTime;
        $this->curTime = $curTime;
    }

    public function getArray(): array
    {
        return [
            "x" => $this->x,
            "y" => $this->y,
            "r" => $this->r,
            "hit" => $this->hit,
            "scriptTime" => $this->scriptTime,
            "curTime" => $this->curTime
        ];
    }

    public static function validateParams($x, $y, $r): bool
    {
        $xArr = self::$xLimits;
        $yArr = self::$yLimits;
        $rArr = self::$rLimits;
        $y = str_ireplace(",", ".", $y);

        return in_array($x, $xArr) &&
            is_numeric($y) &&
            (float)$y >= $yArr["min"] &&
            (float)$y <= $yArr["max"] &&
            strlen($y) < 11 &&
            in_array($r, $rArr);
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function getR(): float
    {
        return $this->r;
    }

    public function getHit(): bool
    {
        return $this->hit;
    }

    public function getScriptTime(): int
    {
        return $this->scriptTime;
    }

    public function getCurTime(): string
    {
        return date("H:i:s", $this->curTime);
    }
}


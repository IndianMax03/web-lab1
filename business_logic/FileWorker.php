<?php

class FileWorker {

    private $fileName = "../business_logic/Data.csv";
    private $access = "a+";

    public function addRow(Row $row) {
        $rowCSV = implode(";", $row -> getArray()) . PHP_EOL;
        $file = fopen($this -> fileName, $this -> access);
        fwrite($file, $rowCSV);
        fclose($file);
    }

    public function getRows() {
        $file = fopen($this -> fileName, $this -> access);
        $data = [];
        while (!feof($file)) {
            $rowCSV = explode(";", fgets($file));
            if (count($rowCSV) == 6) {
                $x = $rowCSV[0];
                $y = $rowCSV[1];
                $r = $rowCSV[2];
                $hit = $rowCSV[3];
                $scriptTime = $rowCSV[4];
                $curTime = $rowCSV[5];
                $row = new Row($x, $y, $r, $hit);
                $row -> setTime($scriptTime, $curTime);
                $data[] = $row;
            }
        }
        return $data;
    }

    public function clearFile() {
        $access = "w";
        $file = fopen($this -> fileName, $access);
        fwrite($file, PHP_EOL);
    }

}

<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * Rows to increment (from indices)
     * @var array
     */
    public array $RowsIncrements = [];

    /**
     * Columns to increment (from indices)
     * @var array
     */
    public array $ColsIncrements = [];

    /**
     * @param Integer $m
     * @param Integer $n
     * @param Integer[][] $indices
     * @return Integer
     */
    function oddCells(int $m, int $n, array $indices) : int
    {
        $this->setIncrements($indices);
        $matrix = [];
        $row = [];
        $oddNumbers = 0;

        for ($i=0; $i<$n; $i++) {
            $row[] = 0;
        }
        for ($i=0; $i<$m; $i++) {
            $matrix[] = $row;
        }

        for ($row=0; $row<count($matrix); $row++) {
            for ($col=0; $col<count($matrix[$row]); $col++) {
                $increment = $this->getIncrementForCell($col,$row);
                $matrix[$row][$col] += $increment;
                if ( $increment % 2 ) {
                    $oddNumbers++;
                }
            }
        }

        return $oddNumbers;
    }

    /**
     * @param array $indices
     * @return void
     */
    public function setIncrements(array $indices): void
    {
        foreach ($indices as $indexPair) {
            $this->RowsIncrements[] = $indexPair[0];
            $this->ColsIncrements[] = $indexPair[1];
        }
    }

    /**
     * @param int $col
     * @param int $row
     * @return int
     */
    public function getIncrementForCell(int $col, int $row): int
    {
        $rowsIncrement = array_keys($this->RowsIncrements,$row);
        $rowsIncrementTimes = count($rowsIncrement);
        $colsIncrement = array_keys($this->ColsIncrements,$col);
        $colsIncrementTimes = count($colsIncrement);

        return $rowsIncrementTimes + $colsIncrementTimes;
    }
}

$m = 2;
$n = 3;
$indices = [[0,1],[1,1]];
//Output: 6

$Solution = new Solution;
$res = $Solution->oddCells($m, $n, $indices);
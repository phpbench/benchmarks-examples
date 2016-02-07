<?php

/**
 * @ParamProviders({"provideEuler"})
 * @Revs(10000)
 * @Iterations(10)
 */
class EulerBench
{
    public function benchEuler($params)
    {
        euler($params['x'], $params['y']);
    }

    public function provideEuler()
    {
        return array(
            array(
                'x' => 20, 
                'y' => 10,
            ),
            array(
                'x' => 2166,
                'y' => 6099,
            ),
            array(
                'x' => 1239432166,
                'y' => 2221248099,
            ),
        );
    }
}

function euler($x, $y)
{
    static $count = 0;
    $count++;
    $r = $x % $y;

    if ($r == 0) {
        return $y;
    }

    return euler($y, $r);
}

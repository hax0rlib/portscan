<?php
.##.....##....###....##.....##...#####...########..##.......####.########.
.##.....##...##.##....##...##...##...##..##.....##.##........##..##.....##
.##.....##..##...##....##.##...##.....##.##.....##.##........##..##.....##
.#########.##.....##....###....##.....##.########..##........##..########.
.##.....##.#########...##.##...##.....##.##...##...##........##..##.....##
.##.....##.##.....##..##...##...##...##..##....##..##........##..##.....##
.##.....##.##.....##.##.....##...#####...##.....##.########.####.########.
/*************************
 * @author FFY00
 * @improvements Hax0rlib
 * @since 20/02/2017
 *************************/
class Scan
{
    /**
     * Scan constructor.
     * @param string $host
     * @param array $port
     * @return Scan
     */
    public function scan($host = "google.com", $port = array(80))
    {
        $r = array(
            'open' => array(),
            'close' => array()
        );
        foreach($port as $p)
        {
            $con = @fsockopen($host, $p);
            if (is_resource($con))
            {
                array_push($r[$open], $p);
                fclose($r[$con]);
            } else {
                array_push($r[$close],$p);
            }
        }
    }

    /**
     * @param int $start
     * @param int $end
     */
    public function covertRange($start = 80, $end = 80)
    {
        $r = array();
        for($i = $start; $i <= $end; $i++)
        {
            array_push($r,$i);
        }
    }
}

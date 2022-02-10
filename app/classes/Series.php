<?php

namespace App\classes;

class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $i;
    protected $result;
    protected $sum;

    public function __construct($post = null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];

    }
    public function getSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.'+';  //if there is a space in '+' you should(line-28)
            $this->sum += $this->i;
        }
        //return rtrim($this->result, '+').' = '. $this->sum;   //give a pace here before '+'
        return [
            'result'            =>   rtrim($this->result, '+').' = '. $this->sum,
            'staring_number'    => $this->startingNumber,
            'ending_number'     => $this->endingNumber,
        ];
    }
}
<?php

class pushSwap
{

    protected $la;
    protected $lb;
    protected $array = [];


    public function __construct()
    {
        global $argc;
        global $argv;

        if(count($argv) > 2)
        {
            array_shift($argv);
            $this->la = $argv;   
            $this->lb = [];
            $i = 0;
            $n = $i +1;
            $size = sizeof($this->la);
            $size = $size -1;

            while($i < $size)
            {
                if($this->la[$i] <= $this->la[$n])
                {
                    $i++;
                    $n++;
                }

                else
                {
                    if(count($argv) == 3)
                    {
                        $this->algoFewNumber();
                        $this->affichage();
                    }

                    elseif(count($argv) == 2)
                    {
                        $this->algoTwoNumber();
                        $this->affichage();  
                    }

                    else
                    {
                        $this->algorithme();
                        $this->affichage();
                    }  
                }
            }         

        }

        else
        {
            return;
        }
    }

//échange les positions des deux premièrs élèments de "la"
    public function sa()
    {
        $stock = $this->la[0];
        $this->la[0] = $this->la[1];
        $this->la[1] = $stock;
        $sa = 'sa ';
        array_unshift($this->array, $sa);
    }
//échange les positions des deux premièrs élèments de "lb"
    public function sb()
    {
        $stock = $this->lb[0];
        $this->lb[0] = $this->lb[1];
        $this->lb[1] = $stock;
        $sb = 'sb ';
        array_unshift($this->array, $sb);
    }

//sa et sb en même temps
    public function sc()
    {
        $this->sa($this->la);
        $this->sb($this->lb);
        $sc = 'sc ';
        array_unshift($this->array, $sc);
    }


//prend le premier élèment de "lb" et le place à la première position de "la"
    public function pb()
    {
        $shift = array_shift($this->la);
        array_unshift($this->lb, $shift);
        $pb = 'pb ';
        array_unshift($this->array, $pb);
    }

//pb prend le premier élèment de "la" et le place à la première position de "lb"
    public function pa()
    {
        $shift = array_shift($this->lb);
        array_unshift($this->la, $shift);
        $pa = 'pa ';
        array_unshift($this->array, $pa);
    }

//fait une rotation de "la" vers le début(le premier élèment devient le dernier)
    public function ra()
    {
        $shift = array_shift($this->la);
        array_push($this->la, $shift);
        $ra = 'ra ';
        array_unshift($this->array, $ra);
    } 

//fait une rotation de "lb" vers le début(le premier élèment devient le dernier)
    public function rb()
    {
        $shift = array_shift($this->lb);
        array_push($this->lb, $shift);
        $rb = 'rb ';
        array_unshift($this->array, $rb);

    } 

//ra et rb en même temps
    public function rr()
    {
        $this->ra($this->la);
        $this->rb($this->lb);
        $ra = 'ra ';
        array_unshift($this->array, $ra);
    }

//fait une rotation de la vers la fin(le dernier élèment devient le premier)
    public function rra()
    {
        $shift = array_pop($this->la);
        array_unshift($this->la, $shift);
        $rra = 'rra ';
        array_unshift($this->array, $rra);
    }

//fait une rotation de lb vers la fin. (le dernier élèment devient le premier)
    public function rrb()
    {
        $shift = array_pop($this->lb);
        array_unshift($this->lb, $shift);
        $rrb = 'rrb ';
        array_unshift($this->array, $rrb);
    }

//rra et rrb en même temps
    public function rrr()
    {
        $this->rra($this->la);
        $this->rrb($this->lb);
        $rrr = 'rrr ';
        array_unshift($this->array, $rrr);
    }

    public function algorithme()
    {
        if($this->la !== [])
        {
            while($this->la[0] != max($this->la))
            {
                $this->rra();
            }

            $this->pb();
            $this->algorithme();
            $this->pa();
            $this->ra();
        }
    }

    public function algoFewNumber()
    {
        $max = max($this->la);
        $min = min($this->la);

        switch($this->la)
        {
            case($this->la[2] === $max && $this->la[1] === $min):
            $this->sa();
            break;

            case($this->la[0] === $max && $this->la[2] === $min ):
            $this->sa();
            $this->rra();
            break;

            case($this->la[0] === $max && $this->la[1]):
            $this->ra();
            break;

            case($this->la[0] === $min && $this->la[1] === $max):
            $this->sa();
            $this->ra();
            break;

            case($this->la[1] === $max && $this->la[2]):
            $this->rra();
            break;
        }  
    }

    public function algoTwoNumber()
    {
        $max = max($this->la);

        if($this->la[0] === $max)
        {
            $this->sa(); 
        }
    }

    public function affichage()
    {
        $ok = array_reverse($this->array);
        $ok = implode($ok);
        echo trim($ok) . PHP_EOL;
        // print_r($this->la);

    }
}

$algorithme = new pushSwap;

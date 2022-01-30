<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = []; //array

    public function index()
    {

        $this->data = [10, 20, 30 ,'shofi',100.200,true];
//        echo $this->data[3];
        foreach ($this->data as $item)
        {

            echo $item;
            echo '<br/>';
        }


//        $this->x = 100;
//        do{
//            echo 'hello world<br/>';
//            $this->x++;
//        }while($this->x < 110);
//
//        $this->x =100;
//        while ($this->x < 110)
//        {
//            echo 'Hello world<br/>';
//            $this->x++;
//        }

//        for ($this->y=99 ;$this->y >=76 ;$this->y--)
//        {
//            echo $this->y.' ';
//        }



//        $this->x = 100;

//        switch ($this->x)
//        {
//            case 10:
//                echo 'hello world';
//                break;
//            case 20:
//                echo "Hello Bangladesh";
//                break;
//            case 30:
//                echo "Hello Dhaka";
//                break;
//            default:
//                echo "Hello Md.Shofiullah";
//                break;
//        }


//        if ($this->x > 100)
//        {
//            echo 'Hello world';
//        }
//        elseif ($this->x < 100)
//        {
//            echo "Hello shofi";
//        }
//        elseif ($this->x <150)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Good News';
//        }



//        $this->x =100;
//        if($this->x > 20)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Hello world';
//        }





//        $this->firstName = 'Md.';
//        $this->lastName = 'Shofiullah';
//        echo "My name is : ".$this->firstName.' '.$this->lastName;
        /*
         *Arithmetic operator
            *Binary Operator(+,-,*,/,%)
            * Unary operator(++,--,(-))
         * Assignment operator(=,+=,-=,*=,/=,%=,.=)
         * Conditional Operator(>,>=,<,<=,==,!=,===,!==)
         * Logical operator (&&,||,!)
         */


//        $this->x = 10;
//        $this->y = 20;
//        $this->z = 30;






//      ***  Logical operator

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>......<br/>';

//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>......<br/>';

//        * Conditional Operator(>,>=,<,<=,==,!=,===,!==)
//        echo $this->x > $this->y; // blank or 0 means false & true =1 (show)

//        * assignment operator
//        echo $this->x += $this->y; //$this->x = $this->x + $this->y (10 + 20 =30)
//        echo '<br/>';
//        echo $this->x -= $this->y; // 30-20 =10
//        echo '<br/>';
//        echo $this->x *= $this->y; // 10 * 20 = 200
//        echo '<br/>';
//        echo $this->x /= $this->y; // 200 / 20 =10
//        echo '<br/>';
//        echo $this->x %= $this->y; // 10 % 20 = 10
//        echo '<br/>';
//        echo $this->x .= $this->y; // 10(concrete)20 =1020
//        echo '<br/>';


//        * Unary operator(++,--,(-))
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x;

//        * Binary Operator(+,-,*,/,%)

//        echo $this->x + $this->y;
//        echo "<br/>";
//        echo $this->x - $this->y;
//        echo "<br/>";
//        echo $this->x * $this->y;
//        echo "<br/>";
//        echo $this->x / $this->y;
//        echo "<br/>";
//        echo $this->x % $this->y;
    }
}
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
    public $data = [];

    public function index(){
//        echo "Shykot is Saying Hello!!";
//        $this->firstName = "Rahim";
//        $this->lastName = "Khan";
//        echo "His Full Name is: ".$this->firstName. ' '. $this->lastName;
        $this->data = [10, 20, 40, 'BITM', 100.34, true];
        //echo $this->data[5];
        foreach ($this->data as $item)
        {
            echo $item;
        }


        $this->x = 100;
       // $this->y = 20;
       // $this->z = 30;

     /*   $sum = $this->x + $this->y;
        echo "$sum";    //30

        echo "<br />";
        $subs = $this->x - $this->y;
        echo "$subs";   //-10

        echo "<br />";
        $mul = $this->x * $this->y;
        echo "$mul";    //200

        echo "<br />";
        $div = $this->x / $this->y;
        echo "$div";    //0.5

        echo "<br />";
        $mod = $this->x % $this->y;
        echo "$mod";    //10
        */

//        echo $this->x += $this->y;
//        echo"<br />";
//
//        echo $this->x -= $this->y;
//        echo"<br />";
//
//        echo $this->x *= $this->y;
//        echo"<br />";
//
//        echo $this->x /= $this->y;
//        echo"<br />";
//
//        echo $this->x %= $this->y;
//        echo"<br />";
//
//        echo $this->x .= $this->y;
//        echo"<br />";






//        echo $this->x++; //10
//        echo "<br />";
//        echo $this->x; //11
//
//        echo $this->x--; //10
//        echo "<br />";
//
//        echo ++$this->x; //10
//        echo "<br />";
//
//        echo ++$this->x; //10
//        echo "<br />";


//        echo $this->x === $this->y;
//        echo ($this->x > $this->y) && ($this-> y > $this->z);
//        echo "<br />...<br />";
//
//        echo ($this->x > $this->y) && ($this-> y < $this->z);
//        echo "<br />...<br />";
//
//        echo ($this->x < $this->y) && ($this-> y > $this->z);
//        echo "<br />...<br />";
//
//        echo ($this->x < $this->y) && ($this-> y < $this->z);
//        echo "<br />...<br />";

//        if($this->x > 20){
//            echo "$this->x";
//            echo"Condition True";
//        }
//        else {
//           echo "condition doesn't true";
//        }

//        switch($this->x){
//            case 10:
//                echo "Hello 10";
//                break;
//            case 20:
//                echo "Hello 20";
//                break;
//            case 30:
//                echo "30";
//                break;
//            default:
//                echo "Hello BITM";
//        }

//        for($this->y = 1; $this->y <=100; $this->y++)
//        {
//            echo "Hello Shykot $this->y"."<br />";
//        }
//        while($this->x < 110){
//            echo "Hello World $this->x". "<br />";
//            $this->x++;
//        }
//        do {
//            echo "Hello World $this->x <br />";
//            $this->x++;
//        }while($this->x < 110);



    }
}
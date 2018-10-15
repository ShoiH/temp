<?php
namespace TechBoost;

class Number02
{
    private function Sum()
    {
        $a = 3;
        $b = 7;
    
        echo $a + $b. PHP_EOL;
    }

    private function Get8()
    {
        $ArrayMonth = [
            "1月",
            "2月",
            "3月",
            "4月",
            "5月",
            "6月",
            "7月",
            "8月",
            "9月",
            "10月",
            "11月",
            "12月"];
    
        echo $ArrayMonth[7].PHP_EOL;
    }

    private function HelloWorld()
    {
        $Hello = "Hello,";
        $name = "shoi";
        $world = "'s World!";
    
        echo $Hello.$name.$world.PHP_EOL;
    }

    private function TechBoost()
    {
        $tech = "tech";
        $tech .= " boost";

        echo $tech.PHP_EOL;  
    }

    private function Show12()
    {
        $calendar = [
            "January" => "1月",
            "February" => "2月",
            "March" => "3月",
            "April" => "4月",
            "May" => "5月",
            "June" => "6月",
            "July" => "7月",
            "August" => "8月",
            "September" => "9月",
            "October" => "10月",
            "November" => "11月",
            "December" => "12月"
        ];
    
        echo $calendar["December"].PHP_EOL;
    }

    public function RUN()
    {
        $this->Sum();
        echo PHP_EOL;
        $this->Get8();
        echo PHP_EOL;
        $this->HelloWorld();
        echo PHP_EOL;
        $this->TechBoost();
        echo PHP_EOL;
        $this->Show12();
        echo PHP_EOL;
    }

}

class NUMBER03
{
    private function YouOrNotYou()
    {
        $name = "shoi";
        /* $name = "no";*/
    
        if ($name == "shoi") {
            echo "私は" . $name . " です。".PHP_EOL;
        } else {
            echo $name . " ではありません。".PHP_EOL;
        }
    }

    private function For10000()
    {
        $total = 0;

        for ($i = 1; $i <= 10000; $i++) {
            $total +=  $i;
        }
    
        echo $total.PHP_EOL;
    }

    private function FruitsShow()
    {
        $fruits = [
            "りんご",
            "みかん",
            "なし",
            "ラフランス",
            "すいか"
        ];
    
        foreach ($fruits as $fruit) {
            echo $fruit.PHP_EOL;
        }
    }

    private function DivideFive()
    {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                echo $i.PHP_EOL;
            }
        }
    }

    public function RUN()
    {
        $this->YouOrNotYou();
        echo PHP_EOL;
        $this->For10000();
        echo PHP_EOL;
        $this->FruitsShow();
        echo PHP_EOL;
        $this->DivideFive();
        echo PHP_EOL;
    }
}

class Number04
{
    private function Double($num)
    {
        return $num * 2;
    }

    private function Sum($a,$b)
    {
        return $a+$b;
    }

    private function Times($arr)
    {
        $total = 1;

        foreach ($arr as $number) {
            $total *= $number;
        }

        return $total;
    }

    private function CreateTestArray()
    {
        $array = array();

        for ($i = 0; $i < 5; $i++) {
            $randnum = mt_rand(1,999);

            array_push($array,$randnum);

            echo $array[$i].PHP_EOL;
        }

        foreach ($array as $number) {
            echo $number.PHP_EOL;
        }

        echo PHP_EOL;
        
        return $array;
    }

    private function Arrays_Max($array)
    {
        $maxnum = $array[0];
        
        for ($i = 1; $i <= count($array); $i++) {
            if ($maxnum < $array[$i]) {
                $maxnum = $array[$i];
            }
        }
        
        return $maxnum;
    }

    private function BuiltInFunc()
    {
        // strip_tags
        $str = "aaaaaa<?php echo 'aaa' ?>あいうえ<br>お";

        echo "--strip_tags--".PHP_EOL;
        echo $str.PHP_EOL;
        echo strip_tags($str).PHP_EOL;

        // array_push
        echo PHP_EOL."--array_push--".PHP_EOL;
        
        $array = array(1,2,3,4,5);

        foreach ($array as $object) {
            echo $object.",";
        }

        echo PHP_EOL;
        
        array_push($array,6);

        foreach ($array as $object) {
            echo $object.",";
        }

        echo PHP_EOL;

        // array_merge
        echo PHP_EOL."--array_merge--".PHP_EOL;
        
        foreach ($array as $object) {
            echo $object.",";
        }
        
        echo PHP_EOL;

        $array2 = array(7,8,9,10);
        $array = array_merge($array,$array2);

        foreach ($array as $object) {
            echo $object.",";
        }

        echo PHP_EOL;

        // time, mktime        // date
        echo PHP_EOL."--time, mktime,date--".PHP_EOL;

        echo date("Y-M-d-h-i-s",time()).PHP_EOL;
        echo date("Y-M-d-h-i-s",mktime(12,13,59,4,21,1934)).PHP_EOL;
        echo date(DATE_RFC2822).PHP_EOL;
    }

    public function RUN()
    {
        echo $this->Double(500).PHP_EOL;
        echo PHP_EOL;  
        echo $this->Sum(1,2).PHP_EOL;
        echo PHP_EOL;

        $array = array(1,3,5,7,9);

        echo $this->Times($array).PHP_EOL;
        echo PHP_EOL;
        echo $this->Arrays_Max($this->CreateTestArray()).PHP_EOL;
        echo PHP_EOL;
        echo $this->BuiltInFunc().PHP_EOL;
        echo PHP_EOL;
    }
}

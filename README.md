# My-php-course
PHP is a widely used server-side programming language that’s become increasingly fast and powerful over the years. PHP works well with HTML and databases, making it a great language for anyone interested in building dynamic web applications.


## Class 12(Fetch Function) Overview
<details>
<summary>Click Here </summary>

### Fetch Function
- mysqli_fetch_assoc()
- mysqli_fetch_array()
- mysqli_fetch_row()
- mysqli_fetch_all()
- mysqli_fetch_field()


`javascript `
```php

       

```
1. item1
2. item2
    1. item2.1
3. item3
### text list

- [x] text1
- [x] text1
- [] text1
</details>

## Class 13(oop interfaces) Overview
<details>
<summary>Click Here </summary>

### Interfaces
- can't make object of interface 

`php `
```php
interface frist{
    function  cale($a,$b);

    
}
interface second{
    function sub($c,$d);//con't create object in funciton/ method
}
class child implements  frist,second{
    public function cale($a,$b){
        echo $a+$b;
    }

    public function sub($c,$d){
        echo $c-$d;
    }
   
  }

  $test = new child();
  $test->cale(10,30);
```
</details>

## Class 14(oop) Overview
<details>
<summary>Click Here </summary>

### oop
- class
- properties
- methods
- object
- constructor

`php `
```php

class caleculator{
    // properities 
    public $a;
    public $b;
    public $c;
    //methods decloration
    function sum(){
        $this->c =$this->a + $this->b;
        return $this->c; 
    }
    function sub(){
        $this->c =$this->a + $this->b;
        return $this->c; 
    }
    
}
//object create 
$text1 = new caleculator();
$text1->a=20;
$text1->b=10;
echo $text1->sum();

$text2 = new caleculator();
$text2->a=30;
$text2->b=30;
echo $text2->sum();
```
</details>


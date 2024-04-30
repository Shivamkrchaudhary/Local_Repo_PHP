<?php


        // class C1
        // {
        //     Public $value;
        //     Public function  c1_get($c_v_1)
        //     {
        //         $this-> value = $c_v_1;
        //     }
        //     Public function show(){
        //         echo "<h1>Value of C1 Property is: " . $this->value ;
        //     }
        // }

        // class C2 extends C1
        // {
        //     Public $value_c2;
        //     Public function  c2_get($x)
        //     {
        //         $this-> value_c2 = $x;
        //     }
        //     Public function show(){
        //         echo "<h1>Value of C2 Property is: " . $this->value_c2 ;
        //         // Parent::show();
        //     }

                  
        //     Public function Parent_behav()
        //     {
        //     Parent::show();
        //     }

        // }

  



        // $obj= new C2();
        // $obj -> c1_get(50);
        // $obj -> c2_get(70);
        // $obj ->show();
        // // C1::show();
        // $obj->Parent_behav();

        ?>

<?php
class Owner
{
    public $name; public $salary;
    public function change_name($new_name)
    {
        $this->name = $new_name;
        echo "<br><h1>The new name is: ".$this->name;
    }

    public function change_salary($new_sal)
    {
        $this->salary = $new_sal;
        echo "<br><h1>The new salary is: ".$this->salary;
    }
}

class Manager extends Owner
{
    //public $dept;
    public function parent_behav($value, $salary)
    {
        parent::change_name($value);
        parent::change_salary($salary);
    }

    public function change_name($new_name)
    {
        $this->name = $new_name;
        echo "<br><h1>The new name changed by the manager is: ".$this->name;
    }

    public function change_sal($new_sal)
    {
        $this->salary = $new_sal;
        echo "<br><h1>The new salary changed by the manager is: ".$this->salary;
    }
}

$e1 = new Manager();
$e1->parent_behav("MNO", 80000);
$e1->change_name("ABC");
$e1->change_sal(50000);




?>




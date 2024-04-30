<?php


class Owner
{
    public $name; public $salary;
    public function change_name($new_name)
    {
        $this->name = $new_name;
        echo "<br><h1>The new name is: ".$this->name;
    }

    final function change_salary($new_sal)
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

$e1->change_name("ABC");
$e1->change_sal(50000);




?>
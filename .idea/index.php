<?php

// class Circle {
//     private float $radius;
//     private string $color;

//     public function __construct(float $r, string $c) {
//         $this->radius = $r;
//         $this->color = $c;
//     }

//     public function getRadius() : float {
//         return $this->radius;
//     }

//      public function setRaduis(float $raduis): void {
//          $this->radius=$raduis;
//      }

//     public function getArea() : float {
//         return pi() * pow($this->radius , 2);
//     }

//      public function getCircumference() : float {
//         return 2 * pi() * $this->radius;
//     }

//     public function toString() {
//         echo "Radius = {$this->radius} <br>  Area = {$this->getArea()}";
//     }
// }
// 1.1 //
// $cir = new Circle(2,"red");
// echo "Radius {$cir->getRadius()} : Area is {$cir->getArea()}";

  // 1.2 //
//   $cir->setRaduis(5);
//   echo "set raduis is {$cir->getRadius()}";
//   echo " Circumference is {$cir->getCircumference()} ";
//   $cir->toString();

// 1.3 //
// class Rectangle {
//     private float $length;
//     private float $width;


//     public function __construct(float $length,float $width){
//         $this->length=$length;
//         $this->width=$width;
//     }

//     public function getLength() : float{
//         return $this->length;
//     }

//     public function setLength(float $length) : void {
//         $this->length=$length;
//     }

//     public function getWidth() : float {
//         return $this->width;
//     }

//     public function setWidth(float $width) : void {
//         $this->width=$width;
//     }

//     public function getArea () : float {
//         return $this->length * $this->width ;
//     }

//     public function  getPerimeter() :  float {
//         return ($this->length + $this->width) * 2 ;
//         }

//     public function toString() {
//         echo "Length is {$this->length} , Width is  {$this->width}";
//     }
// }

// $rec= new Rectangle(2 , 5);
//  $rec->toString();


 // 1.4 //
// class Employee {
//      private int $id;
//      private string $firstName;
//      private string $lastName;
//      private int $salary;


//      public function __construct(int $id,string $firstName, string $lastName, int $salary) {
//          $this->id=$id;
//          $this->firstName=$firstName;
//          $this->lastName=$lastName;
//          $this->salary=$salary;
//      }


//     public function getId() : int {
//         return $this->id;
//     }

//     public function getFirstName() : string {
//         return $this->firstName;
//     }

//     public function getLastName() : string {
//         return $this->lastName;
//     }

//     public function getName() : string {
//         return "{$this->firstName} {$this->lastName}";
//     }

//     public function getSalary( ) : int {
//         return $this->salary;
//     }

//     public function setSalary(int $salary) : void {
//         $this->salary=$salary;
//     }

//     public function getAnnualSalary() : int {
//         return $this->salary * 12;
//     }

//     public function raiseSalary(int $percent ) : int {
//       return  $this->salary += $percent;
//     }

//     public function toString () {
//         echo " id = {$this->id} firstName = {$this->firstName} lastName {$this->lastName} salary = {$this->salary} ";
//     }
//  }


//  $em= new Employee(1,"mahmoud", "maray", 2000);

//  echo "{$em->getName()}";


// 1.5 //
// class InvoiceItem {
//     private string $id;
//     private string $desc;
//     private int $qty;
//     private float $unitPrice;

//     public function __construct(string $id, string $desc, int $qty, float $unitPrice){
//         $this->id = $id;
//         $this->desc = $desc;
//         $this->qty = $qty;
//         $this->unitPrice = $unitPrice;
//     }

//     // Function to set all attributes
//     public function setAttributes(string $id, string $desc, int $qty, float $unitPrice) {
//         $this->id = $id;
//         $this->desc = $desc;
//         $this->qty = $qty;
//         $this->unitPrice = $unitPrice;
//     }


//     public function getAttributes() {
//         return [
//             'ID' => $this->id,
//             'Description' => $this->desc,
//             'Quantity' => $this->qty,
//             'Unit Price' => $this->unitPrice
//         ];
//     }


//     public function getTotal() {
//         return $this->qty * $this->unitPrice;
//     }


//     public function toString() {
//         $attributes = $this->getAttributes();
//         $output = "Invoice Item Details:\n";
//         foreach ($attributes as $key => $value) {
//             $output .= "$key: $value\n";
//         }
//         return $output;
//     }
// }


// $item = new InvoiceItem('123', 'Product A', 5, 10.0);


// var_dump($item->getAttributes());

// echo "Total: $" . $item->getTotal() . "\n";


// echo $item->toString();

// 1.6 //

// class Account {
//     private string $id;
//     private string $name;
//     private int $balance;

//     public function __construct(string $id, string $name, int $balance){
//         $this->id = $id;
//         $this->name = $name;
//         $this->balance = $balance;
//     }

//     public function getAttributes() {
//         return [
//             'ID' => $this->id,
//             'Name' => $this->name,
//             'Balance' => $this->balance
//         ];
//     }

//     public function credit(int $amount) {
//         $this->balance += $amount;
//         return $this->balance;
//     }


//     public function debit(int $amount) {
//         if ($amount <= $this->balance) {
//             $this->balance -= $amount;
//         } else {
//             echo "Amount exceeds balance.\n";
//         }
//         return $this->balance;
//     }


//     public function transferTo(Account $anotherAccount, int $amount) {
//         if ($amount <= $this->balance) {
//             $this->balance -= $amount;
//             $anotherAccount->credit($amount);
//         } else {
//             echo "Amount exceeds balance.\n";
//         }
//         return $this->balance;
//     }

//     // Function to print account details
//     public function toString() {
//         echo "ID: {$this->id}, Name: {$this->name}, Balance: {$this->balance}\n";
//     }
// }

// $account1 = new Account('A123', 'John Doe', 1000);
// $account2 = new Account('B456', 'Jane Doe', 2000);

// $account1->toString();
// $account2->toString();

// $account1->credit(500);
// $account1->toString();

// $account1->debit(800);
// $account1->toString();

// $account1->transferTo($account2, 300);
// $account1->toString();
// $account2->toString();



?>


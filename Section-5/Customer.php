<?php
  include 'User.php';
  class Customer extends User {
    public $addressOrder;
    public $codeCustomer;
    private function payment() {
      echo "Payment";
    }

    private function orderHistory() {
      echo "Order History";
    }
  }

  $cus = new Customer();
  $cus->orderHistory();
  $cus->register();
?>
<?php
//input
echo "<h2>Input</h2>";
$transactions = [
    [
      "debit" => 2,
      "credit" => 3
    ],
    [
      "debit" => 15,
      "credit" => 14
    ]
  ];
   
  echo "<pre>";
  print_r($transactions);
  echo "</pre>";


  echo "<h2>Output</h2>";
  echo "<pre>";

  $new_transactions = [];
  foreach( $transactions as $transaction ) {
    //print_r($transaction);
      $new_transaction = $transaction;
      $new_transaction["amount"] = abs( $transaction[ "debit" ] - $transaction[ "credit" ] );
      $new_transactions[] = $new_transaction;
  } 
  print_r($new_transactions);

?>
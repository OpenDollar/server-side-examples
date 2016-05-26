<?php
# get balance
$address = '0xe176d196224fbf33d779f4a6275dcc31f3071f23';
$balance = `node get-balance.js $address\n`;
echo "balance: $balance";

#send transaction to regular address
$destination = '0xe176d196224fbf33d779f4a6275dcc31f3071f23';
$amount = 1.12;
$txid = `node send-tx.js $destination`;
echo "transaction hash: $txid";

#send transaction to icap address
$destination = 'XE33ODLOPDL000000000';
$amount = 1.12;
$txid = `node send-tx.js $destination`;
echo "second transaction hash: $txid";

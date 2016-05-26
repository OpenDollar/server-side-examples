balance = `node get-balance.js 0xe176d196224fbf33d779f4a6275dcc31f3071f23`;
print "balance: " + balance;

#send transaction to regular address
destination = '0xe176d196224fbf33d779f4a6275dcc31f3071f23';
amount = 1.12;
txid = `node send-tx.js #{destination} #{amount}`;
print "transaction hash: #{txid}";


#send transaction to ICAP address
destination = 'XE33ODLOPDL000000000';
amount = 1.12;
txid = `node send-tx.js #{destination} #{amount}`;
print "second transaction hash: #{txid}";

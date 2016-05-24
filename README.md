# eToken Server Side Examples

This repository provides an examples of integration with eToken smart contract for ruby and php.

The main problem with integrating ethereum smart contract with anything that is not written in JavaScript 
is that to execute any smart contract function you need web3 library, which was implemented only in javascript.

Unless your applicadtion is written in NodeJS you end up with necessity to run additional nodejs microservice to interact with Ethereum.

For the sake of simplicity this examples use "cgi-bin" approach. It will work properly only when sending no more than 1 transaction per block.

If you anticipate a higher volume of outgoing transactions - please research web3 and implement nodejs microservice for sending transactions.
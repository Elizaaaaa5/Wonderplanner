<?php

// If you have not already done so, please run `composer.phar install`
require __DIR__.'/../../vendor/autoload.php';

//Creating and generating PrivateKey object
$privateKey = new \Bitpay\PrivateKey('/tmp/bitpay.pri');
$privateKey->generate();
$privateKey = \Bitpay\PrivateKey::create('/tmp/bitpay.pri')->generate();

//Creating public key using private key 
$publicKey = new \Bitpay\PublicKey('/tmp/bitpay.pub');
$publicKey->setPrivateKey($privateKey);

// Generate the public key
$publicKey->generate();

//Persisting the keys with the EncryptedFilesystemStorage engine
$storageEngine = new \Bitpay\Storage\EncryptedFilesystemStorage('Wonderplanner2018');
$storageEngine->persist($privateKey);
$storageEngine->persist($publicKey);
?>

 <?php
//Loading keys
$privateKey    = $storageEngine->load('/tmp/bitpay.pri');
$publicKey     = $storageEngine->load('/tmp/bitpay.pub');

//Creating client
$client = new \Bitpay\Client\Client();

//Testnet network
$network = new \Bitpay\Network\Testnet();

$adapter = new \Bitpay\Client\Adapter\CurlAdapter();

//Putting the private, public, network, and adapter all into the client
$client->setPrivateKey($privateKey);
$client->setPublicKey($publicKey);
$client->setNetwork($network);
$client->setAdapter($adapter);

$pairingCode = 'jnF9WiF';

$sin = \Bitpay\SinKey::create()->setPublicKey($publicKey)->generate();

try {
    $token = $client->createToken(
        array(
            'pairingCode' => $pairingCode,
            'label'       => 'aLabel',
            'id'          => (string) $sin,
        )
    );
} catch (\Exception $e) {

    echo "Exception occured: " . $e->getMessage().PHP_EOL;

    echo "Pairing failed. Please attempt to use another pairing code.".PHP_EOL;
    $request  = $client->getRequest();
    $response = $client->getResponse();

    echo (string) $request.PHP_EOL.PHP_EOL.PHP_EOL;
    echo (string) $response.PHP_EOL.PHP_EOL;

    exit(1); // We do not want to continue if something went wrong
}

//Persisting the token
$persistThisValue = $token->getToken();
echo 'Token obtained: '.$persistThisValue.PHP_EOL;
?>

<?

$token = new \Bitpay\Token();
$token->setToken('UpdateThisValue'); //What do I update the value to?
$client->setToken($token);

$invoice = new \Bitpay\Invoice();
$buyer = new \Bitpay\Buyer();
$buyer
    ->setEmail('buyeremail@test.com');

// Add the buyers info to invoice
$invoice->setBuyer($buyer);

$item = new \Bitpay\Item();
$item
    ->setCode('skuNumber')
    ->setDescription('General Description of Item')
    ->setPrice('1.99');
$invoice->setItem($item);

//Currency
$invoice->setCurrency(new \Bitpay\Currency('BTC'));

$invoice
    ->setOrderId('OrderIdFromYourSystem')
    ->setNotificationUrl('https://store.example.com/bitpay/callback');

try {
    echo "Creating invoice at BitPay now.".PHP_EOL;
    $client->createInvoice($invoice);
} catch (\Exception $e) {
    echo "Exception occured: " . $e->getMessage().PHP_EOL;
    $request  = $client->getRequest();
    $response = $client->getResponse();
    echo (string) $request.PHP_EOL.PHP_EOL.PHP_EOL;
    echo (string) $response.PHP_EOL.PHP_EOL;
    exit(1); // We do not want to continue if something went wrong
}

echo 'Invoice "'.$invoice->getId().'" created, see '.$invoice->getUrl().PHP_EOL;
echo "Verbose details.".PHP_EOL;
print_r($invoice);
?>

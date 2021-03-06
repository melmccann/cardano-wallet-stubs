# OpenAPIClient-php
## This is just for me building a Proof of Concept :-D Mel

<p align=\"right\"><img style=\"position: relative; top: -10em; margin-bottom: -12em;\" width=\"20%\" src=\"https://cardanodocs.com/img/cardano.png\"></img></p>


This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2.0.0
- Package version: 0.0.1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new melmccann\cardanowallet\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | 
$state = 'state_example'; // string | An optional filter on the address state.

try {
    $result = $apiInstance->listAddresses($wallet_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->listAddresses: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost:8090/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**listAddresses**](docs/Api/AddressesApi.md#listaddresses) | **GET** /wallets/{walletId}/addresses | List
*ByronAddressesApi* | [**createAddress**](docs/Api/ByronAddressesApi.md#createaddress) | **POST** /byron-wallets/{walletId}/addresses | Create Address
*ByronAddressesApi* | [**importAddress**](docs/Api/ByronAddressesApi.md#importaddress) | **PUT** /byron-wallets/{walletId}/addresses/{addressId} | Import Address
*ByronAddressesApi* | [**listByronAddresses**](docs/Api/ByronAddressesApi.md#listbyronaddresses) | **GET** /byron-wallets/{walletId}/addresses | List
*ByronCoinSelectionsApi* | [**byronSelectCoins**](docs/Api/ByronCoinSelectionsApi.md#byronselectcoins) | **POST** /byron-wallets/{walletId}/coin-selections/random | Random
*ByronMigrationsApi* | [**getByronWalletMigrationInfo**](docs/Api/ByronMigrationsApi.md#getbyronwalletmigrationinfo) | **GET** /byron-wallets/{walletId}/migrations | Calculate Cost
*ByronMigrationsApi* | [**migrateByronWallet**](docs/Api/ByronMigrationsApi.md#migratebyronwallet) | **POST** /byron-wallets/{walletId}/migrations | Migrate
*ByronTransactionsApi* | [**deleteByronTransaction**](docs/Api/ByronTransactionsApi.md#deletebyrontransaction) | **DELETE** /byron-wallets/{walletId}/transactions/{transactionId} | Forget
*ByronTransactionsApi* | [**listByronTransactions**](docs/Api/ByronTransactionsApi.md#listbyrontransactions) | **GET** /byron-wallets/{walletId}/transactions | List
*ByronTransactionsApi* | [**postByronTransaction**](docs/Api/ByronTransactionsApi.md#postbyrontransaction) | **POST** /byron-wallets/{walletId}/transactions | Create
*ByronTransactionsApi* | [**postByronTransactionFee**](docs/Api/ByronTransactionsApi.md#postbyrontransactionfee) | **POST** /byron-wallets/{walletId}/payment-fees | Estimate Fee
*ByronWalletsApi* | [**deleteByronWallet**](docs/Api/ByronWalletsApi.md#deletebyronwallet) | **DELETE** /byron-wallets/{walletId} | Delete
*ByronWalletsApi* | [**getByronUTxOsStatistics**](docs/Api/ByronWalletsApi.md#getbyronutxosstatistics) | **GET** /byron-wallets/{walletId}/statistics/utxos | UTxO Statistics
*ByronWalletsApi* | [**getByronWallet**](docs/Api/ByronWalletsApi.md#getbyronwallet) | **GET** /byron-wallets/{walletId} | Get
*ByronWalletsApi* | [**listByronWallets**](docs/Api/ByronWalletsApi.md#listbyronwallets) | **GET** /byron-wallets | List
*ByronWalletsApi* | [**postByronWallet**](docs/Api/ByronWalletsApi.md#postbyronwallet) | **POST** /byron-wallets | Restore
*ByronWalletsApi* | [**putByronWallet**](docs/Api/ByronWalletsApi.md#putbyronwallet) | **PUT** /byron-wallets/{walletId} | Update Metadata
*ByronWalletsApi* | [**putByronWalletPassphrase**](docs/Api/ByronWalletsApi.md#putbyronwalletpassphrase) | **PUT** /byron-wallets/{walletId}/passphrase | Update Passphrase
*CoinSelectionsApi* | [**selectCoins**](docs/Api/CoinSelectionsApi.md#selectcoins) | **POST** /wallets/{walletId}/coin-selections/random | Random
*MigrationsApi* | [**getShelleyWalletMigrationInfo**](docs/Api/MigrationsApi.md#getshelleywalletmigrationinfo) | **GET** /wallets/{walletId}/migrations | Calculate Cost
*MigrationsApi* | [**migrateShelleyWallet**](docs/Api/MigrationsApi.md#migrateshelleywallet) | **POST** /wallets/{walletId}/migrations | Migrate
*NetworkApi* | [**getNetworkClock**](docs/Api/NetworkApi.md#getnetworkclock) | **GET** /network/clock | Clock
*NetworkApi* | [**getNetworkInformation**](docs/Api/NetworkApi.md#getnetworkinformation) | **GET** /network/information | Information
*NetworkApi* | [**getNetworkParameters**](docs/Api/NetworkApi.md#getnetworkparameters) | **GET** /network/parameters | Parameters
*ProxyApi* | [**postExternalTransaction**](docs/Api/ProxyApi.md#postexternaltransaction) | **POST** /proxy/transactions | Submit External Transaction
*StakePoolsApi* | [**getDelegationFee**](docs/Api/StakePoolsApi.md#getdelegationfee) | **GET** /wallets/{walletId}/delegation-fees | Estimate Fee
*StakePoolsApi* | [**joinStakePool**](docs/Api/StakePoolsApi.md#joinstakepool) | **PUT** /stake-pools/{stakePoolId}/wallets/{walletId} | Join
*StakePoolsApi* | [**listStakePools**](docs/Api/StakePoolsApi.md#liststakepools) | **GET** /wallets/{walletId}/stake-pools | List
*StakePoolsApi* | [**quitStakePool**](docs/Api/StakePoolsApi.md#quitstakepool) | **DELETE** /stake-pools/*/wallets/{walletId} | Quit
*TransactionsApi* | [**deleteTransaction**](docs/Api/TransactionsApi.md#deletetransaction) | **DELETE** /wallets/{walletId}/transactions/{transactionId} | Forget
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /wallets/{walletId}/transactions | List
*TransactionsApi* | [**postTransaction**](docs/Api/TransactionsApi.md#posttransaction) | **POST** /wallets/{walletId}/transactions | Create
*TransactionsApi* | [**postTransactionFee**](docs/Api/TransactionsApi.md#posttransactionfee) | **POST** /wallets/{walletId}/payment-fees | Estimate Fee
*WalletsApi* | [**deleteWallet**](docs/Api/WalletsApi.md#deletewallet) | **DELETE** /wallets/{walletId} | Delete
*WalletsApi* | [**getUTxOsStatistics**](docs/Api/WalletsApi.md#getutxosstatistics) | **GET** /wallets/{walletId}/statistics/utxos | UTxO Statistics
*WalletsApi* | [**getWallet**](docs/Api/WalletsApi.md#getwallet) | **GET** /wallets/{walletId} | Get
*WalletsApi* | [**listWallets**](docs/Api/WalletsApi.md#listwallets) | **GET** /wallets | List
*WalletsApi* | [**postWallet**](docs/Api/WalletsApi.md#postwallet) | **POST** /wallets | Create / Restore
*WalletsApi* | [**putWallet**](docs/Api/WalletsApi.md#putwallet) | **PUT** /wallets/{walletId} | Update Metadata
*WalletsApi* | [**putWalletPassphrase**](docs/Api/WalletsApi.md#putwalletpassphrase) | **PUT** /wallets/{walletId}/passphrase | Update Passphrase


## Documentation For Models

 - [ApiAccountPostData](docs/Model/ApiAccountPostData.md)
 - [ApiAddress](docs/Model/ApiAddress.md)
 - [ApiByronWallet](docs/Model/ApiByronWallet.md)
 - [ApiByronWalletIcarusPostData](docs/Model/ApiByronWalletIcarusPostData.md)
 - [ApiByronWalletLedgerPostData](docs/Model/ApiByronWalletLedgerPostData.md)
 - [ApiByronWalletMigrationPostData](docs/Model/ApiByronWalletMigrationPostData.md)
 - [ApiByronWalletPutPassphraseData](docs/Model/ApiByronWalletPutPassphraseData.md)
 - [ApiByronWalletRandomPostData](docs/Model/ApiByronWalletRandomPostData.md)
 - [ApiByronWalletRandomXPrvPostData](docs/Model/ApiByronWalletRandomXPrvPostData.md)
 - [ApiByronWalletTrezorPostData](docs/Model/ApiByronWalletTrezorPostData.md)
 - [ApiCoinSelection](docs/Model/ApiCoinSelection.md)
 - [ApiEpochInfo](docs/Model/ApiEpochInfo.md)
 - [ApiFee](docs/Model/ApiFee.md)
 - [ApiJormungandrStakePool](docs/Model/ApiJormungandrStakePool.md)
 - [ApiJormungandrStakePoolMetrics](docs/Model/ApiJormungandrStakePoolMetrics.md)
 - [ApiNetworkClock](docs/Model/ApiNetworkClock.md)
 - [ApiNetworkInformation](docs/Model/ApiNetworkInformation.md)
 - [ApiNetworkParameters](docs/Model/ApiNetworkParameters.md)
 - [ApiNetworkTip](docs/Model/ApiNetworkTip.md)
 - [ApiPostRandomAddressData](docs/Model/ApiPostRandomAddressData.md)
 - [ApiPostTransactionData](docs/Model/ApiPostTransactionData.md)
 - [ApiPostTransactionFeeData](docs/Model/ApiPostTransactionFeeData.md)
 - [ApiSelectCoinsData](docs/Model/ApiSelectCoinsData.md)
 - [ApiShelleyWalletMigrationPostData](docs/Model/ApiShelleyWalletMigrationPostData.md)
 - [ApiStakePool](docs/Model/ApiStakePool.md)
 - [ApiStakePoolCost](docs/Model/ApiStakePoolCost.md)
 - [ApiStakePoolMargin](docs/Model/ApiStakePoolMargin.md)
 - [ApiStakePoolMetadata](docs/Model/ApiStakePoolMetadata.md)
 - [ApiStakePoolMetrics](docs/Model/ApiStakePoolMetrics.md)
 - [ApiStakePoolMetricsNonMyopicMemberRewards](docs/Model/ApiStakePoolMetricsNonMyopicMemberRewards.md)
 - [ApiStakePoolMetricsProducedBlocks](docs/Model/ApiStakePoolMetricsProducedBlocks.md)
 - [ApiStakePoolMetricsRelativeStake](docs/Model/ApiStakePoolMetricsRelativeStake.md)
 - [ApiTransaction](docs/Model/ApiTransaction.md)
 - [ApiTxId](docs/Model/ApiTxId.md)
 - [ApiWallet](docs/Model/ApiWallet.md)
 - [ApiWalletDelegation](docs/Model/ApiWalletDelegation.md)
 - [ApiWalletDelegationNext](docs/Model/ApiWalletDelegationNext.md)
 - [ApiWalletMigrationInfo](docs/Model/ApiWalletMigrationInfo.md)
 - [ApiWalletOrAccountPostData](docs/Model/ApiWalletOrAccountPostData.md)
 - [ApiWalletPassphrase](docs/Model/ApiWalletPassphrase.md)
 - [ApiWalletPostData](docs/Model/ApiWalletPostData.md)
 - [ApiWalletPutData](docs/Model/ApiWalletPutData.md)
 - [ApiWalletPutPassphraseData](docs/Model/ApiWalletPutPassphraseData.md)
 - [ApiWalletUTxOsStatistics](docs/Model/ApiWalletUTxOsStatistics.md)
 - [ByronWalletsBalance](docs/Model/ByronWalletsBalance.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineObject1](docs/Model/InlineObject1.md)
 - [InlineObject10](docs/Model/InlineObject10.md)
 - [InlineObject11](docs/Model/InlineObject11.md)
 - [InlineObject12](docs/Model/InlineObject12.md)
 - [InlineObject13](docs/Model/InlineObject13.md)
 - [InlineObject14](docs/Model/InlineObject14.md)
 - [InlineObject2](docs/Model/InlineObject2.md)
 - [InlineObject3](docs/Model/InlineObject3.md)
 - [InlineObject4](docs/Model/InlineObject4.md)
 - [InlineObject5](docs/Model/InlineObject5.md)
 - [InlineObject6](docs/Model/InlineObject6.md)
 - [InlineObject7](docs/Model/InlineObject7.md)
 - [InlineObject8](docs/Model/InlineObject8.md)
 - [InlineObject9](docs/Model/InlineObject9.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2001Total](docs/Model/InlineResponse2001Total.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Inputs](docs/Model/InlineResponse2004Inputs.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007NetworkTip](docs/Model/InlineResponse2007NetworkTip.md)
 - [InlineResponse2007NodeTip](docs/Model/InlineResponse2007NodeTip.md)
 - [InlineResponse2007SyncProgress](docs/Model/InlineResponse2007SyncProgress.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Offset](docs/Model/InlineResponse2008Offset.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009ActiveSlotCoefficient](docs/Model/InlineResponse2009ActiveSlotCoefficient.md)
 - [InlineResponse2009EpochLength](docs/Model/InlineResponse2009EpochLength.md)
 - [InlineResponse2009SlotLength](docs/Model/InlineResponse2009SlotLength.md)
 - [InlineResponse202](docs/Model/InlineResponse202.md)
 - [InlineResponse2021](docs/Model/InlineResponse2021.md)
 - [InlineResponse405](docs/Model/InlineResponse405.md)
 - [Shelley](docs/Model/Shelley.md)
 - [ShelleyFromXpub](docs/Model/ShelleyFromXpub.md)
 - [WalletsBalance](docs/Model/WalletsBalance.md)
 - [WalletsBalanceAvailable](docs/Model/WalletsBalanceAvailable.md)
 - [WalletsBalanceReward](docs/Model/WalletsBalanceReward.md)
 - [WalletsBalanceTotal](docs/Model/WalletsBalanceTotal.md)
 - [WalletsDelegation](docs/Model/WalletsDelegation.md)
 - [WalletsDelegationActive](docs/Model/WalletsDelegationActive.md)
 - [WalletsDelegationChangesAt](docs/Model/WalletsDelegationChangesAt.md)
 - [WalletsDelegationNext](docs/Model/WalletsDelegationNext.md)
 - [WalletsPassphrase](docs/Model/WalletsPassphrase.md)
 - [WalletsState](docs/Model/WalletsState.md)
 - [WalletsStateProgress](docs/Model/WalletsStateProgress.md)
 - [WalletsTip](docs/Model/WalletsTip.md)
 - [WalletsTipHeight](docs/Model/WalletsTipHeight.md)
 - [WalletsWalletIdTransactionsDepth](docs/Model/WalletsWalletIdTransactionsDepth.md)
 - [WalletsWalletIdTransactionsInputs](docs/Model/WalletsWalletIdTransactionsInputs.md)
 - [WalletsWalletIdTransactionsInsertedAt](docs/Model/WalletsWalletIdTransactionsInsertedAt.md)
 - [WalletsWalletIdTransactionsOutputs](docs/Model/WalletsWalletIdTransactionsOutputs.md)
 - [WalletsWalletIdTransactionsPendingSince](docs/Model/WalletsWalletIdTransactionsPendingSince.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author




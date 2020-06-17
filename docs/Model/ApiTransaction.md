# # ApiTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for this transaction | 
**amount** | [**\melmccann\cardanowallet\Model\InlineResponse2001Total**](InlineResponse2001Total.md) |  | 
**inserted_at** | [**\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInsertedAt**](WalletsWalletIdTransactionsInsertedAt.md) |  | [optional] 
**pending_since** | [**\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsPendingSince**](WalletsWalletIdTransactionsPendingSince.md) |  | [optional] 
**depth** | [**\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsDepth**](WalletsWalletIdTransactionsDepth.md) |  | [optional] 
**direction** | **string** |  | 
**inputs** | [**\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInputs[]**](WalletsWalletIdTransactionsInputs.md) | A list of transaction inputs | 
**outputs** | [**\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsOutputs[]**](WalletsWalletIdTransactionsOutputs.md) | A list of target outputs | 
**status** | **string** | Current transaction status.    &#x60;&#x60;&#x60;          *---------*          |         |   -------&gt; PENDING &lt;----------------*          |         |                |          *---------*            (rollback)               |                     |          (in ledger)          *-----------*               |               |           |               *---------------&gt; IN_LEDGER |                               |           |                               *-----------*   &#x60;&#x60;&#x60; | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



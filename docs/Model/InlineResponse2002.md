# # InlineResponse2002

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for this transaction | 
**amount** | [**\OpenAPI\Client\Model\InlineResponse2001Total**](InlineResponse2001Total.md) |  | 
**inserted_at** | [**\OpenAPI\Client\Model\WalletsWalletIdTransactionsInsertedAt**](WalletsWalletIdTransactionsInsertedAt.md) |  | [optional] 
**pending_since** | [**\OpenAPI\Client\Model\WalletsWalletIdTransactionsPendingSince**](WalletsWalletIdTransactionsPendingSince.md) |  | [optional] 
**depth** | [**\OpenAPI\Client\Model\WalletsWalletIdTransactionsDepth**](WalletsWalletIdTransactionsDepth.md) |  | [optional] 
**direction** | **string** |  | 
**inputs** | [**\OpenAPI\Client\Model\WalletsWalletIdTransactionsInputs[]**](WalletsWalletIdTransactionsInputs.md) | A list of transaction inputs | 
**outputs** | [**\OpenAPI\Client\Model\WalletsWalletIdTransactionsOutputs[]**](WalletsWalletIdTransactionsOutputs.md) | A list of target outputs | 
**status** | **string** | Current transaction status.    &#x60;&#x60;&#x60;          *---------*          |         |   -------&gt; PENDING &lt;----------------*          |         |                |          *---------*            (rollback)               |                     |          (in ledger)          *-----------*               |               |           |               *---------------&gt; IN_LEDGER |                               |           |                               *-----------*   &#x60;&#x60;&#x60; | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



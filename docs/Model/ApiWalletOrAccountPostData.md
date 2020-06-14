# # ApiWalletOrAccountPostData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**mnemonic_sentence** | **string[]** | A list of mnemonic words | 
**mnemonic_second_factor** | **string[]** | An optional passphrase used to encrypt the mnemonic sentence. | [optional] 
**passphrase** | **string** | A master passphrase to lock and protect the wallet for sensitive operation (e.g. sending funds) | 
**address_pool_gap** | **int** | Number of consecutive unused addresses allowed | [optional] [default to 20]
**account_public_key** | **string** | An extended account public key (public key + chain code) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



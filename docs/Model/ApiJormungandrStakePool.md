# # ApiJormungandrStakePool

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier for the pool. | 
**metrics** | [**\OpenAPI\Client\Model\ApiJormungandrStakePoolMetrics**](ApiJormungandrStakePoolMetrics.md) |  | 
**apparent_performance** | **float** | Apparent performance of the stake pool over past epochs. This indicator is computed using data available to the server. In particular, the server can&#39;t reliably know the stake distribution of past epochs without being during those epochs. The performance are therefore an average measure that is more accurate for servers that are online often.  The performance is a float with double-precision which is _typically_ within &#x60;0&#x60; and &#x60;1&#x60;:    - &#x60;0&#x60; means that a pool is not performing well.   - &#x60;1&#x60; means that a pool is performing _as expected_.   - above &#x60;1&#x60; means the pool is performing beyond expectations.  Pools that are lucky enough to win most of their slots early in the epoch will tend to look like they&#39;re over-performing for a while. Having a wallet regularly connected to the network would harmonize the performance and give better results. | 
**cost** | [**\OpenAPI\Client\Model\ApiStakePoolCost**](ApiStakePoolCost.md) |  | 
**margin** | [**\OpenAPI\Client\Model\ApiStakePoolMargin**](ApiStakePoolMargin.md) |  | 
**metadata** | [**\OpenAPI\Client\Model\ApiStakePoolMetadata**](ApiStakePoolMetadata.md) |  | [optional] 
**saturation** | **float** | Saturation-level of the pool based on the desired number of pools aimed by the network. A value above &#x60;1&#x60; indicates that the pool is saturated. | 
**desirability** | **float** | How desirable / attractive a pool is. To determine a pool&#39;s _rank_, we order pools by decreasing desirability. The most desirable pool gets rank 1, the second most desirable pool gets rank 2 and so on. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



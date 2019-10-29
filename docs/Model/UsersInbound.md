# UsersInbound

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Dedicated number ID. | 
**displayTimeFormat** | **string** | Format for representation of time. | [optional] 
**phone** | **string** | Dedicated phone number. | [optional] 
**user** | [**\TextMagic\Models\User**](User.md) |  | 
**purchasedAt** | [**\DateTime**](\DateTime.md) | Time when the dedicated number was purchased. | 
**expireAt** | [**\DateTime**](\DateTime.md) | Dedicated number subscription expiration time. | 
**status** | **string** | Number status: *   **U** for Unused. No messages have been sent from (or received to) this number; *   **A** for Active. | 
**country** | [**\TextMagic\Models\Country**](Country.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



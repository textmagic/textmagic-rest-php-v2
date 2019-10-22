# ModelList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | List ID. | 
**name** | **string** | List name. | 
**description** | **string** | Description of the list. | 
**favorited** | **bool** | Is the List favourite? [Custom fields list](http://docs.textmagictesting.com/#operation/getFavourites). | 
**membersCount** | **int** | List members count. | 
**user** | [**\TextMagic\Models\User**](User.md) |  | 
**service** | **bool** | Internal service field. | 
**shared** | **bool** | Is the list **shared** among all sub-accounts? | 
**avatar** | [**\TextMagic\Models\ListImage**](ListImage.md) |  | 
**isDefault** | **bool** | Indicates that List is used as a default. All new contacts that added via Web-app will be added in this List by default. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



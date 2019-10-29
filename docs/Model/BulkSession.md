# BulkSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Bulk Session ID. | 
**status** | **string** | * **n** – bulk session is just created * **w** - work in progress * **f** - failed * **c** - completed with success * **s** - suspended | 
**itemsProcessed** | **int** | Amount of messages already processed. | 
**itemsTotal** | **int** | Total amount of messages to be processed. | 
**createdAt** | [**\DateTime**](\DateTime.md) | Creation date and time of a Bulk Session. | 
**session** | [**\TextMagic\Models\MessageSession**](MessageSession.md) |  | 
**text** | **string** | Message text of a Bulk Session. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



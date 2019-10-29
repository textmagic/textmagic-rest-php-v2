# UserStatement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | User statement ID. | 
**userId** | **int** | User ID. | 
**date** | [**\DateTime**](\DateTime.md) | User statement date. | 
**balance** | **double** |  | 
**delta** | **float** | Balance change amount. | 
**type** | **string** | Type of statement (what you have been charged for): *   **sms** - for sending SMS *   **number** - for renewing a dedicated number; *   **schedule** - for scheduling text messages; *   **topup** - for adding credits to your account. | 
**value** | **string** | Value differs by **type**: *   for **sms**, it is the sent messages amount; *   for **number**, it is a dedicated phone number; *   for **schedule**, it is a scheduled messages amount; *   for **top-up**, it is an invoice ID. | 
**comment** | **string** | Optional comment. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



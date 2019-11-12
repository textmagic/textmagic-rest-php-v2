# SendMessageResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Message ID. | 
**href** | **string** | URI of the message session. | 
**type** | **string** | Message response type: * **message** – when the message is sent to a single recipient. * **session** – when the message is sent is to multiple recipients. * **schedule** - when the message is scheduled for sending. * **bulk** - when the message is sent to multiple recipients and the number of recipients requires asynchronous processing See [Sending more than 1,000 messages in one session](https://docs.textmagic.com/#section/Tutorials/Sending-more-than-1000-messages-in-one-session). | 
**sessionId** | **int** | Message session ID. | 
**bulkId** | **int** | Bulk Session ID. See [Sending more than 1,000 messages in one session](https://docs.textmagic.com/#section/Tutorials/Sending-more-than-1000-messages-in-one-session). | 
**messageId** | **int** | Message ID. | 
**scheduleId** | **int** | Message Schedule ID. | 
**chatId** | **int** | Message Chat ID. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



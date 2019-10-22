# SendMessageResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Message ID. | 
**href** | **string** | URI of message session. | 
**type** | **string** | Message response type: * **message** when message sent to a single recipient * **session** when message sent to multiple recipients * **schedule** when message has been scheduled for sending * **bulk** when message sent to multiple recipient and the number of recipients requires asynchronous processiong See [Sending more than 1,000 messages in one session](http://docs.textmagictesting.com/#section/Tutorials/Sending-more-than-1000-messages-in-one-session). | 
**sessionId** | **int** | Message session ID. | 
**bulkId** | **int** | Bulk Session ID. See [Sending more than 1,000 messages in one session](http://docs.textmagictesting.com/#section/Tutorials/Sending-more-than-1000-messages-in-one-session). | 
**messageId** | **int** | Message ID. | 
**scheduleId** | **int** | Message Schedule ID. | 
**chatId** | **int** | Message Chat ID. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



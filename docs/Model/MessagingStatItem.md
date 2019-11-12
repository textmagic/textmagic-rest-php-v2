# MessagingStatItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**replyRate** | **float** | The number of incoming messages divided by the number of total messages. | 
**date** | [**\DateTime**](\DateTime.md) | Time interval start: empty if the **by** parameter was set to **off**. | 
**deliveryRate** | **float** | Message delivery rate:the number of delivered messages divided by the number of total messages. | 
**costs** | **float** | Cost for sent messages during this period. The costs are in the [Account](https://docs.textmagic.com/#tag/User) currency. | 
**messagesReceived** | **int** | Total received messages count. | 
**messagesSentDelivered** | **int** | Delivered messages count. As messages are retried for up to 48 hours, this value could change. | 
**messagesSentAccepted** | **int** | Messages accepted for delivery (in queue) but not yet delivered. | 
**messagesSentBuffered** | **int** | Messages buffered by endpoint cell phone operators. | 
**messagesSentFailed** | **int** | Messages that have failed for whatever reason, e.g. the destination phone was switched off for 48 hours or the recipient&#39;s phone account is out of service. | 
**messagesSentRejected** | **int** | Messages that were rejected: invalid Sender ID used (e.g. you cannot use the Sender ID or your own mobile number when sending to the United States and Canada.) | 
**messagesSentParts** | **int** | Total sent messages **parts** count. Note that this is not equal to the sent messages count, because one message could consist of 1 to 6 parts and users are charged per part, not per message. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



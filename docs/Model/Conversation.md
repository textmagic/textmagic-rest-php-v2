# Conversation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**direction** | **string** | Message type: inbound or outbound. | 
**sender** | **string** | Sender phone number. | 
**messageTime** | [**\DateTime**](\DateTime.md) | Time when  the message arrived at TextMagic. | 
**text** | **string** | Message text. | 
**receiver** | **string** | Receiver&#39;s phone number. | 
**status** | **string** | Message status (for chats outbound only). See [message delivery statuses](https://docs.textmagic.com/#section/Delivery-status-codes) for details. | 
**firstName** | **string** | Contact first name. | 
**lastName** | **string** | Contact last name. | 
**sessionId** | **int** | Session ID of a message. See [message sessions](https://docs.textmagic.com/#tag/Outbound-Message-Sessions) for details. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



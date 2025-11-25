# # Conversation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**direction** | **string** | Message type: inbound or outbound. |
**sender** | **string** | Sender phone number. |
**messageTime** | **\DateTime** | Time when  the message arrived at Textmagic. |
**text** | **string** | Message text. |
**receiver** | **string** | Receiver&#39;s phone number. |
**status** | **string** | Message status (for chats outbound only). See [message delivery statuses](https://docs.textmagic.com/#section/Delivery-status-codes) for details. |
**firstName** | **string** | Contact first name. |
**lastName** | **string** | Contact last name. |
**sessionId** | **int** | Session ID of a message. See [message sessions](https://docs.textmagic.com/#tag/Outbound-Message-Sessions) for details. |
**initiatorId** | **int** | Initiator ID of a message. See [message sessions](https://docs.textmagic.com/#tag/Outbound-Message-Sessions) for details. | [optional]
**messageFileId** | **int** | Message file id. | [optional]
**type** | **string** | Message type. | [optional]
**chatType** | **string** | Chat type. | [optional]
**chatId** | **int** | Chat id. | [optional]
**isEdited** | **bool** |  | [optional]
**errorCode** | **string** | Error code. | [optional]
**files** | [**\TextMagic\Models\File[]**](File.md) |  | [optional]
**payload** | [**\TextMagic\Models\MessagePayload**](MessagePayload.md) |  | [optional]
**avatar** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

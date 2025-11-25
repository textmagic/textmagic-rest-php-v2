# # Chat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Chat ID. |
**originalId** | **int** |  |
**phone** | **string** | Chat partner&#39;s phone number. |
**contact** | [**\TextMagic\Models\Contact**](Contact.md) |  |
**unsubscribedContactId** | **int** | If this field has a value, it means that the chat phone number has been unsubscribed from you and this value is an ID of an Unsubscribed contact entity. See [Get all unsubscribed contacts](https://docs.textmagic.com/#operation/getUnsubscribers). |
**unread** | **int** | Total unread incoming messages. |
**updatedAt** | **\DateTime** | Time when the last incoming message arrived at this chat. |
**status** | **string** | Chat status:   * **a** - Active;   * **c** - Closed;   * **d** - Deleted. |
**mute** | **int** | Indicates when the chat is muted. |
**lastMessage** | **string** | The last message content of a chat. |
**direction** | **string** | Last message type: * **ci** - incoming call; * **co** - outgoing call; * **i** - incoming message; * **o** - outgoing message. |
**replyOptionsType** | **string** | Used for chats prices. |
**from** | **string** | If filled, the value will be used as a sender number for all outgoing messages of a chat. |
**mutedUntil** | **\DateTime** | Date and time until the chat will be muted. |
**timeLeftMute** | **int** | Time left untill the chat will be unmuted (seconds). |
**country** | [**\TextMagic\Models\Country**](Country.md) |  |
**pinned** | **bool** | Indicates when the chat is pinned. |
**type** | **string** | Chat type. |
**smsPrice** | **float** |  |
**mmsPrice** | **float** |  |
**tags** | [**\TextMagic\Models\Tag[]**](Tag.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

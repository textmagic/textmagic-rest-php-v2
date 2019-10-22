# Chat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Chat ID. | 
**originalId** | **int** |  | 
**phone** | **string** | Chat partner phone number. | 
**contact** | [**\TextMagic\Models\Contact**](Contact.md) |  | 
**unsubscribedContactId** | **int** | If this field has a value then it means that chat phone number has been unsubscribed from you and this value is a ID of a Unsubscribed contact entity. See [Get all unsubscribed contacts](http://docs.textmagictesting.com/#operation/getUnsubscribers). | 
**unread** | **int** | Total unread incoming messages. | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Time when last incoming message arrived at this chat. | 
**status** | **string** | Chat status:   * **a** - Active   * **c** - Closed   * **d** - Deleted | 
**mute** | **int** | Indicates when chat is muted. | 
**lastMessage** | **string** | The last message content of a chat. | 
**direction** | **string** | Last message type: * **ci** - incoming call * **co** - outgoing call * **i** - incoming message * **o** - outgoing message | 
**from** | **string** | If filled then value will be used as a sender number for all outgoing messages of a chat. | 
**mutedUntil** | [**\DateTime**](\DateTime.md) | Date and time until chat will be mutted. | 
**timeLeftMute** | **int** | Time left till chat will be unmutted (seconds). | 
**country** | [**\TextMagic\Models\Country**](Country.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



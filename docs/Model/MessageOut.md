# MessageOut

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Message ID. | 
**sender** | **string** | Message sender (phone number or alphanumeric Sender ID). | [optional] 
**receiver** | **string** | Recipient&#x60;s phone number. | [optional] 
**text** | **string** |  | 
**status** | **string** | Delivery status of the message. See [message delivery statuses](https://docs.textmagic.com/#section/Delivery-status-codes) for details. | 
**contactId** | **int** | Recipient contact ID. | 
**sessionId** | **int** | Message Session ID of a message. | 
**messageTime** | [**\DateTime**](\DateTime.md) | Sending time. | 
**avatar** | **string** |  | 
**deleted** | **bool** | Indicates that the message has been deleted. | [optional] 
**charset** | **string** | Message charset. Could be: *   **ISO-8859-1** for plaintext SMS; *   **UTF-16BE** for Unicode SMS. | 
**charsetLabel** | **string** | Human-readable message charset label. Could be: *   **ISO-8859-1** for plaintext SMS; *   **UTF-16BE** for Unicode SMS; *   **Voice** for voice services (Text-to-Speech or Voice Broadcast) messages. | 
**firstName** | **string** | Contact first name. Could be substituted from your [Contacts](https://docs.textmagic.com/#tag/Contacts) (even if you submitted the phone number instead of the contact ID). | 
**lastName** | **string** | Contact last name. | 
**country** | **string** | The 2-letter ISO country code of the recipient&#39;s phone number. | 
**phone** | **string** | Receipent&#x60;s phone number. | [optional] 
**price** | **float** | Message price. | [optional] 
**partsCount** | **int** | Message parts (multiples of 160 characters) count. | 
**fromEmail** | **string** | The user email which this message came from. For Email2SMS and Distribution Lists the messages, it is an original email address - in other cases, it is an account email address. | [optional] 
**fromNumber** | **string** | The Phone number used to send the SMS. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



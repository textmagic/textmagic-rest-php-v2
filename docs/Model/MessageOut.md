# MessageOut

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Message ID. | 
**sender** | **string** | Message sender (phone number or alphanumeric Sender ID). | [optional] 
**receiver** | **string** | Recipient phone number. | [optional] 
**text** | **string** |  | 
**status** | **string** | Delivery status of the message. See [message delivery statuses](http://docs.textmagictesting.com/#section/Delivery-status-codes) for details. | 
**contactId** | **int** | Recipient contact ID. | 
**sessionId** | **int** | Message Session ID of a Message. | 
**messageTime** | [**\DateTime**](\DateTime.md) | Sending time. | 
**avatar** | **string** |  | 
**deleted** | **bool** | Indicates that message has been deleted. | [optional] 
**charset** | **string** | Message charset. Could be: *   **ISO-8859-1** for plaintext SMS *   **UTF-16BE** for Unicode SMS | 
**charsetLabel** | **string** | Human-readable message charset label. Could be: *   **ISO-8859-1** for plaintext SMS *   **UTF-16BE** for Unicode SMS *   **Voice** for voice services (Text-to-Speech or Voice Broadcast) messages | 
**firstName** | **string** | Contact first name. Could be substituted from your [Contacts](http://docs.textmagictesting.com/#tag/Contacts) (even if you submitted phone number instead of contact ID). | 
**lastName** | **string** | Contact last name. | 
**country** | **string** | Two-letter ISO country code of the recipient phone number. | 
**phone** | **string** | Receipent phone number. | [optional] 
**price** | **float** | Message price. | [optional] 
**partsCount** | **int** | Message parts (multiples of 160 characters) count. | 
**fromEmail** | **string** | User email which this message came from. For Email2SMS and Distribution Lists messages it will be an original email address, in other cases it is an account email address. | [optional] 
**fromNumber** | **string** | Phone number which is used to send SMS. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



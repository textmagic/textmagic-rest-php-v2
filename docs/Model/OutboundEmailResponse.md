# OutboundEmailResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Outbound email ID. | 
**sendTime** | [**\DateTime**](\DateTime.md) | Email send timestamp. | 
**fromName** | **string** | Sender name. | [optional] 
**fromEmail** | **string** | Sender email address. | 
**replyToEmail** | **string** | Reply-to email address. | 
**recipientFullName** | **string** | Recipient&#39;s full name. | [optional] 
**recipientEmail** | **string** | Recipient&#39;s email address. | [optional] 
**emailSubject** | **string** | Email subject line. | 
**emailContent** | **string** | HTML email content. | 
**source** | **string** | Source of the outbound email. | 
**status** | **string** | Current email status. | 
**cost** | **float** | Cost of sending this email. | 
**statusReason** | **string** | Detailed status reason. | [optional] 
**contactId** | **int** | Associated contact ID. | [optional] 
**initiatorId** | **int** | ID of user who initiated the email. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



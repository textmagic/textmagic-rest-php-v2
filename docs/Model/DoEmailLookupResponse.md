# DoEmailLookupResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | The email address passed to the call. | 
**status** | **string** | The email is &#x60;valid&#x60; or &#x60;invalid&#x60;. | 
**deliverability** | **string** | The delivery status of the email address is&#x60;deliverable&#x60;, &#x60;undeliverable&#x60;. or &#x60;unknown&#x60;. | 
**reason** | **string** | The reason why the checked email is invalid/undeliverable. | 
**risk** | **string** | The risk score of the email is&#x60;high&#x60;, &#x60;medium&#x60;, &#x60;low&#x60; or &#x60;null&#x60;. | 
**addressType** | **string** | The email address type (domain) is &#x60;free&#x60; or &#x60;corporate&#x60;. | 
**isDisposableAddress** | **bool** | This is &#x60;true&#x60; if the domain is in the list of disposable email addresses; otherwise, it returns as &#x60;false&#x60;. | 
**suggestion** | **string** | Null if nothing is suggested; however, if there is a potential typo in the email address, the closest suggestion is provided. | 
**emailRole** | **string** | Checks the mailbox part of the email to see whether it matches a specific role type (‘admin’, ‘sales’, ‘webmaster’). | 
**localPart** | **string** | The local part of the email address. | 
**domainPart** | **string** | The domain part of the email address. | 
**exchange** | **string** | Email exchange server domain name (MX record value). | 
**preference** | **int** | MX record preference. | 
**isInWhiteList** | **bool** | &#x60;true&#x60; if the email address exists in the TextMagic whitelist. | 
**isInBlackList** | **bool** | &#x60;true&#x60; if the email address exists in the TextMagic blacklist. | 
**hasMx** | **bool** | &#x60;true&#x60; if the email address domain has an MX record. | 
**hasAa** | **bool** | &#x60;true&#x60; if the email address domain has an A record (IPv4). | 
**hasAaaa** | **bool** | &#x60;true&#x60; if the email address domain has an AAAA record (IPv6). | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



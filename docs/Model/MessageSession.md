# MessageSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Session ID. | 
**startTime** | **string** | Session creation time. | 
**text** | **string** | Session text. If a template was used for the session text (see [Messages: Send](https://docs.textmagic.com/#tag/Outbound-Messages) for details), it may contain template tags. | 
**source** | **string** | *   **O** – for TextMagic Online; *   **A** – for API; *   **M** – for TextMagic Messenger; *   **E** – for [Email to SMS](https://docs.textmagic.com/#tag/Send-Email-to-SMS); *   **X** – for [Distribution Lists](https://docs.textmagic.com/#tag/Distribution-Lists). | 
**referenceId** | **string** | Custom reference ID (see [Messages: Send](https://docs.textmagic.com/#tag/Send-Email-to-SMS) for details). | 
**price** | **float** | Session cost (in account currency). | 
**numbersCount** | **int** | Session recipient count. | 
**destination** | **string** | Destination type of a Message Session: * **t** – text SMS; * **s** – text-to-speech; * **v** – voice broadcast. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



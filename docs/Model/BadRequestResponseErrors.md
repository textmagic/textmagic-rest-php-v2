# # BadRequestResponseErrors

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**common** | **string[]** | Array of messages with errors related to the entire request. For example, you did not specify either the **text** or the **templateId** when [sending the message](https://docs.textmagic.com/#tag/Outbound-Messages). | [optional]
**fields** | **object** | Associative array. The keys are the POST/PUT parameter names and the values are arrays with error messages for these parameters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

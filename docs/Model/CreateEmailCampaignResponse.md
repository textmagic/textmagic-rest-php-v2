# # CreateEmailCampaignResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique campaign ID. |
**status** | **string** | Current campaign status. |
**emailSenderId** | **int** | Email sender ID used for this campaign. | [optional]
**startAt** | **\DateTime** | Campaign start timestamp. |
**createdBy** | [**\TextMagic\Models\UserPersonalInfo**](UserPersonalInfo.md) |  |
**fromName** | **string** | Sender name displayed in recipient&#39;s inbox. | [optional]
**fromEmail** | **string** | Sender email address. |
**replyToEmail** | **string** | Reply-to email address. |
**subject** | **string** | Email subject line. |
**html** | **string** | HTML email content. |
**cost** | **float** | Total campaign cost. |
**totals** | [**\TextMagic\Models\EmailCampaignStatisticTotals**](EmailCampaignStatisticTotals.md) |  |
**outboundEmail** | [**\TextMagic\Models\OutboundEmailResponse**](OutboundEmailResponse.md) |  | [optional]
**failedReason** | **string** | Reason for campaign failure if applicable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ScheduledEmailCampaignDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique scheduled campaign ID. |
**status** | **string** | Current scheduled campaign status. |
**emailSenderId** | **int** | Email sender ID used for this campaign. | [optional]
**startAt** | **\DateTime** | Scheduled start timestamp (UTC). |
**endAt** | **\DateTime** | End timestamp for recurring campaigns (UTC). | [optional]
**nextSendAt** | **\DateTime** | Next scheduled send timestamp (UTC). | [optional]
**createdBy** | [**\TextMagic\Models\UserPersonalInfo**](UserPersonalInfo.md) |  |
**createdAt** | **\DateTime** | Campaign creation timestamp. |
**updatedAt** | **\DateTime** | Last update timestamp. |
**type** | **string** | Campaign recurrence type. |
**fromName** | **string** | Sender name displayed in recipient&#39;s inbox. | [optional]
**fromEmail** | **string** | Sender email address. |
**replyToEmail** | **string** | Reply-to email address. |
**subject** | **string** | Email subject line. |
**html** | **string** | HTML email content. |
**recipientsCount** | **int** | Number of recipients for this campaign. |
**sendingTimezone** | **string** | Timezone for sending the campaign. |
**rrule** | **string** | RFC 5545 recurrence rule for recurring campaigns. | [optional]
**occurrenceSummary** | **string** | Human-readable schedule description. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

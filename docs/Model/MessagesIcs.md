# # MessagesIcs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Schedule ID. |
**nextSend** | **\DateTime** | The next send date in [ISO 8601](https://en.wikipedia.org/?title&#x3D;ISO_8601) format. |
**rrule** | **string** | [iCal RRULE](http://www.kanzaki.com/docs/ical/rrule.html) string. |
**session** | [**\TextMagic\Models\MessageSession**](MessageSession.md) |  |
**lastSent** | **\DateTime** | The date and time when the last message was sent. |
**contactName** | **string** | Aggregated contact information. If the message was scheduled to be sent to a single contact, a full name will be returned here. Otherwise, a total amount of contacts will be returned. |
**parameters** | [**\TextMagic\Models\MessagesIcsParameters**](MessagesIcsParameters.md) |  |
**type** | **string** |  |
**summary** | **string** | A human-readable summary of the sending schedule. |
**textParameters** | [**\TextMagic\Models\MessagesIcsTextParameters**](MessagesIcsTextParameters.md) |  |
**firstOccurrence** | **\DateTime** | First occurence date. |
**lastOccurrence** | **\DateTime** | Last occurence date (could be &#x60;null&#x60; if the schedule is endless). |
**recipientsCount** | **int** | Amount of actual recipients. |
**timezone** | **string** | User-friendly timezone name (with spaces replaced by underscores). |
**completed** | **bool** | Indicates that scheduling has been completed. |
**avatar** | **string** | A relative link to the contact avatar. |
**createdAt** | **\DateTime** | Scheduling creation time. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

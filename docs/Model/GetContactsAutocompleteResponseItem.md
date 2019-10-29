# GetContactsAutocompleteResponseItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entityId** | **int** | Id of entity. 0 if object is a reply. | 
**entityType** | **string** | Entry type: * **contact** if it is related to a contact; * **list** if it is related to a contact list; * **reply** if it is related to an incoming message. | 
**value** | **string** | ID of the contact/list if entityType is contact/list OR phone number if entityType is reply. | 
**label** | **string** | Name of the contact/list if entityType is contact/list OR phone number if entityType is reply. | 
**sharedBy** | **string** | If contact or list was shared by another sub-account, the name of this user will be shown. | 
**isShared** | **bool** | If contact or list was shared by another sub-account then &#x60;true&#x60; will be set. | 
**avatar** | **string** | Contact avatar URI. | 
**favorited** | **bool** | If contact has been marked as favorite. | 
**userId** | **int** | Owner ID of the contact/list (if it was shared). | 
**countryName** | **string** |  | 
**qposition** | **int** |  | 
**rposition** | **int** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



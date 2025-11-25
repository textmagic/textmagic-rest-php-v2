# TextMagic\TextMagicApi



All URIs are relative to https://rest.textmagic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignContactsToList()**](TextMagicApi.md#assignContactsToList) | **PUT** /api/v2/lists/{id}/contacts | Assign contacts to a list |
| [**blockContact()**](TextMagicApi.md#blockContact) | **POST** /api/v2/contacts/block | Block a contact by phone number |
| [**buyDedicatedNumber()**](TextMagicApi.md#buyDedicatedNumber) | **POST** /api/v2/numbers | Buy a dedicated number |
| [**clearAndAssignContactsToList()**](TextMagicApi.md#clearAndAssignContactsToList) | **POST** /api/v2/lists/{id}/contacts | Reset list members to the specified contacts |
| [**closeChatsBulk()**](TextMagicApi.md#closeChatsBulk) | **POST** /api/v2/chats/close/bulk | Close chats (bulk) |
| [**closeReadChats()**](TextMagicApi.md#closeReadChats) | **POST** /api/v2/chats/close/read | Close read chats |
| [**createContact()**](TextMagicApi.md#createContact) | **POST** /api/v2/contacts/normalized | Add a new contact |
| [**createContactNote()**](TextMagicApi.md#createContactNote) | **POST** /api/v2/contacts/{id}/notes | Create a new contact note |
| [**createCustomField()**](TextMagicApi.md#createCustomField) | **POST** /api/v2/customfields | Add a new custom field |
| [**createEmailCampaign()**](TextMagicApi.md#createEmailCampaign) | **POST** /api/v2/email-campaigns | Send email campaign |
| [**createList()**](TextMagicApi.md#createList) | **POST** /api/v2/lists | Create a new list |
| [**createTag()**](TextMagicApi.md#createTag) | **POST** /api/v2/tags | Create tag |
| [**createTemplate()**](TextMagicApi.md#createTemplate) | **POST** /api/v2/templates | Create a template |
| [**deleteAllContacts()**](TextMagicApi.md#deleteAllContacts) | **DELETE** /api/v2/contact/all | Delete contacts (bulk) |
| [**deleteAllOutboundMessages()**](TextMagicApi.md#deleteAllOutboundMessages) | **DELETE** /api/v2/message/all | Delete all messages |
| [**deleteAvatar()**](TextMagicApi.md#deleteAvatar) | **DELETE** /api/v2/user/avatar | Delete an avatar |
| [**deleteChatMessages()**](TextMagicApi.md#deleteChatMessages) | **POST** /api/v2/chats/{id}/messages/delete | Delete chat messages by ID(s) |
| [**deleteChatsBulk()**](TextMagicApi.md#deleteChatsBulk) | **POST** /api/v2/chats/delete | Delete chats (bulk) |
| [**deleteContact()**](TextMagicApi.md#deleteContact) | **DELETE** /api/v2/contacts/{id} | Delete a contact |
| [**deleteContactAvatar()**](TextMagicApi.md#deleteContactAvatar) | **DELETE** /api/v2/contacts/{id}/avatar | Delete an avatar |
| [**deleteContactNote()**](TextMagicApi.md#deleteContactNote) | **DELETE** /api/v2/notes/{id} | Delete a contact note |
| [**deleteContactNotesBulk()**](TextMagicApi.md#deleteContactNotesBulk) | **POST** /api/v2/contacts/{id}/notes/delete | Delete contact notes (bulk) |
| [**deleteContactsByIds()**](TextMagicApi.md#deleteContactsByIds) | **POST** /api/v2/contacts/delete | Delete contacts by IDs (bulk) |
| [**deleteContactsFromList()**](TextMagicApi.md#deleteContactsFromList) | **DELETE** /api/v2/lists/{id}/contacts | Unassign contacts from a list |
| [**deleteCustomField()**](TextMagicApi.md#deleteCustomField) | **DELETE** /api/v2/customfields/{id} | Delete a custom field |
| [**deleteDedicatedNumber()**](TextMagicApi.md#deleteDedicatedNumber) | **DELETE** /api/v2/numbers/{id} | Cancel a dedicated number subscription |
| [**deleteInboundMessage()**](TextMagicApi.md#deleteInboundMessage) | **DELETE** /api/v2/replies/{id} | Delete a single inbound message |
| [**deleteInboundMessagesBulk()**](TextMagicApi.md#deleteInboundMessagesBulk) | **POST** /api/v2/replies/delete | Delete inbound messages (bulk) |
| [**deleteList()**](TextMagicApi.md#deleteList) | **DELETE** /api/v2/lists/{id} | Delete a list |
| [**deleteListAvatar()**](TextMagicApi.md#deleteListAvatar) | **DELETE** /api/v2/lists/{id}/avatar | Delete an avatar for a list |
| [**deleteListContactsBulk()**](TextMagicApi.md#deleteListContactsBulk) | **POST** /api/v2/lists/{id}/contacts/delete | Delete contacts from a list (bulk) |
| [**deleteListsBulk()**](TextMagicApi.md#deleteListsBulk) | **POST** /api/v2/lists/delete | Delete lists (bulk) |
| [**deleteMessageSession()**](TextMagicApi.md#deleteMessageSession) | **DELETE** /api/v2/sessions/{id} | Delete a session |
| [**deleteMessageSessionsBulk()**](TextMagicApi.md#deleteMessageSessionsBulk) | **POST** /api/v2/sessions/delete | Delete sessions (bulk) |
| [**deleteOutboundMessage()**](TextMagicApi.md#deleteOutboundMessage) | **DELETE** /api/v2/messages/{id} | Delete message |
| [**deleteOutboundMessagesBulk()**](TextMagicApi.md#deleteOutboundMessagesBulk) | **POST** /api/v2/messages/delete | Delete messages (bulk) |
| [**deleteScheduledMessage()**](TextMagicApi.md#deleteScheduledMessage) | **DELETE** /api/v2/schedules/{id} | Delete a single scheduled message |
| [**deleteScheduledMessagesBulk()**](TextMagicApi.md#deleteScheduledMessagesBulk) | **POST** /api/v2/schedules/delete | Delete scheduled messages (bulk) |
| [**deleteSenderId()**](TextMagicApi.md#deleteSenderId) | **DELETE** /api/v2/senderids/{id} | Delete a Sender ID |
| [**deleteTemplate()**](TextMagicApi.md#deleteTemplate) | **DELETE** /api/v2/templates/{id} | Delete a template |
| [**deleteTemplatesBulk()**](TextMagicApi.md#deleteTemplatesBulk) | **POST** /api/v2/templates/delete | Delete templates (bulk) |
| [**doCarrierLookup()**](TextMagicApi.md#doCarrierLookup) | **GET** /api/v2/lookups/{phone} | Carrier Lookup |
| [**doEmailLookup()**](TextMagicApi.md#doEmailLookup) | **GET** /api/v2/email-lookups/{email} | Email Lookup |
| [**getAllBulkSessions()**](TextMagicApi.md#getAllBulkSessions) | **GET** /api/v2/bulks | Get all bulk sessions |
| [**getAllChats()**](TextMagicApi.md#getAllChats) | **GET** /api/v2/chats | Get all chats |
| [**getAllInboundMessages()**](TextMagicApi.md#getAllInboundMessages) | **GET** /api/v2/replies | Get all inbound messages |
| [**getAllMessageSessions()**](TextMagicApi.md#getAllMessageSessions) | **GET** /api/v2/sessions | Get all sessions |
| [**getAllOutboundMessages()**](TextMagicApi.md#getAllOutboundMessages) | **GET** /api/v2/messages | Get all messages |
| [**getAllScheduledMessages()**](TextMagicApi.md#getAllScheduledMessages) | **GET** /api/v2/schedules | Get all scheduled messages |
| [**getAllTemplates()**](TextMagicApi.md#getAllTemplates) | **GET** /api/v2/templates | Get all templates |
| [**getAvailableDedicatedNumbers()**](TextMagicApi.md#getAvailableDedicatedNumbers) | **GET** /api/v2/numbers/available | Find dedicated numbers available for purchase |
| [**getAvailableSenderSettingOptions()**](TextMagicApi.md#getAvailableSenderSettingOptions) | **GET** /api/v2/sources | Get available sender settings |
| [**getBalanceNotificationOptions()**](TextMagicApi.md#getBalanceNotificationOptions) | **GET** /api/v2/user/notification/balance/bundles | Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance |
| [**getBalanceNotificationSettings()**](TextMagicApi.md#getBalanceNotificationSettings) | **GET** /api/v2/user/notification/balance | Get balance notification settings |
| [**getBlockedContacts()**](TextMagicApi.md#getBlockedContacts) | **GET** /api/v2/contacts/block/list | Get blocked contacts |
| [**getBulkSession()**](TextMagicApi.md#getBulkSession) | **GET** /api/v2/bulks/{id} | Get bulk session status |
| [**getCallbackSettings()**](TextMagicApi.md#getCallbackSettings) | **GET** /api/v2/callback/settings | Fetch callback URL settings |
| [**getChat()**](TextMagicApi.md#getChat) | **GET** /api/v2/chats/{id} | Get a single chat |
| [**getChatByPhone()**](TextMagicApi.md#getChatByPhone) | **GET** /api/v2/chats/{phone}/by/phone | Find chats by phone |
| [**getChatMessages()**](TextMagicApi.md#getChatMessages) | **GET** /api/v2/chats/{id}/message | Get chat messages |
| [**getContact()**](TextMagicApi.md#getContact) | **GET** /api/v2/contacts/{id} | Get the details of a specific contact |
| [**getContactByPhone()**](TextMagicApi.md#getContactByPhone) | **GET** /api/v2/contacts/phone/{phone} | Get the details of a specific contact by phone number |
| [**getContactIfBlocked()**](TextMagicApi.md#getContactIfBlocked) | **GET** /api/v2/contacts/block/phone | Check if a phone number is blocked |
| [**getContactImportSessionProgress()**](TextMagicApi.md#getContactImportSessionProgress) | **GET** /api/v2/contacts/import/progress/{id} | Check import progress |
| [**getContactNote()**](TextMagicApi.md#getContactNote) | **GET** /api/v2/notes/{id} | Get a contact note |
| [**getContactNotes()**](TextMagicApi.md#getContactNotes) | **GET** /api/v2/contacts/{id}/notes | Fetch notes assigned to a given contact |
| [**getContacts()**](TextMagicApi.md#getContacts) | **GET** /api/v2/contacts | Get all contacts |
| [**getContactsByListId()**](TextMagicApi.md#getContactsByListId) | **GET** /api/v2/lists/{id}/contacts | Get all contacts in a list |
| [**getCurrentUser()**](TextMagicApi.md#getCurrentUser) | **GET** /api/v2/user | Get current account information |
| [**getCustomField()**](TextMagicApi.md#getCustomField) | **GET** /api/v2/customfields/{id} | Get the details of a specific custom field |
| [**getCustomFields()**](TextMagicApi.md#getCustomFields) | **GET** /api/v2/customfields | Get all custom fields |
| [**getDedicatedNumber()**](TextMagicApi.md#getDedicatedNumber) | **GET** /api/v2/numbers/{id} | Get the details of a specific dedicated number |
| [**getEmailSenders()**](TextMagicApi.md#getEmailSenders) | **GET** /api/v2/email-campaigns/email-senders | Get list of email senders |
| [**getFavorites()**](TextMagicApi.md#getFavorites) | **GET** /api/v2/contacts/favorite | Get favorite contacts and lists |
| [**getInboundMessage()**](TextMagicApi.md#getInboundMessage) | **GET** /api/v2/replies/{id} | Get a single inbound message |
| [**getInboundMessagesNotificationSettings()**](TextMagicApi.md#getInboundMessagesNotificationSettings) | **GET** /api/v2/user/notification/inbound | Get inbound messages notification settings |
| [**getInvoices()**](TextMagicApi.md#getInvoices) | **GET** /api/v2/invoices | Get all invoices |
| [**getList()**](TextMagicApi.md#getList) | **GET** /api/v2/lists/{id} | Get the details of a specific list |
| [**getListContactsIds()**](TextMagicApi.md#getListContactsIds) | **GET** /api/v2/lists/{id}/contacts/ids | Get all contact IDs in a list |
| [**getLists()**](TextMagicApi.md#getLists) | **GET** /api/v2/lists | Get all lists |
| [**getListsOfContact()**](TextMagicApi.md#getListsOfContact) | **GET** /api/v2/contacts/{id}/lists | Get a contact&#39;s lists |
| [**getMessagePreview()**](TextMagicApi.md#getMessagePreview) | **GET** /api/v2/messages/preview | Preview message |
| [**getMessagePrice()**](TextMagicApi.md#getMessagePrice) | **GET** /api/v2/messages/price/normalized | Check message price |
| [**getMessageSession()**](TextMagicApi.md#getMessageSession) | **GET** /api/v2/sessions/{id} | Get a session&#x60;s details |
| [**getMessageSessionStat()**](TextMagicApi.md#getMessageSessionStat) | **GET** /api/v2/sessions/{id}/stat | Get a session&#x60;s statistics |
| [**getMessagesBySessionId()**](TextMagicApi.md#getMessagesBySessionId) | **GET** /api/v2/sessions/{id}/messages | Get a session&#x60;s messages |
| [**getMessagingCounters()**](TextMagicApi.md#getMessagingCounters) | **GET** /api/v2/stats/messaging/data | Get sent/received messages counters values |
| [**getOutboundMessage()**](TextMagicApi.md#getOutboundMessage) | **GET** /api/v2/messages/{id} | Get a single message |
| [**getOutboundMessagesHistory()**](TextMagicApi.md#getOutboundMessagesHistory) | **GET** /api/v2/history | Get history |
| [**getScheduledMessage()**](TextMagicApi.md#getScheduledMessage) | **GET** /api/v2/schedules/{id} | Get a single scheduled message |
| [**getSenderId()**](TextMagicApi.md#getSenderId) | **GET** /api/v2/senderids/{id} | Get the details of a specific Sender ID |
| [**getSenderIds()**](TextMagicApi.md#getSenderIds) | **GET** /api/v2/senderids | Get all your approved Sender IDs |
| [**getSenderSettings()**](TextMagicApi.md#getSenderSettings) | **GET** /api/v2/sender/settings/normalized | Get current sender settings |
| [**getSpendingStat()**](TextMagicApi.md#getSpendingStat) | **GET** /api/v2/stats/spending | Get spending statistics |
| [**getTemplate()**](TextMagicApi.md#getTemplate) | **GET** /api/v2/templates/{id} | Get a template&#x60;s details |
| [**getUnreadMessagesTotal()**](TextMagicApi.md#getUnreadMessagesTotal) | **GET** /api/v2/chats/unread/count | Get unread messages number |
| [**getUnsubscribedContact()**](TextMagicApi.md#getUnsubscribedContact) | **GET** /api/v2/unsubscribers/{id} | Get the details of a specific unsubscribed contact |
| [**getUnsubscribers()**](TextMagicApi.md#getUnsubscribers) | **GET** /api/v2/unsubscribers | Get all unsubscribed contacts |
| [**getUserDedicatedNumbers()**](TextMagicApi.md#getUserDedicatedNumbers) | **GET** /api/v2/numbers | Get all your dedicated numbers |
| [**importContacts()**](TextMagicApi.md#importContacts) | **POST** /api/v2/contacts/import/normalized | Import contacts |
| [**markChatsReadBulk()**](TextMagicApi.md#markChatsReadBulk) | **POST** /api/v2/chats/read/bulk | Mark chats as read (bulk) |
| [**markChatsUnreadBulk()**](TextMagicApi.md#markChatsUnreadBulk) | **POST** /api/v2/chats/unread/bulk | Mark chats as unread (bulk) |
| [**muteChat()**](TextMagicApi.md#muteChat) | **POST** /api/v2/chats/mute | Mute chat sounds |
| [**muteChatsBulk()**](TextMagicApi.md#muteChatsBulk) | **POST** /api/v2/chats/mute/bulk | Mute chats (bulk) |
| [**ping()**](TextMagicApi.md#ping) | **GET** /api/v2/ping | Ping |
| [**reopenChatsBulk()**](TextMagicApi.md#reopenChatsBulk) | **POST** /api/v2/chats/reopen/bulk | Reopen chats (bulk) |
| [**requestSenderId()**](TextMagicApi.md#requestSenderId) | **POST** /api/v2/senderids | Apply for a new Sender ID |
| [**scheduleEmailCampaign()**](TextMagicApi.md#scheduleEmailCampaign) | **POST** /api/v2/email-campaigns/schedule | Schedule new email campaign |
| [**searchChats()**](TextMagicApi.md#searchChats) | **GET** /api/v2/chats/search | Find chats by message text |
| [**searchChatsByIds()**](TextMagicApi.md#searchChatsByIds) | **GET** /api/v2/chats/search/ids | Find chats (bulk) |
| [**searchChatsByReceipent()**](TextMagicApi.md#searchChatsByReceipent) | **GET** /api/v2/chats/search/recipients | Find chats by recipient |
| [**searchContacts()**](TextMagicApi.md#searchContacts) | **GET** /api/v2/contacts/search | Find contacts by given criteria |
| [**searchInboundMessages()**](TextMagicApi.md#searchInboundMessages) | **GET** /api/v2/replies/search | Find inbound messages |
| [**searchLists()**](TextMagicApi.md#searchLists) | **GET** /api/v2/lists/search | Find lists by given criteria |
| [**searchOutboundMessages()**](TextMagicApi.md#searchOutboundMessages) | **GET** /api/v2/messages/search | Find messages |
| [**searchScheduledMessages()**](TextMagicApi.md#searchScheduledMessages) | **GET** /api/v2/schedules/search | Find scheduled messages |
| [**searchTemplates()**](TextMagicApi.md#searchTemplates) | **GET** /api/v2/templates/search | Find templates by criteria |
| [**sendMessage()**](TextMagicApi.md#sendMessage) | **POST** /api/v2/messages | Send message |
| [**setChatStatus()**](TextMagicApi.md#setChatStatus) | **POST** /api/v2/chats/status | Change chat status |
| [**unblockContact()**](TextMagicApi.md#unblockContact) | **POST** /api/v2/contacts/unblock | Unblock a contact by phone number |
| [**unblockContactsBulk()**](TextMagicApi.md#unblockContactsBulk) | **POST** /api/v2/contacts/unblock/bulk | Unblock contacts (bulk) |
| [**unmuteChatsBulk()**](TextMagicApi.md#unmuteChatsBulk) | **POST** /api/v2/chats/unmute/bulk | Unmute chats (bulk) |
| [**unsubscribeContact()**](TextMagicApi.md#unsubscribeContact) | **POST** /api/v2/unsubscribers | Manually unsubscribe a contact |
| [**updateBalanceNotificationSettings()**](TextMagicApi.md#updateBalanceNotificationSettings) | **PUT** /api/v2/user/notification/balance | Update balance notification settings |
| [**updateCallbackSettings()**](TextMagicApi.md#updateCallbackSettings) | **PUT** /api/v2/callback/settings | Update callback URL settings |
| [**updateChatDesktopNotificationSettings()**](TextMagicApi.md#updateChatDesktopNotificationSettings) | **PUT** /api/v2/user/desktop/notification | Update chat desktop notification settings |
| [**updateContact()**](TextMagicApi.md#updateContact) | **PUT** /api/v2/contacts/{id}/normalized | Edit a contact |
| [**updateContactNote()**](TextMagicApi.md#updateContactNote) | **PUT** /api/v2/notes/{id} | Update a contact note |
| [**updateCurrentUser()**](TextMagicApi.md#updateCurrentUser) | **PUT** /api/v2/user | Edit current account info |
| [**updateCustomField()**](TextMagicApi.md#updateCustomField) | **PUT** /api/v2/customfields/{id} | Edit a custom field |
| [**updateCustomFieldValue()**](TextMagicApi.md#updateCustomFieldValue) | **PUT** /api/v2/customfields/{id}/update | Edit the custom field value of a specified contact |
| [**updateInboundMessagesNotificationSettings()**](TextMagicApi.md#updateInboundMessagesNotificationSettings) | **PUT** /api/v2/user/notification/inbound | Update inbound messages notification settings |
| [**updateList()**](TextMagicApi.md#updateList) | **PUT** /api/v2/lists/{id} | Edit a list |
| [**updateSenderSetting()**](TextMagicApi.md#updateSenderSetting) | **PUT** /api/v2/sender/settings | Change sender settings |
| [**updateTemplate()**](TextMagicApi.md#updateTemplate) | **PUT** /api/v2/templates/{id} | Update a template |
| [**uploadAvatar()**](TextMagicApi.md#uploadAvatar) | **POST** /api/v2/user/avatar | Upload an avatar |
| [**uploadContactAvatar()**](TextMagicApi.md#uploadContactAvatar) | **POST** /api/v2/contacts/{id}/avatar | Upload an avatar |
| [**uploadListAvatar()**](TextMagicApi.md#uploadListAvatar) | **POST** /api/v2/lists/{id}/avatar | Add an avatar for a list |
| [**uploadMessageAttachment()**](TextMagicApi.md#uploadMessageAttachment) | **POST** /api/v2/messages/attachment | Upload message attachment |
| [**uploadMessageMMSAttachment()**](TextMagicApi.md#uploadMessageMMSAttachment) | **POST** /api/v2/messages/mms/attachment | Upload message mms attachment |


## `assignContactsToList()`

```php
assignContactsToList($id, $assignContactsToListInputObject): \TextMagic\Models\ResourceLinkResponse
```

Assign contacts to a list

> Unlike all other PUT requests, this command does not need old contact IDs to be submitted. For example, if you have a list with contacts 150, 151 and 152 and you want to add contact ID 153, you only need to submit 153 as a parameter of PUT /api/v2/lists/{id}/contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$assignContactsToListInputObject = new \TextMagic\Models\AssignContactsToListRequest(); // \TextMagic\Models\AssignContactsToListRequest

try {
    $result = $apiInstance->assignContactsToList($id, $assignContactsToListInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->assignContactsToList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **assignContactsToListInputObject** | [**\TextMagic\Models\AssignContactsToListRequest**](../Model/AssignContactsToListRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blockContact()`

```php
blockContact($blockContactInputObject): \TextMagic\Models\ResourceLinkResponse
```

Block a contact by phone number

Block a contact from inbound and outbound communication by phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockContactInputObject = new \TextMagic\Models\BlockContactRequest(); // \TextMagic\Models\BlockContactRequest

try {
    $result = $apiInstance->blockContact($blockContactInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->blockContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockContactInputObject** | [**\TextMagic\Models\BlockContactRequest**](../Model/BlockContactRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `buyDedicatedNumber()`

```php
buyDedicatedNumber($buyDedicatedNumberInputObject)
```

Buy a dedicated number

To buy a dedicated number, you first need to find an available number matching your criteria using the `/api/v2/numbers/available` command described above.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyDedicatedNumberInputObject = new \TextMagic\Models\BuyDedicatedNumberRequest(); // \TextMagic\Models\BuyDedicatedNumberRequest

try {
    $apiInstance->buyDedicatedNumber($buyDedicatedNumberInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->buyDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buyDedicatedNumberInputObject** | [**\TextMagic\Models\BuyDedicatedNumberRequest**](../Model/BuyDedicatedNumberRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clearAndAssignContactsToList()`

```php
clearAndAssignContactsToList($id, $clearAndAssignContactsToListInputObject): \TextMagic\Models\ResourceLinkResponse
```

Reset list members to the specified contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$clearAndAssignContactsToListInputObject = new \TextMagic\Models\ClearAndAssignContactsToListRequest(); // \TextMagic\Models\ClearAndAssignContactsToListRequest

try {
    $result = $apiInstance->clearAndAssignContactsToList($id, $clearAndAssignContactsToListInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->clearAndAssignContactsToList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **clearAndAssignContactsToListInputObject** | [**\TextMagic\Models\ClearAndAssignContactsToListRequest**](../Model/ClearAndAssignContactsToListRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `closeChatsBulk()`

```php
closeChatsBulk($closeChatsBulkInputObject)
```

Close chats (bulk)

Close chats by chat IDs or close all chats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$closeChatsBulkInputObject = new \TextMagic\Models\MarkChatsUnreadBulkRequest(); // \TextMagic\Models\MarkChatsUnreadBulkRequest

try {
    $apiInstance->closeChatsBulk($closeChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->closeChatsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **closeChatsBulkInputObject** | [**\TextMagic\Models\MarkChatsUnreadBulkRequest**](../Model/MarkChatsUnreadBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `closeReadChats()`

```php
closeReadChats()
```

Close read chats

Close all chats that have no unread messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->closeReadChats();
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->closeReadChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContact()`

```php
createContact($createContactInputObject): \TextMagic\Models\ResourceLinkResponse
```

Add a new contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createContactInputObject = new \TextMagic\Models\CreateContactRequest(); // \TextMagic\Models\CreateContactRequest

try {
    $result = $apiInstance->createContact($createContactInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createContactInputObject** | [**\TextMagic\Models\CreateContactRequest**](../Model/CreateContactRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContactNote()`

```php
createContactNote($id, $createContactNoteInputObject): \TextMagic\Models\ResourceLinkResponse
```

Create a new contact note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$createContactNoteInputObject = new \TextMagic\Models\CreateContactNoteRequest(); // \TextMagic\Models\CreateContactNoteRequest

try {
    $result = $apiInstance->createContactNote($id, $createContactNoteInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createContactNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **createContactNoteInputObject** | [**\TextMagic\Models\CreateContactNoteRequest**](../Model/CreateContactNoteRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomField()`

```php
createCustomField($createCustomFieldInputObject): \TextMagic\Models\ResourceLinkResponse
```

Add a new custom field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createCustomFieldInputObject = new \TextMagic\Models\CreateCustomFieldRequest(); // \TextMagic\Models\CreateCustomFieldRequest

try {
    $result = $apiInstance->createCustomField($createCustomFieldInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createCustomFieldInputObject** | [**\TextMagic\Models\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailCampaign()`

```php
createEmailCampaign($createEmailCampaignInputObject): \TextMagic\Models\CreateEmailCampaignResponse
```

Send email campaign

Creates a new email campaign and sends it to the specified recipients.  This endpoint allows you to create and immediately send an email marketing campaign to your contacts, groups, or direct email addresses. The campaign will be processed asynchronously, and you'll receive a campaign object with tracking information.  ## Request Requirements  - **Email Sender ID**: Must be a valid, configured email sender from your account - **Recipients**: At least one recipient type must be specified (contacts, groups, or emails) - **Content**: Subject and HTML message content are required - **Balance**: Sufficient account balance for the estimated campaign cost  ## Recipient Types  You can target multiple recipient types in a single campaign:  - **Contact IDs**: Send to specific contacts from your contact list - **Group IDs**: Send to all contacts within specified groups   - **Direct Emails**: Send to email addresses not in your contact list  ## Content Guidelines  - **Subject**: Maximum 998 characters, should be engaging and relevant - **Message**: HTML content supported, including images, links, and formatting - **From Name**: Optional custom sender name (max 500 characters) - **Reply-To**: Optional custom reply-to email address  ## Cost and Balance  The API automatically calculates campaign costs based on: - Total number of unique recipients across all specified groups, contacts, and emails - Your account's email pricing tier - Any additional features or premium content  If your account balance is insufficient, the request will be rejected with a low balance error.  ## Response Information  Successful campaigns return: - Campaign ID for tracking and analytics - Current campaign status and progress - Cost breakdown and recipient counts - Sender information and content preview - Statistical totals and engagement metrics  ## Error Scenarios  Common error conditions include: - **Validation Errors**: Invalid email addresses, missing required fields, or content that exceeds limits - **Insufficient Balance**: Account balance too low for campaign cost - **Invalid Recipients**: Non-existent contact/group IDs or invalid email formats - **Sender Configuration**: Invalid or unconfigured email sender ID - **No Recipients**: All recipient arrays are empty or invalid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createEmailCampaignInputObject = new \TextMagic\Models\CreateEmailCampaignRequest(); // \TextMagic\Models\CreateEmailCampaignRequest

try {
    $result = $apiInstance->createEmailCampaign($createEmailCampaignInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createEmailCampaignInputObject** | [**\TextMagic\Models\CreateEmailCampaignRequest**](../Model/CreateEmailCampaignRequest.md)|  | |

### Return type

[**\TextMagic\Models\CreateEmailCampaignResponse**](../Model/CreateEmailCampaignResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createList()`

```php
createList($createListInputObject): \TextMagic\Models\ResourceLinkResponse
```

Create a new list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createListInputObject = new \TextMagic\Models\CreateListRequest(); // \TextMagic\Models\CreateListRequest

try {
    $result = $apiInstance->createList($createListInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createListInputObject** | [**\TextMagic\Models\CreateListRequest**](../Model/CreateListRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTag()`

```php
createTag($createTagInputObject): \TextMagic\Models\CreateTagResponse
```

Create tag

Creates a new tag for organizing and categorizing contacts.  This endpoint allows you to create a custom tag that can be used to segment and organize your contact database. Tags provide a flexible way to categorize contacts for better contact management.  ## Request Requirements  - **Title**: Required field, must be between 1 and 50 characters - **Uniqueness**: Tag titles must be unique within your account - **Authentication**: Valid API credentials required  ## Common Use Cases  Create tags for various organizational purposes:  - **Customer Types**: \"VIP Customer\", \"New Lead\", \"Active Subscriber\" - **Geographic Segments**: \"North Region\", \"Europe\", \"Local Customers\" - **Engagement Levels**: \"Highly Engaged\", \"Inactive\", \"Recent Purchase\" - **Campaign Categories**: \"Summer Promotion\", \"Newsletter Subscriber\", \"Event Attendee\" - **Custom Segments**: Any custom categorization that fits your business needs  ## Response Information  Successful tag creation returns: - **Tag ID**: Unique identifier for the newly created tag - **Title**: The tag name as provided in the request  Use the returned tag ID to assign this tag to contacts or reference it in other API operations.  ## Error Scenarios  Common error conditions include: - **Validation Errors**: Title exceeds 50 characters or is empty - **Duplicate Tag**: A tag with the same title already exists in your account - **Authentication Errors**: Invalid or missing API credentials  ## Next Steps  After creating a tag: 1. Use the tag ID to assign it to contacts via contact management endpoints 2. Reference the tag when filtering contacts 3. Manage and update tags through other Tags API endpoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTagInputObject = new \TextMagic\Models\CreateTagRequest(); // \TextMagic\Models\CreateTagRequest

try {
    $result = $apiInstance->createTag($createTagInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createTagInputObject** | [**\TextMagic\Models\CreateTagRequest**](../Model/CreateTagRequest.md)|  | |

### Return type

[**\TextMagic\Models\CreateTagResponse**](../Model/CreateTagResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTemplate()`

```php
createTemplate($createTemplateInputObject): \TextMagic\Models\ResourceLinkResponse
```

Create a template

There are times when creating a new template makes sense (such as when targeting specific clients or improving your business strategies).  You can create new SMS templates for marketing purposes or SMS templates for business campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTemplateInputObject = new \TextMagic\Models\CreateTemplateRequest(); // \TextMagic\Models\CreateTemplateRequest

try {
    $result = $apiInstance->createTemplate($createTemplateInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createTemplateInputObject** | [**\TextMagic\Models\CreateTemplateRequest**](../Model/CreateTemplateRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllContacts()`

```php
deleteAllContacts()
```

Delete contacts (bulk)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllContacts();
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteAllContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllOutboundMessages()`

```php
deleteAllOutboundMessages()
```

Delete all messages

Delete all messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAllOutboundMessages();
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAvatar()`

```php
deleteAvatar()
```

Delete an avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAvatar();
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChatMessages()`

```php
deleteChatMessages($id, $deleteChatMessagesBulkInputObject)
```

Delete chat messages by ID(s)

Delete messages from chat by given message IDs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$deleteChatMessagesBulkInputObject = new \TextMagic\Models\DeleteChatMessagesRequest(); // \TextMagic\Models\DeleteChatMessagesRequest

try {
    $apiInstance->deleteChatMessages($id, $deleteChatMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteChatMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **deleteChatMessagesBulkInputObject** | [**\TextMagic\Models\DeleteChatMessagesRequest**](../Model/DeleteChatMessagesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChatsBulk()`

```php
deleteChatsBulk($deleteChatsBulkInputObject)
```

Delete chats (bulk)

Delete chats by given IDs or delete all chats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteChatsBulkInputObject = new \TextMagic\Models\DeleteChatsBulkRequest(); // \TextMagic\Models\DeleteChatsBulkRequest

try {
    $apiInstance->deleteChatsBulk($deleteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteChatsBulkInputObject** | [**\TextMagic\Models\DeleteChatsBulkRequest**](../Model/DeleteChatsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($id)
```

Delete a contact

> This command removes your contact completely. If it was assigned or saved to a shared list, it will disappear from there too. If you only need to remove a contact from selected lists, use the Contact assignment command in the Lists section instead, rather than deleting the contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteContact($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactAvatar()`

```php
deleteContactAvatar($id)
```

Delete an avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteContactAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactNote()`

```php
deleteContactNote($id)
```

Delete a contact note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteContactNote($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactNotesBulk()`

```php
deleteContactNotesBulk($id, $deleteContactNotesBulkInputObject)
```

Delete contact notes (bulk)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$deleteContactNotesBulkInputObject = new \TextMagic\Models\DeleteContactNotesBulkRequest(); // \TextMagic\Models\DeleteContactNotesBulkRequest

try {
    $apiInstance->deleteContactNotesBulk($id, $deleteContactNotesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactNotesBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **deleteContactNotesBulkInputObject** | [**\TextMagic\Models\DeleteContactNotesBulkRequest**](../Model/DeleteContactNotesBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactsByIds()`

```php
deleteContactsByIds($deleteContactsByIdsInputObject)
```

Delete contacts by IDs (bulk)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteContactsByIdsInputObject = new \TextMagic\Models\DeleteContactsByIdsRequest(); // \TextMagic\Models\DeleteContactsByIdsRequest

try {
    $apiInstance->deleteContactsByIds($deleteContactsByIdsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteContactsByIdsInputObject** | [**\TextMagic\Models\DeleteContactsByIdsRequest**](../Model/DeleteContactsByIdsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContactsFromList()`

```php
deleteContactsFromList($id, $deleteContacsFromListObject)
```

Unassign contacts from a list

> When you remove contacts from a specific list, they will be deleted permanently, unless they are first saved in another list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$deleteContacsFromListObject = new \TextMagic\Models\DeleteContactsFromListRequest(); // \TextMagic\Models\DeleteContactsFromListRequest

try {
    $apiInstance->deleteContactsFromList($id, $deleteContacsFromListObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactsFromList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **deleteContacsFromListObject** | [**\TextMagic\Models\DeleteContactsFromListRequest**](../Model/DeleteContactsFromListRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomField()`

```php
deleteCustomField($id)
```

Delete a custom field

> When a custom field is deleted, all the information that was added to contacts under this custom field will also be lost.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteCustomField($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDedicatedNumber()`

```php
deleteDedicatedNumber($id)
```

Cancel a dedicated number subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteDedicatedNumber($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInboundMessage()`

```php
deleteInboundMessage($id)
```

Delete a single inbound message

> Note: deleted inbound messages will disappear from TextMagic Online, chats, and any other place they are referenced.  So, be careful!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | The unique numeric ID for the inbound message.

try {
    $apiInstance->deleteInboundMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteInboundMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique numeric ID for the inbound message. | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInboundMessagesBulk()`

```php
deleteInboundMessagesBulk($deleteInboundMessagesBulkInputObject)
```

Delete inbound messages (bulk)

> Note: deleted inbound messages will disappear from TextMagic Online, chats, and any other place they are referenced.  So, be careful!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteInboundMessagesBulkInputObject = new \TextMagic\Models\DeleteListsBulkRequest(); // \TextMagic\Models\DeleteListsBulkRequest

try {
    $apiInstance->deleteInboundMessagesBulk($deleteInboundMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteInboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteInboundMessagesBulkInputObject** | [**\TextMagic\Models\DeleteListsBulkRequest**](../Model/DeleteListsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteList()`

```php
deleteList($id)
```

Delete a list

This command has no parameters. If successful, this command will return the standard delete response (204 No Content); otherwise, a standard error response will be returned.  When you delete a list, the contacts in it are deleted as well, unless they were saved in another list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteList($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteListAvatar()`

```php
deleteListAvatar($id)
```

Delete an avatar for a list

Delete an avatar for a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteListAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteListAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteListContactsBulk()`

```php
deleteListContactsBulk($id, $deleteListContactsBulkInputObject)
```

Delete contacts from a list (bulk)

Delete contacts from a list (bulk)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$deleteListContactsBulkInputObject = new \TextMagic\Models\UnblockContactsBulkRequest(); // \TextMagic\Models\UnblockContactsBulkRequest

try {
    $apiInstance->deleteListContactsBulk($id, $deleteListContactsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteListContactsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **deleteListContactsBulkInputObject** | [**\TextMagic\Models\UnblockContactsBulkRequest**](../Model/UnblockContactsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteListsBulk()`

```php
deleteListsBulk($deleteListsBulkInputObject)
```

Delete lists (bulk)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteListsBulkInputObject = new \TextMagic\Models\DeleteListsBulkRequest(); // \TextMagic\Models\DeleteListsBulkRequest

try {
    $apiInstance->deleteListsBulk($deleteListsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteListsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteListsBulkInputObject** | [**\TextMagic\Models\DeleteListsBulkRequest**](../Model/DeleteListsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMessageSession()`

```php
deleteMessageSession($id)
```

Delete a session

Delete a message session, together with all nested messages. > You will not be refunded for any deleted sent sessions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteMessageSession($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteMessageSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMessageSessionsBulk()`

```php
deleteMessageSessionsBulk($deleteMessageSessionsBulkInputObject)
```

Delete sessions (bulk)

Delete message sessions, together with all nested messages, by given ID(s) or delete all message sessions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteMessageSessionsBulkInputObject = new \TextMagic\Models\DeleteListsBulkRequest(); // \TextMagic\Models\DeleteListsBulkRequest

try {
    $apiInstance->deleteMessageSessionsBulk($deleteMessageSessionsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteMessageSessionsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteMessageSessionsBulkInputObject** | [**\TextMagic\Models\DeleteListsBulkRequest**](../Model/DeleteListsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOutboundMessage()`

```php
deleteOutboundMessage($id)
```

Delete message

Delete a single message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteOutboundMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteOutboundMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOutboundMessagesBulk()`

```php
deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject)
```

Delete messages (bulk)

Delete outbound messages by the given ID(s) or delete all outbound messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteOutboundMessagesBulkInputObject = new \TextMagic\Models\DeleteOutboundMessagesBulkRequest(); // \TextMagic\Models\DeleteOutboundMessagesBulkRequest

try {
    $apiInstance->deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteOutboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteOutboundMessagesBulkInputObject** | [**\TextMagic\Models\DeleteOutboundMessagesBulkRequest**](../Model/DeleteOutboundMessagesBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScheduledMessage()`

```php
deleteScheduledMessage($id)
```

Delete a single scheduled message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteScheduledMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScheduledMessagesBulk()`

```php
deleteScheduledMessagesBulk($deleteScheduledMessagesBulkInputObject)
```

Delete scheduled messages (bulk)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteScheduledMessagesBulkInputObject = new \TextMagic\Models\DeleteScheduledMessagesBulkRequest(); // \TextMagic\Models\DeleteScheduledMessagesBulkRequest

try {
    $apiInstance->deleteScheduledMessagesBulk($deleteScheduledMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteScheduledMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteScheduledMessagesBulkInputObject** | [**\TextMagic\Models\DeleteScheduledMessagesBulkRequest**](../Model/DeleteScheduledMessagesBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSenderId()`

```php
deleteSenderId($id)
```

Delete a Sender ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteSenderId($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplate()`

```php
deleteTemplate($id)
```

Delete a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $apiInstance->deleteTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplatesBulk()`

```php
deleteTemplatesBulk($deleteTemplatesBulkInputObject)
```

Delete templates (bulk)

Delete templates by given IDs or delete all templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteTemplatesBulkInputObject = new \TextMagic\Models\DeleteContactNotesBulkRequest(); // \TextMagic\Models\DeleteContactNotesBulkRequest

try {
    $apiInstance->deleteTemplatesBulk($deleteTemplatesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteTemplatesBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteTemplatesBulkInputObject** | [**\TextMagic\Models\DeleteContactNotesBulkRequest**](../Model/DeleteContactNotesBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `doCarrierLookup()`

```php
doCarrierLookup($phone, $country): \TextMagic\Models\DoCarrierLookupResponse
```

Carrier Lookup

This API call allows you to retrieve additional information about a phone number: region-specific phone number formatting, carrier, phone type (landline/mobile) and country information.  > Numbers must be checked one by one. You cannot check multiple numbers in one request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 447860021130; // string | Phone number in [E.164 format](https://en.wikipedia.org/wiki/E.164) or in [National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers).
$country = GB; // string | This option must be specified only if the phone number is in a **[National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers)**.

try {
    $result = $apiInstance->doCarrierLookup($phone, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->doCarrierLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number in [E.164 format](https://en.wikipedia.org/wiki/E.164) or in [National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers). | |
| **country** | **string**| This option must be specified only if the phone number is in a **[National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers)**. | [optional] |

### Return type

[**\TextMagic\Models\DoCarrierLookupResponse**](../Model/DoCarrierLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `doEmailLookup()`

```php
doEmailLookup($email): \TextMagic\Models\DoEmailLookupResponse
```

Email Lookup

To get more details about an email address or to check whether it is a valid email or not, you can use the Email Lookup command. To upload and check emails in bulk, please use our [Web app](https://my.textmagic.com/online/email-lookup/).  This API call allows you to retrieve additional information about an email address, such as mailbox detection, syntax checks, DNS validation, deliverability status, and many more helpful values (see the table below).  > Emails must be checked one by one. You cannot check multiple emails in one request. To upload and check emails in bulk, please use our [Web app](https://my.textmagic.com/online/email-lookup/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = john@sample.com; // string | Email address.

try {
    $result = $apiInstance->doEmailLookup($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->doEmailLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address. | |

### Return type

[**\TextMagic\Models\DoEmailLookupResponse**](../Model/DoEmailLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllBulkSessions()`

```php
getAllBulkSessions($page, $limit): \TextMagic\Models\GetAllBulkSessionsPaginatedResponse
```

Get all bulk sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getAllBulkSessions($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllBulkSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetAllBulkSessionsPaginatedResponse**](../Model/GetAllBulkSessionsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllChats()`

```php
getAllChats($status, $page, $limit, $orderBy, $voice, $flat): \TextMagic\Models\GetAllChatsPaginatedResponse
```

Get all chats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = a; // string | Fetch only (a)ctive, (c)losed or (d)eleted chats.
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$voice = 0; // int | Fetch results with voice calls.
$flat = 1; // int | Should additional contact info be included?

try {
    $result = $apiInstance->getAllChats($status, $page, $limit, $orderBy, $voice, $flat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Fetch only (a)ctive, (c)losed or (d)eleted chats. | [optional] |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **voice** | **int**| Fetch results with voice calls. | [optional] [default to 0] |
| **flat** | **int**| Should additional contact info be included? | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\GetAllChatsPaginatedResponse**](../Model/GetAllChatsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllInboundMessages()`

```php
getAllInboundMessages($page, $limit, $orderBy, $direction): \TextMagic\Models\GetAllInboundMessagesPaginatedResponse
```

Get all inbound messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getAllInboundMessages($page, $limit, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllInboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\GetAllInboundMessagesPaginatedResponse**](../Model/GetAllInboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllMessageSessions()`

```php
getAllMessageSessions($page, $limit): \TextMagic\Models\GetAllMessageSessionsPaginatedResponse
```

Get all sessions

Get all message sending sessions. > This list contains all of your sessions, including those which were sent but not via API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getAllMessageSessions($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllMessageSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetAllMessageSessionsPaginatedResponse**](../Model/GetAllMessageSessionsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllOutboundMessages()`

```php
getAllOutboundMessages($page, $limit, $lastId): \TextMagic\Models\GetAllOutboundMessagesPaginatedResponse
```

Get all messages

Get all user oubound messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$lastId = 56; // int | Filter results by ID, selecting all values lesser than the specified ID. Note that the \\'page\\' parameter is ignored when \\'lastId\\' is specified.

try {
    $result = $apiInstance->getAllOutboundMessages($page, $limit, $lastId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. Note that the \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified. | [optional] |

### Return type

[**\TextMagic\Models\GetAllOutboundMessagesPaginatedResponse**](../Model/GetAllOutboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllScheduledMessages()`

```php
getAllScheduledMessages($page, $limit, $status, $orderBy, $direction): \TextMagic\Models\GetAllScheduledMessagesPaginatedResponse
```

Get all scheduled messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$status = 'x'; // string | Fetch schedules with a specific status: a - actual, c - completed, x - all.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getAllScheduledMessages($page, $limit, $status, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllScheduledMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **status** | **string**| Fetch schedules with a specific status: a - actual, c - completed, x - all. | [optional] [default to &#39;x&#39;] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\GetAllScheduledMessagesPaginatedResponse**](../Model/GetAllScheduledMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTemplates()`

```php
getAllTemplates($page, $limit): \TextMagic\Models\GetAllTemplatesPaginatedResponse
```

Get all templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getAllTemplates($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] |
| **limit** | **int**| The number of results per page. | [optional] |

### Return type

[**\TextMagic\Models\GetAllTemplatesPaginatedResponse**](../Model/GetAllTemplatesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableDedicatedNumbers()`

```php
getAvailableDedicatedNumbers($country, $prefix, $tollfree): \TextMagic\Models\GetAvailableDedicatedNumbersResponse
```

Find dedicated numbers available for purchase

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = GB; // string | The 2-letter dedicated number country ISO code.
$prefix = 447155; // int | Desired number prefix. Should include the country code (i.e. 447 for UK phone number format). Leave blank to get all the available numbers for the specified country.
$tollfree = 0; // int | Should we show only tollfree numbers (tollfree available only for US).

try {
    $result = $apiInstance->getAvailableDedicatedNumbers($country, $prefix, $tollfree);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAvailableDedicatedNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| The 2-letter dedicated number country ISO code. | |
| **prefix** | **int**| Desired number prefix. Should include the country code (i.e. 447 for UK phone number format). Leave blank to get all the available numbers for the specified country. | [optional] |
| **tollfree** | **int**| Should we show only tollfree numbers (tollfree available only for US). | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\GetAvailableDedicatedNumbersResponse**](../Model/GetAvailableDedicatedNumbersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableSenderSettingOptions()`

```php
getAvailableSenderSettingOptions($country): \TextMagic\Models\GetAvailableSenderSettingOptionsResponse
```

Get available sender settings

Get all available sender setting options which can be used in the \"from\" parameter of the POST messages method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = US; // string | The 2-letter ISO country ID. If not specified, it returns all the available sender settings.

try {
    $result = $apiInstance->getAvailableSenderSettingOptions($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAvailableSenderSettingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| The 2-letter ISO country ID. If not specified, it returns all the available sender settings. | [optional] |

### Return type

[**\TextMagic\Models\GetAvailableSenderSettingOptionsResponse**](../Model/GetAvailableSenderSettingOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalanceNotificationOptions()`

```php
getBalanceNotificationOptions(): \TextMagic\Models\GetBalanceNotificationOptionsResponse
```

Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBalanceNotificationOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getBalanceNotificationOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetBalanceNotificationOptionsResponse**](../Model/GetBalanceNotificationOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalanceNotificationSettings()`

```php
getBalanceNotificationSettings(): \TextMagic\Models\GetBalanceNotificationSettingsResponse
```

Get balance notification settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBalanceNotificationSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getBalanceNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetBalanceNotificationSettingsResponse**](../Model/GetBalanceNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockedContacts()`

```php
getBlockedContacts($page, $limit, $query, $orderBy, $direction): \TextMagic\Models\GetBlockedContactsPaginatedResponse
```

Get blocked contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$query = 'query_example'; // string | Find blocked contacts by specified search query.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getBlockedContacts($page, $limit, $query, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getBlockedContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **query** | **string**| Find blocked contacts by specified search query. | [optional] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\GetBlockedContactsPaginatedResponse**](../Model/GetBlockedContactsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBulkSession()`

```php
getBulkSession($id): \TextMagic\Models\BulkSession
```

Get bulk session status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getBulkSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getBulkSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\BulkSession**](../Model/BulkSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallbackSettings()`

```php
getCallbackSettings(): \TextMagic\Models\GetCallbackSettingsResponse
```

Fetch callback URL settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCallbackSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getCallbackSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetCallbackSettingsResponse**](../Model/GetCallbackSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChat()`

```php
getChat($id): \TextMagic\Models\Chat
```

Get a single chat

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getChat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\Chat**](../Model/Chat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatByPhone()`

```php
getChatByPhone($phone, $upsert, $reopen): \TextMagic\Models\Chat
```

Find chats by phone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 447860021130; // string
$upsert = 0; // int | Create a new chat if not found.
$reopen = 0; // int | Reopen chat if found or do not change status.

try {
    $result = $apiInstance->getChatByPhone($phone, $upsert, $reopen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getChatByPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**|  | |
| **upsert** | **int**| Create a new chat if not found. | [optional] [default to 0] |
| **reopen** | **int**| Reopen chat if found or do not change status. | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\Chat**](../Model/Chat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatMessages()`

```php
getChatMessages($id, $page, $limit, $query, $start, $end, $direction, $voice, $includeNotes): \TextMagic\Models\GetChatMessagesPaginatedResponse
```

Get chat messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$query = 'query_example'; // string | Find messages by specified search query.
$start = 'start_example'; // string | Return messages since specified timestamp only. Required when `end` parameter specified.
$end = 'end_example'; // string | Return messages up to specified timestamp only. Required when `start` parameter specified.
$direction = 'desc'; // string | Order direction. Default is desc.
$voice = 0; // int | Fetch results with voice calls.
$includeNotes = 0; // int | Fetch results with messenger notes.

try {
    $result = $apiInstance->getChatMessages($id, $page, $limit, $query, $start, $end, $direction, $voice, $includeNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getChatMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **query** | **string**| Find messages by specified search query. | [optional] |
| **start** | **string**| Return messages since specified timestamp only. Required when &#x60;end&#x60; parameter specified. | [optional] |
| **end** | **string**| Return messages up to specified timestamp only. Required when &#x60;start&#x60; parameter specified. | [optional] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |
| **voice** | **int**| Fetch results with voice calls. | [optional] [default to 0] |
| **includeNotes** | **int**| Fetch results with messenger notes. | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\GetChatMessagesPaginatedResponse**](../Model/GetChatMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContact()`

```php
getContact($id): \TextMagic\Models\Contact
```

Get the details of a specific contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Contact ID.

try {
    $result = $apiInstance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Contact ID. | |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactByPhone()`

```php
getContactByPhone($phone): \TextMagic\Models\Contact
```

Get the details of a specific contact by phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 447860021130; // string

try {
    $result = $apiInstance->getContactByPhone($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactByPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**|  | |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactIfBlocked()`

```php
getContactIfBlocked($phone): \TextMagic\Models\Contact
```

Check if a phone number is blocked

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 447860021130; // string | Phone number to check.

try {
    $result = $apiInstance->getContactIfBlocked($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactIfBlocked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Phone number to check. | |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactImportSessionProgress()`

```php
getContactImportSessionProgress($id): \TextMagic\Models\GetContactImportSessionProgressResponse
```

Check import progress

Get contact import session progress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getContactImportSessionProgress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactImportSessionProgress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\GetContactImportSessionProgressResponse**](../Model/GetContactImportSessionProgressResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactNote()`

```php
getContactNote($id): \TextMagic\Models\ContactNote
```

Get a contact note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getContactNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactNotes()`

```php
getContactNotes($id, $page, $limit): \TextMagic\Models\GetContactNotesPaginatedResponse
```

Fetch notes assigned to a given contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getContactNotes($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetContactNotesPaginatedResponse**](../Model/GetContactNotesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($page, $limit, $shared, $orderBy, $direction): \TextMagic\Models\GetContactsPaginatedResponse
```

Get all contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$shared = 0; // int | Should shared contacts be included?
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getContacts($page, $limit, $shared, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **shared** | **int**| Should shared contacts be included? | [optional] [default to 0] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\GetContactsPaginatedResponse**](../Model/GetContactsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactsByListId()`

```php
getContactsByListId($id, $page, $limit, $orderBy, $direction): \TextMagic\Models\GetContactsByListIdPaginatedResponse
```

Get all contacts in a list

A useful synonym for the \"contacts/search\" command with the provided \"listId\" parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Given group ID.
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getContactsByListId($id, $page, $limit, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactsByListId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Given group ID. | |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\GetContactsByListIdPaginatedResponse**](../Model/GetContactsByListIdPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentUser()`

```php
getCurrentUser(): \TextMagic\Models\User
```

Get current account information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomField()`

```php
getCustomField($id): \TextMagic\Models\UserCustomField
```

Get the details of a specific custom field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getCustomField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\UserCustomField**](../Model/UserCustomField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomFields()`

```php
getCustomFields($page, $limit): \TextMagic\Models\GetCustomFieldsPaginatedResponse
```

Get all custom fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getCustomFields($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetCustomFieldsPaginatedResponse**](../Model/GetCustomFieldsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDedicatedNumber()`

```php
getDedicatedNumber($id): \TextMagic\Models\UsersInbound
```

Get the details of a specific dedicated number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getDedicatedNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\UsersInbound**](../Model/UsersInbound.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSenders()`

```php
getEmailSenders($domainId): \TextMagic\Models\GetEmailSendersResponse
```

Get list of email senders

Retrieves a list of configured email senders available for creating email campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainId = 56; // int | Filter email senders by specific domain ID.

try {
    $result = $apiInstance->getEmailSenders($domainId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getEmailSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainId** | **int**| Filter email senders by specific domain ID. | [optional] |

### Return type

[**\TextMagic\Models\GetEmailSendersResponse**](../Model/GetEmailSendersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFavorites()`

```php
getFavorites($page, $limit, $query): \TextMagic\Models\GetFavoritesPaginatedResponse
```

Get favorite contacts and lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$query = A; // string | Find contacts or lists by specified search query.

try {
    $result = $apiInstance->getFavorites($page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getFavorites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **query** | **string**| Find contacts or lists by specified search query. | [optional] |

### Return type

[**\TextMagic\Models\GetFavoritesPaginatedResponse**](../Model/GetFavoritesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundMessage()`

```php
getInboundMessage($id): \TextMagic\Models\MessageIn
```

Get a single inbound message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1782832; // int | The unique numeric ID for the inbound message.

try {
    $result = $apiInstance->getInboundMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getInboundMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The unique numeric ID for the inbound message. | |

### Return type

[**\TextMagic\Models\MessageIn**](../Model/MessageIn.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundMessagesNotificationSettings()`

```php
getInboundMessagesNotificationSettings(): \TextMagic\Models\GetInboundMessagesNotificationSettingsResponse
```

Get inbound messages notification settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInboundMessagesNotificationSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getInboundMessagesNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetInboundMessagesNotificationSettingsResponse**](../Model/GetInboundMessagesNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($page, $limit): \TextMagic\Models\GetInvoicesPaginatedResponse
```

Get all invoices

With the TextMagic API, you can check the invoices and transactions for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getInvoices($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetInvoicesPaginatedResponse**](../Model/GetInvoicesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getList()`

```php
getList($id): \TextMagic\Models\ModelList
```

Get the details of a specific list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\ModelList**](../Model/ModelList.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListContactsIds()`

```php
getListContactsIds($id): int[]
```

Get all contact IDs in a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getListContactsIds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getListContactsIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

**int[]**

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLists()`

```php
getLists($page, $limit, $orderBy, $direction, $favoriteOnly, $onlyMine): \TextMagic\Models\GetListsPaginatedResponse
```

Get all lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The current fetched page.
$limit = 10; // int | The number of results per page.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.
$favoriteOnly = 0; // int | Return only favorited lists.
$onlyMine = 0; // int | Return only current user lists.

try {
    $result = $apiInstance->getLists($page, $limit, $orderBy, $direction, $favoriteOnly, $onlyMine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The current fetched page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |
| **favoriteOnly** | **int**| Return only favorited lists. | [optional] [default to 0] |
| **onlyMine** | **int**| Return only current user lists. | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\GetListsPaginatedResponse**](../Model/GetListsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListsOfContact()`

```php
getListsOfContact($id, $page, $limit): \TextMagic\Models\GetListsOfContactPaginatedResponse
```

Get a contact's lists

Get all the lists in which a contact is included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getListsOfContact($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getListsOfContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetListsOfContactPaginatedResponse**](../Model/GetListsOfContactPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagePreview()`

```php
getMessagePreview($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry): \TextMagic\Models\GetMessagePreviewResponse
```

Preview message

Get a messages preview (with dynamic fields merged) of up to 100 messages per session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = Test message test; // string | Message text. Required if **template_id** is not set.
$templateId = 1; // int | Template used instead of message text. Required if **text** is not set.
$sendingTime = 1565606455; // int | DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time is in unix timestamp format. Default is now.
$sendingDateTime = 2020-05-27 13:02:33; // string | Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone.
$sendingTimezone = America/Buenos_Aires; // string | The ID or ISO-name of the timezone used for sending when the sendingDateTime parameter is set, e.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone.
$contacts = 1,2,3,4; // string | Comma-separated array of contact resources id message will be sent to.
$lists = 1,2,3,4; // string | Comma-separated array of list resources id message will be sent to.
$phones = 447860021130,447860021131; // string | Comma-separated array of E.164 phone numbers message will be sent to.
$cutExtra = 0; // int | Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead.
$partsCount = 6; // int | Maximum message parts count (Textmagic allows sending of 1 to 6 message parts).
$referenceId = 1; // int | Custom message reference id which can be used in your application infrastructure.
$from = Test Sender ID; // string | One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs).
$rule = FREQ=YEARLY;BYMONTH=1;BYMONTHDAY=1;COUNT=1; // string | An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details.
$createChat = 0; // int | Should the sending method try to create new Chat(if not exist) with specified recipients?
$tts = 0; // int | Send Text-to-Speech message.
$local = 0; // int | Treat phone numbers passed in the \\'phones\\' field as local.
$localCountry = US; // string | The 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is the account country.

try {
    $result = $apiInstance->getMessagePreview($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessagePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **text** | **string**| Message text. Required if **template_id** is not set. | [optional] |
| **templateId** | **int**| Template used instead of message text. Required if **text** is not set. | [optional] |
| **sendingTime** | **int**| DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time is in unix timestamp format. Default is now. | [optional] |
| **sendingDateTime** | **string**| Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone. | [optional] |
| **sendingTimezone** | **string**| The ID or ISO-name of the timezone used for sending when the sendingDateTime parameter is set, e.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone. | [optional] |
| **contacts** | **string**| Comma-separated array of contact resources id message will be sent to. | [optional] |
| **lists** | **string**| Comma-separated array of list resources id message will be sent to. | [optional] |
| **phones** | **string**| Comma-separated array of E.164 phone numbers message will be sent to. | [optional] |
| **cutExtra** | **int**| Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. | [optional] [default to 0] |
| **partsCount** | **int**| Maximum message parts count (Textmagic allows sending of 1 to 6 message parts). | [optional] [default to 6] |
| **referenceId** | **int**| Custom message reference id which can be used in your application infrastructure. | [optional] |
| **from** | **string**| One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs). | [optional] |
| **rule** | **string**| An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details. | [optional] |
| **createChat** | **int**| Should the sending method try to create new Chat(if not exist) with specified recipients? | [optional] [default to 0] |
| **tts** | **int**| Send Text-to-Speech message. | [optional] [default to 0] |
| **local** | **int**| Treat phone numbers passed in the \\&#39;phones\\&#39; field as local. | [optional] [default to 0] |
| **localCountry** | **string**| The 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is the account country. | [optional] |

### Return type

[**\TextMagic\Models\GetMessagePreviewResponse**](../Model/GetMessagePreviewResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagePrice()`

```php
getMessagePrice($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry): \TextMagic\Models\GetMessagePriceResponse
```

Check message price

Check pricing for a new outbound message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeBlocked = 0; // int | Should we show the pricing for blocked contacts?
$text = Test message test; // string | Message text. Required if the **template_id** is not set.
$templateId = 1; // int | Template used instead of message text. Required if the **text** is not set.
$sendingTime = 1565606455; // int | DEPRECATED, consider using the sendingDateTime and sendingTimezone parameters instead: optional (required with rrule set). Message sending time is in unix timestamp format. Default is now.
$sendingDateTime = 2020-05-27 13:02:33; // string | Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone.
$sendingTimezone = America/Buenos_Aires; // string | The ID or ISO-name of the timezone used for sending when sendingDateTime parameter is set, e.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone.
$contacts = 1,2,3,4; // string | Comma-separated array of contact resources id message will be sent to.
$lists = 1,2,3,4; // string | Comma-separated array of list resources id message will be sent to.
$phones = 447860021130,447860021131; // string | Comma-separated array of E.164 phone numbers message will be sent to.
$cutExtra = 0; // int | Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead.
$partsCount = 6; // int | Maximum message parts count (Textmagic allows sending 1 to 6 message parts).
$referenceId = 1; // int | Custom message reference id which can be used in your application infrastructure.
$from = Test Sender ID; // string | One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs).
$rule = FREQ=YEARLY;BYMONTH=1;BYMONTHDAY=1;COUNT=1; // string | An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details.
$createChat = 0; // int | Should the sending method try to create new Chat (if not exist) with specified recipients?
$tts = 0; // int | Send a Text-to-Speech message.
$local = 0; // int | Treat phone numbers passed in the \\'phones\\' field as local.
$localCountry = US; // string | The 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is the account country.

try {
    $result = $apiInstance->getMessagePrice($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessagePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **includeBlocked** | **int**| Should we show the pricing for blocked contacts? | [optional] [default to 0] |
| **text** | **string**| Message text. Required if the **template_id** is not set. | [optional] |
| **templateId** | **int**| Template used instead of message text. Required if the **text** is not set. | [optional] |
| **sendingTime** | **int**| DEPRECATED, consider using the sendingDateTime and sendingTimezone parameters instead: optional (required with rrule set). Message sending time is in unix timestamp format. Default is now. | [optional] |
| **sendingDateTime** | **string**| Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone. | [optional] |
| **sendingTimezone** | **string**| The ID or ISO-name of the timezone used for sending when sendingDateTime parameter is set, e.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone. | [optional] |
| **contacts** | **string**| Comma-separated array of contact resources id message will be sent to. | [optional] |
| **lists** | **string**| Comma-separated array of list resources id message will be sent to. | [optional] |
| **phones** | **string**| Comma-separated array of E.164 phone numbers message will be sent to. | [optional] |
| **cutExtra** | **int**| Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. | [optional] [default to 0] |
| **partsCount** | **int**| Maximum message parts count (Textmagic allows sending 1 to 6 message parts). | [optional] [default to 6] |
| **referenceId** | **int**| Custom message reference id which can be used in your application infrastructure. | [optional] |
| **from** | **string**| One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs). | [optional] |
| **rule** | **string**| An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details. | [optional] |
| **createChat** | **int**| Should the sending method try to create new Chat (if not exist) with specified recipients? | [optional] [default to 0] |
| **tts** | **int**| Send a Text-to-Speech message. | [optional] [default to 0] |
| **local** | **int**| Treat phone numbers passed in the \\&#39;phones\\&#39; field as local. | [optional] [default to 0] |
| **localCountry** | **string**| The 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is the account country. | [optional] |

### Return type

[**\TextMagic\Models\GetMessagePriceResponse**](../Model/GetMessagePriceResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessageSession()`

```php
getMessageSession($id): \TextMagic\Models\MessageSession
```

Get a session`s details

Get a specific session’s details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Session ID.

try {
    $result = $apiInstance->getMessageSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessageSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Session ID. | |

### Return type

[**\TextMagic\Models\MessageSession**](../Model/MessageSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessageSessionStat()`

```php
getMessageSessionStat($id, $includeDeleted): \TextMagic\Models\GetMessageSessionStatResponse
```

Get a session`s statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$includeDeleted = 0; // int | Search also in deleted messages.

try {
    $result = $apiInstance->getMessageSessionStat($id, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessageSessionStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **includeDeleted** | **int**| Search also in deleted messages. | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\GetMessageSessionStatResponse**](../Model/GetMessageSessionStatResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagesBySessionId()`

```php
getMessagesBySessionId($id, $page, $limit, $statuses, $includeDeleted): \TextMagic\Models\GetMessagesBySessionIdPaginatedResponse
```

Get a session`s messages

A useful synonym for the \"messages/search\" command with the provided \"sessionId\" parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$statuses = 'statuses_example'; // string | Find messages by status.
$includeDeleted = 0; // int | Search also in deleted messages.

try {
    $result = $apiInstance->getMessagesBySessionId($id, $page, $limit, $statuses, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessagesBySessionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **statuses** | **string**| Find messages by status. | [optional] |
| **includeDeleted** | **int**| Search also in deleted messages. | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\GetMessagesBySessionIdPaginatedResponse**](../Model/GetMessagesBySessionIdPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagingCounters()`

```php
getMessagingCounters(): \TextMagic\Models\GetMessagingCountersResponse
```

Get sent/received messages counters values

Get total contacts, sent messages and received messages counters values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMessagingCounters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessagingCounters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetMessagingCountersResponse**](../Model/GetMessagingCountersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundMessage()`

```php
getOutboundMessage($id): \TextMagic\Models\MessageOut
```

Get a single message

Get a single outgoing message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getOutboundMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getOutboundMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\MessageOut**](../Model/MessageOut.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundMessagesHistory()`

```php
getOutboundMessagesHistory($limit, $lastId, $query, $orderBy, $direction): \TextMagic\Models\GetOutboundMessagesHistoryPaginatedResponse
```

Get history

Get the outbound messages history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | The number of results per page.
$lastId = 56; // int | Filter results by ID, selecting all values lesser than the specified ID.
$query = 'query_example'; // string | Find message by specified search query.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getOutboundMessagesHistory($limit, $lastId, $query, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getOutboundMessagesHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. | [optional] |
| **query** | **string**| Find message by specified search query. | [optional] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\GetOutboundMessagesHistoryPaginatedResponse**](../Model/GetOutboundMessagesHistoryPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduledMessage()`

```php
getScheduledMessage($id): \TextMagic\Models\MessagesIcs
```

Get a single scheduled message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getScheduledMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\MessagesIcs**](../Model/MessagesIcs.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSenderId()`

```php
getSenderId($id): \TextMagic\Models\SenderId
```

Get the details of a specific Sender ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getSenderId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\SenderId**](../Model/SenderId.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSenderIds()`

```php
getSenderIds($page, $limit): \TextMagic\Models\GetSenderIdsPaginatedResponse
```

Get all your approved Sender IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getSenderIds($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSenderIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetSenderIdsPaginatedResponse**](../Model/GetSenderIdsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSenderSettings()`

```php
getSenderSettings($country): \TextMagic\Models\GetSenderSettingsResponse
```

Get current sender settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = US; // string | Return sender settings enabled for sending to a specified country. Should be 2 upper-case characters.

try {
    $result = $apiInstance->getSenderSettings($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSenderSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| Return sender settings enabled for sending to a specified country. Should be 2 upper-case characters. | [optional] |

### Return type

[**\TextMagic\Models\GetSenderSettingsResponse**](../Model/GetSenderSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpendingStat()`

```php
getSpendingStat($page, $limit, $start, $end): \TextMagic\Models\GetSpendingStatPaginatedResponse
```

Get spending statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$start = 2018-11-11 11:11; // string | Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is 7 days prior.
$end = 2019-11-11 11:11; // string | Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is today.

try {
    $result = $apiInstance->getSpendingStat($page, $limit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSpendingStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **start** | **string**| Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is 7 days prior. | [optional] |
| **end** | **string**| Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is today. | [optional] |

### Return type

[**\TextMagic\Models\GetSpendingStatPaginatedResponse**](../Model/GetSpendingStatPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplate()`

```php
getTemplate($id): \TextMagic\Models\MessageTemplate
```

Get a template`s details

Get a single template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnreadMessagesTotal()`

```php
getUnreadMessagesTotal(): \TextMagic\Models\GetUnreadMessagesTotalResponse
```

Get unread messages number

Get the total amount of unread messages in the current user chats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnreadMessagesTotal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getUnreadMessagesTotal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetUnreadMessagesTotalResponse**](../Model/GetUnreadMessagesTotalResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnsubscribedContact()`

```php
getUnsubscribedContact($id): \TextMagic\Models\UnsubscribedContact
```

Get the details of a specific unsubscribed contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int

try {
    $result = $apiInstance->getUnsubscribedContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getUnsubscribedContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\TextMagic\Models\UnsubscribedContact**](../Model/UnsubscribedContact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnsubscribers()`

```php
getUnsubscribers($page, $limit): \TextMagic\Models\GetUnsubscribersPaginatedResponse
```

Get all unsubscribed contacts

When one of your message recipients sends a request with one of the [STOP-words](https://www.textmagic.com/sms-stop-command/), they will be immediately opted-out of your send lists and their contact status will change to an unsubscribed contact. To retrieve information on all contacts who have unsubscribed status, use:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getUnsubscribers($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getUnsubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |

### Return type

[**\TextMagic\Models\GetUnsubscribersPaginatedResponse**](../Model/GetUnsubscribersPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserDedicatedNumbers()`

```php
getUserDedicatedNumbers($page, $limit, $surveyId): \TextMagic\Models\GetUserDedicatedNumbersPaginatedResponse
```

Get all your dedicated numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$surveyId = 56; // int | Fetch only those numbers that are ready for the survey.

try {
    $result = $apiInstance->getUserDedicatedNumbers($page, $limit, $surveyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getUserDedicatedNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **surveyId** | **int**| Fetch only those numbers that are ready for the survey. | [optional] |

### Return type

[**\TextMagic\Models\GetUserDedicatedNumbersPaginatedResponse**](../Model/GetUserDedicatedNumbersPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importContacts()`

```php
importContacts($column, $file, $listId, $listName): \TextMagic\Models\ResourceLinkResponse
```

Import contacts

Import contacts from the CSV, XLS or XLSX file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$column = 0:firstName;1:lastName;3:phone;4:email; // string | Import file column mapping. The string must contain sub-strings of mapping in format `columnNumber:field` glued by `;`. For example: `0:firstName;1:lastName;3:phone;4:email` where the value before `:` is a number of the column in the file, and the value after `:` is a field of the newly created contact or the ID of a custom field. Numbers of columns begin from zero. Allowed built-in contact fields are: `firstName`, `lastName`, `phone`, `email`. Existing of `phone` mapping is required.
$file = '/path/to/file.txt'; // \SplFileObject | File containing contacts in csv or xls(x) formats.
$listId = 443; // int | List that ID contacts will be imported to. Ignored if `listName` is specified.
$listName = A new list; // string | List name. This list will be created during import. If such name is already taken, an ordinal (1, 2, ...) will be added to the end. Ignored if `listId` is specified.

try {
    $result = $apiInstance->importContacts($column, $file, $listId, $listName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->importContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **column** | **string**| Import file column mapping. The string must contain sub-strings of mapping in format &#x60;columnNumber:field&#x60; glued by &#x60;;&#x60;. For example: &#x60;0:firstName;1:lastName;3:phone;4:email&#x60; where the value before &#x60;:&#x60; is a number of the column in the file, and the value after &#x60;:&#x60; is a field of the newly created contact or the ID of a custom field. Numbers of columns begin from zero. Allowed built-in contact fields are: &#x60;firstName&#x60;, &#x60;lastName&#x60;, &#x60;phone&#x60;, &#x60;email&#x60;. Existing of &#x60;phone&#x60; mapping is required. | |
| **file** | **\SplFileObject****\SplFileObject**| File containing contacts in csv or xls(x) formats. | |
| **listId** | **int**| List that ID contacts will be imported to. Ignored if &#x60;listName&#x60; is specified. | [optional] |
| **listName** | **string**| List name. This list will be created during import. If such name is already taken, an ordinal (1, 2, ...) will be added to the end. Ignored if &#x60;listId&#x60; is specified. | [optional] |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markChatsReadBulk()`

```php
markChatsReadBulk($markChatsReadBulkInputObject)
```

Mark chats as read (bulk)

Mark several chats as read by chat IDs or mark all chats as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$markChatsReadBulkInputObject = new \TextMagic\Models\MarkChatsUnreadBulkRequest(); // \TextMagic\Models\MarkChatsUnreadBulkRequest

try {
    $apiInstance->markChatsReadBulk($markChatsReadBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->markChatsReadBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **markChatsReadBulkInputObject** | [**\TextMagic\Models\MarkChatsUnreadBulkRequest**](../Model/MarkChatsUnreadBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markChatsUnreadBulk()`

```php
markChatsUnreadBulk($markChatsUnreadBulkInputObject)
```

Mark chats as unread (bulk)

Mark several chats as UNread by chat IDs or mark all chats as UNread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$markChatsUnreadBulkInputObject = new \TextMagic\Models\MarkChatsUnreadBulkRequest(); // \TextMagic\Models\MarkChatsUnreadBulkRequest

try {
    $apiInstance->markChatsUnreadBulk($markChatsUnreadBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->markChatsUnreadBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **markChatsUnreadBulkInputObject** | [**\TextMagic\Models\MarkChatsUnreadBulkRequest**](../Model/MarkChatsUnreadBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `muteChat()`

```php
muteChat($muteChatInputObject): \TextMagic\Models\ResourceLinkResponse
```

Mute chat sounds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muteChatInputObject = new \TextMagic\Models\MuteChatRequest(); // \TextMagic\Models\MuteChatRequest

try {
    $result = $apiInstance->muteChat($muteChatInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->muteChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **muteChatInputObject** | [**\TextMagic\Models\MuteChatRequest**](../Model/MuteChatRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `muteChatsBulk()`

```php
muteChatsBulk($muteChatsBulkInputObject)
```

Mute chats (bulk)

Mute several chats by chat ids or mute all chats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muteChatsBulkInputObject = new \TextMagic\Models\MuteChatsBulkRequest(); // \TextMagic\Models\MuteChatsBulkRequest

try {
    $apiInstance->muteChatsBulk($muteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->muteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **muteChatsBulkInputObject** | [**\TextMagic\Models\MuteChatsBulkRequest**](../Model/MuteChatsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ping()`

```php
ping(): \TextMagic\Models\PingResponse
```

Ping

Make a simple ping request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\PingResponse**](../Model/PingResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reopenChatsBulk()`

```php
reopenChatsBulk($reopenChatsBulkInputObject)
```

Reopen chats (bulk)

Reopen chats by chat IDs or reopen all chats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reopenChatsBulkInputObject = new \TextMagic\Models\MarkChatsUnreadBulkRequest(); // \TextMagic\Models\MarkChatsUnreadBulkRequest

try {
    $apiInstance->reopenChatsBulk($reopenChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->reopenChatsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reopenChatsBulkInputObject** | [**\TextMagic\Models\MarkChatsUnreadBulkRequest**](../Model/MarkChatsUnreadBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestSenderId()`

```php
requestSenderId($requestSenderIdInputObject): \TextMagic\Models\ResourceLinkResponse
```

Apply for a new Sender ID

> Sender IDs are shared among all of your sub-accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestSenderIdInputObject = new \TextMagic\Models\RequestSenderIdRequest(); // \TextMagic\Models\RequestSenderIdRequest

try {
    $result = $apiInstance->requestSenderId($requestSenderIdInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->requestSenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestSenderIdInputObject** | [**\TextMagic\Models\RequestSenderIdRequest**](../Model/RequestSenderIdRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleEmailCampaign()`

```php
scheduleEmailCampaign($scheduleEmailCampaignInputObject): \TextMagic\Models\ScheduleEmailCampaignResponse
```

Schedule new email campaign

Creates a new scheduled email campaign that will be sent at a specified time or according to a recurring schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleEmailCampaignInputObject = new \TextMagic\Models\ScheduleEmailCampaignRequest(); // \TextMagic\Models\ScheduleEmailCampaignRequest

try {
    $result = $apiInstance->scheduleEmailCampaign($scheduleEmailCampaignInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->scheduleEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheduleEmailCampaignInputObject** | [**\TextMagic\Models\ScheduleEmailCampaignRequest**](../Model/ScheduleEmailCampaignRequest.md)|  | |

### Return type

[**\TextMagic\Models\ScheduleEmailCampaignResponse**](../Model/ScheduleEmailCampaignResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchChats()`

```php
searchChats($page, $limit, $query): \TextMagic\Models\SearchChatsPaginatedResponse
```

Find chats by message text

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$query = 'query_example'; // string | Find chats by specified search query.

try {
    $result = $apiInstance->searchChats($page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **query** | **string**| Find chats by specified search query. | [optional] |

### Return type

[**\TextMagic\Models\SearchChatsPaginatedResponse**](../Model/SearchChatsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchChatsByIds()`

```php
searchChatsByIds($page, $limit, $ids): \TextMagic\Models\SearchChatsByIdsPaginatedResponse
```

Find chats (bulk)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$ids = 'ids_example'; // string | Find chats by ID(s).

try {
    $result = $apiInstance->searchChatsByIds($page, $limit, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchChatsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **ids** | **string**| Find chats by ID(s). | [optional] |

### Return type

[**\TextMagic\Models\SearchChatsByIdsPaginatedResponse**](../Model/SearchChatsByIdsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchChatsByReceipent()`

```php
searchChatsByReceipent($page, $limit, $query, $orderBy): \TextMagic\Models\SearchChatsByReceipentPaginatedResponse
```

Find chats by recipient

Find chats by recipient (contact, list name or phone number).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$query = 'query_example'; // string | Find chats by specified search query.
$orderBy = 'id'; // string | Order results by some field. Default is id.

try {
    $result = $apiInstance->searchChatsByReceipent($page, $limit, $query, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchChatsByReceipent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **query** | **string**| Find chats by specified search query. | [optional] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |

### Return type

[**\TextMagic\Models\SearchChatsByReceipentPaginatedResponse**](../Model/SearchChatsByReceipentPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchContacts()`

```php
searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $exactMatch, $country, $orderBy, $direction, $tagIds): \TextMagic\Models\SearchContactsPaginatedResponse
```

Find contacts by given criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$shared = 0; // int | Should shared contacts be included?
$ids = 'ids_example'; // string | Find contacts by IDs.
$listId = 56; // int | Find contacts by List ID.
$includeBlocked = 56; // int | Should blocked contacts be included?
$query = 'query_example'; // string | Find contacts by specified search query.
$local = 0; // int | Treat phone number passed in the \"query\" field as local. Default is 0.
$exactMatch = 0; // int | Return only exactly matching contacts. Default is 0.
$country = 'country_example'; // string | The 2-letter ISO country code for local phone numbers, used when \"local\" is set to true. Default is the account country.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.
$tagIds = 'tagIds_example'; // string | Find contacts by tag ID(s). Multiple IDs can be separated by comma.

try {
    $result = $apiInstance->searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $exactMatch, $country, $orderBy, $direction, $tagIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **shared** | **int**| Should shared contacts be included? | [optional] [default to 0] |
| **ids** | **string**| Find contacts by IDs. | [optional] |
| **listId** | **int**| Find contacts by List ID. | [optional] |
| **includeBlocked** | **int**| Should blocked contacts be included? | [optional] |
| **query** | **string**| Find contacts by specified search query. | [optional] |
| **local** | **int**| Treat phone number passed in the \&quot;query\&quot; field as local. Default is 0. | [optional] [default to 0] |
| **exactMatch** | **int**| Return only exactly matching contacts. Default is 0. | [optional] [default to 0] |
| **country** | **string**| The 2-letter ISO country code for local phone numbers, used when \&quot;local\&quot; is set to true. Default is the account country. | [optional] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |
| **tagIds** | **string**| Find contacts by tag ID(s). Multiple IDs can be separated by comma. | [optional] |

### Return type

[**\TextMagic\Models\SearchContactsPaginatedResponse**](../Model/SearchContactsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchInboundMessages()`

```php
searchInboundMessages($page, $limit, $ids, $query, $orderBy, $direction, $expand): \TextMagic\Models\SearchInboundMessagesPaginatedResponse
```

Find inbound messages

Find inbound messages by given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$ids = 'ids_example'; // string | Find message by ID(s).
$query = 'query_example'; // string | Find recipients by specified search query.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.
$expand = 0; // int | Expand by adding firstName, lastName and contactId.

try {
    $result = $apiInstance->searchInboundMessages($page, $limit, $ids, $query, $orderBy, $direction, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchInboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **ids** | **string**| Find message by ID(s). | [optional] |
| **query** | **string**| Find recipients by specified search query. | [optional] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |
| **expand** | **int**| Expand by adding firstName, lastName and contactId. | [optional] [default to 0] |

### Return type

[**\TextMagic\Models\SearchInboundMessagesPaginatedResponse**](../Model/SearchInboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchLists()`

```php
searchLists($page, $limit, $ids, $query, $onlyMine, $onlyDefault, $orderBy, $direction): \TextMagic\Models\SearchListsPaginatedResponse
```

Find lists by given criteria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$ids = 1,2,3,4; // string | Find lists by IDs.
$query = A; // string | Find lists by specified search query.
$onlyMine = 0; // int | Return only current user lists.
$onlyDefault = 0; // int | Return only default lists.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->searchLists($page, $limit, $ids, $query, $onlyMine, $onlyDefault, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **ids** | **string**| Find lists by IDs. | [optional] |
| **query** | **string**| Find lists by specified search query. | [optional] |
| **onlyMine** | **int**| Return only current user lists. | [optional] [default to 0] |
| **onlyDefault** | **int**| Return only default lists. | [optional] [default to 0] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\SearchListsPaginatedResponse**](../Model/SearchListsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchOutboundMessages()`

```php
searchOutboundMessages($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query): \TextMagic\Models\SearchOutboundMessagesPaginatedResponse
```

Find messages

Find outbound messages by given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$lastId = 56; // int | Filter results by ID, selecting all values lesser than the specified ID. Note that the \\'page\\' parameter is ignored when \\'lastId\\' is specified.
$ids = 'ids_example'; // string | Find message by ID(s).
$sessionId = 56; // int | Find messages by session ID.
$statuses = q; // string | Find messages by status.
$includeDeleted = 0; // int | Search also in deleted messages.
$query = 'query_example'; // string | Find messages by specified search query.

try {
    $result = $apiInstance->searchOutboundMessages($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. Note that the \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified. | [optional] |
| **ids** | **string**| Find message by ID(s). | [optional] |
| **sessionId** | **int**| Find messages by session ID. | [optional] |
| **statuses** | **string**| Find messages by status. | [optional] |
| **includeDeleted** | **int**| Search also in deleted messages. | [optional] [default to 0] |
| **query** | **string**| Find messages by specified search query. | [optional] |

### Return type

[**\TextMagic\Models\SearchOutboundMessagesPaginatedResponse**](../Model/SearchOutboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchScheduledMessages()`

```php
searchScheduledMessages($page, $limit, $query, $ids, $status, $orderBy, $direction): \TextMagic\Models\SearchScheduledMessagesPaginatedResponse
```

Find scheduled messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$query = 'query_example'; // string | Find messages by specified search query.
$ids = 'ids_example'; // string | Find schedules by ID(s).
$status = 'x'; // string | Fetch schedules with a specific status: a - actual, c - completed, x - all.
$orderBy = 'id'; // string | Order results by some field. Default is id.
$direction = 'desc'; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->searchScheduledMessages($page, $limit, $query, $ids, $status, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchScheduledMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **query** | **string**| Find messages by specified search query. | [optional] |
| **ids** | **string**| Find schedules by ID(s). | [optional] |
| **status** | **string**| Fetch schedules with a specific status: a - actual, c - completed, x - all. | [optional] [default to &#39;x&#39;] |
| **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to &#39;id&#39;] |
| **direction** | **string**| Order direction. Default is desc. | [optional] [default to &#39;desc&#39;] |

### Return type

[**\TextMagic\Models\SearchScheduledMessagesPaginatedResponse**](../Model/SearchScheduledMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchTemplates()`

```php
searchTemplates($page, $limit, $ids, $name, $content): \TextMagic\Models\SearchTemplatesPaginatedResponse
```

Find templates by criteria

Find user templates by given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$ids = 'ids_example'; // string | Find template by ID(s).
$name = 'name_example'; // string | Find template by name.
$content = 'content_example'; // string | Find template by content.

try {
    $result = $apiInstance->searchTemplates($page, $limit, $ids, $name, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Fetch specified results page. | [optional] [default to 1] |
| **limit** | **int**| The number of results per page. | [optional] [default to 10] |
| **ids** | **string**| Find template by ID(s). | [optional] |
| **name** | **string**| Find template by name. | [optional] |
| **content** | **string**| Find template by content. | [optional] |

### Return type

[**\TextMagic\Models\SearchTemplatesPaginatedResponse**](../Model/SearchTemplatesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessage()`

```php
sendMessage($sendMessageInputObject): \TextMagic\Models\SendMessageResponse
```

Send message

This is the main entrypoint to send messages. See the examples above for the reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendMessageInputObject = new \TextMagic\Models\SendMessageRequest(); // \TextMagic\Models\SendMessageRequest

try {
    $result = $apiInstance->sendMessage($sendMessageInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendMessageInputObject** | [**\TextMagic\Models\SendMessageRequest**](../Model/SendMessageRequest.md)|  | |

### Return type

[**\TextMagic\Models\SendMessageResponse**](../Model/SendMessageResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setChatStatus()`

```php
setChatStatus($setChatStatusInputObject): \TextMagic\Models\ResourceLinkResponse
```

Change chat status

Set the status of the chat given by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setChatStatusInputObject = new \TextMagic\Models\SetChatStatusRequest(); // \TextMagic\Models\SetChatStatusRequest

try {
    $result = $apiInstance->setChatStatus($setChatStatusInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->setChatStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setChatStatusInputObject** | [**\TextMagic\Models\SetChatStatusRequest**](../Model/SetChatStatusRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockContact()`

```php
unblockContact($unblockContactInputObject)
```

Unblock a contact by phone number

Unblock a contact by phone number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unblockContactInputObject = new \TextMagic\Models\BlockContactRequest(); // \TextMagic\Models\BlockContactRequest

try {
    $apiInstance->unblockContact($unblockContactInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unblockContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unblockContactInputObject** | [**\TextMagic\Models\BlockContactRequest**](../Model/BlockContactRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockContactsBulk()`

```php
unblockContactsBulk($unblockContactsBulkInputObject)
```

Unblock contacts (bulk)

Unblock several contacts by blocked contact IDs or unblock all contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unblockContactsBulkInputObject = new \TextMagic\Models\UnblockContactsBulkRequest(); // \TextMagic\Models\UnblockContactsBulkRequest

try {
    $apiInstance->unblockContactsBulk($unblockContactsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unblockContactsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unblockContactsBulkInputObject** | [**\TextMagic\Models\UnblockContactsBulkRequest**](../Model/UnblockContactsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unmuteChatsBulk()`

```php
unmuteChatsBulk($unmuteChatsBulkInputObject)
```

Unmute chats (bulk)

Unmute several chats by chat ids or unmute all chats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unmuteChatsBulkInputObject = new \TextMagic\Models\UnmuteChatsBulkRequest(); // \TextMagic\Models\UnmuteChatsBulkRequest

try {
    $apiInstance->unmuteChatsBulk($unmuteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unmuteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unmuteChatsBulkInputObject** | [**\TextMagic\Models\UnmuteChatsBulkRequest**](../Model/UnmuteChatsBulkRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeContact()`

```php
unsubscribeContact($unsubscribeContactInputObject): \TextMagic\Models\ResourceLinkResponse
```

Manually unsubscribe a contact

> Please note, if you unsubscribe a contact, this action cannot be reversed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unsubscribeContactInputObject = new \TextMagic\Models\UnsubscribeContactRequest(); // \TextMagic\Models\UnsubscribeContactRequest

try {
    $result = $apiInstance->unsubscribeContact($unsubscribeContactInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unsubscribeContactInputObject** | [**\TextMagic\Models\UnsubscribeContactRequest**](../Model/UnsubscribeContactRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBalanceNotificationSettings()`

```php
updateBalanceNotificationSettings($updateBalanceNotificationSettingsInputObject)
```

Update balance notification settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateBalanceNotificationSettingsInputObject = new \TextMagic\Models\UpdateBalanceNotificationSettingsRequest(); // \TextMagic\Models\UpdateBalanceNotificationSettingsRequest

try {
    $apiInstance->updateBalanceNotificationSettings($updateBalanceNotificationSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateBalanceNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateBalanceNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateBalanceNotificationSettingsRequest**](../Model/UpdateBalanceNotificationSettingsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCallbackSettings()`

```php
updateCallbackSettings($updateCallbackSettingsInputObject)
```

Update callback URL settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCallbackSettingsInputObject = new \TextMagic\Models\UpdateCallbackSettingsRequest(); // \TextMagic\Models\UpdateCallbackSettingsRequest

try {
    $apiInstance->updateCallbackSettings($updateCallbackSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCallbackSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateCallbackSettingsInputObject** | [**\TextMagic\Models\UpdateCallbackSettingsRequest**](../Model/UpdateCallbackSettingsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChatDesktopNotificationSettings()`

```php
updateChatDesktopNotificationSettings($updateChatDesktopNotificationSettingsInputObject)
```

Update chat desktop notification settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateChatDesktopNotificationSettingsInputObject = new \TextMagic\Models\UpdateChatDesktopNotificationSettingsRequest(); // \TextMagic\Models\UpdateChatDesktopNotificationSettingsRequest

try {
    $apiInstance->updateChatDesktopNotificationSettings($updateChatDesktopNotificationSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateChatDesktopNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateChatDesktopNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateChatDesktopNotificationSettingsRequest**](../Model/UpdateChatDesktopNotificationSettingsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($id, $updateContactInputObject): \TextMagic\Models\ResourceLinkResponse
```

Edit a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$updateContactInputObject = new \TextMagic\Models\UpdateContactRequest(); // \TextMagic\Models\UpdateContactRequest

try {
    $result = $apiInstance->updateContact($id, $updateContactInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **updateContactInputObject** | [**\TextMagic\Models\UpdateContactRequest**](../Model/UpdateContactRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContactNote()`

```php
updateContactNote($id, $updateContactNoteInputObject): \TextMagic\Models\ResourceLinkResponse
```

Update a contact note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$updateContactNoteInputObject = new \TextMagic\Models\UpdateContactNoteRequest(); // \TextMagic\Models\UpdateContactNoteRequest

try {
    $result = $apiInstance->updateContactNote($id, $updateContactNoteInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateContactNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **updateContactNoteInputObject** | [**\TextMagic\Models\UpdateContactNoteRequest**](../Model/UpdateContactNoteRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCurrentUser()`

```php
updateCurrentUser($updateCurrentUserInputObject): \TextMagic\Models\UpdateCurrentUserResponse
```

Edit current account info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateCurrentUserInputObject = new \TextMagic\Models\UpdateCurrentUserRequest(); // \TextMagic\Models\UpdateCurrentUserRequest

try {
    $result = $apiInstance->updateCurrentUser($updateCurrentUserInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateCurrentUserInputObject** | [**\TextMagic\Models\UpdateCurrentUserRequest**](../Model/UpdateCurrentUserRequest.md)|  | |

### Return type

[**\TextMagic\Models\UpdateCurrentUserResponse**](../Model/UpdateCurrentUserResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomField()`

```php
updateCustomField($id, $updateCustomFieldInputObject): \TextMagic\Models\ResourceLinkResponse
```

Edit a custom field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$updateCustomFieldInputObject = new \TextMagic\Models\CreateCustomFieldRequest(); // \TextMagic\Models\CreateCustomFieldRequest

try {
    $result = $apiInstance->updateCustomField($id, $updateCustomFieldInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **updateCustomFieldInputObject** | [**\TextMagic\Models\CreateCustomFieldRequest**](../Model/CreateCustomFieldRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomFieldValue()`

```php
updateCustomFieldValue($id, $updateCustomFieldValueInputObject): \TextMagic\Models\ResourceLinkResponse
```

Edit the custom field value of a specified contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 554; // int
$updateCustomFieldValueInputObject = new \TextMagic\Models\UpdateCustomFieldValueRequest(); // \TextMagic\Models\UpdateCustomFieldValueRequest

try {
    $result = $apiInstance->updateCustomFieldValue($id, $updateCustomFieldValueInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCustomFieldValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **updateCustomFieldValueInputObject** | [**\TextMagic\Models\UpdateCustomFieldValueRequest**](../Model/UpdateCustomFieldValueRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInboundMessagesNotificationSettings()`

```php
updateInboundMessagesNotificationSettings($updateInboundMessagesNotificationSettingsInputObject)
```

Update inbound messages notification settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateInboundMessagesNotificationSettingsInputObject = new \TextMagic\Models\UpdateInboundMessagesNotificationSettingsRequest(); // \TextMagic\Models\UpdateInboundMessagesNotificationSettingsRequest

try {
    $apiInstance->updateInboundMessagesNotificationSettings($updateInboundMessagesNotificationSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateInboundMessagesNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateInboundMessagesNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateInboundMessagesNotificationSettingsRequest**](../Model/UpdateInboundMessagesNotificationSettingsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateList()`

```php
updateList($id, $updateListObject): \TextMagic\Models\ResourceLinkResponse
```

Edit a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$updateListObject = new \TextMagic\Models\UpdateListRequest(); // \TextMagic\Models\UpdateListRequest

try {
    $result = $apiInstance->updateList($id, $updateListObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **updateListObject** | [**\TextMagic\Models\UpdateListRequest**](../Model/UpdateListRequest.md)|  | [optional] |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSenderSetting()`

```php
updateSenderSetting($updateSenderSettingInputObject)
```

Change sender settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateSenderSettingInputObject = new \TextMagic\Models\UpdateSenderSettingRequest(); // \TextMagic\Models\UpdateSenderSettingRequest

try {
    $apiInstance->updateSenderSetting($updateSenderSettingInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateSenderSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updateSenderSettingInputObject** | [**\TextMagic\Models\UpdateSenderSettingRequest**](../Model/UpdateSenderSettingRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTemplate()`

```php
updateTemplate($id, $updateTemplateInputObject): \TextMagic\Models\ResourceLinkResponse
```

Update a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$updateTemplateInputObject = new \TextMagic\Models\CreateTemplateRequest(); // \TextMagic\Models\CreateTemplateRequest

try {
    $result = $apiInstance->updateTemplate($id, $updateTemplateInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **updateTemplateInputObject** | [**\TextMagic\Models\CreateTemplateRequest**](../Model/CreateTemplateRequest.md)|  | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAvatar()`

```php
uploadAvatar($image)
```

Upload an avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = '/path/to/file.txt'; // \SplFileObject | User avatar. Should be a PNG or JPG file not more than 10 MB.

try {
    $apiInstance->uploadAvatar($image);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image** | **\SplFileObject****\SplFileObject**| User avatar. Should be a PNG or JPG file not more than 10 MB. | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadContactAvatar()`

```php
uploadContactAvatar($id, $image): \TextMagic\Models\ResourceLinkResponse
```

Upload an avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$image = '/path/to/file.txt'; // \SplFileObject | Contact avatar. Should be a PNG or JPG file not more than 10 MB.

try {
    $result = $apiInstance->uploadContactAvatar($id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadContactAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image** | **\SplFileObject****\SplFileObject**| Contact avatar. Should be a PNG or JPG file not more than 10 MB. | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadListAvatar()`

```php
uploadListAvatar($id, $image): \TextMagic\Models\ResourceLinkResponse
```

Add an avatar for a list

Add an avatar for a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int
$image = '/path/to/file.txt'; // \SplFileObject | List avatar. Should be a PNG or JPG file not more than 10 MB.

try {
    $result = $apiInstance->uploadListAvatar($id, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadListAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **image** | **\SplFileObject****\SplFileObject**| List avatar. Should be a PNG or JPG file not more than 10 MB. | |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMessageAttachment()`

```php
uploadMessageAttachment($file): \TextMagic\Models\UploadMessageAttachmentResponse
```

Upload message attachment

Upload a new file to insert it as a link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx & .vcf file formats.

try {
    $result = $apiInstance->uploadMessageAttachment($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadMessageAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats. | |

### Return type

[**\TextMagic\Models\UploadMessageAttachmentResponse**](../Model/UploadMessageAttachmentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMessageMMSAttachment()`

```php
uploadMessageMMSAttachment($file): \TextMagic\Models\UploadMessageAttachmentResponse
```

Upload message mms attachment

Upload a new file to mms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = TextMagic\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new TextMagic\Api\TextMagicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx & .vcf file formats.

try {
    $result = $apiInstance->uploadMessageMMSAttachment($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadMessageMMSAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats. | |

### Return type

[**\TextMagic\Models\UploadMessageAttachmentResponse**](../Model/UploadMessageAttachmentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

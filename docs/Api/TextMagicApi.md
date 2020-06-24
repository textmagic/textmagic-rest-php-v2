# TextMagic\TextMagicApi

All URIs are relative to *https://rest.textmagic.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignContactsToList**](TextMagicApi.md#assignContactsToList) | **PUT** /api/v2/lists/{id}/contacts | Assign contacts to a list
[**blockContact**](TextMagicApi.md#blockContact) | **POST** /api/v2/contacts/block | Block a contact by phone number
[**buyDedicatedNumber**](TextMagicApi.md#buyDedicatedNumber) | **POST** /api/v2/numbers | Buy a dedicated number
[**cancelVerification**](TextMagicApi.md#cancelVerification) | **DELETE** /api/v2/verify/{verifyId} | Cancel verification process
[**checkPhoneVerificationCodeTFA**](TextMagicApi.md#checkPhoneVerificationCodeTFA) | **PUT** /api/v2/verify | Step 2: Check the verification code
[**clearAndAssignContactsToList**](TextMagicApi.md#clearAndAssignContactsToList) | **POST** /api/v2/lists/{id}/contacts | Reset list members to the specified contacts
[**closeChatsBulk**](TextMagicApi.md#closeChatsBulk) | **POST** /api/v2/chats/close/bulk | Close chats (bulk)
[**closeReadChats**](TextMagicApi.md#closeReadChats) | **POST** /api/v2/chats/close/read | Close read chats
[**closeSubaccount**](TextMagicApi.md#closeSubaccount) | **DELETE** /api/v2/subaccounts/{id} | Close sub-account
[**createContact**](TextMagicApi.md#createContact) | **POST** /api/v2/contacts/normalized | Add a new contact
[**createContactNote**](TextMagicApi.md#createContactNote) | **POST** /api/v2/contacts/{id}/notes | Create a new contact note
[**createCustomField**](TextMagicApi.md#createCustomField) | **POST** /api/v2/customfields | Add a new custom field
[**createList**](TextMagicApi.md#createList) | **POST** /api/v2/lists | Create a new list
[**createTemplate**](TextMagicApi.md#createTemplate) | **POST** /api/v2/templates | Create a template
[**deleteAllContacts**](TextMagicApi.md#deleteAllContacts) | **DELETE** /api/v2/contact/all | Delete contacts (bulk)
[**deleteAllOutboundMessages**](TextMagicApi.md#deleteAllOutboundMessages) | **DELETE** /api/v2/message/all | Delete all messages
[**deleteAvatar**](TextMagicApi.md#deleteAvatar) | **DELETE** /api/v2/user/avatar | Delete an avatar
[**deleteChatMessages**](TextMagicApi.md#deleteChatMessages) | **POST** /api/v2/chats/{id}/messages/delete | Delete chat messages by ID(s)
[**deleteChatsBulk**](TextMagicApi.md#deleteChatsBulk) | **POST** /api/v2/chats/delete | Delete chats (bulk)
[**deleteContact**](TextMagicApi.md#deleteContact) | **DELETE** /api/v2/contacts/{id} | Delete a contact
[**deleteContactAvatar**](TextMagicApi.md#deleteContactAvatar) | **DELETE** /api/v2/contacts/{id}/avatar | Delete an avatar
[**deleteContactNote**](TextMagicApi.md#deleteContactNote) | **DELETE** /api/v2/notes/{id} | Delete a contact note
[**deleteContactNotesBulk**](TextMagicApi.md#deleteContactNotesBulk) | **POST** /api/v2/contacts/{id}/notes/delete | Delete contact notes (bulk)
[**deleteContactsByIds**](TextMagicApi.md#deleteContactsByIds) | **POST** /api/v2/contacts/delete | Delete contacts by IDs (bulk)
[**deleteContactsFromList**](TextMagicApi.md#deleteContactsFromList) | **DELETE** /api/v2/lists/{id}/contacts | Unassign contacts from a list
[**deleteCustomField**](TextMagicApi.md#deleteCustomField) | **DELETE** /api/v2/customfields/{id} | Delete a custom field
[**deleteDedicatedNumber**](TextMagicApi.md#deleteDedicatedNumber) | **DELETE** /api/v2/numbers/{id} | Cancel a dedicated number subscription
[**deleteInboundMessage**](TextMagicApi.md#deleteInboundMessage) | **DELETE** /api/v2/replies/{id} | Delete a single inbound message
[**deleteInboundMessagesBulk**](TextMagicApi.md#deleteInboundMessagesBulk) | **POST** /api/v2/replies/delete | Delete inbound messages (bulk)
[**deleteList**](TextMagicApi.md#deleteList) | **DELETE** /api/v2/lists/{id} | Delete a list
[**deleteListAvatar**](TextMagicApi.md#deleteListAvatar) | **DELETE** /api/v2/lists/{id}/avatar | Delete an avatar for a list
[**deleteListContactsBulk**](TextMagicApi.md#deleteListContactsBulk) | **POST** /api/v2/lists/{id}/contacts/delete | Delete contacts from a list (bulk)
[**deleteListsBulk**](TextMagicApi.md#deleteListsBulk) | **POST** /api/v2/lists/delete | Delete lists (bulk)
[**deleteMessageSession**](TextMagicApi.md#deleteMessageSession) | **DELETE** /api/v2/sessions/{id} | Delete a session
[**deleteMessageSessionsBulk**](TextMagicApi.md#deleteMessageSessionsBulk) | **POST** /api/v2/sessions/delete | Delete sessions (bulk)
[**deleteOutboundMessage**](TextMagicApi.md#deleteOutboundMessage) | **DELETE** /api/v2/messages/{id} | Delete message
[**deleteOutboundMessagesBulk**](TextMagicApi.md#deleteOutboundMessagesBulk) | **POST** /api/v2/messages/delete | Delete messages (bulk)
[**deleteScheduledMessage**](TextMagicApi.md#deleteScheduledMessage) | **DELETE** /api/v2/schedules/{id} | Delete a single scheduled message
[**deleteScheduledMessagesBulk**](TextMagicApi.md#deleteScheduledMessagesBulk) | **POST** /api/v2/schedules/delete | Delete scheduled messages (bulk)
[**deleteSenderId**](TextMagicApi.md#deleteSenderId) | **DELETE** /api/v2/senderids/{id} | Delete a Sender ID
[**deleteTemplate**](TextMagicApi.md#deleteTemplate) | **DELETE** /api/v2/templates/{id} | Delete a template
[**deleteTemplatesBulk**](TextMagicApi.md#deleteTemplatesBulk) | **POST** /api/v2/templates/delete | Delete templates (bulk)
[**doCarrierLookup**](TextMagicApi.md#doCarrierLookup) | **GET** /api/v2/lookups/{phone} | Carrier Lookup
[**doEmailLookup**](TextMagicApi.md#doEmailLookup) | **GET** /api/v2/email-lookups/{email} | Email Lookup
[**getAllBulkSessions**](TextMagicApi.md#getAllBulkSessions) | **GET** /api/v2/bulks | Get all bulk sessions
[**getAllChats**](TextMagicApi.md#getAllChats) | **GET** /api/v2/chats | Get all chats
[**getAllInboundMessages**](TextMagicApi.md#getAllInboundMessages) | **GET** /api/v2/replies | Get all inbound messages
[**getAllMessageSessions**](TextMagicApi.md#getAllMessageSessions) | **GET** /api/v2/sessions | Get all sessions
[**getAllOutboundMessages**](TextMagicApi.md#getAllOutboundMessages) | **GET** /api/v2/messages | Get all messages
[**getAllScheduledMessages**](TextMagicApi.md#getAllScheduledMessages) | **GET** /api/v2/schedules | Get all scheduled messages
[**getAllTemplates**](TextMagicApi.md#getAllTemplates) | **GET** /api/v2/templates | Get all templates
[**getAvailableDedicatedNumbers**](TextMagicApi.md#getAvailableDedicatedNumbers) | **GET** /api/v2/numbers/available | Find dedicated numbers available for purchase
[**getAvailableSenderSettingOptions**](TextMagicApi.md#getAvailableSenderSettingOptions) | **GET** /api/v2/sources | Get available sender settings
[**getBalanceNotificationOptions**](TextMagicApi.md#getBalanceNotificationOptions) | **GET** /api/v2/user/notification/balance/bundles | Returns the list of available balance options which can be used as a bound to determine when to send email to user with low balance notification. See https://my.textmagic.com/online/account/notifications/balance
[**getBalanceNotificationSettings**](TextMagicApi.md#getBalanceNotificationSettings) | **GET** /api/v2/user/notification/balance | Get balance notification settings
[**getBlockedContacts**](TextMagicApi.md#getBlockedContacts) | **GET** /api/v2/contacts/block/list | Get blocked contacts
[**getBulkSession**](TextMagicApi.md#getBulkSession) | **GET** /api/v2/bulks/{id} | Get bulk session status
[**getCallbackSettings**](TextMagicApi.md#getCallbackSettings) | **GET** /api/v2/callback/settings | Fetch callback URL settings
[**getChat**](TextMagicApi.md#getChat) | **GET** /api/v2/chats/{id} | Get a single chat
[**getChatByPhone**](TextMagicApi.md#getChatByPhone) | **GET** /api/v2/chats/{phone}/by/phone | Find chats by phone
[**getChatMessages**](TextMagicApi.md#getChatMessages) | **GET** /api/v2/chats/{id}/message | Get chat messages
[**getContact**](TextMagicApi.md#getContact) | **GET** /api/v2/contacts/{id} | Get the details of a specific contact
[**getContactByPhone**](TextMagicApi.md#getContactByPhone) | **GET** /api/v2/contacts/phone/{phone} | Get the details of a specific contact by phone number
[**getContactIfBlocked**](TextMagicApi.md#getContactIfBlocked) | **GET** /api/v2/contacts/block/phone | Check if a phone number is blocked
[**getContactImportSessionProgress**](TextMagicApi.md#getContactImportSessionProgress) | **GET** /api/v2/contacts/import/progress/{id} | Check import progress
[**getContactNote**](TextMagicApi.md#getContactNote) | **GET** /api/v2/notes/{id} | Get a contact note
[**getContactNotes**](TextMagicApi.md#getContactNotes) | **GET** /api/v2/contacts/{id}/notes | Fetch notes assigned to a given contact
[**getContacts**](TextMagicApi.md#getContacts) | **GET** /api/v2/contacts | Get all contacts
[**getContactsByListId**](TextMagicApi.md#getContactsByListId) | **GET** /api/v2/lists/{id}/contacts | Get all contacts in a list
[**getCurrentUser**](TextMagicApi.md#getCurrentUser) | **GET** /api/v2/user | Get current account information
[**getCustomField**](TextMagicApi.md#getCustomField) | **GET** /api/v2/customfields/{id} | Get the details of a specific custom field
[**getCustomFields**](TextMagicApi.md#getCustomFields) | **GET** /api/v2/customfields | Get all custom fields
[**getDedicatedNumber**](TextMagicApi.md#getDedicatedNumber) | **GET** /api/v2/numbers/{id} | Get the details of a specific dedicated number
[**getFavorites**](TextMagicApi.md#getFavorites) | **GET** /api/v2/contacts/favorite | Get favorite contacts and lists
[**getInboundMessage**](TextMagicApi.md#getInboundMessage) | **GET** /api/v2/replies/{id} | Get a single inbound message
[**getInboundMessagesNotificationSettings**](TextMagicApi.md#getInboundMessagesNotificationSettings) | **GET** /api/v2/user/notification/inbound | Get inbound messages notification settings
[**getInvoices**](TextMagicApi.md#getInvoices) | **GET** /api/v2/invoices | Get all invoices
[**getList**](TextMagicApi.md#getList) | **GET** /api/v2/lists/{id} | Get the details of a specific list
[**getListContactsIds**](TextMagicApi.md#getListContactsIds) | **GET** /api/v2/lists/{id}/contacts/ids | Get all contact IDs in a list
[**getLists**](TextMagicApi.md#getLists) | **GET** /api/v2/lists | Get all lists
[**getListsOfContact**](TextMagicApi.md#getListsOfContact) | **GET** /api/v2/contacts/{id}/lists | Get a contact&#39;s lists
[**getMessagePreview**](TextMagicApi.md#getMessagePreview) | **GET** /api/v2/messages/preview | Preview message
[**getMessagePrice**](TextMagicApi.md#getMessagePrice) | **GET** /api/v2/messages/price/normalized | Check message price
[**getMessageSession**](TextMagicApi.md#getMessageSession) | **GET** /api/v2/sessions/{id} | Get a session&#x60;s details
[**getMessageSessionStat**](TextMagicApi.md#getMessageSessionStat) | **GET** /api/v2/sessions/{id}/stat | Get a session&#x60;s statistics
[**getMessagesBySessionId**](TextMagicApi.md#getMessagesBySessionId) | **GET** /api/v2/sessions/{id}/messages | Get a session&#x60;s messages
[**getMessagingCounters**](TextMagicApi.md#getMessagingCounters) | **GET** /api/v2/stats/messaging/data | Get sent/received messages counters values
[**getOutboundMessage**](TextMagicApi.md#getOutboundMessage) | **GET** /api/v2/messages/{id} | Get a single message
[**getOutboundMessagesHistory**](TextMagicApi.md#getOutboundMessagesHistory) | **GET** /api/v2/history | Get history
[**getScheduledMessage**](TextMagicApi.md#getScheduledMessage) | **GET** /api/v2/schedules/{id} | Get a single scheduled message
[**getSenderId**](TextMagicApi.md#getSenderId) | **GET** /api/v2/senderids/{id} | Get the details of a specific Sender ID
[**getSenderIds**](TextMagicApi.md#getSenderIds) | **GET** /api/v2/senderids | Get all your approved Sender IDs
[**getSenderSettings**](TextMagicApi.md#getSenderSettings) | **GET** /api/v2/sender/settings/normalized | Get current sender settings
[**getSpendingStat**](TextMagicApi.md#getSpendingStat) | **GET** /api/v2/stats/spending | Get spending statistics
[**getSubaccount**](TextMagicApi.md#getSubaccount) | **GET** /api/v2/subaccounts/{id} | Get sub-account information
[**getSubaccounts**](TextMagicApi.md#getSubaccounts) | **GET** /api/v2/subaccounts | Get a sub-accounts list
[**getSubaccountsWithTokens**](TextMagicApi.md#getSubaccountsWithTokens) | **POST** /api/v2/subaccounts/tokens/list | Get all sub-accounts with their REST API tokens associated with a specified app name
[**getTemplate**](TextMagicApi.md#getTemplate) | **GET** /api/v2/templates/{id} | Get a template&#x60;s details
[**getUnreadMessagesTotal**](TextMagicApi.md#getUnreadMessagesTotal) | **GET** /api/v2/chats/unread/count | Get unread messages number
[**getUnsubscribedContact**](TextMagicApi.md#getUnsubscribedContact) | **GET** /api/v2/unsubscribers/{id} | Get the details of a specific unsubscribed contact
[**getUnsubscribers**](TextMagicApi.md#getUnsubscribers) | **GET** /api/v2/unsubscribers | Get all unsubscribed contacts
[**getUserDedicatedNumbers**](TextMagicApi.md#getUserDedicatedNumbers) | **GET** /api/v2/numbers | Get all your dedicated numbers
[**importContacts**](TextMagicApi.md#importContacts) | **POST** /api/v2/contacts/import/normalized | Import contacts
[**inviteSubaccount**](TextMagicApi.md#inviteSubaccount) | **POST** /api/v2/subaccounts | Invite a new sub-account
[**markChatsReadBulk**](TextMagicApi.md#markChatsReadBulk) | **POST** /api/v2/chats/read/bulk | Mark chats as read (bulk)
[**markChatsUnreadBulk**](TextMagicApi.md#markChatsUnreadBulk) | **POST** /api/v2/chats/unread/bulk | Mark chats as unread (bulk)
[**muteChat**](TextMagicApi.md#muteChat) | **POST** /api/v2/chats/mute | Mute chat sounds
[**muteChatsBulk**](TextMagicApi.md#muteChatsBulk) | **POST** /api/v2/chats/mute/bulk | Mute chats (bulk)
[**ping**](TextMagicApi.md#ping) | **GET** /api/v2/ping | Ping
[**reopenChatsBulk**](TextMagicApi.md#reopenChatsBulk) | **POST** /api/v2/chats/reopen/bulk | Reopen chats (bulk)
[**requestNewSubaccountToken**](TextMagicApi.md#requestNewSubaccountToken) | **POST** /api/v2/subaccounts/tokens | Request a new REST API token for sub-account
[**requestSenderId**](TextMagicApi.md#requestSenderId) | **POST** /api/v2/senderids | Apply for a new Sender ID
[**searchChats**](TextMagicApi.md#searchChats) | **GET** /api/v2/chats/search | Find chats by message text
[**searchChatsByIds**](TextMagicApi.md#searchChatsByIds) | **GET** /api/v2/chats/search/ids | Find chats (bulk)
[**searchChatsByReceipent**](TextMagicApi.md#searchChatsByReceipent) | **GET** /api/v2/chats/search/recipients | Find chats by recipient
[**searchContacts**](TextMagicApi.md#searchContacts) | **GET** /api/v2/contacts/search | Find contacts by given criteria
[**searchInboundMessages**](TextMagicApi.md#searchInboundMessages) | **GET** /api/v2/replies/search | Find inbound messages
[**searchLists**](TextMagicApi.md#searchLists) | **GET** /api/v2/lists/search | Find lists by given criteria
[**searchOutboundMessages**](TextMagicApi.md#searchOutboundMessages) | **GET** /api/v2/messages/search | Find messages
[**searchScheduledMessages**](TextMagicApi.md#searchScheduledMessages) | **GET** /api/v2/schedules/search | Find scheduled messages
[**searchTemplates**](TextMagicApi.md#searchTemplates) | **GET** /api/v2/templates/search | Find templates by criteria
[**sendMessage**](TextMagicApi.md#sendMessage) | **POST** /api/v2/messages | Send message
[**sendPhoneVerificationCodeTFA**](TextMagicApi.md#sendPhoneVerificationCodeTFA) | **POST** /api/v2/verify | Step 1: Send a verification code
[**setChatStatus**](TextMagicApi.md#setChatStatus) | **POST** /api/v2/chats/status | Change chat status
[**unblockContact**](TextMagicApi.md#unblockContact) | **POST** /api/v2/contacts/unblock | Unblock a contact by phone number
[**unblockContactsBulk**](TextMagicApi.md#unblockContactsBulk) | **POST** /api/v2/contacts/unblock/bulk | Unblock contacts (bulk)
[**unmuteChatsBulk**](TextMagicApi.md#unmuteChatsBulk) | **POST** /api/v2/chats/unmute/bulk | Unmute chats (bulk)
[**unsubscribeContact**](TextMagicApi.md#unsubscribeContact) | **POST** /api/v2/unsubscribers | Manually unsubscribe a contact
[**updateBalanceNotificationSettings**](TextMagicApi.md#updateBalanceNotificationSettings) | **PUT** /api/v2/user/notification/balance | Update balance notification settings
[**updateCallbackSettings**](TextMagicApi.md#updateCallbackSettings) | **PUT** /api/v2/callback/settings | Update callback URL settings
[**updateChatDesktopNotificationSettings**](TextMagicApi.md#updateChatDesktopNotificationSettings) | **PUT** /api/v2/user/desktop/notification | Update chat desktop notification settings
[**updateContact**](TextMagicApi.md#updateContact) | **PUT** /api/v2/contacts/{id}/normalized | Edit a contact
[**updateContactNote**](TextMagicApi.md#updateContactNote) | **PUT** /api/v2/notes/{id} | Update a contact note
[**updateCurrentUser**](TextMagicApi.md#updateCurrentUser) | **PUT** /api/v2/user | Edit current account info
[**updateCustomField**](TextMagicApi.md#updateCustomField) | **PUT** /api/v2/customfields/{id} | Edit a custom field
[**updateCustomFieldValue**](TextMagicApi.md#updateCustomFieldValue) | **PUT** /api/v2/customfields/{id}/update | Edit the custom field value of a specified contact
[**updateInboundMessagesNotificationSettings**](TextMagicApi.md#updateInboundMessagesNotificationSettings) | **PUT** /api/v2/user/notification/inbound | Update inbound messages notification settings
[**updateList**](TextMagicApi.md#updateList) | **PUT** /api/v2/lists/{id} | Edit a list
[**updateSenderSetting**](TextMagicApi.md#updateSenderSetting) | **PUT** /api/v2/sender/settings | Change sender settings
[**updateTemplate**](TextMagicApi.md#updateTemplate) | **PUT** /api/v2/templates/{id} | Update a template
[**uploadAvatar**](TextMagicApi.md#uploadAvatar) | **POST** /api/v2/user/avatar | Upload an avatar
[**uploadContactAvatar**](TextMagicApi.md#uploadContactAvatar) | **POST** /api/v2/contacts/{id}/avatar | Upload an avatar
[**uploadListAvatar**](TextMagicApi.md#uploadListAvatar) | **POST** /api/v2/lists/{id}/avatar | Add an avatar for a list
[**uploadMessageAttachment**](TextMagicApi.md#uploadMessageAttachment) | **POST** /api/v2/messages/attachment | Upload message attachment
[**uploadMessageMMSAttachment**](TextMagicApi.md#uploadMessageMMSAttachment) | **POST** /api/v2/messages/mms/attachment | Upload message mms attachment


# **assignContactsToList**
> \TextMagic\Models\ResourceLinkResponse assignContactsToList($assignContactsToListInputObject, $id)

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
$assignContactsToListInputObject = new \TextMagic\Models\AssignContactsToListInputObject(); // \TextMagic\Models\AssignContactsToListInputObject | 
$id = 1; // int | 

try {
    $result = $apiInstance->assignContactsToList($assignContactsToListInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->assignContactsToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignContactsToListInputObject** | [**\TextMagic\Models\AssignContactsToListInputObject**](../Model/AssignContactsToListInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockContact**
> \TextMagic\Models\ResourceLinkResponse blockContact($blockContactInputObject)

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
$blockContactInputObject = new \TextMagic\Models\BlockContactInputObject(); // \TextMagic\Models\BlockContactInputObject | 

try {
    $result = $apiInstance->blockContact($blockContactInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->blockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockContactInputObject** | [**\TextMagic\Models\BlockContactInputObject**](../Model/BlockContactInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyDedicatedNumber**
> buyDedicatedNumber($buyDedicatedNumberInputObject)

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
$buyDedicatedNumberInputObject = new \TextMagic\Models\BuyDedicatedNumberInputObject(); // \TextMagic\Models\BuyDedicatedNumberInputObject | 

try {
    $apiInstance->buyDedicatedNumber($buyDedicatedNumberInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->buyDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyDedicatedNumberInputObject** | [**\TextMagic\Models\BuyDedicatedNumberInputObject**](../Model/BuyDedicatedNumberInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelVerification**
> cancelVerification($verifyId)

Cancel verification process

You can cancel the verification not earlier than 30 seconds after the initial request.

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
$verifyId = "123e4567-e89b-12d3-a456-426655440000"; // string | The verifyId that you received in Step 1.

try {
    $apiInstance->cancelVerification($verifyId);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->cancelVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verifyId** | **string**| The verifyId that you received in Step 1. |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkPhoneVerificationCodeTFA**
> checkPhoneVerificationCodeTFA($checkPhoneVerificationCodeTFAInputObject)

Step 2: Check the verification code

Check received code from user with the code which was actually sent.

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
$checkPhoneVerificationCodeTFAInputObject = new \TextMagic\Models\CheckPhoneVerificationCodeTFAInputObject(); // \TextMagic\Models\CheckPhoneVerificationCodeTFAInputObject | 

try {
    $apiInstance->checkPhoneVerificationCodeTFA($checkPhoneVerificationCodeTFAInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->checkPhoneVerificationCodeTFA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPhoneVerificationCodeTFAInputObject** | [**\TextMagic\Models\CheckPhoneVerificationCodeTFAInputObject**](../Model/CheckPhoneVerificationCodeTFAInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearAndAssignContactsToList**
> \TextMagic\Models\ResourceLinkResponse clearAndAssignContactsToList($clearAndAssignContactsToListInputObject, $id)

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
$clearAndAssignContactsToListInputObject = new \TextMagic\Models\ClearAndAssignContactsToListInputObject(); // \TextMagic\Models\ClearAndAssignContactsToListInputObject | 
$id = 1; // int | 

try {
    $result = $apiInstance->clearAndAssignContactsToList($clearAndAssignContactsToListInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->clearAndAssignContactsToList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clearAndAssignContactsToListInputObject** | [**\TextMagic\Models\ClearAndAssignContactsToListInputObject**](../Model/ClearAndAssignContactsToListInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closeChatsBulk**
> closeChatsBulk($closeChatsBulkInputObject)

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
$closeChatsBulkInputObject = new \TextMagic\Models\CloseChatsBulkInputObject(); // \TextMagic\Models\CloseChatsBulkInputObject | 

try {
    $apiInstance->closeChatsBulk($closeChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->closeChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **closeChatsBulkInputObject** | [**\TextMagic\Models\CloseChatsBulkInputObject**](../Model/CloseChatsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closeReadChats**
> closeReadChats()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closeSubaccount**
> closeSubaccount($id)

Close sub-account



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
$id = 1; // int | 

try {
    $apiInstance->closeSubaccount($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->closeSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContact**
> \TextMagic\Models\ResourceLinkResponse createContact($createContactInputObject)

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
$createContactInputObject = new \TextMagic\Models\CreateContactInputObject(); // \TextMagic\Models\CreateContactInputObject | 

try {
    $result = $apiInstance->createContact($createContactInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createContactInputObject** | [**\TextMagic\Models\CreateContactInputObject**](../Model/CreateContactInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContactNote**
> \TextMagic\Models\ResourceLinkResponse createContactNote($createContactNoteInputObject, $id)

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
$createContactNoteInputObject = new \TextMagic\Models\CreateContactNoteInputObject(); // \TextMagic\Models\CreateContactNoteInputObject | 
$id = 1; // int | 

try {
    $result = $apiInstance->createContactNote($createContactNoteInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createContactNoteInputObject** | [**\TextMagic\Models\CreateContactNoteInputObject**](../Model/CreateContactNoteInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomField**
> \TextMagic\Models\ResourceLinkResponse createCustomField($createCustomFieldInputObject)

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
$createCustomFieldInputObject = new \TextMagic\Models\CreateCustomFieldInputObject(); // \TextMagic\Models\CreateCustomFieldInputObject | 

try {
    $result = $apiInstance->createCustomField($createCustomFieldInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createCustomFieldInputObject** | [**\TextMagic\Models\CreateCustomFieldInputObject**](../Model/CreateCustomFieldInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createList**
> \TextMagic\Models\ResourceLinkResponse createList($createListInputObject)

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
$createListInputObject = new \TextMagic\Models\CreateListInputObject(); // \TextMagic\Models\CreateListInputObject | 

try {
    $result = $apiInstance->createList($createListInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createListInputObject** | [**\TextMagic\Models\CreateListInputObject**](../Model/CreateListInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTemplate**
> \TextMagic\Models\ResourceLinkResponse createTemplate($createTemplateInputObject)

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
$createTemplateInputObject = new \TextMagic\Models\CreateTemplateInputObject(); // \TextMagic\Models\CreateTemplateInputObject | 

try {
    $result = $apiInstance->createTemplate($createTemplateInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createTemplateInputObject** | [**\TextMagic\Models\CreateTemplateInputObject**](../Model/CreateTemplateInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllContacts**
> deleteAllContacts()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllOutboundMessages**
> deleteAllOutboundMessages()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAvatar**
> deleteAvatar()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChatMessages**
> deleteChatMessages($deleteChatMessagesBulkInputObject, $id)

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
$deleteChatMessagesBulkInputObject = new \TextMagic\Models\DeleteChatMessagesBulkInputObject(); // \TextMagic\Models\DeleteChatMessagesBulkInputObject | 
$id = 1; // int | 

try {
    $apiInstance->deleteChatMessages($deleteChatMessagesBulkInputObject, $id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteChatMessagesBulkInputObject** | [**\TextMagic\Models\DeleteChatMessagesBulkInputObject**](../Model/DeleteChatMessagesBulkInputObject.md)|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChatsBulk**
> deleteChatsBulk($deleteChatsBulkInputObject)

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
$deleteChatsBulkInputObject = new \TextMagic\Models\DeleteChatsBulkInputObject(); // \TextMagic\Models\DeleteChatsBulkInputObject | 

try {
    $apiInstance->deleteChatsBulk($deleteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteChatsBulkInputObject** | [**\TextMagic\Models\DeleteChatsBulkInputObject**](../Model/DeleteChatsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> deleteContact($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteContact($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactAvatar**
> deleteContactAvatar($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteContactAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactNote**
> deleteContactNote($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteContactNote($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactNotesBulk**
> deleteContactNotesBulk($id, $deleteContactNotesBulkInputObject)

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
$id = 1; // int | 
$deleteContactNotesBulkInputObject = new \TextMagic\Models\DeleteContactNotesBulkInputObject(); // \TextMagic\Models\DeleteContactNotesBulkInputObject | 

try {
    $apiInstance->deleteContactNotesBulk($id, $deleteContactNotesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactNotesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **deleteContactNotesBulkInputObject** | [**\TextMagic\Models\DeleteContactNotesBulkInputObject**](../Model/DeleteContactNotesBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsByIds**
> deleteContactsByIds($deleteContactsByIdsInputObject)

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
$deleteContactsByIdsInputObject = new \TextMagic\Models\DeleteContactsByIdsInputObject(); // \TextMagic\Models\DeleteContactsByIdsInputObject | 

try {
    $apiInstance->deleteContactsByIds($deleteContactsByIdsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactsByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteContactsByIdsInputObject** | [**\TextMagic\Models\DeleteContactsByIdsInputObject**](../Model/DeleteContactsByIdsInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsFromList**
> deleteContactsFromList($deleteContacsFromListObject, $id)

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
$deleteContacsFromListObject = new \TextMagic\Models\DeleteContacsFromListObject(); // \TextMagic\Models\DeleteContacsFromListObject | 
$id = 1; // int | 

try {
    $apiInstance->deleteContactsFromList($deleteContacsFromListObject, $id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteContactsFromList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteContacsFromListObject** | [**\TextMagic\Models\DeleteContacsFromListObject**](../Model/DeleteContacsFromListObject.md)|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomField**
> deleteCustomField($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteCustomField($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDedicatedNumber**
> deleteDedicatedNumber($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteDedicatedNumber($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInboundMessage**
> deleteInboundMessage($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique numeric ID for the inbound message. |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInboundMessagesBulk**
> deleteInboundMessagesBulk($deleteInboundMessagesBulkInputObject)

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
$deleteInboundMessagesBulkInputObject = new \TextMagic\Models\DeleteInboundMessagesBulkInputObject(); // \TextMagic\Models\DeleteInboundMessagesBulkInputObject | 

try {
    $apiInstance->deleteInboundMessagesBulk($deleteInboundMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteInboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteInboundMessagesBulkInputObject** | [**\TextMagic\Models\DeleteInboundMessagesBulkInputObject**](../Model/DeleteInboundMessagesBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteList**
> deleteList($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteList($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListAvatar**
> deleteListAvatar($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteListAvatar($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteListAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListContactsBulk**
> deleteListContactsBulk($deleteListContactsBulkInputObject, $id)

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
$deleteListContactsBulkInputObject = new \TextMagic\Models\DeleteListContactsBulkInputObject(); // \TextMagic\Models\DeleteListContactsBulkInputObject | 
$id = 1; // int | 

try {
    $apiInstance->deleteListContactsBulk($deleteListContactsBulkInputObject, $id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteListContactsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteListContactsBulkInputObject** | [**\TextMagic\Models\DeleteListContactsBulkInputObject**](../Model/DeleteListContactsBulkInputObject.md)|  |
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteListsBulk**
> deleteListsBulk($deleteListsBulkInputObject)

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
$deleteListsBulkInputObject = new \TextMagic\Models\DeleteListsBulkInputObject(); // \TextMagic\Models\DeleteListsBulkInputObject | 

try {
    $apiInstance->deleteListsBulk($deleteListsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteListsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteListsBulkInputObject** | [**\TextMagic\Models\DeleteListsBulkInputObject**](../Model/DeleteListsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageSession**
> deleteMessageSession($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteMessageSession($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteMessageSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageSessionsBulk**
> deleteMessageSessionsBulk($deleteMessageSessionsBulkInputObject)

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
$deleteMessageSessionsBulkInputObject = new \TextMagic\Models\DeleteMessageSessionsBulkInputObject(); // \TextMagic\Models\DeleteMessageSessionsBulkInputObject | 

try {
    $apiInstance->deleteMessageSessionsBulk($deleteMessageSessionsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteMessageSessionsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteMessageSessionsBulkInputObject** | [**\TextMagic\Models\DeleteMessageSessionsBulkInputObject**](../Model/DeleteMessageSessionsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundMessage**
> deleteOutboundMessage($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteOutboundMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteOutboundMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundMessagesBulk**
> deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject)

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
$deleteOutboundMessagesBulkInputObject = new \TextMagic\Models\DeleteOutboundMessagesBulkInputObject(); // \TextMagic\Models\DeleteOutboundMessagesBulkInputObject | 

try {
    $apiInstance->deleteOutboundMessagesBulk($deleteOutboundMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteOutboundMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteOutboundMessagesBulkInputObject** | [**\TextMagic\Models\DeleteOutboundMessagesBulkInputObject**](../Model/DeleteOutboundMessagesBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledMessage**
> deleteScheduledMessage($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteScheduledMessage($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledMessagesBulk**
> deleteScheduledMessagesBulk($deleteScheduledMessagesBulkInputObject)

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
$deleteScheduledMessagesBulkInputObject = new \TextMagic\Models\DeleteScheduledMessagesBulkInputObject(); // \TextMagic\Models\DeleteScheduledMessagesBulkInputObject | 

try {
    $apiInstance->deleteScheduledMessagesBulk($deleteScheduledMessagesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteScheduledMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteScheduledMessagesBulkInputObject** | [**\TextMagic\Models\DeleteScheduledMessagesBulkInputObject**](../Model/DeleteScheduledMessagesBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSenderId**
> deleteSenderId($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteSenderId($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplate**
> deleteTemplate($id)

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
$id = 1; // int | 

try {
    $apiInstance->deleteTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplatesBulk**
> deleteTemplatesBulk($deleteTemplatesBulkInputObject)

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
$deleteTemplatesBulkInputObject = new \TextMagic\Models\DeleteTemplatesBulkInputObject(); // \TextMagic\Models\DeleteTemplatesBulkInputObject | 

try {
    $apiInstance->deleteTemplatesBulk($deleteTemplatesBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->deleteTemplatesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deleteTemplatesBulkInputObject** | [**\TextMagic\Models\DeleteTemplatesBulkInputObject**](../Model/DeleteTemplatesBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doCarrierLookup**
> \TextMagic\Models\DoCarrierLookupResponse doCarrierLookup($phone, $country)

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
$phone = "447860021130"; // string | Phone number in [E.164 format](https://en.wikipedia.org/wiki/E.164) or in [National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers).
$country = "GB"; // string | This option must be specified only if the phone number is in a **[National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers)**.

try {
    $result = $apiInstance->doCarrierLookup($phone, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->doCarrierLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| Phone number in [E.164 format](https://en.wikipedia.org/wiki/E.164) or in [National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers). |
 **country** | **string**| This option must be specified only if the phone number is in a **[National format](https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers)**. | [optional]

### Return type

[**\TextMagic\Models\DoCarrierLookupResponse**](../Model/DoCarrierLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doEmailLookup**
> \TextMagic\Models\DoEmailLookupResponse doEmailLookup($email)

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
$email = "john@sample.com"; // string | Email address.

try {
    $result = $apiInstance->doEmailLookup($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->doEmailLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address. |

### Return type

[**\TextMagic\Models\DoEmailLookupResponse**](../Model/DoEmailLookupResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBulkSessions**
> \TextMagic\Models\GetAllBulkSessionsPaginatedResponse getAllBulkSessions($page, $limit)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetAllBulkSessionsPaginatedResponse**](../Model/GetAllBulkSessionsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllChats**
> \TextMagic\Models\GetAllChatsPaginatedResponse getAllChats($status, $page, $limit, $orderBy, $voice, $flat)

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
$status = "a"; // string | Fetch only (a)ctive, (c)losed or (d)eleted chats.
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$orderBy = "id"; // string | Order results by some field. Default is id.
$voice = 0; // int | Fetch results with voice calls.
$flat = 0; // int | Should additional contact info be included?

try {
    $result = $apiInstance->getAllChats($status, $page, $limit, $orderBy, $voice, $flat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Fetch only (a)ctive, (c)losed or (d)eleted chats. | [optional]
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **voice** | **int**| Fetch results with voice calls. | [optional] [default to 0]
 **flat** | **int**| Should additional contact info be included? | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetAllChatsPaginatedResponse**](../Model/GetAllChatsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInboundMessages**
> \TextMagic\Models\GetAllInboundMessagesPaginatedResponse getAllInboundMessages($page, $limit, $orderBy, $direction)

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
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getAllInboundMessages($page, $limit, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllInboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetAllInboundMessagesPaginatedResponse**](../Model/GetAllInboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMessageSessions**
> \TextMagic\Models\GetAllMessageSessionsPaginatedResponse getAllMessageSessions($page, $limit)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetAllMessageSessionsPaginatedResponse**](../Model/GetAllMessageSessionsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllOutboundMessages**
> \TextMagic\Models\GetAllOutboundMessagesPaginatedResponse getAllOutboundMessages($page, $limit, $lastId)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. Note that the \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified. | [optional]

### Return type

[**\TextMagic\Models\GetAllOutboundMessagesPaginatedResponse**](../Model/GetAllOutboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllScheduledMessages**
> \TextMagic\Models\GetAllScheduledMessagesPaginatedResponse getAllScheduledMessages($page, $limit, $status, $orderBy, $direction)

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
$status = "x"; // string | Fetch schedules with a specific status: a - actual, c - completed, x - all.
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getAllScheduledMessages($page, $limit, $status, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAllScheduledMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **status** | **string**| Fetch schedules with a specific status: a - actual, c - completed, x - all. | [optional] [default to x]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetAllScheduledMessagesPaginatedResponse**](../Model/GetAllScheduledMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTemplates**
> \TextMagic\Models\GetAllTemplatesPaginatedResponse getAllTemplates($page, $limit)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional]
 **limit** | **int**| The number of results per page. | [optional]

### Return type

[**\TextMagic\Models\GetAllTemplatesPaginatedResponse**](../Model/GetAllTemplatesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableDedicatedNumbers**
> \TextMagic\Models\GetAvailableDedicatedNumbersResponse getAvailableDedicatedNumbers($country, $prefix, $tollfree)

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
$country = "GB"; // string | The 2-letter dedicated number country ISO code.
$prefix = 447155; // int | Desired number prefix. Should include the country code (i.e. 447 for UK phone number format). Leave blank to get all the available numbers for the specified country.
$tollfree = 0; // int | Should we show only tollfree numbers (tollfree available only for US).

try {
    $result = $apiInstance->getAvailableDedicatedNumbers($country, $prefix, $tollfree);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAvailableDedicatedNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| The 2-letter dedicated number country ISO code. |
 **prefix** | **int**| Desired number prefix. Should include the country code (i.e. 447 for UK phone number format). Leave blank to get all the available numbers for the specified country. | [optional]
 **tollfree** | **int**| Should we show only tollfree numbers (tollfree available only for US). | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetAvailableDedicatedNumbersResponse**](../Model/GetAvailableDedicatedNumbersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableSenderSettingOptions**
> \TextMagic\Models\GetAvailableSenderSettingOptionsResponse getAvailableSenderSettingOptions($country)

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
$country = "US"; // string | The 2-letter ISO country ID. If not specified, it returns all the available sender settings.

try {
    $result = $apiInstance->getAvailableSenderSettingOptions($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getAvailableSenderSettingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| The 2-letter ISO country ID. If not specified, it returns all the available sender settings. | [optional]

### Return type

[**\TextMagic\Models\GetAvailableSenderSettingOptionsResponse**](../Model/GetAvailableSenderSettingOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBalanceNotificationOptions**
> \TextMagic\Models\GetBalanceNotificationOptionsResponse getBalanceNotificationOptions()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetBalanceNotificationOptionsResponse**](../Model/GetBalanceNotificationOptionsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBalanceNotificationSettings**
> \TextMagic\Models\GetBalanceNotificationSettingsResponse getBalanceNotificationSettings()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetBalanceNotificationSettingsResponse**](../Model/GetBalanceNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockedContacts**
> \TextMagic\Models\GetBlockedContactsPaginatedResponse getBlockedContacts($page, $limit, $query, $orderBy, $direction)

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
$query = "query_example"; // string | Find blocked contacts by specified search query.
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getBlockedContacts($page, $limit, $query, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getBlockedContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **query** | **string**| Find blocked contacts by specified search query. | [optional]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetBlockedContactsPaginatedResponse**](../Model/GetBlockedContactsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBulkSession**
> \TextMagic\Models\BulkSession getBulkSession($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getBulkSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getBulkSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\BulkSession**](../Model/BulkSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallbackSettings**
> \TextMagic\Models\GetCallbackSettingsResponse getCallbackSettings()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetCallbackSettingsResponse**](../Model/GetCallbackSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChat**
> \TextMagic\Models\Chat getChat($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getChat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\Chat**](../Model/Chat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatByPhone**
> \TextMagic\Models\Chat getChatByPhone($phone, $upsert, $reopen)

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
$phone = "447860021130"; // string | 
$upsert = 0; // int | Create a new chat if not found.
$reopen = 0; // int | Reopen chat if found or do not change status.

try {
    $result = $apiInstance->getChatByPhone($phone, $upsert, $reopen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getChatByPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**|  |
 **upsert** | **int**| Create a new chat if not found. | [optional] [default to 0]
 **reopen** | **int**| Reopen chat if found or do not change status. | [optional] [default to 0]

### Return type

[**\TextMagic\Models\Chat**](../Model/Chat.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChatMessages**
> \TextMagic\Models\GetChatMessagesPaginatedResponse getChatMessages($id, $page, $limit, $query, $start, $end, $direction, $voice)

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
$id = 1; // int | 
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$query = "query_example"; // string | Find messages by specified search query.
$start = 56; // int | Return messages since specified timestamp only.
$end = 56; // int | Return messages up to specified timestamp only.
$direction = "desc"; // string | Order direction. Default is desc.
$voice = 0; // int | Fetch results with voice calls.

try {
    $result = $apiInstance->getChatMessages($id, $page, $limit, $query, $start, $end, $direction, $voice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **query** | **string**| Find messages by specified search query. | [optional]
 **start** | **int**| Return messages since specified timestamp only. | [optional]
 **end** | **int**| Return messages up to specified timestamp only. | [optional]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]
 **voice** | **int**| Fetch results with voice calls. | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetChatMessagesPaginatedResponse**](../Model/GetChatMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContact**
> \TextMagic\Models\Contact getContact($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Contact ID. |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactByPhone**
> \TextMagic\Models\Contact getContactByPhone($phone)

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
$phone = "447860021130"; // string | 

try {
    $result = $apiInstance->getContactByPhone($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactByPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**|  |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactIfBlocked**
> \TextMagic\Models\Contact getContactIfBlocked($phone)

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
$phone = "447860021130"; // string | Phone number to check.

try {
    $result = $apiInstance->getContactIfBlocked($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactIfBlocked: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| Phone number to check. |

### Return type

[**\TextMagic\Models\Contact**](../Model/Contact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactImportSessionProgress**
> \TextMagic\Models\GetContactImportSessionProgressResponse getContactImportSessionProgress($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getContactImportSessionProgress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactImportSessionProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\GetContactImportSessionProgressResponse**](../Model/GetContactImportSessionProgressResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactNote**
> \TextMagic\Models\ContactNote getContactNote($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getContactNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactNotes**
> \TextMagic\Models\GetContactNotesPaginatedResponse getContactNotes($id, $page, $limit)

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
$id = 1; // int | 
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getContactNotes($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetContactNotesPaginatedResponse**](../Model/GetContactNotesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \TextMagic\Models\GetContactsPaginatedResponse getContacts($page, $limit, $shared, $orderBy, $direction)

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
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getContacts($page, $limit, $shared, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **shared** | **int**| Should shared contacts be included? | [optional] [default to 0]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetContactsPaginatedResponse**](../Model/GetContactsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsByListId**
> \TextMagic\Models\GetContactsByListIdPaginatedResponse getContactsByListId($id, $page, $limit, $orderBy, $direction)

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
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getContactsByListId($id, $page, $limit, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getContactsByListId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Given group ID. |
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetContactsByListIdPaginatedResponse**](../Model/GetContactsByListIdPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentUser**
> \TextMagic\Models\User getCurrentUser()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomField**
> \TextMagic\Models\UserCustomField getCustomField($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getCustomField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UserCustomField**](../Model/UserCustomField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFields**
> \TextMagic\Models\GetCustomFieldsPaginatedResponse getCustomFields($page, $limit)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetCustomFieldsPaginatedResponse**](../Model/GetCustomFieldsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDedicatedNumber**
> \TextMagic\Models\UsersInbound getDedicatedNumber($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getDedicatedNumber($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getDedicatedNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UsersInbound**](../Model/UsersInbound.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFavorites**
> \TextMagic\Models\GetFavoritesPaginatedResponse getFavorites($page, $limit, $query)

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
$query = "A"; // string | Find contacts or lists by specified search query.

try {
    $result = $apiInstance->getFavorites($page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getFavorites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **query** | **string**| Find contacts or lists by specified search query. | [optional]

### Return type

[**\TextMagic\Models\GetFavoritesPaginatedResponse**](../Model/GetFavoritesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundMessage**
> \TextMagic\Models\MessageIn getInboundMessage($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique numeric ID for the inbound message. |

### Return type

[**\TextMagic\Models\MessageIn**](../Model/MessageIn.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInboundMessagesNotificationSettings**
> \TextMagic\Models\GetInboundMessagesNotificationSettingsResponse getInboundMessagesNotificationSettings()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetInboundMessagesNotificationSettingsResponse**](../Model/GetInboundMessagesNotificationSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \TextMagic\Models\GetInvoicesPaginatedResponse getInvoices($page, $limit)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetInvoicesPaginatedResponse**](../Model/GetInvoicesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getList**
> \TextMagic\Models\ModelList getList($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ModelList**](../Model/ModelList.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListContactsIds**
> \TextMagic\Models\GetListContactsIdsResponse getListContactsIds($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getListContactsIds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getListContactsIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\GetListContactsIdsResponse**](../Model/GetListContactsIdsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLists**
> \TextMagic\Models\GetListsPaginatedResponse getLists($page, $limit, $orderBy, $direction, $favoriteOnly, $onlyMine)

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
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.
$favoriteOnly = 0; // int | Return only favorited lists.
$onlyMine = 0; // int | Return only current user lists.

try {
    $result = $apiInstance->getLists($page, $limit, $orderBy, $direction, $favoriteOnly, $onlyMine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The current fetched page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]
 **favoriteOnly** | **int**| Return only favorited lists. | [optional] [default to 0]
 **onlyMine** | **int**| Return only current user lists. | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetListsPaginatedResponse**](../Model/GetListsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListsOfContact**
> \TextMagic\Models\GetListsOfContactPaginatedResponse getListsOfContact($id, $page, $limit)

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
$id = 1; // int | 
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getListsOfContact($id, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getListsOfContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetListsOfContactPaginatedResponse**](../Model/GetListsOfContactPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagePreview**
> \TextMagic\Models\GetMessagePreviewResponse getMessagePreview($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry)

Preview message

Get a messages preview (with tags merged) of up to 100 messages per session.

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
$text = "Test message test"; // string | Message text. Required if **template_id** is not set.
$templateId = 1; // int | Template used instead of message text. Required if **text** is not set.
$sendingTime = 1565606455; // int | DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time is in unix timestamp format. Default is now.
$sendingDateTime = "2020-05-27 13:02:33"; // string | Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone.
$sendingTimezone = "America/Buenos_Aires"; // string | The ID or ISO-name of the timezone used for sending when the sendingDateTime parameter is set, e.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone.
$contacts = "1,2,3,4"; // string | Comma-separated array of contact resources id message will be sent to.
$lists = "1,2,3,4"; // string | Comma-separated array of list resources id message will be sent to.
$phones = "447860021130,447860021131"; // string | Comma-separated array of E.164 phone numbers message will be sent to.
$cutExtra = 0; // int | Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead.
$partsCount = 6; // int | Maximum message parts count (TextMagic allows sending of 1 to 6 message parts).
$referenceId = 1; // int | Custom message reference id which can be used in your application infrastructure.
$from = "Test Sender ID"; // string | One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs).
$rule = "FREQ=YEARLY;BYMONTH=1;BYMONTHDAY=1;COUNT=1"; // string | An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details.
$createChat = 0; // int | Should the sending method try to create new Chat(if not exist) with specified recipients?
$tts = 0; // int | Send Text-to-Speech message.
$local = 0; // int | Treat phone numbers passed in the \\'phones\\' field as local.
$localCountry = "US"; // string | The 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is the account country.

try {
    $result = $apiInstance->getMessagePreview($text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessagePreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| Message text. Required if **template_id** is not set. | [optional]
 **templateId** | **int**| Template used instead of message text. Required if **text** is not set. | [optional]
 **sendingTime** | **int**| DEPRECATED, consider using sendingDateTime and sendingTimezone parameters instead: Optional (required with rrule set). Message sending time is in unix timestamp format. Default is now. | [optional]
 **sendingDateTime** | **string**| Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone. | [optional]
 **sendingTimezone** | **string**| The ID or ISO-name of the timezone used for sending when the sendingDateTime parameter is set, e.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone. | [optional]
 **contacts** | **string**| Comma-separated array of contact resources id message will be sent to. | [optional]
 **lists** | **string**| Comma-separated array of list resources id message will be sent to. | [optional]
 **phones** | **string**| Comma-separated array of E.164 phone numbers message will be sent to. | [optional]
 **cutExtra** | **int**| Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. | [optional] [default to 0]
 **partsCount** | **int**| Maximum message parts count (TextMagic allows sending of 1 to 6 message parts). | [optional] [default to 6]
 **referenceId** | **int**| Custom message reference id which can be used in your application infrastructure. | [optional]
 **from** | **string**| One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs). | [optional]
 **rule** | **string**| An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details. | [optional]
 **createChat** | **int**| Should the sending method try to create new Chat(if not exist) with specified recipients? | [optional] [default to 0]
 **tts** | **int**| Send Text-to-Speech message. | [optional] [default to 0]
 **local** | **int**| Treat phone numbers passed in the \\&#39;phones\\&#39; field as local. | [optional] [default to 0]
 **localCountry** | **string**| The 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is the account country. | [optional]

### Return type

[**\TextMagic\Models\GetMessagePreviewResponse**](../Model/GetMessagePreviewResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagePrice**
> \TextMagic\Models\GetMessagePriceResponse getMessagePrice($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry)

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
$text = "Test message test"; // string | Message text. Required if the **template_id** is not set.
$templateId = 1; // int | Template used instead of message text. Required if the **text** is not set.
$sendingTime = 1565606455; // int | DEPRECATED, consider using the sendingDateTime and sendingTimezone parameters instead: optional (required with rrule set). Message sending time is in unix timestamp format. Default is now.
$sendingDateTime = "2020-05-27 13:02:33"; // string | Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone.
$sendingTimezone = "America/Buenos_Aires"; // string | The ID or ISO-name of the timezone used for sending when sendingDateTime parameter is set, e.g. if you specify sendingDateTime = \\\"2016-05-27 13:02:33\\\" and sendingTimezone = \\\"America/Buenos_Aires\\\", your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone.
$contacts = "1,2,3,4"; // string | Comma-separated array of contact resources id message will be sent to.
$lists = "1,2,3,4"; // string | Comma-separated array of list resources id message will be sent to.
$phones = "447860021130,447860021131"; // string | Comma-separated array of E.164 phone numbers message will be sent to.
$cutExtra = 0; // int | Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead.
$partsCount = 6; // int | Maximum message parts count (TextMagic allows sending 1 to 6 message parts).
$referenceId = 1; // int | Custom message reference id which can be used in your application infrastructure.
$from = "Test Sender ID"; // string | One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs).
$rule = "FREQ=YEARLY;BYMONTH=1;BYMONTHDAY=1;COUNT=1"; // string | An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details.
$createChat = 0; // int | Should the sending method try to create new Chat (if not exist) with specified recipients?
$tts = 0; // int | Send a Text-to-Speech message.
$local = 0; // int | Treat phone numbers passed in the \\'phones\\' field as local.
$localCountry = "US"; // string | The 2-letter ISO country code for local phone numbers, used when \\'local\\' is set to true. Default is the account country.

try {
    $result = $apiInstance->getMessagePrice($includeBlocked, $text, $templateId, $sendingTime, $sendingDateTime, $sendingTimezone, $contacts, $lists, $phones, $cutExtra, $partsCount, $referenceId, $from, $rule, $createChat, $tts, $local, $localCountry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessagePrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeBlocked** | **int**| Should we show the pricing for blocked contacts? | [optional] [default to 0]
 **text** | **string**| Message text. Required if the **template_id** is not set. | [optional]
 **templateId** | **int**| Template used instead of message text. Required if the **text** is not set. | [optional]
 **sendingTime** | **int**| DEPRECATED, consider using the sendingDateTime and sendingTimezone parameters instead: optional (required with rrule set). Message sending time is in unix timestamp format. Default is now. | [optional]
 **sendingDateTime** | **string**| Sending time is in Y-m-d H:i:s format (e.g. 2016-05-27 13:02:33). This time is relative to the sendingTimezone. | [optional]
 **sendingTimezone** | **string**| The ID or ISO-name of the timezone used for sending when sendingDateTime parameter is set, e.g. if you specify sendingDateTime &#x3D; \\\&quot;2016-05-27 13:02:33\\\&quot; and sendingTimezone &#x3D; \\\&quot;America/Buenos_Aires\\\&quot;, your message will be sent on May 27, 2016 13:02:33 Buenos Aires time, or 16:02:33 UTC. Default is the account timezone. | [optional]
 **contacts** | **string**| Comma-separated array of contact resources id message will be sent to. | [optional]
 **lists** | **string**| Comma-separated array of list resources id message will be sent to. | [optional]
 **phones** | **string**| Comma-separated array of E.164 phone numbers message will be sent to. | [optional]
 **cutExtra** | **int**| Should sending method cut extra characters which not fit supplied partsCount or return 400 Bad request response instead. | [optional] [default to 0]
 **partsCount** | **int**| Maximum message parts count (TextMagic allows sending 1 to 6 message parts). | [optional] [default to 6]
 **referenceId** | **int**| Custom message reference id which can be used in your application infrastructure. | [optional]
 **from** | **string**| One of the allowed Sender ID (phone number or alphanumeric sender ID). If the specified Sender ID is not allowed for some destinations, a fallback default Sender ID will be used to ensure delivery. See [Get timezones](https://docs.textmagic.com/#tag/Sender-IDs). | [optional]
 **rule** | **string**| An iCal RRULE parameter to create recurrent scheduled messages. When used, sendingTime is mandatory as the start point of sending. See https://www.textmagic.com/free-tools/rrule-generator for format details. | [optional]
 **createChat** | **int**| Should the sending method try to create new Chat (if not exist) with specified recipients? | [optional] [default to 0]
 **tts** | **int**| Send a Text-to-Speech message. | [optional] [default to 0]
 **local** | **int**| Treat phone numbers passed in the \\&#39;phones\\&#39; field as local. | [optional] [default to 0]
 **localCountry** | **string**| The 2-letter ISO country code for local phone numbers, used when \\&#39;local\\&#39; is set to true. Default is the account country. | [optional]

### Return type

[**\TextMagic\Models\GetMessagePriceResponse**](../Model/GetMessagePriceResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageSession**
> \TextMagic\Models\MessageSession getMessageSession($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Session ID. |

### Return type

[**\TextMagic\Models\MessageSession**](../Model/MessageSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageSessionStat**
> \TextMagic\Models\GetMessageSessionStatResponse getMessageSessionStat($id, $includeDeleted)

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
$id = 1; // int | 
$includeDeleted = 0; // int | Search also in deleted messages.

try {
    $result = $apiInstance->getMessageSessionStat($id, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessageSessionStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **includeDeleted** | **int**| Search also in deleted messages. | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetMessageSessionStatResponse**](../Model/GetMessageSessionStatResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagesBySessionId**
> \TextMagic\Models\GetMessagesBySessionIdPaginatedResponse getMessagesBySessionId($id, $page, $limit, $statuses, $includeDeleted)

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
$id = 1; // int | 
$page = 1; // int | Fetch specified results page.
$limit = 10; // int | The number of results per page.
$statuses = "statuses_example"; // string | Find messages by status.
$includeDeleted = 0; // int | Search also in deleted messages.

try {
    $result = $apiInstance->getMessagesBySessionId($id, $page, $limit, $statuses, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getMessagesBySessionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **statuses** | **string**| Find messages by status. | [optional]
 **includeDeleted** | **int**| Search also in deleted messages. | [optional] [default to 0]

### Return type

[**\TextMagic\Models\GetMessagesBySessionIdPaginatedResponse**](../Model/GetMessagesBySessionIdPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingCounters**
> \TextMagic\Models\GetMessagingCountersResponse getMessagingCounters()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetMessagingCountersResponse**](../Model/GetMessagingCountersResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundMessage**
> \TextMagic\Models\MessageOut getOutboundMessage($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getOutboundMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getOutboundMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessageOut**](../Model/MessageOut.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundMessagesHistory**
> \TextMagic\Models\GetOutboundMessagesHistoryPaginatedResponse getOutboundMessagesHistory($limit, $lastId, $query, $orderBy, $direction)

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
$query = "query_example"; // string | Find message by specified search query.
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->getOutboundMessagesHistory($limit, $lastId, $query, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getOutboundMessagesHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. | [optional]
 **query** | **string**| Find message by specified search query. | [optional]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\GetOutboundMessagesHistoryPaginatedResponse**](../Model/GetOutboundMessagesHistoryPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledMessage**
> \TextMagic\Models\MessagesIcs getScheduledMessage($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getScheduledMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessagesIcs**](../Model/MessagesIcs.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderId**
> \TextMagic\Models\SenderId getSenderId($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getSenderId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\SenderId**](../Model/SenderId.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderIds**
> \TextMagic\Models\GetSenderIdsPaginatedResponse getSenderIds($page, $limit)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetSenderIdsPaginatedResponse**](../Model/GetSenderIdsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderSettings**
> \TextMagic\Models\GetSenderSettingsResponse getSenderSettings($country)

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
$country = "US"; // string | Return sender settings enabled for sending to a specified country. Should be 2 upper-case characters.

try {
    $result = $apiInstance->getSenderSettings($country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSenderSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Return sender settings enabled for sending to a specified country. Should be 2 upper-case characters. | [optional]

### Return type

[**\TextMagic\Models\GetSenderSettingsResponse**](../Model/GetSenderSettingsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSpendingStat**
> \TextMagic\Models\GetSpendingStatPaginatedResponse getSpendingStat($page, $limit, $start, $end)

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
$start = "2018-11-11 11:11"; // string | Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is 7 days prior.
$end = "2019-11-11 11:11"; // string | Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is today.

try {
    $result = $apiInstance->getSpendingStat($page, $limit, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSpendingStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **start** | **string**| Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is 7 days prior. | [optional]
 **end** | **string**| Time period start in [UNIX timestamp](https://en.wikipedia.org/wiki/Unix_time) format. The default is today. | [optional]

### Return type

[**\TextMagic\Models\GetSpendingStatPaginatedResponse**](../Model/GetSpendingStatPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccount**
> \TextMagic\Models\User getSubaccount($id)

Get sub-account information



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
$id = 1; // int | 

try {
    $result = $apiInstance->getSubaccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccounts**
> \TextMagic\Models\User getSubaccounts($page, $limit)

Get a sub-accounts list



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
    $result = $apiInstance->getSubaccounts($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSubaccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubaccountsWithTokens**
> \TextMagic\Models\GetSubaccountsWithTokensResponse getSubaccountsWithTokens($getSubaccountsWithTokensInputObject, $page, $limit)

Get all sub-accounts with their REST API tokens associated with a specified app name

Get all sub-accounts with their REST API tokens associated with specified app name. When more than one token related to app name, last key will be returned.

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
$getSubaccountsWithTokensInputObject = new \TextMagic\Models\GetSubaccountsWithTokensInputObject(); // \TextMagic\Models\GetSubaccountsWithTokensInputObject | 
$page = 1; // float | Fetch specified results page.
$limit = 10; // int | The number of results per page.

try {
    $result = $apiInstance->getSubaccountsWithTokens($getSubaccountsWithTokensInputObject, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getSubaccountsWithTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getSubaccountsWithTokensInputObject** | [**\TextMagic\Models\GetSubaccountsWithTokensInputObject**](../Model/GetSubaccountsWithTokensInputObject.md)|  |
 **page** | **float**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetSubaccountsWithTokensResponse**](../Model/GetSubaccountsWithTokensResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \TextMagic\Models\MessageTemplate getTemplate($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\MessageTemplate**](../Model/MessageTemplate.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnreadMessagesTotal**
> \TextMagic\Models\GetUnreadMessagesTotalResponse getUnreadMessagesTotal()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\GetUnreadMessagesTotalResponse**](../Model/GetUnreadMessagesTotalResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnsubscribedContact**
> \TextMagic\Models\UnsubscribedContact getUnsubscribedContact($id)

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
$id = 1; // int | 

try {
    $result = $apiInstance->getUnsubscribedContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->getUnsubscribedContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\UnsubscribedContact**](../Model/UnsubscribedContact.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnsubscribers**
> \TextMagic\Models\GetUnsubscribersPaginatedResponse getUnsubscribers($page, $limit)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]

### Return type

[**\TextMagic\Models\GetUnsubscribersPaginatedResponse**](../Model/GetUnsubscribersPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDedicatedNumbers**
> \TextMagic\Models\GetUserDedicatedNumbersPaginatedResponse getUserDedicatedNumbers($page, $limit, $surveyId)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **surveyId** | **int**| Fetch only those numbers that are ready for the survey. | [optional]

### Return type

[**\TextMagic\Models\GetUserDedicatedNumbersPaginatedResponse**](../Model/GetUserDedicatedNumbersPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importContacts**
> \TextMagic\Models\ResourceLinkResponse importContacts($file, $column, $listId, $listName)

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
$file = "/path/to/file.txt"; // \SplFileObject | File containing contacts in csv or xls(x) formats.
$column = "0:firstName;1:lastName;3:phone;4:email"; // string | Import file column mapping. The string must contain sub-strings of mapping in format `columnNumber:field` glued by `;`. For example: `0:firstName;1:lastName;3:phone;4:email` where the value before `:` is a number of the column in the file, and the value after `:` is a field of the newly created contact or the ID of a custom field. Numbers of columns begin from zero. Allowed built-in contact fields are: `firstName`, `lastName`, `phone`, `email`. Existing of `phone` mapping is required.
$listId = 443; // int | List that ID contacts will be imported to. Ignored if `listName` is specified.
$listName = "A new list"; // string | List name. This list will be created during import. If such name is already taken, an ordinal (1, 2, ...) will be added to the end. Ignored if `listId` is specified.

try {
    $result = $apiInstance->importContacts($file, $column, $listId, $listName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->importContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File containing contacts in csv or xls(x) formats. |
 **column** | **string**| Import file column mapping. The string must contain sub-strings of mapping in format &#x60;columnNumber:field&#x60; glued by &#x60;;&#x60;. For example: &#x60;0:firstName;1:lastName;3:phone;4:email&#x60; where the value before &#x60;:&#x60; is a number of the column in the file, and the value after &#x60;:&#x60; is a field of the newly created contact or the ID of a custom field. Numbers of columns begin from zero. Allowed built-in contact fields are: &#x60;firstName&#x60;, &#x60;lastName&#x60;, &#x60;phone&#x60;, &#x60;email&#x60;. Existing of &#x60;phone&#x60; mapping is required. |
 **listId** | **int**| List that ID contacts will be imported to. Ignored if &#x60;listName&#x60; is specified. | [optional]
 **listName** | **string**| List name. This list will be created during import. If such name is already taken, an ordinal (1, 2, ...) will be added to the end. Ignored if &#x60;listId&#x60; is specified. | [optional]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteSubaccount**
> inviteSubaccount($inviteSubaccountInputObject)

Invite a new sub-account



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
$inviteSubaccountInputObject = new \TextMagic\Models\InviteSubaccountInputObject(); // \TextMagic\Models\InviteSubaccountInputObject | 

try {
    $apiInstance->inviteSubaccount($inviteSubaccountInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->inviteSubaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inviteSubaccountInputObject** | [**\TextMagic\Models\InviteSubaccountInputObject**](../Model/InviteSubaccountInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markChatsReadBulk**
> markChatsReadBulk($markChatsReadBulkInputObject)

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
$markChatsReadBulkInputObject = new \TextMagic\Models\MarkChatsReadBulkInputObject(); // \TextMagic\Models\MarkChatsReadBulkInputObject | 

try {
    $apiInstance->markChatsReadBulk($markChatsReadBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->markChatsReadBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **markChatsReadBulkInputObject** | [**\TextMagic\Models\MarkChatsReadBulkInputObject**](../Model/MarkChatsReadBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markChatsUnreadBulk**
> markChatsUnreadBulk($markChatsUnreadBulkInputObject)

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
$markChatsUnreadBulkInputObject = new \TextMagic\Models\MarkChatsUnreadBulkInputObject(); // \TextMagic\Models\MarkChatsUnreadBulkInputObject | 

try {
    $apiInstance->markChatsUnreadBulk($markChatsUnreadBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->markChatsUnreadBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **markChatsUnreadBulkInputObject** | [**\TextMagic\Models\MarkChatsUnreadBulkInputObject**](../Model/MarkChatsUnreadBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteChat**
> \TextMagic\Models\ResourceLinkResponse muteChat($muteChatInputObject)

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
$muteChatInputObject = new \TextMagic\Models\MuteChatInputObject(); // \TextMagic\Models\MuteChatInputObject | 

try {
    $result = $apiInstance->muteChat($muteChatInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->muteChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muteChatInputObject** | [**\TextMagic\Models\MuteChatInputObject**](../Model/MuteChatInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **muteChatsBulk**
> muteChatsBulk($muteChatsBulkInputObject)

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
$muteChatsBulkInputObject = new \TextMagic\Models\MuteChatsBulkInputObject(); // \TextMagic\Models\MuteChatsBulkInputObject | 

try {
    $apiInstance->muteChatsBulk($muteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->muteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muteChatsBulkInputObject** | [**\TextMagic\Models\MuteChatsBulkInputObject**](../Model/MuteChatsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ping**
> \TextMagic\Models\PingResponse ping()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TextMagic\Models\PingResponse**](../Model/PingResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reopenChatsBulk**
> reopenChatsBulk($reopenChatsBulkInputObject)

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
$reopenChatsBulkInputObject = new \TextMagic\Models\ReopenChatsBulkInputObject(); // \TextMagic\Models\ReopenChatsBulkInputObject | 

try {
    $apiInstance->reopenChatsBulk($reopenChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->reopenChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reopenChatsBulkInputObject** | [**\TextMagic\Models\ReopenChatsBulkInputObject**](../Model/ReopenChatsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestNewSubaccountToken**
> \TextMagic\Models\User requestNewSubaccountToken($requestNewSubaccountTokenInputObject)

Request a new REST API token for sub-account

Returning user object, key and app name.

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
$requestNewSubaccountTokenInputObject = new \TextMagic\Models\RequestNewSubaccountTokenInputObject(); // \TextMagic\Models\RequestNewSubaccountTokenInputObject | 

try {
    $result = $apiInstance->requestNewSubaccountToken($requestNewSubaccountTokenInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->requestNewSubaccountToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNewSubaccountTokenInputObject** | [**\TextMagic\Models\RequestNewSubaccountTokenInputObject**](../Model/RequestNewSubaccountTokenInputObject.md)|  |

### Return type

[**\TextMagic\Models\User**](../Model/User.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestSenderId**
> \TextMagic\Models\ResourceLinkResponse requestSenderId($requestSenderIdInputObject)

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
$requestSenderIdInputObject = new \TextMagic\Models\RequestSenderIdInputObject(); // \TextMagic\Models\RequestSenderIdInputObject | 

try {
    $result = $apiInstance->requestSenderId($requestSenderIdInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->requestSenderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestSenderIdInputObject** | [**\TextMagic\Models\RequestSenderIdInputObject**](../Model/RequestSenderIdInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChats**
> \TextMagic\Models\SearchChatsPaginatedResponse searchChats($page, $limit, $query)

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
$query = "query_example"; // string | Find chats by specified search query.

try {
    $result = $apiInstance->searchChats($page, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **query** | **string**| Find chats by specified search query. | [optional]

### Return type

[**\TextMagic\Models\SearchChatsPaginatedResponse**](../Model/SearchChatsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChatsByIds**
> \TextMagic\Models\SearchChatsByIdsPaginatedResponse searchChatsByIds($page, $limit, $ids)

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
$ids = "ids_example"; // string | Find chats by ID(s).

try {
    $result = $apiInstance->searchChatsByIds($page, $limit, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchChatsByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **ids** | **string**| Find chats by ID(s). | [optional]

### Return type

[**\TextMagic\Models\SearchChatsByIdsPaginatedResponse**](../Model/SearchChatsByIdsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchChatsByReceipent**
> \TextMagic\Models\SearchChatsByReceipentPaginatedResponse searchChatsByReceipent($page, $limit, $query, $orderBy)

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
$query = "query_example"; // string | Find chats by specified search query.
$orderBy = "id"; // string | Order results by some field. Default is id.

try {
    $result = $apiInstance->searchChatsByReceipent($page, $limit, $query, $orderBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchChatsByReceipent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **query** | **string**| Find chats by specified search query. | [optional]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]

### Return type

[**\TextMagic\Models\SearchChatsByReceipentPaginatedResponse**](../Model/SearchChatsByReceipentPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContacts**
> \TextMagic\Models\SearchContactsPaginatedResponse searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $exactMatch, $country, $orderBy, $direction)

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
$ids = "ids_example"; // string | Find contacts by IDs.
$listId = 56; // int | Find contacts by List ID.
$includeBlocked = 56; // int | Should blocked contacts be included?
$query = "query_example"; // string | Find contacts by specified search query.
$local = 0; // int | Treat phone number passed in the \"query\" field as local. Default is 0.
$exactMatch = 0; // int | Return only exactly matching contacts. Default is 0.
$country = "country_example"; // string | The 2-letter ISO country code for local phone numbers, used when \"local\" is set to true. Default is the account country.
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->searchContacts($page, $limit, $shared, $ids, $listId, $includeBlocked, $query, $local, $exactMatch, $country, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **shared** | **int**| Should shared contacts be included? | [optional] [default to 0]
 **ids** | **string**| Find contacts by IDs. | [optional]
 **listId** | **int**| Find contacts by List ID. | [optional]
 **includeBlocked** | **int**| Should blocked contacts be included? | [optional]
 **query** | **string**| Find contacts by specified search query. | [optional]
 **local** | **int**| Treat phone number passed in the \&quot;query\&quot; field as local. Default is 0. | [optional] [default to 0]
 **exactMatch** | **int**| Return only exactly matching contacts. Default is 0. | [optional] [default to 0]
 **country** | **string**| The 2-letter ISO country code for local phone numbers, used when \&quot;local\&quot; is set to true. Default is the account country. | [optional]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\SearchContactsPaginatedResponse**](../Model/SearchContactsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchInboundMessages**
> \TextMagic\Models\SearchInboundMessagesPaginatedResponse searchInboundMessages($page, $limit, $ids, $query, $orderBy, $direction, $expand)

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
$ids = "ids_example"; // string | Find message by ID(s).
$query = "query_example"; // string | Find recipients by specified search query.
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.
$expand = 0; // int | Expand by adding firstName, lastName and contactId.

try {
    $result = $apiInstance->searchInboundMessages($page, $limit, $ids, $query, $orderBy, $direction, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchInboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **ids** | **string**| Find message by ID(s). | [optional]
 **query** | **string**| Find recipients by specified search query. | [optional]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]
 **expand** | **int**| Expand by adding firstName, lastName and contactId. | [optional] [default to 0]

### Return type

[**\TextMagic\Models\SearchInboundMessagesPaginatedResponse**](../Model/SearchInboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLists**
> \TextMagic\Models\SearchListsPaginatedResponse searchLists($page, $limit, $ids, $query, $onlyMine, $onlyDefault, $orderBy, $direction)

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
$ids = "1,2,3,4"; // string | Find lists by IDs.
$query = "A"; // string | Find lists by specified search query.
$onlyMine = 0; // int | Return only current user lists.
$onlyDefault = 0; // int | Return only default lists.
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->searchLists($page, $limit, $ids, $query, $onlyMine, $onlyDefault, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **ids** | **string**| Find lists by IDs. | [optional]
 **query** | **string**| Find lists by specified search query. | [optional]
 **onlyMine** | **int**| Return only current user lists. | [optional] [default to 0]
 **onlyDefault** | **int**| Return only default lists. | [optional] [default to 0]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\SearchListsPaginatedResponse**](../Model/SearchListsPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOutboundMessages**
> \TextMagic\Models\SearchOutboundMessagesPaginatedResponse searchOutboundMessages($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query)

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
$ids = "ids_example"; // string | Find message by ID(s).
$sessionId = 56; // int | Find messages by session ID.
$statuses = "q"; // string | Find messages by status.
$includeDeleted = 0; // int | Search also in deleted messages.
$query = "query_example"; // string | Find messages by specified search query.

try {
    $result = $apiInstance->searchOutboundMessages($page, $limit, $lastId, $ids, $sessionId, $statuses, $includeDeleted, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchOutboundMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **lastId** | **int**| Filter results by ID, selecting all values lesser than the specified ID. Note that the \\&#39;page\\&#39; parameter is ignored when \\&#39;lastId\\&#39; is specified. | [optional]
 **ids** | **string**| Find message by ID(s). | [optional]
 **sessionId** | **int**| Find messages by session ID. | [optional]
 **statuses** | **string**| Find messages by status. | [optional]
 **includeDeleted** | **int**| Search also in deleted messages. | [optional] [default to 0]
 **query** | **string**| Find messages by specified search query. | [optional]

### Return type

[**\TextMagic\Models\SearchOutboundMessagesPaginatedResponse**](../Model/SearchOutboundMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchScheduledMessages**
> \TextMagic\Models\SearchScheduledMessagesPaginatedResponse searchScheduledMessages($page, $limit, $query, $ids, $status, $orderBy, $direction)

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
$query = "query_example"; // string | Find messages by specified search query.
$ids = "ids_example"; // string | Find schedules by ID(s).
$status = "x"; // string | Fetch schedules with a specific status: a - actual, c - completed, x - all.
$orderBy = "id"; // string | Order results by some field. Default is id.
$direction = "desc"; // string | Order direction. Default is desc.

try {
    $result = $apiInstance->searchScheduledMessages($page, $limit, $query, $ids, $status, $orderBy, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchScheduledMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **query** | **string**| Find messages by specified search query. | [optional]
 **ids** | **string**| Find schedules by ID(s). | [optional]
 **status** | **string**| Fetch schedules with a specific status: a - actual, c - completed, x - all. | [optional] [default to x]
 **orderBy** | **string**| Order results by some field. Default is id. | [optional] [default to id]
 **direction** | **string**| Order direction. Default is desc. | [optional] [default to desc]

### Return type

[**\TextMagic\Models\SearchScheduledMessagesPaginatedResponse**](../Model/SearchScheduledMessagesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTemplates**
> \TextMagic\Models\SearchTemplatesPaginatedResponse searchTemplates($page, $limit, $ids, $name, $content)

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
$ids = "ids_example"; // string | Find template by ID(s).
$name = "name_example"; // string | Find template by name.
$content = "content_example"; // string | Find template by content.

try {
    $result = $apiInstance->searchTemplates($page, $limit, $ids, $name, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->searchTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Fetch specified results page. | [optional] [default to 1]
 **limit** | **int**| The number of results per page. | [optional] [default to 10]
 **ids** | **string**| Find template by ID(s). | [optional]
 **name** | **string**| Find template by name. | [optional]
 **content** | **string**| Find template by content. | [optional]

### Return type

[**\TextMagic\Models\SearchTemplatesPaginatedResponse**](../Model/SearchTemplatesPaginatedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \TextMagic\Models\SendMessageResponse sendMessage($sendMessageInputObject)

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
$sendMessageInputObject = new \TextMagic\Models\SendMessageInputObject(); // \TextMagic\Models\SendMessageInputObject | 

try {
    $result = $apiInstance->sendMessage($sendMessageInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendMessageInputObject** | [**\TextMagic\Models\SendMessageInputObject**](../Model/SendMessageInputObject.md)|  |

### Return type

[**\TextMagic\Models\SendMessageResponse**](../Model/SendMessageResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPhoneVerificationCodeTFA**
> \TextMagic\Models\SendPhoneVerificationCodeResponse sendPhoneVerificationCodeTFA($sendPhoneVerificationCodeTFAInputObject)

Step 1: Send a verification code

Sends a verification code to a specified phone number.

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
$sendPhoneVerificationCodeTFAInputObject = new \TextMagic\Models\SendPhoneVerificationCodeTFAInputObject(); // \TextMagic\Models\SendPhoneVerificationCodeTFAInputObject | 

try {
    $result = $apiInstance->sendPhoneVerificationCodeTFA($sendPhoneVerificationCodeTFAInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->sendPhoneVerificationCodeTFA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendPhoneVerificationCodeTFAInputObject** | [**\TextMagic\Models\SendPhoneVerificationCodeTFAInputObject**](../Model/SendPhoneVerificationCodeTFAInputObject.md)|  |

### Return type

[**\TextMagic\Models\SendPhoneVerificationCodeResponse**](../Model/SendPhoneVerificationCodeResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setChatStatus**
> \TextMagic\Models\ResourceLinkResponse setChatStatus($setChatStatusInputObject)

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
$setChatStatusInputObject = new \TextMagic\Models\SetChatStatusInputObject(); // \TextMagic\Models\SetChatStatusInputObject | 

try {
    $result = $apiInstance->setChatStatus($setChatStatusInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->setChatStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setChatStatusInputObject** | [**\TextMagic\Models\SetChatStatusInputObject**](../Model/SetChatStatusInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockContact**
> unblockContact($unblockContactInputObject)

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
$unblockContactInputObject = new \TextMagic\Models\UnblockContactInputObject(); // \TextMagic\Models\UnblockContactInputObject | 

try {
    $apiInstance->unblockContact($unblockContactInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unblockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unblockContactInputObject** | [**\TextMagic\Models\UnblockContactInputObject**](../Model/UnblockContactInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unblockContactsBulk**
> unblockContactsBulk($unblockContactsBulkInputObject)

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
$unblockContactsBulkInputObject = new \TextMagic\Models\UnblockContactsBulkInputObject(); // \TextMagic\Models\UnblockContactsBulkInputObject | 

try {
    $apiInstance->unblockContactsBulk($unblockContactsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unblockContactsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unblockContactsBulkInputObject** | [**\TextMagic\Models\UnblockContactsBulkInputObject**](../Model/UnblockContactsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unmuteChatsBulk**
> unmuteChatsBulk($unmuteChatsBulkInputObject)

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
$unmuteChatsBulkInputObject = new \TextMagic\Models\UnmuteChatsBulkInputObject(); // \TextMagic\Models\UnmuteChatsBulkInputObject | 

try {
    $apiInstance->unmuteChatsBulk($unmuteChatsBulkInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unmuteChatsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unmuteChatsBulkInputObject** | [**\TextMagic\Models\UnmuteChatsBulkInputObject**](../Model/UnmuteChatsBulkInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribeContact**
> \TextMagic\Models\ResourceLinkResponse unsubscribeContact($unsubscribeContactInputObject)

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
$unsubscribeContactInputObject = new \TextMagic\Models\UnsubscribeContactInputObject(); // \TextMagic\Models\UnsubscribeContactInputObject | 

try {
    $result = $apiInstance->unsubscribeContact($unsubscribeContactInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->unsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unsubscribeContactInputObject** | [**\TextMagic\Models\UnsubscribeContactInputObject**](../Model/UnsubscribeContactInputObject.md)|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBalanceNotificationSettings**
> updateBalanceNotificationSettings($updateBalanceNotificationSettingsInputObject)

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
$updateBalanceNotificationSettingsInputObject = new \TextMagic\Models\UpdateBalanceNotificationSettingsInputObject(); // \TextMagic\Models\UpdateBalanceNotificationSettingsInputObject | 

try {
    $apiInstance->updateBalanceNotificationSettings($updateBalanceNotificationSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateBalanceNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateBalanceNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateBalanceNotificationSettingsInputObject**](../Model/UpdateBalanceNotificationSettingsInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCallbackSettings**
> updateCallbackSettings($updateCallbackSettingsInputObject)

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
$updateCallbackSettingsInputObject = new \TextMagic\Models\UpdateCallbackSettingsInputObject(); // \TextMagic\Models\UpdateCallbackSettingsInputObject | 

try {
    $apiInstance->updateCallbackSettings($updateCallbackSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCallbackSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCallbackSettingsInputObject** | [**\TextMagic\Models\UpdateCallbackSettingsInputObject**](../Model/UpdateCallbackSettingsInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChatDesktopNotificationSettings**
> updateChatDesktopNotificationSettings($updateChatDesktopNotificationSettingsInputObject)

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
$updateChatDesktopNotificationSettingsInputObject = new \TextMagic\Models\UpdateChatDesktopNotificationSettingsInputObject(); // \TextMagic\Models\UpdateChatDesktopNotificationSettingsInputObject | 

try {
    $apiInstance->updateChatDesktopNotificationSettings($updateChatDesktopNotificationSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateChatDesktopNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateChatDesktopNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateChatDesktopNotificationSettingsInputObject**](../Model/UpdateChatDesktopNotificationSettingsInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \TextMagic\Models\ResourceLinkResponse updateContact($updateContactInputObject, $id)

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
$updateContactInputObject = new \TextMagic\Models\UpdateContactInputObject(); // \TextMagic\Models\UpdateContactInputObject | 
$id = 1; // int | 

try {
    $result = $apiInstance->updateContact($updateContactInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateContactInputObject** | [**\TextMagic\Models\UpdateContactInputObject**](../Model/UpdateContactInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactNote**
> \TextMagic\Models\ResourceLinkResponse updateContactNote($updateContactNoteInputObject, $id)

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
$updateContactNoteInputObject = new \TextMagic\Models\UpdateContactNoteInputObject(); // \TextMagic\Models\UpdateContactNoteInputObject | 
$id = 1; // int | 

try {
    $result = $apiInstance->updateContactNote($updateContactNoteInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateContactNoteInputObject** | [**\TextMagic\Models\UpdateContactNoteInputObject**](../Model/UpdateContactNoteInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCurrentUser**
> \TextMagic\Models\UpdateCurrentUserResponse updateCurrentUser($updateCurrentUserInputObject)

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
$updateCurrentUserInputObject = new \TextMagic\Models\UpdateCurrentUserInputObject(); // \TextMagic\Models\UpdateCurrentUserInputObject | 

try {
    $result = $apiInstance->updateCurrentUser($updateCurrentUserInputObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCurrentUserInputObject** | [**\TextMagic\Models\UpdateCurrentUserInputObject**](../Model/UpdateCurrentUserInputObject.md)|  |

### Return type

[**\TextMagic\Models\UpdateCurrentUserResponse**](../Model/UpdateCurrentUserResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomField**
> \TextMagic\Models\ResourceLinkResponse updateCustomField($updateCustomFieldInputObject, $id)

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
$updateCustomFieldInputObject = new \TextMagic\Models\UpdateCustomFieldInputObject(); // \TextMagic\Models\UpdateCustomFieldInputObject | 
$id = 1; // int | 

try {
    $result = $apiInstance->updateCustomField($updateCustomFieldInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCustomFieldInputObject** | [**\TextMagic\Models\UpdateCustomFieldInputObject**](../Model/UpdateCustomFieldInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomFieldValue**
> \TextMagic\Models\ResourceLinkResponse updateCustomFieldValue($updateCustomFieldValueInputObject, $id)

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
$updateCustomFieldValueInputObject = new \TextMagic\Models\UpdateCustomFieldValueInputObject(); // \TextMagic\Models\UpdateCustomFieldValueInputObject | 
$id = 554; // int | 

try {
    $result = $apiInstance->updateCustomFieldValue($updateCustomFieldValueInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateCustomFieldValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateCustomFieldValueInputObject** | [**\TextMagic\Models\UpdateCustomFieldValueInputObject**](../Model/UpdateCustomFieldValueInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInboundMessagesNotificationSettings**
> updateInboundMessagesNotificationSettings($updateInboundMessagesNotificationSettingsInputObject)

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
$updateInboundMessagesNotificationSettingsInputObject = new \TextMagic\Models\UpdateInboundMessagesNotificationSettingsInputObject(); // \TextMagic\Models\UpdateInboundMessagesNotificationSettingsInputObject | 

try {
    $apiInstance->updateInboundMessagesNotificationSettings($updateInboundMessagesNotificationSettingsInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateInboundMessagesNotificationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateInboundMessagesNotificationSettingsInputObject** | [**\TextMagic\Models\UpdateInboundMessagesNotificationSettingsInputObject**](../Model/UpdateInboundMessagesNotificationSettingsInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateList**
> \TextMagic\Models\ResourceLinkResponse updateList($id, $updateListObject)

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
$id = 1; // int | 
$updateListObject = new \TextMagic\Models\UpdateListObject(); // \TextMagic\Models\UpdateListObject | 

try {
    $result = $apiInstance->updateList($id, $updateListObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **updateListObject** | [**\TextMagic\Models\UpdateListObject**](../Model/UpdateListObject.md)|  | [optional]

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSenderSetting**
> updateSenderSetting($updateSenderSettingInputObject)

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
$updateSenderSettingInputObject = new \TextMagic\Models\UpdateSenderSettingInputObject(); // \TextMagic\Models\UpdateSenderSettingInputObject | 

try {
    $apiInstance->updateSenderSetting($updateSenderSettingInputObject);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateSenderSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateSenderSettingInputObject** | [**\TextMagic\Models\UpdateSenderSettingInputObject**](../Model/UpdateSenderSettingInputObject.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTemplate**
> \TextMagic\Models\ResourceLinkResponse updateTemplate($updateTemplateInputObject, $id)

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
$updateTemplateInputObject = new \TextMagic\Models\UpdateTemplateInputObject(); // \TextMagic\Models\UpdateTemplateInputObject | 
$id = 1; // int | 

try {
    $result = $apiInstance->updateTemplate($updateTemplateInputObject, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateTemplateInputObject** | [**\TextMagic\Models\UpdateTemplateInputObject**](../Model/UpdateTemplateInputObject.md)|  |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAvatar**
> uploadAvatar($image)

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
$image = "/path/to/file.txt"; // \SplFileObject | User avatar. Should be a PNG or JPG file not more than 10 MB.

try {
    $apiInstance->uploadAvatar($image);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| User avatar. Should be a PNG or JPG file not more than 10 MB. |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadContactAvatar**
> \TextMagic\Models\ResourceLinkResponse uploadContactAvatar($image, $id)

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
$image = "/path/to/file.txt"; // \SplFileObject | Contact avatar. Should be a PNG or JPG file not more than 10 MB.
$id = 1; // int | 

try {
    $result = $apiInstance->uploadContactAvatar($image, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadContactAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| Contact avatar. Should be a PNG or JPG file not more than 10 MB. |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadListAvatar**
> \TextMagic\Models\ResourceLinkResponse uploadListAvatar($image, $id)

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
$image = "/path/to/file.txt"; // \SplFileObject | List avatar. Should be a PNG or JPG file not more than 10 MB.
$id = 1; // int | 

try {
    $result = $apiInstance->uploadListAvatar($image, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadListAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject**| List avatar. Should be a PNG or JPG file not more than 10 MB. |
 **id** | **int**|  |

### Return type

[**\TextMagic\Models\ResourceLinkResponse**](../Model/ResourceLinkResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMessageAttachment**
> \TextMagic\Models\UploadMessageAttachmentResponse uploadMessageAttachment($file)

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
$file = "/path/to/file.txt"; // \SplFileObject | Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx & .vcf file formats.

try {
    $result = $apiInstance->uploadMessageAttachment($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadMessageAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats. |

### Return type

[**\TextMagic\Models\UploadMessageAttachmentResponse**](../Model/UploadMessageAttachmentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadMessageMMSAttachment**
> \TextMagic\Models\UploadMessageAttachmentResponse uploadMessageMMSAttachment($file)

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
$file = "/path/to/file.txt"; // \SplFileObject | Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx & .vcf file formats.

try {
    $result = $apiInstance->uploadMessageMMSAttachment($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextMagicApi->uploadMessageMMSAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| Attachment. Supports .jpg, .gif, .png, .pdf, .txt, .csv, .doc, .docx, .xls, .xlsx, .ppt, .pptx &amp; .vcf file formats. |

### Return type

[**\TextMagic\Models\UploadMessageAttachmentResponse**](../Model/UploadMessageAttachmentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


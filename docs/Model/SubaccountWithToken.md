# SubaccountWithToken

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Sub-account ID. | 
**username** | **string** | Username. | 
**firstName** | **string** | Account first name. | 
**lastName** | **string** | Account last name. | 
**email** | **string** | Account Email address. | 
**status** | **string** | Current account status: * **A** for Active; * **T** for Trial. | 
**balance** | **double** | Account balance (in account currency). | 
**phone** | **string** | Contact phone number. | 
**company** | **string** | Account company name. | 
**currency** | [**\TextMagic\Models\Currency**](Currency.md) |  | 
**country** | [**\TextMagic\Models\Country**](Country.md) |  | 
**timezone** | [**\TextMagic\Models\Timezone**](Timezone.md) |  | 
**subaccountType** | **string** | Type of account: *   **A** for Administrator sub-account; *   **U** for Regular User. | 
**emailAccepted** | **bool** | Does the account have a confirmed Email?. | 
**phoneAccepted** | **bool** | Does the account have a confirmed Phone Number?. | 
**avatar** | [**\TextMagic\Models\UserImage**](UserImage.md) |  | 
**token** | **string** | Access token of account. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



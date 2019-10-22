# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | User ID. | 
**displayTimeFormat** | **string** | User&#39;s prefered format of time display * *12h* - AM/PM format * *24h* - 24 hour clock format | [optional] 
**username** | **string** | Username. | 
**firstName** | **string** | Account first name. | 
**lastName** | **string** | Account last name. | 
**email** | **string** | User email address. | 
**status** | **string** | Current account status: * **A** for Active * **T** for Trial. | 
**balance** | **float** | Account balance (in account currency). | 
**phone** | **string** | User phone number | 
**company** | **string** | Account company name. | 
**currency** | [**\TextMagic\Models\Currency**](Currency.md) |  | 
**country** | [**\TextMagic\Models\Country**](Country.md) |  | 
**timezone** | [**\TextMagic\Models\Timezone**](Timezone.md) |  | 
**subaccountType** | **string** | Type of account: * **P** for Parent User * **A** for Administrator Sub-Account * **U** for Regular User | 
**emailAccepted** | **bool** | Is account has confirmed Email. | 
**phoneAccepted** | **bool** | Is account has confirmed Phone number. | 
**avatar** | [**\TextMagic\Models\UserImage**](UserImage.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



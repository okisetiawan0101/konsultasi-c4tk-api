
# Counselor

## View Profile

```shell
curl "http://c4tk.com/api/v1/counselors/<CounselorId>"
  -H "Authorization: Bearer <access_token>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
        "id": "1",
		"name": "alfin",
        "nickName": "kupang",
		"birthDate": "1990-01-01",
		"birthPlace": "Jakarta",
		"address": "alamat 1",
		"village": {
			"id": "3174040006",
			"description": "WIJAYA KUSUMA",
			"district": {
				"id": "3174040",
				"description": "GROGOL PETAMBURAN",
				"city": {
					"id": "3174",
					"description": "KOTA JAKARTA BARAT",
					"province": {
						"id": "31",
						"description": "DKI JAKARTA"
					}
				}
			}
		},
		"gender": {
			"id": "1",
			"description": "Male"
		},
		"occupation": {
			"id": "1",
			"description": "Pelajar"
		},
		"education": {
			"id": "1",
			"description": "S1"
		},
		"maritalStatus": {
			"id": "1",
			"description": "Menikah"
		}
	}
}
```

This endpoint retrieves all Counselors.

### HTTP Request

`GET http://c4tk.com/api/v1/counselors`



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object Counselor



### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
CounselorId | Number | Yes |




## Update Counselor


```shell
curl -X PUT "http://c4tk.com/api/v1/counselors/<CounselorId>" \
  -H "Authorization: Bearer <access_token>" \
  -H "Content-Type: application/json" \ 
  -d '{
		"name": "alfin",
        "nickName": "kupang",
		"email": "kupanglie@gmail.com",
		"password": "password123",
		"birthDate": "1990-01-01",
		"birthPlace": "Jakarta",
		"address": "alamat 1",
		"villageId": "3174040006",
		"genderId": "1",
		"occupationId": "1",
		"educationId": "1",
		"maritalStatusId": "1"
  	}'\
```


> The above command returns JSON structured like this:

```json
{
	"data" : {
		"id": "1",
		"name": "alfin",
		"nickName": "kupang",
		"birthDate": "1990-01-01",
		"birthPlace": "Jakarta",
		"address": "alamat 1",
		"village": {
			"id": "3174040006",
			"description": "WIJAYA KUSUMA",
			"district": {
				"id": "3174040",
				"description": "GROGOL PETAMBURAN",
				"city": {
					"id": "3174",
					"description": "KOTA JAKARTA BARAT",
					"province": {
						"id": "31",
						"description": "DKI JAKARTA"
					}
				}
			}
		},
		"gender": {
			"id": "1",
			"description": "Male"
		},
		"occupation": {
			"id": "1",
			"description": "Pelajar"
		},
		"education": {
			"id": "1",
			"description": "S1"
		},
		"maritalStatus": {
			"id": "1",
			"description": "Menikah"
		}
	}
}
```

This endpoint to update Counselor.

### HTTP Request

`PUT http://c4tk.com/api/v1/counselors/<CounselorId>`


### URL Parameters

Parameter | Description
--------- | -----------
CounselorId | The ID of the Counselor



### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
name | String | Yes | 
nick name | String | Yes | 
email | String | Yes | 
password | String | Yes | 
birth date | Date | Yes | YYYY-MM-DD
birth place | String | Yes | 
address | String | Yes | 
villageId | String | Yes |
genderId | String | Yes | 
occupationId | String | Yes |
educationId | Integer | Yes | 
maritalStatusId | Integer | Yes | 
religionId | Integer | Yes |
avatarId | Integer | Yes |
profile | String | Yes |



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object Counselor

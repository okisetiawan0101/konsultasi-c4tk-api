
# Counselor

## View Profile

```shell
curl "http://tersebut.com/api/v1/counselors/<counselor_id>"
  -H "Authorization: Bearer <access_token>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
        "id": "1",
		"name": "alfin",
        "nick_name": "kupang",
		"birth_date": "1990-01-01",
		"birth_place": "Jakarta",
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

`GET http://tersebut.com/api/v1/counselors`



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object Counselor



### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
counselor_id | Number | Yes |




## Update Counselor


```shell
curl -X PUT "http://tersebut.com/api/v1/counselors/<counselor_id>" \
  -H "Authorization: Bearer <access_token>" \
  -H "Content-Type: application/json" \ 
  -d '{
		"name": "alfin",
        "nick_name": "kupang",
		"email": "kupanglie@gmail.com",
		"password": "password123",
		"birth_date": "1990-01-01",
		"birth_place": "Jakarta",
		"address": "alamat 1",
		"village_id": "3174040006",
		"gender_id": "1",
		"occupation_id": "1",
		"education_id": "1",
		"marital_status_id": "1"
  	}'\
```


> The above command returns JSON structured like this:

```json
{
	"data" : {
		"id": "1",
		"name": "alfin",
		"nick_name": "kupang",
		"birth_date": "1990-01-01",
		"birth_place": "Jakarta",
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

`PUT http://tersebut.com/api/v1/counselors/<counselor_id>`


### URL Parameters

Parameter | Description
--------- | -----------
counselor_id | The ID of the Counselor



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
village_id | String | Yes |
gender_id | String | Yes | 
occupation_id | String | Yes |
education_id | Integer | Yes | 
marital_status_id | Integer | Yes | 
religionId | Integer | Yes |
avatarId | Integer | Yes |
profile | String | Yes |



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object Counselor


# User

## Registration

```shell
curl "http://c4tk.com/api/v1/users" \
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

This endpoint to insert User.

### HTTP Request

`POST http://c4tk.com/api/v1/users`


### URL Parameters

Parameter | Description
--------- | -----------


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
Data | Object | Object User


## Login

```shell
curl "http://c4tk.com/api/v1/users/login" \
  -H "Authorization: Bearer <access_token>" \
  -H "Content-Type: application/json" \
  -d '{
		"email": "kupanglie@gmail.com",
		"password": "password123",
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

This endpoint to insert User.

### HTTP Request

`POST http://c4tk.com/api/v1/users/login`


### URL Parameters

Parameter | Description
--------- | -----------


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
email | String | Yes | 
password | String | Yes | 



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object User


## View Profile


```shell
curl "http://c4tk.com/api/v1/users/<userId>"
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

This endpoint retrieves all users.

### HTTP Request

`GET http://c4tk.com/api/v1/users`



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object User



### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
userId | Number | Yes |



## Get a Specific User

```shell
curl "http://c4tk.com/api/v1/users/<UserId>"
  -H "Authorization: Bearer <access_token>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"id": "1",
		"name": "alfin"
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

This endpoint retrieves a specific User.


### HTTP Request

`GET http://c4tk.com/api/v1/users/<UserId>`

### URL Parameters

Parameter | Description
--------- | -----------
UserId | The ID of the User to retrieve


### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object User




## Update User


```shell
curl -X PUT "http://c4tk.com/api/v1/users/<UserId>" \
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

This endpoint to update User.

### HTTP Request

`PUT http://c4tk.com/api/v1/users/<UserId>`


### URL Parameters

Parameter | Description
--------- | -----------
UserId | The ID of the User



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
Data | Object | Object User


## Delete User


```shell
curl -X DELETE "http://c4tk.com/api/v1/users/<UserId>" \
  -H "Authorization: Bearer <access_token>"
```


> The above command returns HTTP_NO_CONTENT


This endpoint to delete mfi's companion.

### HTTP Request

`DELETE http://c4tk.com/api/v1/users/<UserId>`


### URL Parameters

Parameter | Description
--------- | -----------
UserId | The ID of the User



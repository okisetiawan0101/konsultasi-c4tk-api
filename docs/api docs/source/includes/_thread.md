
# Thread

## Get Thread Info

```shell
curl "http://c4tk.com/api/v1/threads/<threadId>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
        "id": "49a14941-4e35-4cca-8b8c-d84ce4a6b941",
        "category": {
			"id": "1",
			"description": "Cinta"
		},
		"consultationType": {
			"id": "1",
			"name": "Private Thread",
			"description": "Berkonsultasi dengan Konselor dengan private Thread"
		},
		"user": {
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
		},
		"counselor": {
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
		},
		"description": "Nilai saya jelek"
	}
}
```

This endpoint retrieves all companions from specific mfi.

### HTTP Request

`GET http://c4tk.com/api/v1/threads/<threadId>`



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Thread Object


### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
threadId | Number | Yes | 


## Create Thread


```shell
curl "http://c4tk.com/api/v1/threads" \
  -H "Content-Type: application/json" \
  -d '{
        "categoryId": "1",
		"consultationTypeId": "1",
		"userId": "1",
		"counselorId": "1",
		"description": "Nilai saya jelek"
	}'\
```


> The above command returns JSON structured like this:

```json
{
	"data" : {
        "id": "49a14941-4e35-4cca-8b8c-d84ce4a6b941",
        "category": {
			"id": "1",
			"description": "Cinta"
		},
		"consultationType": {
			"id": "1",
			"name": "Private Thread",
			"description": "Berkonsultasi dengan Konselor dengan private Thread"
		},
		"user": {
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
		},
		"counselor": {
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
		},
		"description": "Nilai saya jelek"
	}
}
```

This endpoint to insert Thread.

### HTTP Request

`POST http://c4tk.com/api/v1/threads`


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
categoryId | Number | Yes | 
consultationTypeId | Number | Yes | 
userId | Number | Yes | 
counselorId | Number | Yes | 
description | String | Yes | 



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object Thread


## Close


```shell
curl -X PATCH "http://c4tk.com/api/v1/threads/<threadId>/close" 
```

> The above command returns HTTP_NO_CONTENT (204):


This endpoint to close thread.

### HTTP Request

`PATCH http://c4tk.com/api/v1/<threadId>/close`


### URL Parameters

Parameter | Description
--------- | -----------
threadId | 

### Response

HTTP_NO_CONTENT



## Give User Rating 


```shell
curl "http://c4tk.com/api/v1/threads/<threadId>/user-rating" 
  -d '{
        "rating": "5"
	}'\
```

### URL Parameters

Parameter | Description
--------- | -----------
threadId | 


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
rating | number | Yes | 



## Give Counselor Rating


```shell
curl "http://c4tk.com/api/v1/threads/<threadId>/counselor-rating" 
  -d '{
        "rating": "5"
	}'\
```

### URL Parameters

Parameter | Description
--------- | -----------
threadId | 


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
rating | number | Yes | 



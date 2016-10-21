
# Thread

## Get Thread Info

```shell
curl "http://tersebut.com/api/v1/threads/<thread_id>"
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
		"consultation_type": {
			"id": "1",
			"name": "Private Thread",
			"description": "Berkonsultasi dengan Konselor dengan private Thread"
		},
		"user": {
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
		},
		"counselor": {
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
			"marital_status": {
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

`GET http://tersebut.com/api/v1/threads/<thread_id>`



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Thread Object


### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
thread_id | Number | Yes | 


## Create Thread


```shell
curl "http://tersebut.com/api/v1/threads" \
  -H "Content-Type: application/json" \
  -d '{
        "category_id": "1",
		"consultation_type_id": "1",
		"user_id": "1",
		"counselor_id": "1",
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
		"consultation_type": {
			"id": "1",
			"name": "Private Thread",
			"description": "Berkonsultasi dengan Konselor dengan private Thread"
		},
		"user": {
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
			"marital_status": {
				"id": "1",
				"description": "Menikah"
			}
		},
		"counselor": {
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
		},
		"description": "Nilai saya jelek"
	}
}
```

This endpoint to insert Thread.

### HTTP Request

`POST http://tersebut.com/api/v1/threads`


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
category_id | Number | Yes | 
consultation_type_id | Number | Yes | 
user_id | Number | Yes | 
counselor_id | Number | Yes | 
description | String | Yes | 



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object Thread


## Close


```shell
curl -X PATCH "http://tersebut.com/api/v1/threads/<thread_id>/close" 
```

> The above command returns HTTP_NO_CONTENT (204):


This endpoint to close thread.

### HTTP Request

`PATCH http://tersebut.com/api/v1/<thread_id>/close`


### URL Parameters

Parameter | Description
--------- | -----------
thread_id | 

### Response

HTTP_NO_CONTENT



## Give User Rating 


```shell
curl "http://tersebut.com/api/v1/threads/<thread_id>/user-rating" 
  -d '{
        "rating": "5"
	}'\
```

### URL Parameters

Parameter | Description
--------- | -----------
thread_id | 


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
rating | number | Yes | 



## Give Counselor Rating


```shell
curl "http://tersebut.com/api/v1/threads/<thread_id>/counselor-rating" 
  -d '{
        "rating": "5"
	}'\
```

### URL Parameters

Parameter | Description
--------- | -----------
thread_id | 


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
rating | number | Yes | 



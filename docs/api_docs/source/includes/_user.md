
# User

## Registration

```shell
curl "http://tersebut.com/api/v1/users" \
  -H "Authorization: Bearer <access_token>" \
  -H "Content-Type: application/json" \
  -d '{
        "name": "alfin",
        "nick_name": "kupang",
		"email": "kupanglie@gmail.com",
		"birth_date": "1990-01-01",
		"birth_place": "Jakarta",
		"address": "alamat 1",
		"village_id": "3174040006",
		"gender_id": "1",
		"religion_id" "1",
		"occupation_id": "1",
		"education_id": "1",
		"marital_status_id": "1",
		"sinch_id": "1234",
		"facebook_id": "123123123",
		"avatar_id": "1",
		"profile": "test"
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
		"religion": {
			"id": "1",
			"description": "Kristen"
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
		},
		"avatar": {
			"id": "1",
			"description": "sedih",
			"url": "tersebut.com/assets/images/sedih.jpg"
		},
		"sinch_id": "1234",
		"facebook_id": "123123123",
		"rating": "4.1",
		"profile": "test"
	}
}
```

This endpoint to insert User.

### HTTP Request

`POST http://tersebut.com/api/v1/users`


### URL Parameters

Parameter | Description
--------- | -----------


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
name | String | Yes | 
nick_name | String | Yes | 
email | String | Yes | 
password | String | Yes | 
birth_date | Date | Yes | YYYY-MM-DD
birth_place | String | Yes | 
address | String | Yes | 
village_id | String | Yes |
gender_id | String | Yes | 
occupation_id | String | Yes |
education_id | Integer | Yes | 
marital_status_id | Integer | Yes | 
religion_id | Integer | Yes |
avatar_id | Integer | Yes |
profile | String | Yes |
sinch_id | String | Yes |
facebook_id | String | Yes |


### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object User


## Login

```shell
curl "http://tersebut.com/api/v1/users/login" \
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
		"religion": {
			"id": "1",
			"description": "Kristen"
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
		},
		"avatar": {
			"id": "1",
			"description": "sedih",
			"url": "tersebut.com/assets/images/sedih.jpg"
		},
		"sinch_id": "1234",
		"facebook_id": "123123123",
		"rating": "4.1",
		"profile": "test"
	}
}
```

This endpoint to insert User.

### HTTP Request

`POST http://tersebut.com/api/v1/users/login`


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



## Login with Facebook

```shell
curl "http://tersebut.com/api/v1/users/login-facebook" \
  -H "Authorization: Bearer <access_token>" \
  -H "Content-Type: application/json" \
  -d '{
		"facebookId": "123123123"
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
		"religion": {
			"id": "1",
			"description": "Kristen"
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
		},
		"avatar": {
			"id": "1",
			"description": "sedih",
			"url": "tersebut.com/assets/images/sedih.jpg"
		},
		"sinch_id": "1234",
		"facebook_id": "123123123",
		"rating": "4.1",
		"profile": "test"
	}
}
```

This endpoint to insert User.

### HTTP Request

`POST http://tersebut.com/api/v1/users/login-facebook`


### URL Parameters

Parameter | Description
--------- | -----------


### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
facebook_id | String | Yes | 



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object User


## Get a Specific User

```shell
curl "http://tersebut.com/api/v1/users/<user_id>"
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
		"religion": {
			"id": "1",
			"description": "Kristen"
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
		},
		"avatar": {
			"id": "1",
			"description": "sedih",
			"url": "tersebut.com/assets/images/sedih.jpg"
		},
		"sinch_id": "1234",
		"facebook_id": "123123123",
		"rating": "4.1",
		"profile": "test"
	}
}
```

This endpoint retrieves a specific User.


### HTTP Request

`GET http://tersebut.com/api/v1/users/<user_id>`

### URL Parameters

Parameter | Description
--------- | -----------
user_id | The ID of the User to retrieve


### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object User



## Get User Threads

```shell
curl "http://tersebut.com/api/v1/users/<userId>/threads"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"total": 50,
		"per_page": 15,
		"current_page": 1,
		"last_page": 4,
		"next_page_url": "http://tersebut.com/api/v1/users/<userId>/threads?page=2",
		"prev_page_url": null,
		"from": 1,
		"to": 15,
		"items": [
			{
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
					},
					"rating": "4.1"
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
					},
					"avatar": {
						"id": "1",
						"description": "sedih",
						"url": "tersebut.com/assets/images/sedih.jpg"
					},
					"rating": "4.1"
				},
				"suggestion": {
					"id": "1",
					"description": "Cinta",
					"urgent_rating": "1"
				},
				"description": "Nilai saya jelek"
			}
		]
	}
}
```

This endpoint retrieves all user's thread.

### HTTP Request

`GET http://tersebut.com/api/v1/users/<userId>/threads`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array of Object | Thread Objects


### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
userId | Number | Yes | 
page | Number | No | default: 1


## Get User Thread Histories

```shell
curl "http://tersebut.com/api/v1/users/<userId>/history-threads"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"total": 50,
		"per_page": 15,
		"current_page": 1,
		"last_page": 4,
		"next_page_url": "http://tersebut.com/api/v1/users/<userId>/history-threads?page=2",
		"prev_page_url": null,
		"from": 1,
		"to": 15,
		"items": [
			{
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
					},
					"rating": "4.1"
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
					},
					"avatar": {
						"id": "1",
						"description": "sedih",
						"url": "tersebut.com/assets/images/sedih.jpg"
					},
					"rating": "4.1"
				},
				"suggestion": {
					"id": "1",
					"description": "Cinta",
					"urgent_rating": "1"
				},
				"description": "Nilai saya jelek"
			}
		]
	}
}
```

This endpoint retrieves all user's thread.

### HTTP Request

`GET http://tersebut.com/api/v1/users/<userId>/threads`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array of Object | Thread Objects


### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
userId | Number | Yes | 
page | Number | No | default: 1




## Update User


```shell
curl -X PUT "http://tersebut.com/api/v1/users/<user_id>" \
  -H "Authorization: Bearer <access_token>" \
  -H "Content-Type: application/json" \ 
  -d '{
		"name": "alfin",
        "nick_name": "kupang",
		"email": "kupanglie@gmail.com",
		"birth_date": "1990-01-01",
		"birth_place": "Jakarta",
		"address": "alamat 1",
		"village_id": "3174040006",
		"gender_id": "1",
		"religion_id": "1",
		"occupation_id": "1",
		"education_id": "1",
		"marital_status_id": "1",
		"sinch_id": "1234",
		"facebook_id": "123123123",
		"profile": "test"
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
		"religion": {
			"id": "1",
			"description": "Kristen"
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
		},
		"avatar": {
			"id": "1",
			"description": "sedih",
			"url": "tersebut.com/assets/images/sedih.jpg"
		},
		"sinch_id": "1234",
		"facebook_id": "123123123",
		"rating": "4.1",
		"profile": "test"
	}
}
```

This endpoint to update User.

### HTTP Request

`PUT http://tersebut.com/api/v1/users/<user_id>`


### URL Parameters

Parameter | Description
--------- | -----------
user_id | The ID of the User



### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
name | String | Yes | 
nick_name | String | Yes | 
email | String | Yes | 
birth_date | Date | Yes | YYYY-MM-DD
birth_place | String | Yes | 
address | String | Yes | 
village_id | String | Yes |
gender_id | String | Yes | 
religion_id | String | Yes | 
occupation_id | String | Yes |
education_id | Integer | Yes | 
marital_status_id | Integer | Yes | 
religion_id | Integer | Yes |
avatar_id | Integer | Yes |
profile | String | Yes |
sinch_id | String | Yes |



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object User


## Delete User


```shell
curl -X DELETE "http://tersebut.com/api/v1/users/<user_id>" \
  -H "Authorization: Bearer <access_token>"
```


> The above command returns HTTP_NO_CONTENT


This endpoint to delete user.

### HTTP Request

`DELETE http://tersebut.com/api/v1/users/<user_id>`


### URL Parameters

Parameter | Description
--------- | -----------
user_id | The ID of the User



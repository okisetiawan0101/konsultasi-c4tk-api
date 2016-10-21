
# Suggestion

## Get Base Suggestion

```shell
curl "http://c4tk.com/api/v1/suggestions/base"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
        "items": [
			{
				"id": "1",
				"description": "Cinta",
				"parent": null,
				"urgent_rating": "1"
			}
		]
	}
}
```

This endpoint retrieves all companions from specific mfi.

### HTTP Request

`GET http://c4tk.com/api/v1/suggestions/base`



### Response

Field | Data Type | Description
--------- | ------- | -----------
Items | Object | Suggestion Object



## Get Child Suggestion

```shell
curl "http://c4tk.com/api/v1/suggestions/<suggestionId>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"id": "9",
		"description": "Putus",
		"parent": {
			"id": "1",
			"description": "Cinta",
			"parent": null
		},
		"childs": [ 
			{
				"id": "30",
				"description": "Selingkuh",
				"urgent_rating": "4"
			},
			{
				"id": "31",
				"description": "Dipukul",
				"urgent_rating": "8"
			}
		],
		"urgent_rating": "1",
		"counselors": [
			{
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
		]
	}
}
```

This endpoint retrieves all companions from specific mfi.

### HTTP Request

`GET http://c4tk.com/api/v1/suggestions/<suggestionId>`



### Response

Field | Data Type | Description
--------- | ------- | -----------
id | Number | 
description | String | 
parent | Object | Object of suggestion
childs | Array of Object | Array of object suggestion



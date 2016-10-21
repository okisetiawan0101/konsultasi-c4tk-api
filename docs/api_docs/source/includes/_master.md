
# Master

## Get All Education

```shell
curl "http://c4tk.com/api/v1/educations"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
			{
                "id": "1",
                "description": "Guru"
            }
		]
	}
}
```

This endpoint retrieves all educations.

### HTTP Request

`GET http://c4tk.com/api/v1/educations`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Object





## Get All Occupation

```shell
curl "http://c4tk.com/api/v1/occupations"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
			{
                "id": "1",
                "description": "Wirausaha"
            }
		]
	}
}
```

This endpoint retrieves all occupation.

### HTTP Request

`GET http://c4tk.com/api/v1/occupations`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Object


## Get All Marital Status

```shell
curl "http://c4tk.com/api/v1/marital-statuses"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
			{
                "id": "1",
                "description": "Menikah"
            }
		]
	}
}
```

This endpoint retrieves all marital status.

### HTTP Request

`GET http://c4tk.com/api/v1/marital-statuses`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Object



## Get All Gender

```shell
curl "http://c4tk.com/api/v1/genders"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
			{
                "id": "1",
                "description": "Pria"
            }
		]
	}
}
```

This endpoint retrieves all genders.

### HTTP Request

`GET http://c4tk.com/api/v1/genders`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Object



## Get All Avatars

```shell
curl "http://c4tk.com/api/v1/avatars"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
			{
                "id": "1",
                "description": "Pendiam",
                "url": "http://c4tk.com/assets/images/avatar1.jpg"
            }
		]
	}
}
```

This endpoint retrieves all avatars.

### HTTP Request

`GET http://c4tk.com/api/v1/avatars`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Object




## Get All Provinces

```shell
curl "http://c4tk.com/api/v1/provinces"
  -H "Authorization: Bearer <access_token>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
           {
               "id" : "31",
               "description": "DKI JAKARTA"
           }
		]
	}
}
```

This endpoint retrieves all provinces.

### HTTP Request

`GET http://c4tk.com/api/v1/provinces`


### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Province Object


## Get All Cities

```shell
curl "http://c4tk.com/api/v1/provinces/<province_id>/cities"
  -H "Authorization: Bearer <access_token>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
           {
               "id" : "3174",
               "description": "KOTA JAKARTA BARAT"
           },
           {
              "id" : "3175",
              "description": "KOTA JAKARTA TIMUR"
          }
		]
	}
}
```

This endpoint retrieves all cities by province Id.

### HTTP Request

`GET http://c4tk.com/api/v1/provinces/<province_id>/cities`


### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of City Object


### Query Parameters

Field | Data Type
--------- | -------
province_id | The ID of the province


## Get All Districts

```shell
curl "http://c4tk.com/api/v1/cities/<cityId>/districts"
  -H "Authorization: Bearer <access_token>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
           {
               "id" : "3174040",
               "description": "GROGOL PETAMBURAN"
           }
		]
	}
}
```

This endpoint retrieves all districts by city Id.

### HTTP Request

`GET http://c4tk.com/api/v1/cities/<cityId>/districts`


### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of District Object


### Query Parameters

Field | Data Type
--------- | -------
cityId | The ID of the City


## Get All Villages

```shell
curl "http://c4tk.com/api/v1/districts/<district_id>/villages"
  -H "Authorization: Bearer <access_token>"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
           {
               "id" : "3174040006",
               "description": "WIJAYA KUSUMA"
           }
		]
	}
}
```

This endpoint retrieves all villages by district Id.

### HTTP Request

`GET http://c4tk.com/api/v1/districts/<district_id>/villages`


### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Village Object


### Query Parameters

Field | Data Type
--------- | -------
district_id | The ID of the District


## Get All Categories

```shell
curl "http://c4tk.com/api/v1/categories"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
			{
                "id": "1",
                "description": "Cinta",
				"logo_url": "http://c4tk.com/assets/images/cinta.jpg"
            }
		]
	}
}
```

This endpoint retrieves all categories.

### HTTP Request

`GET http://c4tk.com/api/v1/categories`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Object



## Get All Consultation Types

```shell
curl "http://c4tk.com/api/v1/consultation-types"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
		"items" : [
			{
                "id": "1",
				"name": "Private Chat",
                "description": "Berkonsultasi dengan Konselor dengan private chat"
            }
		]
	}
}
```

This endpoint retrieves all consultation-types.

### HTTP Request

`GET http://c4tk.com/api/v1/consultation-types`



### Response

Field | Data Type | Description
--------- | ------- | -----------
items | Array | Array of Object



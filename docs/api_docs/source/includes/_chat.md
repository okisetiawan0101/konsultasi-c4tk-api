
# Chat

## View chat

```shell
curl "http://c4tk.com/api/v1/threads/<threadId>/chats"
```

> The above command returns JSON structured like this:

```json
{
	"data" : {
	    "itemsPerPage": 20,
	    "page": 2,
    	"totalItems": 27000,
	    "nextLink": "/api/v1/threads/<threadId>/chats?page=1",
	    "previousLink": "/api/v1/threads/<threadId>/chats?page=3",
		"items" : [
			{
				"id": "49a14941-4e35-4cca-8b8c-d84ce4a6b997",
				"isCounselor": false,
				"message": "message 1"
			}
		]
	}
}
```

This endpoint retrieves all companions from specific mfi.

### HTTP Request

`GET http://c4tk.com/api/v1/threads/<threadId>/chats`



### Response

Field | Data Type | Description
--------- | ------- | -----------
itemsPerPage | Number | Total items per page
page | Number | page of chats
totalItems | Number | Total chats
nextLink | String | Link to the next page
previousLink | String | Link to the next page
items | Array | Array of Companion Object


### Query Parameters

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
threadId | Number | Yes | 
itemsPerPage | Number | No | Default: 20
page | Number | No | Default: 1
lastView | DateTime | No | Default: first time



## Insert


```shell
curl "http://c4tk.com/api/v1/threads/<threadId>/chats" \
  -H "Content-Type: application/json" \
  -d '{
        "isCounselor": false,
		"message": "message 1"
	}'\
```


> The above command returns JSON structured like this:

```json
{
	"data" : {
        "id": "49a14941-4e35-4cca-8b8c-d84ce4a6b997",
        "isCounselor": false,
		"message": "message 1"
	}
}
```

This endpoint to insert Chat.

### HTTP Request

`POST http://c4tk.com/api/v1/threads/<threadId>/chats`


### URL Parameters

Parameter | Description
--------- | -----------
threadId | 

### Payload

Field | Data Type | Mandatory | Description
--------- | ------- | -------- | -----------
isCounselor | Boolean | Yes | 
message | String | Yes | 



### Response

Field | Data Type | Description
--------- | ------- | -----------
Data | Object | Object Chat


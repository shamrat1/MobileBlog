# A Blogging API for mobile app developers

Made with [Lumen](https://lumen.laravel.com)  :purple_heart: , a very lightweight [php](https://www.php.net) framework.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## API Endpoints

returns | method | link | params
--- | --- | --- | ---
All Posts | GET | `~/public/api/posts` | no
Single Post | GET | ` ~/public/api/posts/` | yes, `id`
Update Post | PUT | `~/public/api/posts/` | yes, `id`
Delete Post | DELETE | `~/public/api/posts/` | yes, `id`

:warning: replace `~` with your host address.

## All JSON Returns
 _All Posts:_
```json
{
	"data": [
		{
			"id": 1,
			"title": "My First Post",
			"body": "This is my first blog post.",
			"tags": "doer,post,blog",
			"created_at": "2020-04-14 13:18:00",
			"updated_at": "2020-04-14 13:18:00"
		},
		{
			"id": 2,
			"title": "My Second Post",
			"body": "This is my second blog post.",
			"tags": "doer,post,blog",
			"created_at": "2020-04-14 13:23:14",
			"updated_at": "2020-04-14 13:23:14"
		}
	}
}
```
 _Single Post:_
```json
{
	{
		"id": 1,
		"title": "My First Post",
		"body": "This is my first blog post.",
		"tags": "doer,post,blog",
		"created_at": "2020-04-14 13:18:00",
		"updated_at": "2020-04-14 13:18:00"
	}
}
```
 _Update Post:_
```json
{
	"message": "Post updated successfully."
}
```

 _Delete Post:_
```json
{
	"message": "Post Deleted."
}
```



## License

Free for any use.

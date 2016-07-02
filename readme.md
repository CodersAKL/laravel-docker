# Lissted all used packages
1. [Translation package](https://github.com/hpolthof/laravel-translations-db)
1. [Bower dependencies](https://github.com/FabioAntunes/laravel-elixir-wiredep)

# Database tables
1. Create table

	`php artisan make:migration:schema create_pages_table --shema="title:string, body:text, published_at:timestamp"`
1. Update table

	`php artisan make:migration:schema add_user_id_to_posts_table --schema="user_id:integer"`
1. Create relations

	* Many to many
		`php artisan make:migration:pivot tags pages`
	* One to many
		`php artisan make:migration:schema create_companies_table --schema="user_id:integer:foreign:unsignption:text,active:boolean,tax_no:varchar,child:boolean,child_of:integer:unsign"`

# Translations
To translate php files Visit url public/_translations

* To sync files with db
    `php artisan translation:fetch`
* To export back to files
    `php artisan translation:dump`

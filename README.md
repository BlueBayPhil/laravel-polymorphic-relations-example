# Laravel Polymorphic Relations Example

## Installation
1. Clone repository
2. run `composer install` to install dependencies
3. Serve up your application using your preferred method (i.e valet or using `php artisan serve`)

## Models
* Post - a sample model representing a blog post
* Video - a sample model representing a video
* Tag - The polymorphicly related object - tags can be added to posts or videos

## Creating New Objects
When creating a new object with tags, ensure they are entered into the text area **space seperated**

## Traits
* App\Traits\Taggable - The trait which adds tagging to any model that implements the trait

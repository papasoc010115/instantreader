
# InstantReader

> This is the project that combines a marketing website (multiple pages) and CRM (single page application) system in a single web application.

## Layouts


### For Non-SPA pages
> **instantreader-webapp/resources/views/layouts/marketing-layout.blade.php** - Layout for the marketing site (includes header and footer). Use `@section('content')` to put content in between the header and footer.

### For SPA pages
> **instantreader-webapp/resources/views/app.blade.php** - ***DO NOT TOUCH THIS!*** This is the blank page that will be manipulated by *Vue JS*.

>  **instantreader-webapp/resources/js/Pages/** - This is the directory where you create `.vue` files to make dynamic pages. 

>**instantreader-webapp/resources/js/components/** - Create this folder (if not yet existing). This is where you can put your `.vue` files for your components.

> **DO NOT USE** `<a>` tags for routing in SPA (CRM). Use the `<Link>` component instead to dynamically render the page that you need based on the provided route. This helps in avoiding unnecessary requests to the server.

## Assets
> 1. **Favicon.ico** - favicon of Instant Reader
> 2. **public/marketing-site/assets** - This is where all the assets for the marketing site are located.


*<insert notes/guide here>*

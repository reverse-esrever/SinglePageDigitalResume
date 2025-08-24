## Single Page Resume 

## About Project

Render a simple resume page with contact information

## Using stack
1) Laravel
2) Blade
3) Tailwind

## Deployment
1) Enter ```git clone https://github.com/reverse-esrever/SinglePageDigitalResume.git``` in terminal
2) Enter ```composer install```, ```npm install```, and ```npm run build```.
3) create **.env** file and paste all from **.env.example**.
4) generate application key by ```php artisan key:generate```.
5) create **resume.json** file in **storage/app/public/app** diretory. [example of resume](https://github.com/jsonresume/resume-schema/blob/master/sample.resume.json). 
6) make file link for storage ```php artisan storage:link```.
7) make migration: ```php artisan migrate```.
8) use ```composer run dev``` to run your app, go to **localhost:8000/home** to open resume page

## Testing

For testing you can use ```php artisan test```. test code is in file **test/Feature/ResumePageTest.php**

## Notes

For update resume.json file you can edit this file in storage or public directore and then use ```php artisan cache:clear``` for cache clear to see new changes. 
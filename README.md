..............HOW TO USE CORS-HELPER.............
STEP 1:In the root folder of your file run this command composer require prof/cors-helper
STEP 2: require CorsHelper at the top(above all your code) e.g use CorsHelper\CorsHelper
STEP 3: Call function like this CorsHelper::cors();
This is how the default set up look like,you did not need to do this below set up,am just showing you how the default set up look like.
.................THIS IS THE DEFAULT SETUP....................
CorsHelper::cors([
'origin'=>['All origin'],
'method'=>['POST','GET','DELETE','PUT','PATCH','OPTIONS'],
'header'=>['All header'],
'maxAge'=>72800,
])
..............FULL DEFAULT EXAMPLE.....................
use CorsHelper\CorsHelper;
CorsHelper::cors();
So simple cors is enable and you can start your work without any cors problem.
NOTE:if you want to customize cors-helper,please read through the instructions below
For Origin only : CorsHelper::cors(['origin'=>['http://example1.com','http://example2.com']]);
For method only : CorsHelper::cors(['method'=>['POST','GET']]);
For header only : CorsHelper::cors(['header'=>['Content-Type','Authorization']]);
For max-age only : CorsHelper::cors(['maxAge'=>600]); // any number of your choice
..............FULL CUSTOMIZE EXAMPLE............
use CorsHelper\CorsHelper;
CorsHelper::cors([
'origin'=>['http://example1.com','http://example2.com'],
'method'=>['POST','GET'],
'header'=>['Content-Type','Authorization'],
'maxAge'=>600
]);

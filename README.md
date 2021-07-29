..............HOW TO USE CORS-HELPER.............
STEP 1: require CorsHelper at the top(above all your code) inside the file that it is needed
STEP 2: Call function Cors like this CorsHelper->cors()
.................THIS IS THE DEFAULT SETUP....................
cors([
'origin'=>['All origin'],
'method'=>['POST','GET','DELETE','PUT','PATCH','OPTIONS'],
'header'=>['All header'],
'maxAge'=>72800,
])
So cors is enable and you can start your work without any cors problem.
NOTE:if you want to customize cors-helper read through the instructions below
For Origin only : cors(['origin'=>['http://example1.com','http://example2.com']]);
For method only : cors(['method'=>['POST','GET']]);
For header only : cors(['header'=>['Content-Type','Authorization']]);
For max-age only : cors(['maxAge'=>600]); // any number of your choice
..............FULL CUSTOMIZE EXAMPLE............
cors([
'origin'=>['http://example1.com','http://example2.com'],
'method'=>['POST','GET'],
'header'=>['Content-Type','Authorization'],
'maxAge'=>600
])

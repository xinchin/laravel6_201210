
### 查看目前的路由定義

command:
> php artisan route:list

> php artisan r:l

### 建立 Controller
command:

> php artisan make:controller HomeController

> php artisan make:controller cool\TestController

### 建立 資源控制器

> php artisan make:controller cool\StudentsController --resource

### 初始化 Migration

> php artisan migrate:install

### 產生 migrate 檔案

> php artisan make:migration create_students_table

> php artisan make:migration create_scores_table



### 執行 migrate
> php artisan migrate


### 產生 Eloquent 檔案

> php artisan make:model Score

> php artisan make:model Student

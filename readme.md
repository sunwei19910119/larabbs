

# BBS论坛 + RestFul Api

**开发环境：laravel5.5**

**参考教程：[laravel-china](https://laravel-china.org/courses)**

**包含：BBS网站前端；管理后台；API接口；**

**部署安装：** 
1.安装扩展：
```$xslt
composer install
```
2.复制环境文件：
```$xslt
cp .env.example .env
```
3.生成秘钥：
```$xslt
php artisan key:generate
php artisan jwt:secret
```
4.初始化数据库:
```$xslt
php artisan migrate --seed
```



**网站前台页面：**
![avatar](https://fsdhubcdn.phphub.org/uploads/images/201710/24/1/E2TdbTLxim.png)


**管理后台页面：**
![avatar](https://fsdhubcdn.phphub.org/uploads/images/201710/27/1/jx010820rG.png)

**APP页面：**
![avatar](https://lccdn.phphub.org/uploads/images/201608/10/1/42zMrOWLWo.png)

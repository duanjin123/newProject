## 安装
* git clone 
* sudo cp .env.example .env  配置文件,修改为自己的数据库配置
* sudo chmod +x artisan 给artisan文件可执行权限
* php artisan key:generate  给应用添加key
* php artisan migrate 进行数据库迁移(如果出错,先创建数据库,并写入.env配置中)
* composer install 加载依赖

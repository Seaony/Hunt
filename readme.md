<p align="center">糖果盒子 - WEB 开发者的书签导航</p>
<br>
<p align="center"><img src="http://owst2hgsv.bkt.clouddn.com/bg.svg" width="200px"></p>
<br>

---

<p align="center"><img src="http://owst2hgsv.bkt.clouddn.com/show.png"></p>
<br>
<p align="center"><img src="http://owst2hgsv.bkt.clouddn.com/detail.png"></p>
<br>

## 项目概述

糖果盒子是采用 Laravel 5.5 + Pjax 开发的站点导航应用，专注分享优质 Web 开发资源站点，希望成为 Web 开发人员最喜爱的的书签导航。

## 环境要求

* Nginx 1.8+
* PHP 7.1+
* Mysql 5.7+
* Redis 3.0+

## 部署/安装

本项目代码使用 PHP 框架 [Laravel 5.5](https://d.laravel-china.org/docs/5.5/) 开发，本地开发环境使用 [Laravel Homestead](https://d.laravel-china.org/docs/5.5/homestead)。

下文将在假定读者已经安装好了 Homestead 的情况下进行说明。如果您还未安装 Homestead，可以参照 [Homestead 安装与设置](https://laravel-china.org/docs/5.5/homestead#installation-and-setup) 进行安装配置。

### 安装

#### 1. 克隆代码

    > git clone https://github.com/Seaony/Hunt.git
    
#### 2. 安装依赖

    > composer install

#### 3. 生成配置文件

```
cp .env.example .env
```

你可以根据情况修改 `.env` 文件里的内容，如数据库连接、缓存、项目名称设置等。

#### 4. 生成秘钥

```shell
php artisan key:generate
```

#### 5. 生成数据表及生成测试数据

在网站根目录下运行以下命令

```shell
$ php artisan migrate --seed
```

初始的用户角色权限以及前台测试数据已使用数据迁移生成。

### 前端框架安装

#### 安装 node.js 与 npm

在官网 [https://nodejs.org/en/](https://nodejs.org/en/) 下载安装，最新版本已附带 `npm`。

#### 安装 Laravel Mix

```shell
npm install
```

#### 编译前端内容

```shell
// 运行所有 Mix 任务...
npm run dev

// 运行所有 Mix 任务并缩小输出..
npm run production
```

#### 监控修改并自动编译

```shell
npm run watch

// 在某些环境中，当文件更改时，Webpack 不会更新。如果系统出现这种情况，请考虑使用 watch-poll 命令：
npm run watch-poll
```

### 链接入口

* 首页地址：http://yourdomain.app/
* 管理后台：http://yourdomain.app/admin

管理员账号密码如下:

```
username: admin@admin.com
password: 123456
```

至此安装已完成～


## 扩展包使用情况

| 扩展包 | 描述 | 应用场景 |
| --- | --- | --- |
| [predis/predis](https://github.com/nrk/predis.git) | Redis 官方首推的 PHP 客户端开发包 | 缓存驱动 Redis 基础扩展包 |
| [spatie/laravel-permission](https://github.com/spatie/laravel-permission) | 角色权限管理 | 角色和权限控制 |
| [jenssegers/agent](https://github.com/jenssegers/agent) | 用户代理解析器 | 获取用户的IP和系统信息 |
| [spatie/laravel-backup](https://github.com/spatie/laravel-backup) | 数据库以及文件备份 | 备份数据库 |
| [spatie/laravel-pjax](https://github.com/spatie/laravel-pjax) | Pjax 的服务端支持 | Pjax 的服务端支持 |

## 自定义 Artisan 命令

| 命令行名字 | 说明 | Cron | 代码调用 |
| --- | --- | --- | --- |
| `conserve-target` |  将用户的跳转记录从缓存中储存至数据库 | 一小时运行一次 | 无 |

## 定时任务

| 名称 | 说明 | 调用时间 |
| --- | --- | --- |
| backup:clean | 清理过期备份 | 每天 01:00 |
| backup:run | 执行数据库以及文件备份 | 每天 02:00 |
| conserve-target | 将用户的跳转记录从缓存中储存至数据库 | 一小时运行一次 |

## 作者

[Seaony](https://github.com/Seaony)

## License

MIT

## App Advanced PkpuDev
> Build for Pkpu Dev Team &middot;

A brief description of your project here.

### Cloning

Simply clone this repo to your computer and change <AppName> to your liking

```shell
git clone git@github.com:pkpudev/yii2-app-advanced.git <AppName>
```

### Installing packages

```shell
composer install -vvv
```

### Chmod

```shell
chmod 777 backend/runtime
chmod 777 backend/web/assets
chmod 777 frontend/runtime
chmod 777 frontend/web/assets
```

### Configure env file

```shell
cp .env-example .env
```

Use relevant configuration

### Coding

    docker-compose run --rm backend yii migrate

    docker-compose up -d
    
Access it in your browser by opening

- frontend: http://127.0.0.1:20080
- backend: http://127.0.0.1:21080

### Use Git

### Deploy

```shell
./rsync.sh
```
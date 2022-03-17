# SISTEMA

Ranking

### **Frameworks:**
- Laravel 8

### **GIT:**
- [https://github.com/tisomar/ranking.git](https://github.com/tisomar/chat.git)

### **Desenvolvedor:**
- Tiago de Souza Marques Rodrigues - [tisomar@gmail.com](mailto:tisomar@gmail.com)

### **Pré-requisitos**
```

Docker
docker-compose

```
### **BUILD DOCKER**

```

sudo cp -r .env.example .env

docker-compose up -d --build

docker-compose exec app composer update

sudo chmod 777 -R .env

docker-compose exec app php artisan key:generate

docker-compose exec app php artisan migrate

docker-compose exec app php artisan db:seed

docker-compose exec app ./vendor/bin/phpunit

```

### ** BANCO DE DADOS ** ###

```

| Acesso Banco de Dados              |
|------------------------------------| 
| **Host**             | db          |
| **Porta**            | 3306        |
| **banco de dados**   | laravel     |
| **Usuário**          | laravel     |
| **Senha**            | laravel     |

```

### **TABELAS DO SISTEMA** ### 

```

| users |
| movements |
| personal_records |

```

### **URL** ### 

```

Via GET
http://localhost:8000/api/ranking/

```

# Instruções para baixar e testar a aplicação
Este é apenas o início de uma aplicação em desenvolvimento utilizando Laravel 8 com banco de dados SQLite.

O banco de dados SQLite está sendo utilizado apenas devido à facilidade de testes e não deve ser usado em produção. Para tal, deve ser criado e configurado um banco de dados relacional mais robusto como Postgresql ou MySql.

## Clonar o repositório
```
git clone https://github.com/MichaelCorrea478/sat_online.git
```

## Mudar para a branch master
```
git checkout master
```

## Arquivo de Configurações
Altere o nome do arquivo .env.sample para .env

## Instalar as dependências do projeto
```
composer install
```

## Compilar os arquivos javascript e css
```
npm run dev
```

## Criar o banco de dados SQLite
```
Criar um arquivo chamado 'database.sqlite' dentro da pasta 'sat_online/database'
```

## Criar as tabelas do Banco de Dados
```
php artisan migrate
```

## Populando as tabelas do banco de dados com dados iniciais
```
php artisan db:seed
```

## Iniciar a aplicação
```
php artisan serve
```

## Acessar a aplicação
Acesse a aplicação no navegador no endereço: [http://localhost:8000](http://localhost:8000)

Deve aparecer uma opção de Login e Registro no canto superior direito da tela. Clique em Registrar e insira seus dados para se autenticar no sistema.

Ainda não foram configuradas as restrições de acesso de acordo com o papel do usuário que está acessando o sistema. Você terá acesso a todas as funcionalidades que foram desenvolvidas até então.
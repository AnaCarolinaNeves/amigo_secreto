# Desafio do Amigo Secreto
Este repositório foi criado para o desenvolvimento do desafio amigo secreto proposto pela empresa Boostech.

## Tecnologias utilizadas 🛠️
- <img src="https://skillicons.dev/icons?i=php" width='25px'/> PHP **(v8.3.12)**
- <img src="https://skillicons.dev/icons?i=mysql" width='25px'/> MySQL **(v8.0)**
- <img src="https://skillicons.dev/icons?i=html" width='25px'/> HTML 
- <img src="https://skillicons.dev/icons?i=css" width='25px'/> CSS
- <img src="https://skillicons.dev/icons?i=bootstrap" width='25px'/> Bootstrap

## Pré-requisitos 🛠️
* PHP instalado (verifique se as extensões **mysqli** estão habilitadas)
* Servidor MySQL configurado

## Para rodar a aplicação 🖥️
- Configuração do banco de dados MySQL:
  - Atualize o arquivo de configuração `/config/config.php` com as informações do seu banco de dados 
  - No terminal, acesse o MySQL (substitua `root` pelo seu usuário do MySQL, se necessário):
     - `mysql -u root -p` 
  - No prompt do MySQL, execute o script SQL para criar as tabelas:
     - `source C:\Users\seu-usuario\caminho-para-o-projeto\amigo_secreto\database\migrations.sql`
       - **Observação**: Ajuste o caminho de acordo com seu sistema operacional (ex: `C:\Users\seu-usuario\caminho...` no Windows ou `/home/seu-usuario/caminho...` no Linux).
  - Com as tabelas criadas, saia do prompt MySQL com `exit`
- Iniciar o servidor PHP:
  - Na raiz do projeto, inicie o servidor pelo terminal:
    - `php -S localhost:8000 -t public`
  - Acesse a aplicação no seu navegador:
    - `http://localhost:8000`

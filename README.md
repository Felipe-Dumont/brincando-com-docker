# Brincando com docker e docker composer

Projeto seguindo passo a passo dos videos [Docker em 22 minutos - teoria e prática (Rápido!)](https://youtu.be/Kzcz-EVKBEQ?list=RDCMUC5fWvbBnaFAi2hJlHRmg5kw) e [Docker Compose na prática (Fácil)](https://youtu.be/HxPz3eLnXZk?list=RDCMUC5fWvbBnaFAi2hJlHRmg5kw). Recomendo!

A ideia agora, é aprimorar tanto a parte do codigo em node e em php, fazendo o crud completo, e também pulindo algumas coisas em docker composer.

## Para rodar em sua maquina
Depois de clonar o projeto

### Instalando dependências
Acesse a pasta `./api` no terminal e execute:
```
npm install
```

### Criando as imagens e subindo os container com docker composer
Acesse a pasta raiz no terminal e execute:
```
docker-composer up -d
```

### Agora faça o restore do banco:
```
docker exec -i mysql-container mysql --user=root --password=felipedocker < api/db/script.sql
```

Ou entre dentro do container do mysql e rode os [script](https://github.com/Felipe-Dumont/brincando-com-docker/blob/main/api/db/script.sql) na mão.

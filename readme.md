# Hackton Turismo Digital

Essa API salva e gera os dados  para o chatbot

## Instalação

Clone o projeto e execute o composer (Composer Install)<br/>
Configure o .env de acordo com seu banco de dados e crie o banco "hackaton"<br/>
Execute o comando php artisan migrate<br/>

## API

Index

Stores
http://localhost:8000/api/users?name=xuxuxu&email=xuxuxu@gmail.com
http://localhost:8000/api/city?name=Contagem&uf=MG
http://localhost:8000/api/restaurant?description=Pastel de Belem&city_id=1&food_type=Portuguesa
http://localhost:8000/api/trip?description=Mercado novo&city_id=1&trip_type=Mercado

Show

## Observações
Feito na correria com amor e Laravel s2